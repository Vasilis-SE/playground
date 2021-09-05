import 'dart:convert';
import 'dart:math';
import 'package:flutter/material.dart';
import 'dart:async';
import 'package:flutter_local_notifications/flutter_local_notifications.dart';
import 'package:flutter_geofence/Geolocation.dart';
import 'package:flutter_geofence/geofence.dart';
import 'package:flutter/services.dart' show rootBundle;


class FlutterGeofence extends StatefulWidget {
  const FlutterGeofence({Key? key}) : super(key: key);

  @override
  _GeofenceState createState() => _GeofenceState();
}

class _GeofenceState extends State<FlutterGeofence> {
  var _coordinates = new Map();
  var _listUpdatedPositions = <Widget>[];
  var _listeningToPosUpds = false;

  FlutterLocalNotificationsPlugin flutterLocalNotificationsPlugin = new FlutterLocalNotificationsPlugin();

  final ButtonStyle btnStyle = ElevatedButton.styleFrom(
    primary: Colors.orange.shade300,
    padding: EdgeInsets.symmetric(vertical: 10, horizontal: 20), 
  );

  @override
  void initState() {
    super.initState();
    
    // initialise the plugin. app_icon needs to be a added as a drawable resource to the Android head project
    var initializationSettingsAndroid = new AndroidInitializationSettings('app_icon');
    var initializationSettingsIOS = IOSInitializationSettings(onDidReceiveLocalNotification: null);
    var initializationSettings = InitializationSettings(
      android: initializationSettingsAndroid, 
      iOS: initializationSettingsIOS,
    );

    flutterLocalNotificationsPlugin.initialize(initializationSettings, onSelectNotification: null);

    initPlatformState();
  }

  Future<void> initPlatformState() async {
    if (!mounted) return;

    Geofence.initialize();
    Geofence.requestPermissions();

    Geofence.startListening(GeolocationEvent.entry, (entry) {
      print("start listening entries...");
      this._showMyDialog(context, "Geofence Trigger","You just entered a geofence with id: ${entry.id}");
    });

    Geofence.startListening(GeolocationEvent.exit, (entry) {
      print("start listening exits...");
      this._showMyDialog(context, "Geofence Trigger","You just exited a geofence with id: ${entry.id}");
    });

    // Get current longitude-latitude of the device
    await this._fetchGeolocation();

    // Fetch static list of geofences
    var myGeofenceList = json.decode( await this.getJson('lib/database/geofences.json') );

    // Add external geofences.
    var messageBuffer = "Successfully registed the below fences: \n\n";
    for(var geofence in myGeofenceList) {
      var regFenceStatus = await this._addGeofencePoint(
        geofence['id'], 
        geofence['latitude'], 
        geofence['longitude'], 
        geofence['radius']);
      if(regFenceStatus == true) messageBuffer += "${geofence['name']} : ${geofence['latitude']}, ${geofence['longitude']} \n\n";
    }
    
    // Display registered geofences.
    this._showMyDialog(context, "Added Geofence",   messageBuffer);

    setState(() {});
  }

  Future<void> _fetchGeolocation() async {
    var loc = await Geofence.getCurrentLocation();
    this._coordinates['longitude'] = loc?.longitude;
    this._coordinates['latitude'] = loc?.latitude;

    print('New geolocation: ${this._coordinates.toString()} ');
  }

  Future<bool>? _addGeofencePoint(id, latitude, longitude, redius) async {
    Geolocation location = Geolocation(
      latitude:latitude, 
      longitude:longitude, 
      radius:redius, 
      id:id
    );

    return Geofence.addGeolocation(location, GeolocationEvent.entry).then((onValue) {
      print('Added geofence [${location.id}] point: ${location.latitude}, ${location.longitude} ');
      return true;
    }).catchError((onError) {
      print(onError);
      return false;
    });
  }

