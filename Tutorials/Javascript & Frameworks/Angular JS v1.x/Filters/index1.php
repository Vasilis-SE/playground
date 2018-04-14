<html>
    <head>
        <title> Angular Tutorial Filters </title>

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
        <h1> Angular JS Filter </h1>

        <div class="alert alert-info">
            When binding data to view either with `{{}}` or with `ng-bind` you can use filters to
            format your data as you see fit. The available filters are the following :

            <ul>
                <li> <b> currency </b> -> Format a number to a currency format. </li>
                <li> <b> date </b> -> Format a date to a specified format. </li>
                <li> <b> filter </b> -> Select a subset of items from an array. </li>
                <li> <b> json </b> -> Format an object to a JSON string. </li>
                <li> <b> limitTo </b> -> Limits an array/string, into a specified number of elements/characters. </li>
                <li> <b> lowercase </b> -> Format a string to lower case. </li>
                <li> <b> number </b> -> Format a number to a string. </li>
                <li> <b> orderBy </b> -> Orders an array by an expression. </li>
                <li> <b> uppercase </b> -> Format a string to upper case. </li>
            </ul>
        </div>

        <div id="filtersApp" ng-app="filtersApp" ng-controller="filtersAppController" class="container">

            <div class="container">
                <div class='filter-header'> Currency Filter </div>
                <div class='alert alert-warning'>
                    The currency filter formats a currency value to a certain format. The default symbol that is used is the american dollar `$` but you can
                    change it. The currency filter template is like :  { { currency_expression | currency : symbol : fractionSize} } where
                    <br/> > currency_expression = is the value to be printed
                    <br/> > currency = is the filtering method (necessary)
                    <br/> > symbol = is the symbol to be used in the format (default is $)
                    <br/> > fractionSize = integer size to set the fraction size of the value (if is set to 0 then there wont be any fractions).
                </div>
                <div class="example-code-snippet-area"> <code>
                    { { user.name }} has {{ user.balance | currency : '€' : 2 } }
                </code> </div>
                <div class="example-result-area">
                    <div class='row' ng-repeat='user in users'> {{ user.name }} has {{ user.balance | currency : "€" : 2 }} </div>
                </div>
            </div>

            <div class="container">
                <div class='filter-header'> Date Filter </div>
                <div class='alert alert-warning'>
                    The date filter is used to format a date value. The filter template is like : <br/>
                    { { date_expression | date : format : timezone} } where
                    <br/> > date_expression -> is the date value
                    <br/> > date -> is the filtering type
                    <br/> > format -> is the format that is going to be applied
                    <br/> > timezone -> timezone to be used on formating
                </div>
                <div class="example-code-snippet-area"> <code>
                    { { user.name }} has {{ user.date | date : "yyyy-LLLL-EEEE" } }
                </code> </div>
                <div class="example-result-area">
                    <div class='row' ng-repeat='user in users'> {{ user.name }} has {{ user.date | date : "yyyy-LLLL-EEEE" }} </div>
                </div>
            </div>

            <div class="container">
                <div class='filter-header'> Filter Filter </div>
                <div class='alert alert-warning'>
                    The filter filter allows the filtering of values on a array. For example it can filter the values on a array and display only those.
                    The filter template is like : <br/>
                    ng-repeat="x in names | filter : 'value' where
                    <br/> > filter -> is the filtering value
                    <br/> > value -> the value to filter the array values
                </div>
                <div class="example-code-snippet-area"> <code>
                    ng-repeat='user in users | filter:"Greece"
                </code> </div>
                <div class="example-result-area">
                    <div class='row' ng-repeat='user in users | filter:"Greece" '>
                        {{ user.name  }} - {{ user.country }}
                    </div>
                </div>
            </div>

            <div class="container">
                <div class='filter-header'> Filter OrderBy </div>
                <div class='alert alert-warning'>
                    The filter orderBy is used on arrays to sort them depending on a column of them.
                    The filter template is like : <br/>
                    {{ orderBy_expression | orderBy : expression : reverse : comparator}}
                    <br/> > orderBy_expression -> the value
                    <br/> > orderBy -> is the filtering value
                    <br/> > expression -> sort the array by the expression values
                    <br/> > reverse -> change the sorting order from ascending to descending
                    <br/> >
                </div>
                <div class="example-code-snippet-area"> <code>
                    ng-repeat='user in users | orderBy:"balance":"reverse"
                </code> </div>
                <div class="example-result-area">
                    <div class='row' ng-repeat='user in users | orderBy:"balance":"reverse" '>
                        {{ user.name + " - " + user.country + " - " + user.balance }}
                    </div>
                </div>
            </div>


        </div> <!-- /filtersApp -->


        <!-- Angular lib -->
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script type="text/javascript">
            var users = [
                {"name":"Linta", "country":"UK", "balance":40.2, "date":"1288323623006"},
                {"name":"Bob", "country":"USA", "balance":4.8, "date":"1288483623006"},
                {"name":"Alina", "country":"Russia", "balance":105.85, "date":"1258487623506"},
                {"name":"Maria", "country":"Greece", "balance":20.9, "date":"22184831223032"},
                {"name":"James", "country":"UK", "balance":300.0, "date":"1253457623506"},
                {"name":"Konstantina", "country":"Greece", "balance":100.50, "date":"1228443623506"}
            ];

            var app = angular.module("filtersApp", []);
            app.controller("filtersAppController", function( $scope ) {
                $scope.users = users;
            });

        </script>
    </body>
</html>
