<?php

/*
 * In this file, I will handle the data retrieved from 'contact.php' page.
 * send directly to 'email' & 'mysql database'
 */
if($_COOKIE['successfully_loggedin'] == 'true'){

    $fname = @$_POST['fname']; $lname= @$_POST['lname']; $email= @$_POST['email']; 
    $select_event_size=@$_POST['select_event_size'];
    $comment= @$_POST['comment'];

    /*
     * Email setting
     */
    $email_myEmail = "info@fingerdeco.com";
    $email_subject = "Email from: " . $email . $fname . $lname;
    $email_message = "Comment: " . $comment . "<br><br>===========<br>Event Size: " . $select_event_size;
    $email_headers = "Event Size: " . $select_event_size;

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        require ('./script/connect_mysqli.php');
        $sql_contact = "INSERT INTO fd_contact(processId, fname, lname, email, eventSize, comment, timeCreated)
                VALUES (' ', '$fname', '$lname', '$email', '$select_event_size', '$comment', NOW() )";		
        $result = @mysqli_query ($dbcon, $sql_contact); // Run the query.
        if ($result) { 
            /* Send the email  */
            mail($email_myEmail, $email_subject, $email_message, $email_headers);
            //setcookie('sent_contact_message', 'true', time()+3600, '/', ".fingerdeco.com");
            header('Location: contact_message_sent.php');

        }else{
            echo mysqli_error($dbcon) ;
        }

    }
}else{ //when the user is not logged in.
    $fname = @$_POST['fname']; $lname= @$_POST['lname']; $email= @$_POST['email']; 
    $select_event_size=@$_POST['select_event_size'];
    $comment= @$_POST['comment'];

    $password = @$_POST['psword'];
    $password = @$_POST['psword_confirm'];
    
    /*
     * Email setting
     */
    $email_myEmail = "info@fingerdeco.com";
    $email_subject = "Email from: " . $email . $fname . $lname;
    $email_message = "Comment: " . $comment . "<br><br>===========<br>Event Size: " . $select_event_size;
    $email_headers = "Event Size: " . $select_event_size;

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        require ('./script/connect_mysqli.php');
        
        //registration sql -- users
        $sql_registration = "INSERT INTO users (user_id, fname, lname, email, psword, registration_date)
                VALUES (' ', '$fname', '$lname', '$email', SHA1('$password'), NOW() )";		
        $result_registration = @mysqli_query ($dbcon, $sql_registration); // Run the query.

        //contact form sql -- fd_contact
        $sql_contact = "INSERT INTO fd_contact(processId, fname, lname, email, eventSize, comment, timeCreated)
                VALUES (' ', '$fname', '$lname', '$email', '$select_event_size', '$comment', NOW() )";		
        $result = @mysqli_query ($dbcon, $sql_contact); // Run the query.
        if ($result && $result_registration) { 
            /* Send the email  */
            mail($email_myEmail, $email_subject, $email_message, $email_headers);
            //setcookie('sent_contact_message', 'true', time()+3600, '/', ".fingerdeco.com");
            header('Location: contact_message_sent.php');

        }else{
            echo mysqli_error($dbcon) ;
        }

    }    
}


?>


