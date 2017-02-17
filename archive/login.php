<?php

$login_email = $_REQUEST['login_email']; $login_password = SHA1($_REQUEST['login_password']); 
//echo "your email is : $login_email" . "<br>";
//echo "your password is : $login_password";


//connect to database
require ('connect_mysqli.php');

$sql_login = "SELECT fname, lname, email, psword FROM users WHERE email='$login_email'";
$result = mysqli_query($dbcon, $sql_login);

$row_login = mysqli_fetch_assoc($result);
if(mysqli_num_rows($result) > 0){
    if($row_login["psword"] === $login_password){
    //echo "Welcome, <strong>" . $row["fname"] ." ". $row["lname"] . "!</strong> You logged in successfully!";
        //setcookie('successfully_loggedin', '', time()-3600);
        setcookie('successfully_loggedin', 'true', time()+3600, '/', ".jiyoonseo.com"); //save it for one hour
        
        //test email:       lol@lol.com
        //test password:    111
        header('Location: ../thank_you.php');
    }else{
    echo "you are failed to loged in. Please double check your password:D<br>";
    echo "email:". $row_login['email'] . "password:" . $row_login['psword'];
}
}else{
    echo "Your email address hasn't been registered. Please register first!";
}


?>
