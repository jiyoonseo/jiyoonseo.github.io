<?php

// This creates a connection to the logindb database and to MySQL, 
// It also sets the encoding.
// Set the access details as constants:
DEFINE ('DB_USER', 'forall');
DEFINE ('DB_PASSWORD', 'forall');
DEFINE ('DB_HOST', 'jiyoonseocom.ipagemysql.com');
DEFINE ('DB_NAME', 'php_proj1');

/*
 //////MySQL database connection access//////////////////
MySQL host: localhost
MySQL database name: icoolsho_xx, where xx is your initials
MySQL uid: icoolsho_xx, where xx is your initials
MySQL password: Your student ID (xxx-xx-xxxx) 
*/

// Make the connection information in $dbcon:
$dbcon = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) ;

////////////////////////////////////////////////////////////////////////
//connects to the database, and give me an error message when it fails to connect
if($dbcon -> connect_error){
    die("Connction failed: " .$dbcon->connect_error);
    
}
mysqli_set_charset($dbcon, 'utf8');
?>
