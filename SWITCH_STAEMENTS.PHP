<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Learning Switch statements in PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?PHP

//Variables 
$gr_grade =50;
$bad_grade = 65;

             
switch ($bad_grade) {
        case 50:
        echo "A+"; 
        break;
        case 65:
        echo "B"; 
        break;
        case 50:
        echo "D"; 
        break;
        case 25:
        echo "F"; 

        default : 
        echo "We could not find anything";
}



?>
</body>
</html>