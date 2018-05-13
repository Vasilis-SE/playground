<html>
    <head>
        <title> AngularJS 1.x Project </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="css/mystyle.css?v=<?php echo time(); ?>">

    </head>
    <body>
        <div id="loginApp" ng-app="loginApp" ng-controller="loginController" class="container-fluid">
            <div class="modal" role="dialog" ng-show="msgDispModal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Modal body text goes here.</p>
                        </div>
                    </div>
                </div>
            </div>

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
                            <div class="col-md-8"> <input type="text" name="newAccUsername" id="newAccUsername" class="form-control" ng-model="newAccUsername" data-error-key="usernameError" min="6" placeholder="Enter the username you want here..." validate-field-directive required> </div>
                            <div class="col-md-12 emptyFieldMsg" ng-show="newAccUsernameFlag">
                                <div class="pointArrow"></div>
                                <div class="emptyErrorText"> {{ usernameError }} </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 formHeader"> Password : </div>
                            <div class="col-md-8"> <input type="password" name="newAccPass" id="newAccPass" class="form-control" ng-model="newAccPass" data-error-key="passwordError" min="6" placeholder="Enter the password you want here..." validate-field-directive required> </div>
                            <div class="col-md-12 emptyFieldMsg" ng-show="newAccPassFlag">
                                <div class="pointArrow"></div>
                                <div class="emptyErrorText"> {{ passwordError }} </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 formHeader"> Repeat Password : </div>
                            <div class="col-md-8"> <input type="password" name="newAccRPass" id="newAccRPass" class="form-control" ng-model="newAccRPass" data-error-key="rpasswordError" min="6" placeholder="Repeate the above password here..." validate-field-directive required> </div>
                            <div class="col-md-12 emptyFieldMsg" ng-show="newAccRPassFlag">
                                <div class="pointArrow"></div>
                                <div class="emptyErrorText"> {{ rpasswordError }} </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 formHeader"> Email : </div>
                            <div class="col-md-4 col-sm-6"> <input type="text" name="newAccMail" id="newAccMail" class="form-control" ng-model="newAccMail" min="3" placeholder="Enter the email here..." validate-field-directive required /> </div>
                            <div class="col-md-1 col-sm-1 col-xs-1" style="text-align: center; padding-top: 3px 0px 3px 0px;"> @ </div>
                            <div class="col-md-3 col-sm-5">
                                <select name="newAccMailProv" id="newAccMailProv" ng-model="newAccMailProv" class="form-control" ng-options="item for item in mailProviders" required>
                                    <option value=""> Select a mail provider... </option>
                                </select>
                            </div>
                            <div class="col-md-12 emptyFieldMsg" ng-show="newAccMailFlag">
                                <div class="pointArrow"></div>
                                <div class="emptyErrorText"> {{ emailError }} </div>
                            </div>
                        </div>
                        <div class="row"> <div class="col-md-12">
                            <button type="button" name="newAccSbmtBtn" ng-model="newAccSbmtBtn" id="newAccSbmtBtn" class="btn btn-primary" style="width:100%;"
                                ng-click="CreateNewAccount()" ng-disabled="newAccUsername == '' || newAccPass == '' || newAccRPass == '' || newAccMail == '' || newAccMailProv == '' "> Create New Account </button>
                        </div> </div>
                    </form>
                </div>
            </div> <!-- /Create new account container -->


        </div> <!-- /loginApp -->

        <!-- Angular lib -->
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-animate.js">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="js/global.vars.js?v=<?php echo time(); ?>" type="text/javascript"></script>
        <script type="text/javascript">
            var loginApp = angular.module("loginApp", []);

            loginApp.controller("loginController", function( $scope, $http ) {
                $scope.mailProviders = mailProviders;
                $scope.newAccUsername = "";
                $scope.newAccPass = "";
                $scope.newAccRPass = "";
                $scope.newAccMail = "";
                $scope.newAccMailProv = "";

                // -------- Functions ---------
                $scope.newAccountToggle = function() { $scope.newAccBtn = !$scope.newAccBtn; }
                $scope.CreateNewAccount = function() {
                    var data = {
                        "process": 0,
                        "username":      $scope.newAccountForm.newAccUsername.$viewValue,
                        "password":      $scope.newAccountForm.newAccPass.$viewValue,
                        "rpass":         $scope.newAccountForm.newAccRPass.$viewValue,
                        "emailName":     $scope.newAccountForm.newAccMail.$viewValue,
                        "emailProvider": $scope.newAccountForm.newAccMailProv.$viewValue
                    };

                    console.log( $scope );
                    console.log( data );

                    $http({
                        "method" : "POST",
                        "data": data,
                        "url": "account.controller.php"
                    }).then(function mySuccess(response) {
                        //response = JSON.parse( response );
                        //$scope.msgDispModalState = true;

                        $scope.msgDispModal = true;
                    });

                }

            }); // End of controller

            loginApp.directive("validateFieldDirective", function() {
                return {
                    require: 'ngModel',
                    link: function( $scope, element, attr, mCtrl ) {
                        var minimum = 0;
                        if( typeof attr.min != 'undefined' && attr.min != "" ) { minimum = attr.min; }
                        if( typeof attr.ngMin != 'undefined' && attr.ngMin != "" ) { minimum = attr.ngMin; }

                        function ValidateInputFormFields( value ) {
                            var flag = false;

                            // Minimum character length check.
                            if( value.length < minimum ) {
                                switch (attr.ngModel) {
                                    case "newAccUsername": $scope.usernameError = errors.invalidLength.username; break;
                                    case "newAccPass": $scope.passwordError = errors.invalidLength.password; break;
                                    case "newAccRPass": $scope.rpasswordError = errors.invalidLength.rpassword; break;
                                    case "newAccMail": $scope.emailError = errors.invalidLength.email; break;
                                }
                                flag = true;
                            }

                            if( attr.ngModel != "newAccMail" ) {
                                for( var i=0; i<invalidSpecialChars.length; i++ ) {
                                    var specialChar = invalidSpecialChars[i];
                                    if( value.indexOf( specialChar ) !== -1 ) {
                                        switch (attr.ngModel) {
                                            case "newAccUsername": $scope.usernameError = errors.invalidChars.username; break;
                                            case "newAccPass": $scope.passwordError = errors.invalidChars.password; break;
                                            case "newAccRPass": $scope.rpasswordError = errors.invalidChars.rpassword; break;
                                        }
                                        flag = true;
                                    }
                                }
                            }

                            // Retyped password and password mismatch
                            if( attr.ngModel == "newAccRPass" ) {
                                if( value != $scope.newAccountForm.newAccPass.$viewValue ) {
                                    $scope.rpasswordError = errors.invalidRpass;
                                    flag = true;
                                }
                            }

                            // Empty field check.
                            if( value == "" || value == null || typeof value == "undefined" ) {
                                switch (attr.ngModel) {
                                    case "newAccUsername": $scope.usernameError = errors.formEmpty.username; break;
                                    case "newAccPass": $scope.passwordError = errors.formEmpty.password; break;
                                    case "newAccRPass": $scope.rpasswordError = errors.formEmpty.rpassword; break;
                                    case "newAccMail": $scope.emailError = errors.formEmpty.email; break;
                                }
                                flag = true;
                            }

                            // Display error or not...
                            switch (attr.ngModel) {
                                case "newAccUsername": $scope.newAccUsernameFlag = flag; break;
                                case "newAccPass": $scope.newAccPassFlag = flag; break;
                                case "newAccRPass": $scope.newAccRPassFlag = flag; break;
                                case "newAccMail": $scope.newAccMailFlag = flag; break;
                            }

                        } // End of function

                        mCtrl.$parsers.push(ValidateInputFormFields);
                    }
                };
            });
        </script>
    </body>
</html>
