<?php 
//my FUNCTIONS/VARIABLES
$longer_USer = "Username MUST Be Longer Than Five";
$shorter_user = "Usernamae Must Be Less Than Fifteen";
$longer_pass = "Password Must be Longer Than 8";
$shorter_pass = "Password Must Be Longer Than 20";


if (isset($_POST['submit'])) {
    
    $signed_IN = "Welcome";
    $signedIN_SUCCESSFULLY = "Successfully logged In";
    $name_array = array("Juana","Juanita", "Caleb", "Sherimba");
    $name_passwordArray = array("Jantuga12", "Ivanboeltin", "geshon!ddp","guccitoomuch21");
    $user_minimum = 5;
    $user_maximum = 15;
    $password_minimum = 8;
    $password_maximium = 20;

  $username =   $_POST['username'];
$password =  $_POST['password'];



if (strlen($username) < $user_minimum) {
    echo "<br>";
    echo $longer_USer;
    

}

if (strlen($username) > $user_maximum) {
   echo $shorter_user;
}echo "<br>";
 if (strlen($password) < $password_minimum) {
   echo  $longer_pass;
 }
echo "<br>";
 if (strlen($password) > $password_maximium) {
     echo $shorter_pass;
 }


}

if (!in_array($username,$name_array)){
   echo "No record in database";
}else {
   echo $signed_IN;
}
echo "<br>";
if (!in_array($password,$name_passwordArray)){
    echo "No record in database";
 }else {
    echo $signedIN_SUCCESSFULLY;
 }

 

//echo "<br>";
//echo  "Hello $username";
//echo "<br>";
//echo "Your password is: $password";

?>

