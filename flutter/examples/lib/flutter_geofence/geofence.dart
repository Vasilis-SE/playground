import 'dart:math';
import 'package:flutter/material.dart';
import 'dart:async';
import 'package:flutter_local_notifications/flutter_local_notifications.dart';
import 'package:flutter_geofence/geofence.dart';
import 'package:location/location.dart';

class FlutterGeofence extends StatefulWidget {
  const FlutterGeofence({Key? key}) : super(key: key);

  @override
  _GeofenceState createState() => _GeofenceState();
}

class _GeofenceState extends State<FlutterGeofence> {
  var _coordinates = new Map();
  FlutterLocalNotificationsPlugin flutterLocalNotificationsPlugin = new FlutterLocalNotificationsPlugin();

  final ButtonStyle btnStyle = ElevatedButton.styleFrom(
    primary: Colors.purple.shade300,
    padding: EdgeInsets.symmetric(vertical: 10, horizontal: 20),
  );

  @override
  void initState() {
    super.initState();
    initPlatformState();

    // initialise the plugin. app_icon needs to be a added as a drawable resource to the Android head project
    var initializationSettingsAndroid = new AndroidInitializationSettings('app_icon');
    var initializationSettingsIOS = IOSInitializationSettings(onDidReceiveLocalNotification: null);
    var initializationSettings = InitializationSettings(
      android: initializationSettingsAndroid, 
      iOS: initializationSettingsIOS,
    );

    flutterLocalNotificationsPlugin.initialize(initializationSettings, onSelectNotification: null);
  }

  Future<void> initPlatformState() async {
    if (!mounted) return;

    Location().enableBackgroundMode(enable: true);
    Geofence.initialize();

    // Get current longitude-latitude of the device
    await this._fetchGeolocation();
    await this._addGeofencePoint(40.593518, 22.975836, 130.0);

    Geofence.startListening(GeolocationEvent.entry, (entry) {
     this._showMyDialog(context, "Geofence Trigger","You just entered a geofence with id: ${entry.id}");
    });

    Geofence.startListening(GeolocationEvent.exit, (entry) {
      this._showMyDialog(context, "Geofence Trigger","You just exited a geofence with id: ${entry.id}");
    });
    
    setState(() {});
  }

  Future<void> _fetchGeolocation() async {
    var loc = await Geofence.getCurrentLocation();
    this._coordinates['longitude'] = loc?.longitude;
    this._coordinates['latitude'] = loc?.latitude;

    print('New geolocation: ${this._coordinates.toString()} ');
  }

  Future<void>? _addGeofencePoint(lat, lon, rad) {
    Geolocation location = Geolocation(
      latitude: lat,
      longitude: lon,
      radius: rad,
      id: "aRegionID",
    );

    Geofence.addGeolocation(location, GeolocationEvent.entry).then((onValue) {
      this._showMyDialog(
        context, 
        "Added Geofence",
        "A geofence has been added with radius: ${location.radius} at the location: ${location.longitude}, ${location.latitude}"
      );
    }).catchError((onError) {
      this._showMyDialog(
        context, 
        "Added Geofence",
        "Failed to add geofence..."
      );
    });
  }

  void listenToUpdates() {
    Geofence.startListeningForLocationChanges();
    Geofence.backgroundLocationUpdated.stream.listen((coordinate) {
      print(coordinate.longitude);
      print(coordinate.latitude);
    });
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: const Text('Flutter Geofence app'),
      ),
      body: ListView(
        children: <Widget>[

          SizedBox(
            width: double.infinity,
            child: ElevatedButton(
              style: btnStyle,  
              child: Text("Add region"),
              onPressed: () => this._addGeofencePoint(this._coordinates['latitude'], this._coordinates['longitude'], 2.0), 
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
              child: Text("Request Permissions"),
              onPressed: () {
                Geofence.requestPermissions();
              },            
            ),
          ),

          SizedBox(
            width: double.infinity,
            child: ElevatedButton(
              style: btnStyle,  
              child: Text("Get current geolocation"),
              onPressed: () => _fetchGeolocation(),            
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
              child: Text("Listen to background updates"),
              onPressed: this.listenToUpdates               
            ),           
          ),

          SizedBox(
            width: double.infinity,
            child: ElevatedButton(
              style: btnStyle,  
              child: Text("Stop listening to background updates"),
              onPressed: () {
                Geofence.stopListeningForLocationChanges();
              }               
            ),           
          ),

        ],
      ),
    );
  }


  
  void _showMyDialog(BuildContext context, String title, String message) {
    var alert = AlertDialog(
      title: Text(title),
      content: Text(message),
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

}
