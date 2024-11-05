<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Function Parameters In php</title>
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


//My Variables


function greeting($message){

    echo $message ;
    echo "<h1>hello world<h1>";
     


}

greeting("Hello Student ");



function calculate($number1, $number2){
$sum = $number1 + $number2;
echo $sum;

return  

}


calculate(43,43);




















?>
</body>
</html>