<?php

    setcookie('successfully_loggedin', '', time()-3600, '/', ".fingerdeco.com"); //save it for one hour
    setcookie('successfully_loggedin_fname', '', time()-3600, '/', ".fingerdeco.com");
    setcookie('successfully_loggedin_lname', '', time()-3600, '/', ".fingerdeco.com");
    setcookie('successfully_loggedin_email', '', time()-3600, '/', ".fingerdeco.com");
  header('Location: ./index.php');
  
?>