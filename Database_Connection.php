<?php

$connection = mysqli_connect($serverName, $userName, $passord_connect, $dbName);
if ($connection) {
   echo "We're connected";
} else {
    die("Database Connection Failed");
}





?>