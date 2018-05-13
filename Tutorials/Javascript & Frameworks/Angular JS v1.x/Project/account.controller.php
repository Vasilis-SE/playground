<?php
    include_once("account.class.php");

    if( $_SERVER["REQUEST_METHOD"] == "POST" ) {
        $postdata = file_get_contents("php://input");
        $dataJSON = json_decode($postdata);
        $process = $dataJSON->process;

        // Create new account process...
        if( isset( $process ) && intval( $process ) == 0 ) {

            $username = $dataJSON->username;
            $password = $dataJSON->password;
            $rpass = $dataJSON->rpass;
            $emailName = $dataJSON->emailName;
            $emailProvider = $dataJSON->emailProvider;

            $accountObj = new Account($username, $password, $emailName, $emailProvider);
            if( !$accountObj->CheckIfFieldsAreEmpty() ) {
                $response["status"] = 0;
                $response["message"] = "One or more fields in the form are empty! Please fill all the necessary fields...";
                die( json_encode($response) );
            }
            if( !$accountObj->CheckFiledLengthIntegrity() ) {
                $response["status"] = 0;
                $response["message"] = "One or more fields in the form has less characters than the minimum length...";
                die( json_encode($response) );
            }
            if( !$accountObj->CheckFieldsForSpecialChars() ) {
                $response["status"] = 0;
                $response["message"] = "One or more fields in the form contain invalid characters! Please fill all the necessary fields properly...";
                die( json_encode($response) );
            }
            if( !$accountObj->PasswordFieldsMatchCheck( $rpass ) ) {
                $response["status"] = 0;
                $response["message"] = "The password field and the retype password field mismatch!";
                die( json_encode($response) );
            }

            $response["status"] = 1;
            $response["message"] = "New account has been created successfully!";
            die( json_encode($response) );

        }




    } // End of REQUEST_METHOD == POST

?>
