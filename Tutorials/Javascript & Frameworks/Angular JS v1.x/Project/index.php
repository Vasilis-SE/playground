<html>
    <head>
        <title> AngularJS 1.x Project </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="css/mystyle.css?v=<?php echo time(); ?>">

    </head>
    <body>
        <div id="loginApp" ng-app="loginApp" ng-controller="loginController" class="container-fluid">


            <div class="container">
                <div id="loginPanel" class="col-md-7 col-sm-9 col-xs-12">
                    <form name="loginForm" id="loginForm" ng-model="loginForm">
                        <div class="row"> <div class="col-md-12 formTitle"> Login </div> </div>
                        <div class="row">
                            <div class="col-md-4 formHeader"> Username : </div>
                            <div class="col-md-8"> <input type="text" name="username" id="username" ng-model="username" class="form-control" placeholder="Enter your username here..." equired /> </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 formHeader"> Password : </div>
                            <div class="col-md-8"> <input type="password" name="password" id="password" ng-model="password" class="form-control" placeholder="Enter your password here..." required /> </div>
                        </div>
                        <div class="row"> <div class="col-md-12"> <button type="button" class="btn btn-success" id="loginBtn" name="loginBtn" ng-model="loginBtn" style="width: 100%;"> Login </button> </div> </div>
                        <div class="row"> <div class="col-md-12"> <button type="button" class="btn btn-primary" id="newAccBtn" name="newAccBtn" ng-click="newAccountToggle()" value="false" ng-model="newAccBtn" style="width: 100%;"> Create New Account </button> </div> </div>
                        <div class="row"> <div class="col-md-12"> </div> </div>
                    </form>
                </div>
            </div> <!-- /Login Container -->

            <div class="container" ng-show="newAccBtn">
                <div id="newAccPanel" class="col-md-7 col-sm-9 col-xs-12">
                    <form name="newAccountForm" id="newAccountForm" ng-model="newAccountForm">
                        <div class="row"> <div class="col-md-12 formTitle"> Create New Account </div> </div>
                        <div class="row">
                            <div class="col-md-4 formHeader"> Username : </div>
                            <div class="col-md-8"> <input type="text" name="newAccUsername" id="newAccUsername" class="form-control" ng-model="newAccUsername" placeholder="Enter the username you want here..."> </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 formHeader"> Password : </div>
                            <div class="col-md-8"> <input type="password" name="newAccPass" id="newAccPass" class="form-control" ng-model="newAccPass" placeholder="Enter the password you want here..."> </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 formHeader"> Repeat Password : </div>
                            <div class="col-md-8"> <input type="password" name="newAccRPass" id="newAccRPass" class="form-control" ng-model="newAccRPass" placeholder="Repeate the above password here..."> </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 formHeader"> Email : </div>
                            <div class="col-md-4 col-sm-6"> <input type="text" name="newAccMail" id="newAccMail" class="form-control" ng-model="newAccMail" placeholder="Enter the email here..." /> </div>
                            <div class="col-md-1 col-sm-1 col-xs-1" style="padding: 7px 15px;"> @ </div>
                            <div class="col-md-3 col-sm-5">
                                <select name="newAccMailProv" id="newAccMailProv" ng-model="newAccMailProv" class="form-control" ng-options="item for item in mailProviders">
                                    <option value=""> Select a mail provider... </option>
                                </select>
                            </div>
                        </div>
                        <div class="row"> <div class="col-md-12"> <button type="button" name="newAccSbmtBtn" ng-model="newAccSbmtBtn" id="newAccSbmtBtn" class="btn btn-primary" style="width:100%;"> Create New Account </button> </div> </div>
                    </form>
                </div>
            </div> <!-- /Create new account container -->


        </div> <!-- /loginApp -->

        <!-- Angular lib -->
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="js/global.vars.js" type="text/javascript"></script>
        <script type="text/javascript">
            var loginApp = angular.module("loginApp", []);
            loginApp.controller("loginController", function( $scope ) {
                $scope.mailProviders = mailProviders;

                //$scope.newAccMailProv

                // -------- Functions ---------
                $scope.newAccountToggle = function() { $scope.newAccBtn = !$scope.newAccBtn; }


            }); // End of controller



        </script>
    </body>
</html>
