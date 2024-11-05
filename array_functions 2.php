<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array functions in php</title>
</head>
<body>
    
<style>
body{
    background:darkgrey;
}
</style>  




<?php 


$list = [2424,42,4242,42413,131342,3546,64543,65643];

echo min($list);
echo "<br>";
sort($list);
print_r($list);
echo "<br>";
echo is_array($list);













?>
  
</body>
</html>