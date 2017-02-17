<?php

$login_email = $_REQUEST['login_email']; $login_password = $_REQUEST['login_password']; 
//echo "your email is : $login_email" . "<br>";
//echo "your password is : $login_password";


//connect to database
require ('mysqli_connect.php');

$sql_login = "SELECT user_id, fname, lname, email, psword FROM users WHERE email='$login_email'";
$result = mysqli_query($dbcon, $sql_login);

$row = mysqli_fetch_assoc($result);
if(mysqli_num_rows($result) > 0){
    if($row["psword"] === $login_password){
    echo "Welcome, <strong>" . $row["fname"] ." ". $row["lname"] . "!</strong> You logged in successfully!";
    }else{
    echo "you are failed to loged in. Please double check your password:D";
}
}else{
    echo "Your email address hasn't been registered. Please register first!";
}


?>
