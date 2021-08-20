<html>
    <head>
        <title> Angular Tutorial Services (Interval) </title>
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
        <h1> Angular JS Services (Interval) </h1>

        <div class="alert alert-info">
            Interval service is similar to window.setInterval function of JS it executes
            a block of code every x time.
        </div>

        <div id="intervalApp" ng-app="intervalApp" ng-controller="intervalAppController" class="container">
            <div class="example-code-snippet-area"> <code>
                $interval(function() { <br/>
                    &nbsp;&nbsp;&nbsp; $scope.intervalRes = new Date().toLocaleTimeString(); <br/>
                }, 1000); <br/>
            </code> </div>

            <div class="example-result-area"> {{ intervalRes }} </div>
        </div> <!-- /intervalApp -->

        <!-- Angular lib -->
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script type="text/javascript">

            var app = angular.module("intervalApp", []);

            app.controller("intervalAppController", function( $scope, $interval ) {
                $scope.intervalRes = new Date().toLocaleTimeString();

                $interval(function() {
                    $scope.intervalRes = new Date().toLocaleTimeString();
                }, 1000);
            });

        </script>
    </body>
</html>
