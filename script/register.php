<?php
$fname = @$_POST['fname']; $lname= @$_POST['lname']; $email= @$_POST['email']; $password = @$_POST['psword'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require ('./connect_mysqli.php');
    $q = "INSERT INTO users (user_id, fname, lname, email, psword, registration_date)
            VALUES (' ', '$fname', '$lname', '$email', SHA1('$password'), NOW() )";		
    $result = @mysqli_query ($dbcon, $q); // Run the query.
    if ($result) { // If it ran OK.
        header('Location: ../index.php');
        //header('Location: /../index.php');
        //header ("location: register-thanks.php"); 
        //echo "successll...<Br>";
        //echo 'first name:' . $fname;
        exit();
    }else{
        echo "failed..";
        echo mysqli_error($dbcon) ;
    }
}


?>