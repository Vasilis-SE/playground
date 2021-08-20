<?php
    $acceptedMailServices = array("gmail.com", "gmail.gr", "outlook.com",
        "outlook.gr", "yahoo.com", "yahoo.gr", "hotmail.com", "hotmail.gr");

    if( $_SERVER["REQUEST_METHOD"] == "POST" ) {

        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);

        $fname = htmlspecialchars( $request->fname );
        $lname = htmlspecialchars( $request->lname );
        $email = htmlspecialchars( $request->email );
        $age = intval( $request->age );
        $balance = floatval( $request->balance );

        if( $fname == null || $lname == null || $email == null || $age == null || $balance == null) {
            $response["status"] = 0;
            $response["message"] = "One or more fields in the form are empty! Please fill all the necessary fields first and then resubmit the form...";
            die( json_encode( $response ) );
        }

        if( !strpos( $email, "@" ) ) {
            $response["status"] = 0;
            $response["message"] = "The email you have entered is invalid! The email must be like : `example@service.extension` ...";
            die( json_encode( $response ) );
        }

        $emailParts = explode("@", $email);
        if( $emailParts[1] == null || !in_array( $emailParts[1], $acceptedMailServices ) ) {
            $response["status"] = 0;
            $response["message"] = "Invalid mail provider...";
            die( json_encode( $response ) );
        }

        $usersFile = "./userdata.json";
        $users = json_decode( file_get_contents( $usersFile ), true );
        $usersNum = count( $users["items"] );

        $newUser = array(
            "index"=>( $usersNum + 1),
            "age"=>$age,
            "float"=>(mt_rand( 10*1000000, 20*1000000) / 1000000),
            "name"=>$fname,
            "surname"=>$lname,
            "fullname"=>$fname." ".$lname,
            "email"=>$email,
            "balance"=>$balance
        );

        $users["items"][] = $newUser;
        if( file_put_contents( $usersFile, json_encode( $users ) ) ) {
            $response["status"] = 1;
            $response["newuser"] = $newUser;
            $response["message"] = "New user has been successfully added to list...";
            die( json_encode( $response ) );
        } else {
            $response["status"] = 0;
            $response["message"] = "Could not register new user!";
            die( json_encode( $response ) );
        }

    } else {
        $response["status"] = 0;
        $response["message"] = "Wrong call made...";
        die( json_encode( $response ) );
    }

?>
