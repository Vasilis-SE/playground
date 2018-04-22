<html>
    <head>
        <title> Angular JS Events </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <style>
            .eventExample {
                background: #409a5c;
                padding: 20px;
                color: #EEE;
                border-radius: 5px;
                margin-bottom: 10px;
            }
            .eventHeader {
                font-size: 23px;
                font-weight: 700;
                border-bottom: 2px solid #BBB;
                margin-bottom: 10px;
            }
            .eventExplanation {
                color: #EEE;
                font-size: 14px;
                font-style: italic;
                margin-bottom: 20px;
            }
            .userIcon {
                width: 20px;
            }
            #selectedUsersTable {
                width: 100%;
                background: #647798;
                margin-top: 10px;
                color: #EEE;
            }
            th {
                background: #404d63;
                height: 40px;
                border-right: 1px solid #556580;
                text-align: center;
            }
            .userRow {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <h1> Angular JS Events </h1>

        <div id="eventsApp" ng-app="eventsApp" ng-controller="eventsAppController" class="container">
            <div class="alert alert-info">
                AngularJS allows us to run functions at certain user events. But be careful because AngularJS
                event will <u><b>NOT</b></u> overwrite HTML events and so both will be executed. The built in
                AngularJS events are the following :

                <ul>
                    <li> ng-blur </li>
                    <li> ng-change </li>
                    <li> ng-click </li>
                    <li> ng-copy </li>
                    <li> ng-cut </li>
                    <li> ng-dblclick </li>
                    <li> ng-focus </li>
                    <li> ng-keydown </li>
                    <li> ng-keypress </li>
                    <li> ng-keyup </li>
                    <li> ng-mousedown </li>
                    <li> ng-mouseenter </li>
                    <li> ng-mouseleave </li>
                    <li> ng-mousemove </li>
                    <li> ng-mouseover </li>
                    <li> ng-mouseup </li>
                    <li> ng-paste </li>
                </ul>
            </div>

            <div class="row eventExample">
                <div class="col-md-12 eventHeader"> ng-click Event </div>
                <div class="col-md-12 eventExplanation"> Triggered every time the HTML element that is bind to the event is clicked... </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-primary" ng-click="myClickFunction()"> Click Me! </button>
                </div>
                <div class="col-md-10"> You clicked: {{clickTimes}} times... </div>
            </div>

            <div class="row eventExample">
                <div class="col-md-12 eventHeader"> ng-change Event </div>
                <div class="col-md-12 eventExplanation"> Triggered every time the value of the element that the event is binded on is changed... </div>
                <div class="col-md-12">
                    <select id="userSelector" ng-model="userSelector" class="form-control" ng-change="selecUserFromList()"
                        ng-options="item.index as item.fullname for item in names">
                        <option value=""> Select a user ... </option>
                    </select>
                </div>
                <div class="col-md-12">
                    <table id="selectedUsersTable" ng-model="selectedUsersTable">
                        <tr>
                            <th> </th>
                            <th> Full Name </th>
                            <th> Age </th>
                            <th> Balance </th>
                        </tr>
                        <tr ng-repeat="selectedUser in selectedUsers" class="userRow">
                            <td> <img src="./usericon.png" class="userIcon" /> </td>
                            <td> {{selectedUser.fullname}} </td>
                            <td> {{selectedUser.age}} </td>
                            <td> {{selectedUser.balance | currency:2}} </td>
                        </tr>
                    </table>
                </div>
            </div>

        </div> <!-- /eventsApp -->

        <!-- Angular lib -->
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script type="text/javascript">

            var app = angular.module("eventsApp", []);
            var users = null;
            var selectedUsers = [];
            app.controller("eventsAppController", function( $scope, $http ) {
                $scope.clickTimes = 0;
                $scope.selectedUsers = selectedUsers;
                $scope.displayUserTbl = false;
                $scope.displayUserTblHide = true;

                // ---------- Functions ----------
                function GetUserData() {
                    $http.get("./userdata.json")
                    .then(
                        function( response ) { $scope.names = response.data.items; users = response.data.items; },
                        function( response ) { /* TODO fail */ }
                    );
                }

                $scope.myClickFunction = function() { $scope.clickTimes++; }
                $scope.selecUserFromList = function() {

                    var selectedUserID = $scope.userSelector;
                    var selectedUsersData = users[ selectedUserID - 1 ];
                    selectedUsers.push( selectedUsersData );


                }
                // ---------- /Functions ----------


                GetUserData();

            });

        </script>
    </body>
</html>
