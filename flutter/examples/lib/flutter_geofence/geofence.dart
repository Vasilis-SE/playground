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
  var coordinates = new Map();

  FlutterLocalNotificationsPlugin flutterLocalNotificationsPlugin =
      new FlutterLocalNotificationsPlugin();

  @override
  void initState() {
    super.initState();
    initPlatformState();

    // initialise the plugin. app_icon needs to be a added as a drawable resource to the Android head project
    var initializationSettingsAndroid =
        new AndroidInitializationSettings('app_icon');
    var initializationSettingsIOS =
        IOSInitializationSettings(onDidReceiveLocalNotification: null);
    var initializationSettings = InitializationSettings(
        android: initializationSettingsAndroid, iOS: initializationSettingsIOS);

    flutterLocalNotificationsPlugin.initialize(initializationSettings,
        onSelectNotification: null);
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
    print("scheduling one with $title and $subtitle");
    var rng = new Random();
    Future.delayed(Duration(seconds: 5)).then((result) async {
      var androidPlatformChannelSpecifics = AndroidNotificationDetails(
          'your channel id', 'your channel name', 'your channel description',
          importance: Importance.high,
          priority: Priority.high,
          ticker: 'ticker');
      var iOSPlatformChannelSpecifics = IOSNotificationDetails();
      var platformChannelSpecifics = NotificationDetails(
          android: androidPlatformChannelSpecifics,
          iOS: iOSPlatformChannelSpecifics);
      await flutterLocalNotificationsPlugin.show(
          rng.nextInt(100000), title, subtitle, platformChannelSpecifics,
          payload: 'item x');
    });
  }

  void addRegion() {
    Geolocation location = Geolocation(
      latitude: this.coordinates['latitude'],
      longitude: this.coordinates['longitude'],
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

  void addNeighbourRegion() {
    Geolocation location = Geolocation(
      latitude: this.coordinates['latitude'],
      longitude: this.coordinates['longitude'],
      radius: 50.0,
      id: "Kerkplein15",
    );

    Geofence.addGeolocation(location, GeolocationEvent.entry).then((onValue) {
      print("great success");
      this.scheduleNotification("Georegion added", "Your geofence has been added!");
    }).catchError((onError) {
      print("great failure");
    });
  }

  void getGeolocation() {
    Geofence.getCurrentLocation().then((coordinate) {
      this.coordinates['longitude'] = coordinate?.longitude;
      this.coordinates['latitude'] = coordinate?.latitude;
      
      this.scheduleNotification("Location", "Longitude: ${this.coordinates['longitude']} , Latitude: ${this.coordinates['latitude']}");
    });
  }

  void listenToUpdates() {
    Geofence.startListeningForLocationChanges();
    Geofence.backgroundLocationUpdated.stream.listen((event) {
      this.scheduleNotification("You moved significantly", "a significant location change just happened.");
    });
  }

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      home: Scaffold(
        appBar: AppBar(
          title: const Text('Plugin example app'),
        ),
        body: ListView(
          children: <Widget>[
            Text('Running on: $_platformVersion\n'),
            ElevatedButton(
              child: Text("Add region"),
              onPressed: this.addRegion, 
            ),
            ElevatedButton(
              child: Text("Add neighbour region"),
              onPressed: this.addNeighbourRegion, 
            ),
            ElevatedButton(
              child: Text("Remove regions"),
              onPressed: () {
                Geofence.removeAllGeolocations();
              },
            ),
            ElevatedButton(
              child: Text("Request Permissions"),
              onPressed: () {
                Geofence.requestPermissions();
              },
            ),
            ElevatedButton(
              child: Text("Get longitude & latitude"),
              onPressed: this.getGeolocation
            ),
            ElevatedButton(
              child: Text("Listen to background updates"),
              onPressed: this.listenToUpdates
            ),
            ElevatedButton(
              child: Text("Stop listening to background updates"),
              onPressed: () {
                Geofence.stopListeningForLocationChanges();
              }
            ),
          ],
        ),
      ),
    );
  }
}
