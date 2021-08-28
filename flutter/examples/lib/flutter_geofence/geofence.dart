import 'dart:math';
import 'package:flutter/material.dart';
import 'dart:async';
import 'package:flutter_local_notifications/flutter_local_notifications.dart';

import 'package:flutter_geofence/geofence.dart';

class FlutterGeofence extends StatefulWidget {
  const FlutterGeofence({Key? key}) : super(key: key);

  @override
  _GeofenceState createState() => _GeofenceState();
}

class _GeofenceState extends State<FlutterGeofence> {
  String _platformVersion = 'Unknown';
  var _coordinates = new Map();

  FlutterLocalNotificationsPlugin flutterLocalNotificationsPlugin = new FlutterLocalNotificationsPlugin();

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

  // Platform messages are asynchronous, so we initialize in an async method.
  Future<void> initPlatformState() async {
    // If the widget was removed from the tree while the asynchronous platform
    // message was in flight, we want to discard the reply rather than calling
    // setState to update our non-existent appearance.
    if (!mounted) return;
    Geofence.initialize();
    Geofence.startListening(GeolocationEvent.entry, (entry) {
      scheduleNotification("Entry of a georegion", "Welcome to: ${entry.id}");
    });

    Geofence.startListening(GeolocationEvent.exit, (entry) {
      scheduleNotification("Exit of a georegion", "Byebye to: ${entry.id}");
    });

    setState(() {});
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

  void addRegion() {
    Geolocation location = Geolocation(
      latitude: this._coordinates['latitude'],
      longitude: this._coordinates['longitude'],
      radius: 10.0,
      id: "Kerkplein13",
    );

    Geofence.addGeolocation(location, GeolocationEvent.entry).then((onValue) {
      print("great success");
      this.scheduleNotification("Georegion added", "Your geofence has been added!");
    }).catchError((onError) {
      print("great failure");
    });
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

  void listenToUpdates() {
    Geofence.startListeningForLocationChanges();
    Geofence.backgroundLocationUpdated.stream.listen((event) {
      this.scheduleNotification("You moved significantly", "a significant location change just happened.");
    });
  }

  void _fetchGeolocation() async {
    var loc = await Geofence.getCurrentLocation();
    this._coordinates['longitude'] = loc?.longitude;
    this._coordinates['longitude'] = loc?.longitude;
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: const Text('Plugin example app'),
      ),
      body: ListView(
        children: <Widget>[
          Center(
            child: SizedBox(
              width: MediaQuery.of(context).size.width * 0.85,
              height: 20,
              child: Text('Running on: $_platformVersion\n'),
            ),
          ),

          Padding(padding: EdgeInsets.all(2)),
 
          Center(
            child: SizedBox(
              width: MediaQuery.of(context).size.width * 0.85,
              height: 50,
              child: ElevatedButton(
                child: Text("Add region"),
                onPressed: this.addRegion, 
              ),
            ),
          ),

          Padding(padding: EdgeInsets.all(2)),

          Center(
            child: SizedBox(
              width: MediaQuery.of(context).size.width * 0.85,
              height: 50,
              child: ElevatedButton(
                child: Text("Remove regions"),
                onPressed: () {
                  Geofence.removeAllGeolocations();
                },
              ),
            ),
          ),

          Padding(padding: EdgeInsets.all(2)),

          Center(
            child: SizedBox(
              width: MediaQuery.of(context).size.width * 0.85,
              height: 50,
              child: ElevatedButton(
                child: Text("Request Permissions"),
                onPressed: () {
                  Geofence.requestPermissions();
                },
              ),
            ),
          ),

          Padding(padding: EdgeInsets.all(2)),

          Center(
            child: SizedBox(
              width: MediaQuery.of(context).size.width * 0.85,
              height: 50,
              child: ElevatedButton(
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
          ),
          
          Padding(padding: EdgeInsets.all(2)),

          Center(
            child: SizedBox(
              width: MediaQuery.of(context).size.width * 0.85,
              height: 50,
              child: ElevatedButton(
                child: Text("Listen to background updates"),
                onPressed: this.listenToUpdates
                
              ),
            ),
          ),

          Padding(padding: EdgeInsets.all(2)),

          Center(
            child: SizedBox(
              width: MediaQuery.of(context).size.width * 0.85,
              height: 50,
              child: ElevatedButton(
                child: Text("Stop listening to background updates"),
                onPressed: () {
                  Geofence.stopListeningForLocationChanges();
                }
              ),
            ),
          ),

          Padding(padding: EdgeInsets.all(2)),

          Center(
            child: SizedBox(
              width: MediaQuery.of(context).size.width * 0.85,
              height: 50,
              child: ElevatedButton(
                child: Text("Stop listening to background updates"),
                onPressed: () {
                  Geofence.stopListeningForLocationChanges();
                }
              ),
            ),
          ),

          Padding(padding: EdgeInsets.all(2)),

        ],
      ),
    );
  }
}
