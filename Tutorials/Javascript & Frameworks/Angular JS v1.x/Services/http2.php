<html>
    <head>
        <title> Angular Tutorial Services (HTTP 1) </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <style>
            .row {
                margin-top: 10px;
            }

        </style>
    </head>
    <body>
        <h1> Angular JS Services (HTTP 2) </h1>

        <div id="httpApp" ng-app="httpApp" ng-controller="httpAppController" class="container">

            <div class="row">
                <div class="col-md-4"> First Name: </div>
                <div class="col-md-8"> <input type="text" id="fname" name="fname" ng-model="fname" class="form-control" placeholder="Type the user`s firstname..."/> </div>
            </div>
            <div class="row">
                <div class="col-md-4"> Last Name: </div>
                <div class="col-md-8"> <input type="text" id="lname" name="lname" ng-model="lname" class="form-control" placeholder="Type the user`s lastname..."/> </div>
            </div>
            <div class="row">
                <div class="col-md-4"> Full Name: </div>
                <div class="col-md-8"> {{ fname + " " + lname }} </div>
            </div>
            <div class="row">
                <div class="col-md-4"> Email: </div>
                <div class="col-md-8"> <input type="text" id="userEmail" name="userEmail" ng-model="userEmail" class="form-control" placeholder="Type the user`s email..."> </div>
            </div>
            <div class="row">
                <div class="col-md-4"> Age: </div>
                <div class="col-md-8"> <input type="number" id="userAge" name="userAge" ng-model="userAge" class="form-control" placeholder="Type the user`s age..."> </div>
            </div>
            <div class="row">
                <div class="col-md-4"> Balance: </div>
                <div class="col-md-8"> <input type="number" id="userBalance" name="userBalance" ng-model="userBalance" class="form-control" placeholder="Type the user`s balance..."> </div>
            </div>
            <div class="row">
                <button type="button" class="btn btn-primary" ng-click="AddNewUserProcess()" style="width:100%;"> Add New User </button>
            </div>
            <div class="row {{httpReqClass}}"> {{httpReqMessage}} </div>

            <div class="row usersTableHeader">
                <div class="col-md-1"> Index </div>
                <div class="col-md-3"> Full Name </div>
                <div class="col-md-2"> Age </div>
                <div class="col-md-4"> Email </div>
                <div class="col-md-2"> Balance </div>
            </div>
            <div class="row" ng-repeat="user in users">
                <div class="col-md-1"> {{user.index}} </div>
                <div class="col-md-3"> {{user.fullname}} </div>
                <div class="col-md-2"> {{user.age}} </div>
                <div class="col-md-4"> {{user.email}} </div>
                <div class="col-md-2"> {{user.balance | currency : 2 }} </div>
            </div>

        </div> <!-- /httpApp -->

        <!-- Angular lib -->
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script type="text/javascript">
            var app = angular.module("httpApp", []);
            var users = null;
            app.controller("httpAppController", function( $scope, $http ) {

                function GetUserData() {
                    $http.get("./userdata.json")
                    .then(function( response ) {
                        users = response.data.items;
                        $scope.users = users;
                    });
                }

                GetUserData();

                $scope.AddNewUserProcess = function() {

                    $http({
                        "method" : "POST",
                        "url" : "./handleUsers.php",
                        "data": {
                            "fname": $scope.fname,
                            "lname": $scope.lname,
                            "email": $scope.userEmail,
                            "age": $scope.userAge,
                            "balance": $scope.userBalance
                        }
                    })
                    .then(
                        function( response ){
                            console.log( response );
                            if( response.status ) {
                                $scope.httpReqClass = "alert alert-success";
                                $scope.httpReqMessage = response.data.message;
                                GetUserData();
                            } else {
                                $scope.httpReqClass = "alert alert-danger";
                                $scope.httpReqMessage = response.message;
                            }
                        },
                        function( response ) {
                            $scope.httpReqClass = "alert alert-danger";
                            $scope.httpReqMessage = "An error occurred while trying to communicate with server...";
                        }
                    );

                };


            });
        </script>
    </body>
</html>
