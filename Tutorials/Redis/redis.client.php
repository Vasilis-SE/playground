<?php
    require_once("predis/autoload.php");
    Predis\Autoloader::register();


    try {
    	//$redis = new PredisClient();

        $redis = new Predis\Client(array(
            "scheme" => "tcp",
            "host" => "127.0.0.1",
            "port" => 6379
        ));

        $redis->set("message23", "Hello world2");
        echo $redis->get("message23");

    }
    catch (Exception $e) {
    	die($e->getMessage());
    }

?>
