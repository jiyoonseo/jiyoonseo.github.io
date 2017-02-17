<?php

$total_items = 8; // 8-1
 $menu = @$_COOKIE['menu'];
 $item = array(
      "Wedding Cake",      //0
      "Panna Cotta",      //1
      "Macarons",        //2
      "Crème Brûlée",   //3
      "Eclairs",        //4
      "Sablés",         //5
      "Cupcakes",       //6
      "Cake Pop"        //7
 );
 
 $selected_item = "";
  for($i = 0 ; $i< $total_items; $i++){
     if(@$menu[$i]=='true'){
         $selected_item .= $item[$i];
         $selected_item .= "; <br>";
     }
 }
 
 if(@$_COOKIE['successfully_loggedin'] == 'true'){
 
    //connect to mysql and get personal info
   $fname = @$_COOKIE['successfully_loggedin_fname'];
   $lname = @$_COOKIE['successfully_loggedin_lname'];
   $email = @$_COOKIE['successfully_loggedin_email'];



   // send email 
       $email_myEmail = "info@fingerdeco.com";
       $email_subject = "Email from: " . $email . $fname . $lname;
       $email_message = "Selected Items: " . $selected_item;
       $email_headers = "//////n/a/////////" . 'email:'. $email . ' --- first name: '.  $fname . ' ,<br> last name:'. $lname;
       mail($email_myEmail, $email_subject, $email_message, $email_headers);

       echo "Your Request has been sent!";

       
 }

    /*
    require ('./script/connect_mysqli.php');
    $sql_contact = "INSERT INTO fd_contact(processId, fname, lname, email, eventSize, comment, timeCreated)
            VALUES (' ', '$fname', '$lname', '$email', '$select_event_size', '$comment', NOW() )";		
    $result = @mysqli_query ($dbcon, $sql_contact); // Run the query.
    if ($result) { 
        // Send the email  
        mail($email_myEmail, $email_subject, $email_message, $email_headers);
        //setcookie('sent_contact_message', 'true', time()+3600, '/', ".fingerdeco.com");
        header('Location: contact_message_sent.php');

    }else{
        echo mysqli_error($dbcon) ;
    } 
    */   