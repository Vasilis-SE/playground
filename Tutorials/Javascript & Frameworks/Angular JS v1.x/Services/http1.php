<html>
    <head>
        <title> Angular Tutorial Services (HTTP 1) </title>
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
        <h1> Angular JS Services (HTTP 1) </h1>

        <div class="alert alert-info">
            HTTP service is similar to AJAX of jquery it creates a call to a server script and expects
            some response from it. <br/>

            The methods used by this function are :
            <ul>
                <li>.delete()</li>
                <li>.get()</li>
                <li>.head()</li>
                <li>.jsonp()</li>
                <li>.patch()</li>
                <li>.post()</li>
                <li>.put()</li>
            </ul>
            While the properties are :
            <ul>
                <li>.config</li>
                <li>.data</li>
                <li>.headers</li>
                <li>.status</li>
                <li>.statusText</li>
            </ul>
            This properties are used on the response object.
        </div>

        <div id="httpApp" ng-app="httpApp" ng-controller="httpAppController" class="container">

        </div> <!-- /httpApp -->

        <!-- Angular lib -->
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script type="text/javascript">

        </script>
    </body>
</html>
