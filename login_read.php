<?php

//connecting to phpmyadmin
$serverName = "localhost";
$userName = "root";
$passord_connect = "";
$dbName = "loginapp";

$connection = mysqli_connect($serverName, $userName, $passord_connect, $dbName);
if ($connection) {
   echo "We're connected";
} else {
    die("Database Connection Failed");
}

 

$query = "SELECT * FROM users";

$result = mysqli_query($connection, $query);

if (!$result) {
die('Query FAILED' . mysqli_error());
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
</head>
<body>
    
<style>
body{
    background:darkgrey;
}

</style>
</html>


<?php
echo "<br>";

while ($row = mysqli_fetch_assoc($result)) {
    ?>
    <pre>
    <?php
    print_r($row);
}
?>
         </pre>