<?php

    $database= new mysqli("localhost","root","","e_doc");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>