import 'package:flutter/material.dart';

// ignore: must_be_immutable
class SimpleAlertDialog extends StatelessWidget {
  
  String title = '';
  String message = '';
  String btnTxt = '';

  // Constructor
  SimpleAlertDialog({
    String this.title='', 
    String this.message='',
    String this.btnTxt='OK'
  });

  @override
  Widget build(BuildContext context) {

    return AlertDialog(
      title: Text( this.title ),
      content: SingleChildScrollView(
        child: ListBody(
          children: <Widget>[
            Text( this.message ),
          ],
        ),
      ),
      actions: <Widget>[
        TextButton(
          child: Text( this.btnTxt ),
          onPressed: () {
            Navigator.of(context).pop();
          },
        ),
      ],
    );
  }
}