  void _listenToPositionUpdates() {
    Geofence.startListeningForLocationChanges();
    Geofence.backgroundLocationUpdated.stream.listen((coordinate) {
      this._listUpdatedPositions.add(Text("${coordinate.latitude}, ${coordinate.longitude}"));
      setState(() {});
    });

    print("Started listening for location changes...");
    this._listeningToPosUpds = true;
  }

  void _stopListeningToPositionUpdates() async {
    await Geofence.stopListeningForLocationChanges();
    print("Stopped listening for location changes...");
    this._listeningToPosUpds = false;
    setState(() {});
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        // backgroundColor: Colors.orange.shade500,
        title: const Text('Flutter Geofence app'),
        flexibleSpace: Container(
          decoration: BoxDecoration(
            gradient: LinearGradient(
              begin: Alignment.topLeft,
              end: Alignment.bottomRight,
              colors: <Color>[
                Colors.orange.shade500,
                Colors.orange.shade900
              ]
            )          
          ),
        ),
      ), 
      body: ListView(
        children: <Widget>[
          SizedBox(
            width: double.infinity,
            child: ElevatedButton(
              style: btnStyle,  
              child: Text("Add region"),
              onPressed: () => this._addGeofencePoint("myLocationFence", this._coordinates['latitude'], this._coordinates['longitude'], 2.0), 
            ),
          ),

          SizedBox(
            width: double.infinity,
            child: ElevatedButton(
              style: btnStyle,  
              child: Text("Remove regions"),
              onPressed: () {
                Geofence.removeAllGeolocations();
              },              
            ),
          ),

          SizedBox(
            width: double.infinity,
            child: ElevatedButton(
              style: btnStyle,  
              child: Text("Display longitude & latitude"),
              onPressed: () {
                _showMyDialog(
                  context, 
                  "Location",
                  "Longitude: ${this._coordinates['longitude']}, Latitude: ${this._coordinates['latitude']} "
                );
              }          
            ),           
          ),

          SizedBox(
            width: double.infinity,
            child: ElevatedButton(
              style: btnStyle,  
              child: !this._listeningToPosUpds ? Text("Listen to background updates") : Text("Stop listening to background updates"),
              onPressed: () {
                if(!this._listeningToPosUpds)
                  this._listenToPositionUpdates();
                else
                  this._stopListeningToPositionUpdates();
              }           
            ),
          ),

          Container(
            color: Colors.orange.shade50,
            child: Column(
              children: [
                Text(
                  "List of updated positions:",
                  style: TextStyle(
                    fontSize: 15, 
                    fontWeight: FontWeight.bold,
                    decoration: TextDecoration.underline
                  ),
                ),
                ...this._listUpdatedPositions
              ],
            ),
          ),

        ],
      ),
    );
  }

  void _showMyDialog(BuildContext context, String title, String message) {
    var alert = AlertDialog(
      title: Text(title),
      content: SingleChildScrollView( // won't be scrollable
        child: Text(message, textScaleFactor: 1),
      )
    );

    showDialog(
      context: context,
      builder: (BuildContext context) {
        return alert;
      }
    );
  }

  void scheduleNotification(String title, String subtitle) {
    var rng = new Random();

    Future.delayed(Duration(seconds: 5)).then((result) async {
      var androidPlatformChannelSpecifics = AndroidNotificationDetails(
        'your channel id', 'your channel name', 'your channel description',
        importance: Importance.high,
        priority: Priority.high,
        ticker: 'ticker'
      );
      var iOSPlatformChannelSpecifics = IOSNotificationDetails();

      var platformChannelSpecifics = NotificationDetails(
        android: androidPlatformChannelSpecifics,
        iOS: iOSPlatformChannelSpecifics
      );

      await flutterLocalNotificationsPlugin.show(
        rng.nextInt(100000), title, subtitle, platformChannelSpecifics,
        payload: 'item x'
      );
    });
  }

  Future<String> getJson(String path) {
    return rootBundle.loadString(path);
  }

}

