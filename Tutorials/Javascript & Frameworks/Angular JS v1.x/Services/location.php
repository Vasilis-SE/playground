<html>
    <head>
        <title> Angular Tutorial Services (Location) </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <style>
            .container {
                background: #38a563;
                margin-top: 30px;
                padding-bottom: 5px;
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
        <h1> Angular JS Services (Location) </h1>

        <div class="alert alert-info">
            Angular JS provides 30 build in services that can provide information
            that already exist on DOM or retrive data from server. One of those services is
            the $location service which can be used to retrive information about the pages location.
        </div>

        <div id="locationApp" ng-app="locationApp" ng-controller="locationAppController" class="container">

            <div class="container">
                <div class='filter-header'> Full Path </div>
                <div class='alert alert-warning'>
                    Retrieve the full path of the page.
                </div>
                <div class="example-code-snippet-area"> <code>
                    $scope.absPath = $location.absUrl();
                </code> </div>
                <div class="example-result-area"> {{ absPath }} </div>
            </div>

            <div class="container">
                <div class='filter-header'> Url Path </div>
                <div class='alert alert-warning'>
                    Retrieve the files name with any parameter in URL
                </div>
                <div class="example-code-snippet-area"> <code>
                    $scope.urlPart = $location.url();
                </code> </div>
                <div class="example-result-area"> {{ urlPart }} </div>
            </div>

            <div class="container">
                <div class='filter-header'> Protocol </div>
                <div class='alert alert-warning'>
                    Retrieve the the protocol used.
                </div>
                <div class="example-code-snippet-area"> <code>
                    $scope.protocolPrint = $location.protocol();
                </code> </div>
                <div class="example-result-area"> {{ protocolPrint }} </div>
            </div>

            <div class="container">
                <div class='filter-header'> Search </div>
                <div class='alert alert-warning'>
                    Searches the URL for specific parameters. If no parameters are used on this function then
                    it will return all it can find from URL. The result is a JSON format string.
                </div>
                <div class="example-code-snippet-area"> <code>
                    $scope.searchRes = $location.search();
                </code> </div>
                <div class="example-result-area"> {{ searchRes }} </div>
            </div>



        </div> <!-- /locationApp -->


        <!-- Angular lib -->
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script type="text/javascript">
            var app = angular.module("locationApp", []);
            app.controller("locationAppController", function( $scope, $location ) {
                $scope.absPath = $location.absUrl();
                $scope.urlPart = $location.url();
                $scope.protocolPrint = $location.protocol();
                $scope.searchRes = $location.search();
            });

        </script>
    </body>
</html>
