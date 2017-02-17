<?php


require ('./connect_mysqli.php');

/**
 * Insert query to add retrieved data from the registration form
 * 
 */
$q = "INSERT INTO users (user_id, fname, lname, email, psword, registration_date)
        VALUES (' ', 'Joel', 'Tribiany', 'jeoo.s@gk.co', SHA1('123'), NOW() )";		
$result = @mysqli_query ($dbcon, $q); // Run the query.
if ($result) { // If it ran OK.
//header ("location: register-thanks.php"); 
exit();
}else{
    echo "failed..";
    echo mysqli_error($dbcon) ;
}

?>