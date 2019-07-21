<html>
    <head>
        <title> Angular Tutorial Services (Timeout) </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <style>
            .container {
                background: #38a563;
                margin-top: 30px;
                padding-bottom: 5px;
                padding: 20px;
            }
            .filter-header {
                color: #EEE;
                font-size: 22px;
                font-weight: 700;
                border-bottom: 2px solid #EEE;
                margin-bottom: 5px;
            }
            .example-code-snippet-area {
                background: #f3f3f3;
                padding: 10px;
                border-radius: 5px;
            }

            .example-result-area {
                background: #759ed2;
                padding: 10px 40px 10px 40px;
                color: #EEEE;
                margin-top: 10px;
                border-radius: 5px;
            }
        </style>
    </head>
    <body>
        <h1> Angular JS Services (Timeout) </h1>

        <div class="alert alert-info">
            Timeout service does the same functionality like window.setTimeout of JS. It executes
            a code after a certain time passes. The time parameter of time out is in milliseconds...
        </div>

        <div id="timeoutApp" ng-app="timeoutApp" ng-controller="timeoutAppController" class="container">
            <div class="example-code-snippet-area"> <code>
                $timeout(function() { <br/>
                    &nbsp;&nbsp;&nbsp; $scope.timeoutRes = "4000 milliseconds passed"; <br/>
                }, 4000); <br/>
            </code> </div>

            <div class="example-result-area"> {{ timeoutRes }} </div>
        </div> <!-- /timeoutApp -->

        <!-- Angular lib -->
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script type="text/javascript">
            var app = angular.module("timeoutApp", []);
            app.controller("timeoutAppController", function( $scope, $timeout ) {

                $scope.timeoutRes = "Wait HERE !";
                $timeout(function() {
                    $scope.timeoutRes = "4000 milliseconds passed";
                }, 4000);

            });
        </script>
    </body>
</html>
