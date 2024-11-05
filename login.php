

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
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
  


<form class="form-container" action="login.php" method="post">

<input type="text" name="username" placeholder="Please Enter Name" >
<br>
<input type="password"  name="password" placeholder="Password..." >
<input type="submit" name="submit">
</form>
</body>
</html>

<?php

$severName = "localhost";
$userName = "root";
$passord_connect = "";
$dbName = "loginapp";

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
 $connection = mysqli_connect($severName, $userName, $passord_connect, $dbName);

if ($connection) {
   echo "We're connected";
} else {
    die("Successfully Connected");
}
}
?>

