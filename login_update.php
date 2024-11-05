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



/* Form Container */
/* Form container styling */
.form-container {
    background: linear-gradient(135deg, #003366, #0066cc); /* ASUS blue gradient */
    border-radius: 15px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3); /* Nice shadow for depth */
    padding: 30px;
    max-width: 500px;
    margin: 50px auto;
    color: #ffffff; /* White text for contrast */
    font-family: 'Arial', sans-serif;
    border: 2px solid #bdbdbd; /* Subtle border matching ASUS gray */
}

/* Form input fields */
.form-container input[type="text"],
.form-container input[type="email"],
.form-container input[type="password"],
.form-container select {
    width: 100%;
    padding: 12px;
    margin: 10px 0;
    border: none;
    border-radius: 8px;
    background-color: #f0f0f0; /* Light background for inputs */
    box-shadow: inset 0 3px 6px rgba(0, 0, 0, 0.1); /* Soft inner shadow */
    transition: background-color 0.3s ease;
}

.form-container input[type="text"]:focus,
.form-container input[type="email"]:focus,
.form-container input[type="password"]:focus,
.form-container select:focus {
    background-color: #e6e6e6; /* Slightly darker on focus */
    outline: none;
}

/* Form buttons */
.form-container button {
    width: 100%;
    padding: 15px;
    background-color: #0066cc; /* ASUS blue */
    border: none;
    border-radius: 8px;
    color: #ffffff;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

.form-container button:hover {
    background-color: #005bb5; /* Darker blue on hover */
    transform: translateY(-3px); /* Slight lift effect */
}

/* Placeholder styling */
.form-container input::placeholder {
    color: black; /* Subtle placeholder text */
}

/* Submit button hover */
.form-container button:active {
    transform: translateY(0); /* Button returns on click */
}

/* Responsive styling */
@media (max-width: 768px) {
    .form-container {
        padding: 20px;
    }

    .form-container button {
        padding: 12px;
        font-size: 14px;
    }
}



</style>
  


<form class="form-container" action="login_create2.php" method="post">

<input type="text" name="username" placeholder="Please Enter Name" >
<br>
<input type="password"  name="password" placeholder="Password..." >
<input type="submit" name="submit">
</form>
</body>
</html>

</html>



