import 'dart:async';
import 'dart:convert';
import 'package:flutter/material.dart';
import 'package:geofence_service/geofence_service.dart';
import 'package:flutter/services.dart' show rootBundle;

import '../dialogs/simpleAlertDialog.dart';

class FlutterGeofenceService extends StatefulWidget {
  @override
  _FlutterGeofenceServiceState createState() => _FlutterGeofenceServiceState();
}

class _FlutterGeofenceServiceState extends State<FlutterGeofenceService> {
  final _activityStreamController = StreamController<Activity>();
  final _geofenceStreamController = StreamController<Geofence>();

  // Create a [GeofenceService] instance and set options.
  final _geofenceService = GeofenceService.instance.setup(
      interval: 10000, // 10 seconds
      accuracy: 50,
      loiteringDelayMs: 60000,
      statusChangeDelayMs: 10000,
      useActivityRecognition: true,
      allowMockLocations: false,
      printDevLog: false,
      geofenceRadiusSortType: GeofenceRadiusSortType.DESC);

  // This function is to be called when the geofence status is changed.
  Future<void> _onGeofenceStatusChanged(
      Geofence geofence, 
      GeofenceRadius geofenceRadius, 
      GeofenceStatus geofenceStatus, 
      Location location) async {
      
    // geofence: {
    //   id: neighborhood, 
    //   data: null, 
    //   latitude: 40.593518, 
    //   longitude: 22.975836, 
    //   radius: [{
    //     id: radius_80.0m, 
    //     data: null, 
    //     length: 80.0, 
    //     status: GeofenceStatus.ENTER, 
    //     activity: {
    //       type: ActivityType.UNKNOWN, 
    //       confidence: ActivityConfidence.LOW
    //     }, 
    //     speed: 0.0, 
    //     timestamp: 2021-09-05 13:46:09.416, 
    //     remainingDistance: -0.2800303314806598
    //   }], 
    //   status: GeofenceStatus.ENTER, 
    //   timestamp: 2021-09-05 13:46:09.416, 
    //   remainingDistance: 79.71996966851934
    // }

    if(geofenceStatus == GeofenceStatus.ENTER || geofenceStatus == GeofenceStatus.EXIT) {
      var geofenceEvent = geofence.toJson();
      var titleTxt = geofenceStatus == GeofenceStatus.ENTER ? "Entered geofence" : "Exited geofence";
      var msgTxt = "You have ${geofenceStatus == GeofenceStatus.ENTER ? "entered" : "exited"} to a geofence with id ${geofenceEvent['id']} and location [${geofenceEvent['latitude']}, ${geofenceEvent['longitude']}] ";
      
      showDialog<void>(
        context: context,
        barrierDismissible: false, // user must tap button!
        builder: (BuildContext context) => SimpleAlertDialog(
          title: titleTxt,
          message: msgTxt
        ),
      );
    }

    print('geofence: ${geofence.toJson()}');
    print('geofenceRadius: ${geofenceRadius.toJson()}');
    print('geofenceStatus: ${geofenceStatus.toString()}');
    print('---------------------------------');
    _geofenceStreamController.sink.add(geofence);
  }

  // This function is to be called when the activity has changed.
  void _onActivityChanged(Activity prevActivity, Activity currActivity) {
    print('prevActivity: ${prevActivity.toJson()}');
    print('currActivity: ${currActivity.toJson()}');
    _activityStreamController.sink.add(currActivity);
  }

  // This function is to be called when the location has changed.
  void _onLocationChanged(Location location) {
    print('location: ${location.toJson()}');
    print('-------------------------------------');
  }

  // This function is to be called when a location services status change occurs
  // since the service was started.
  void _onLocationServicesStatusChanged(bool status) {
    print('isLocationServicesEnabled: $status');
  }

  // This function is used to handle errors that occur in the service.
  void _onError(error) {
    final errorCode = getErrorCodesFromError(error);
    if (errorCode == null) {
      print('Undefined error: $error');
      return;
    }

    print('ErrorCode: $errorCode');
  }

