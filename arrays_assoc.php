<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Learning Associative arrays in PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php
    $listNumber = array(10,20,30,40,50,60,70,80,90);
    print_r($listNumber);
echo '<br>';
echo '<br>';
    echo($listNumber[2]);
    
    $Names =  array("Juanita", "Caleb", "Sherimba");
print_r($Names);
    echo "<br>";
    echo $Names[2] . "<br>";
 echo "<br>";
    $Names = array("first_Name" => 'juanita',
'last_Name' => 'Carlos');
    echo "<br>";
    print_r($Names);
    echo "<br>";
    echo $Names['first_Name'] . $Names['last_Name'];
    echo "<br>";
    echo $Names['first_Name'];
    ?>
</body>
</html>