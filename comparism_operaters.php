    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Learning Comparisms and operaters in php</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h2>Comparism Operaters<h2>
     <pre>
         equal ==
         identical ===
         compare >, <, >=, <=, <>
         not equal !=
         not identical !==
    </pre>
       <pre>
         And &&
         or || 
         not !  
 </pre>
<?php   
if (5 === 4 && 5 < 10) {
    echo "yes it is";
}

elseif (4 > 4) {
    echo "no its the sames";
}
else {
    echo "so close yet so far";
}
echo "<br>";
echo "<br>";
$name = array(31,31,42,42,421,142,42);
echo ($name)[3];
echo "<br>";
print_r($name);
?>
</body>
</html>