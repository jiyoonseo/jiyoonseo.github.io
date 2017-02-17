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
        setcookie('successfully_loggedin', 'true', time()+3600, '/', ".fingerdeco.com"); //save it for one hour
        setcookie('successfully_loggedin_fname', $row_login["fname"], time()+3600, '/', ".fingerdeco.com");
        setcookie('successfully_loggedin_lname', $row_login["lname"], time()+3600, '/', ".fingerdeco.com");
        setcookie('successfully_loggedin_email', $row_login["email"], time()+3600, '/', ".fingerdeco.com");
        
        setcookie('first_logged_in', 'true', time()+3600, '/', ".fingerdeco.com");
        
        //setcookie('prompt_successfully_login_msg', 'true', time()+3600, '/', ".fingerdeco.com");
        //test email:       lol@lol.com
        //test password:    111
        //header('Location: ../thank_you_for_login.php');
        if( isset($_SERVER['HTTP_REFERER']) ){
            header('Location: '. $_SERVER['HTTP_REFERER'] );
        }else{
            header('Location: ../index.php');
        }
        
        
    }else{
        setcookie('failed_loggedin_email', $login_email, time()+3600, '/', ".fingerdeco.com");
        header('Location: ../fail_to_login_wrong_psword.php');
    //echo "you are failed to loged in. Please double check your password:D<br>";
    //echo "email:". $row_login['email'] . "password:" . $row_login['psword'];
}
}else{
    setcookie('failed_loggedin_email', $login_email, time()+3600, '/', ".fingerdeco.com");
    header('Location: ../fail_to_login_wrong_email.php');
    //echo "Your email address hasn't been registered. Please register first!";
}


?>
