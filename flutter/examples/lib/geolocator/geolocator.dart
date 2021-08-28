import 'package:flutter/material.dart';
import 'dart:async';
import 'dart:convert';

import 'package:geolocator/geolocator.dart';


class FlutterGeolocator extends StatefulWidget {
  const FlutterGeolocator({ Key? key }) : super(key: key);

  @override
  _FlutterGeolocatorState createState() => _FlutterGeolocatorState();
}

class _FlutterGeolocatorState extends State<FlutterGeolocator> {

  final GeolocatorPlatform _geolocatorPlatform = GeolocatorPlatform.instance;
  final List<_PositionItem> _positionItems = <_PositionItem>[];
  StreamSubscription<Position>? _positionStreamSubscription;
  var locationListWidgets = <Widget>[];

  @override
  void initState() {
    super.initState();

    initPlatformState();
  }

  // Platform messages are asynchronous, so we initialize in an async method.
  Future<void> initPlatformState() async {
    Position position = await Geolocator.getCurrentPosition(desiredAccuracy: LocationAccuracy.high);
    print("Fetched: ${json.encode(position)}");

    setState(() {});
  }

  void _updatePositionList(_PositionItemType type, String displayValue) {
    _positionItems.add(_PositionItem(type, displayValue));
    
    locationListWidgets.add(Text(displayValue));
    if(locationListWidgets.length > 20)
      locationListWidgets.removeRange(0, 20);

    setState(() {});
  }

  void _toggleListening() {
    if (_positionStreamSubscription == null) {
      final positionStream = _geolocatorPlatform.getPositionStream();

      _positionStreamSubscription = positionStream.handleError((error) {
        _positionStreamSubscription?.cancel();
        _positionStreamSubscription = null;
      }).listen((position) => {
        _updatePositionList(_PositionItemType.position, position.toString())
      });

      _positionStreamSubscription?.pause();
    }

    setState(() {
      if (_positionStreamSubscription == null) {
        return;
      }

      String statusDisplayValue;
      if (_positionStreamSubscription!.isPaused) {
        _positionStreamSubscription!.resume();
        statusDisplayValue = 'resumed';
      } else {
        _positionStreamSubscription!.pause();
        statusDisplayValue = 'paused';
      }

      _updatePositionList(
        _PositionItemType.log,
        'Listening for position updates $statusDisplayValue',
      );
    });
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: const Text('Geolocator app'),
      ),
      body: ListView(
        children: <Widget>[
          Row(
            mainAxisAlignment: MainAxisAlignment.spaceAround,
            children: <Widget>[
              ElevatedButton(
                child: Text("Listen to geolocation changes"),
                style: ButtonStyle(
                  backgroundColor: MaterialStateProperty.all<Color>(Colors.red.shade300)
                ),
                onPressed: _toggleListening,
              ),
            ], 
          ),

          Column(
            mainAxisAlignment: MainAxisAlignment.spaceAround,
            children: locationListWidgets,
          )
        ],
      ),
    );
  }


}

enum _PositionItemType {
  log,
  position,
}
class _PositionItem {
  _PositionItem(this.type, this.displayValue);

  final _PositionItemType type;
  final String displayValue;
}