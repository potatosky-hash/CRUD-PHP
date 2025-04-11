<?php

    define("HOSTNAME", "localhost");
    define("USERNAME", "root");
    define("PASSWORD", "");
    define("DATABASE", "ARNAIZ_2b");

    $connection = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);
    
    
    if(!$connection){
        die("Connection failed");
    }

    else{
        echo "yesss";
    }





?>