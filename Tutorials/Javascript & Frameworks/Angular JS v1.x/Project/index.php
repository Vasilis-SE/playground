<html>
    <head>
        <title> AngularJS 1.x Project </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="css/mystyle.css">

    </head>
    <body>
        <div id="loginApp" ng-app="loginApp" ng-controller="loginController" class="container-fluid">


            <div class="container">
                <div id="loginPanel">
                    <form name="loginForm" id="loginForm" ng-model="loginForm">
                        <div class="row">
                            <div class="col-md-4"> Username : </div>
                            <div class="col-md-8"> <input type="text" name="username" id="username" ng-model="username" class="form-control" required /> </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"> Password : </div>
                            <div class="col-md-8"> <input type="password" name="password" id="password" ng-model="password" class="form-control" required /> </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12"> Create new account <input type="checkbox" name="newAccountChkBox" id="newAccountChkBox" ng-model="newAccountChkBox" /> </div>
                        </div>
                        <div class="row"> <div class="col-md-12"> </div> </div>
                    </form>
                </div>
            </div> <!-- /Login Container -->

            <div class="container" ng-show="{{newAccountChkBox}}">
                <form name="newAccountForm" id="newAccountForm" ng-model="newAccountForm">
                    <div class="row">
                        <div class="col-md-4"> Username : </div>
                        <div class="col-md-8"> <input type="text" name="newAccUsername" id="newAccUsername" class="form-control" ng-model="newAccUsername"> </div>
                    </div>
                </form>
            </div> <!-- /Create new account container -->


        </div> <!-- /loginApp -->

        <!-- Angular lib -->
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script type="text/javascript">
            var loginApp = angular.module("loginApp", []);
            loginApp.controller("loginController", function() {




            }); // End of controller



        </script>
    </body>
</html>