  @override
  void initState() {
    super.initState();
    this.initGeofenceService();
  }

  Future<void> initGeofenceService() async {
    final _geofenceList = <Geofence>[];

    // Fetch static list of geofences
    var myGeofenceList = json.decode( await this.getJson('lib/database/geofences.json') );

    // Build geofence list to listen to
    for(var geofence in myGeofenceList) {
      _geofenceList.add(Geofence(
        id: geofence['id'],
        latitude: geofence['latitude'],
        longitude: geofence['longitude'],
        radius: [
          GeofenceRadius(id: 'radius_${geofence['radius']}m', length: geofence['radius']),
        ],
      ));
    }

    WidgetsBinding.instance?.addPostFrameCallback((_) {
      _geofenceService.addGeofenceStatusChangeListener(_onGeofenceStatusChanged);
      _geofenceService.addLocationChangeListener(_onLocationChanged);
      _geofenceService.addLocationServicesStatusChangeListener(_onLocationServicesStatusChanged);
      _geofenceService.addActivityChangeListener(_onActivityChanged);
      _geofenceService.addStreamErrorListener(_onError);
      _geofenceService.start(_geofenceList).catchError(_onError);
    });
  }

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      // A widget used when you want to start a foreground task when trying to minimize or close the app.
      // Declare on top of the [Scaffold] widget.
      home: WillStartForegroundTask(
        onWillStart: () {
          // You can add a foreground task start condition.
          return _geofenceService.isRunningService;
        },
        androidNotificationOptions: AndroidNotificationOptions(
          channelId: 'geofence_service_notification_channel',
          channelName: 'Geofence Service Notification',
          channelDescription: 'This notification appears when the geofence service is running in the background.',
          channelImportance: NotificationChannelImportance.LOW,
          priority: NotificationPriority.LOW,
          iconData: NotificationIconData(
            resType: ResourceType.mipmap,
            resPrefix: ResourcePrefix.ic,
            name: 'launcher',
          ),
        ),
        iosNotificationOptions: IOSNotificationOptions(
          showNotification: true,
          playSound: false,
        ),
        foregroundTaskOptions: ForegroundTaskOptions(
          interval: 5000,
          autoRunOnBoot: false,
        ),
        notificationTitle: 'Geofence Service is running',
        notificationText: 'Tap to return to the app',


        child: Scaffold(
          appBar: AppBar(
            title: const Text('Geofence Service'),
            centerTitle: true,
          ),
          body: _buildContentView(),
        ),
      ),
    );
  }

  @override
  void dispose() {
    _activityStreamController.close();
    _geofenceStreamController.close();
    super.dispose();
  }

  Future<String> getJson(String path) {
    return rootBundle.loadString(path);
  }

  Widget _buildContentView() {
    return ListView(
      physics: const BouncingScrollPhysics(),
      padding: const EdgeInsets.all(8.0),
      children: [
        _buildActivityMonitor(),
        SizedBox(height: 20.0),
        _buildGeofenceMonitor(),
      ],
    );
  }
  
  Widget _buildActivityMonitor() {
    return StreamBuilder<Activity>(
      stream: _activityStreamController.stream,
      builder: (context, snapshot) {
        final updatedDateTime = DateTime.now();
        final content = snapshot.data?.toJson().toString() ?? '';

        return Column(
          crossAxisAlignment: CrossAxisAlignment.start,
          children: [
            Text('•\t\tActivity (updated: $updatedDateTime)'),
            SizedBox(height: 10.0),
            Text(content),
          ],
        );
      },
    );
  }

  Widget _buildGeofenceMonitor() {
    return StreamBuilder<Geofence>(
      stream: _geofenceStreamController.stream,
      builder: (context, snapshot) {
        final updatedDateTime = DateTime.now();
        final content = snapshot.data?.toJson().toString() ?? '';

        return Column(
          crossAxisAlignment: CrossAxisAlignment.start,
          children: [
            Text('•\t\tGeofence (updated: $updatedDateTime)'),
            SizedBox(height: 10.0),
            Text(content),
          ],
        );
      },
    );
  }



}