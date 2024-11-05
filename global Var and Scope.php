<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Vars and global scopes in php</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<style>
body{
    background:darkgrey;
}
</style>

<?php

$x = "outside"; //Global

function convert(){
    global $x;
    $x = "inside"; // local
}

echo $x;
echo "<br>";

convert();












?>


</body>
</html>