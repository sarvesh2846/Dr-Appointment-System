<?php

    $database= new mysqli("localhost","root","mysql@123","edoc");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>