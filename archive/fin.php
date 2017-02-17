<!DOCTYPE HTML>
<html>
<head>
    <title>Login Cookie Tester</title>
<!--
 Write the login form

Write a PHP file that will output a form containing 
3 fields: username, password and “Remember me!” checkbox. 
Upon submission of the form, 
the code should check against an associative array 
to see whether the username/password pair was correct. 

If so, display a welcome message and save a cookie that identifies the user to the server. 
On further visits to the page, the user should appear logged in, 
even if the browser has been closed; 
If not, display the message “Invalid username or password” followed by the same login form. 

Once again, there should only be ***one PHP*** file, 
and you should redirect to the same place after submitting. 
The output should be one of three options:

    The login form.
    The invalid message and the login form, if failed login.
    The welcome message containing a “Log Out” button, if successful login.
     When user clicks “Log out” button, remove the cookie so that the user is logged out. 
     Clicking the button should redirect the user to the same page, which now shows a login form.

-->    
    <style>
        .error {color: #FF0000;}
    </style>
</head>
<body>
    <?php 
        $email = @$_POST['email'];
        $password = @$_POST['password'];
        $remember = (@$_POST['remember'] == "yes");
        
        $logout = (@$_POST['logout'] == 'logout');
        $tried = (@$_POST['tried'] == 'yes');
        $successfully_login = false;
        
    
        
        //login information validation 
        // For the test purpose use this authentication:
        // Email - admin@test.com
        // password - 1234
        if(isset($email) && isset($password)){
            if(!preg_match('/@.+\..+$/', $email)){
                echo "WRONG EMAIL ADDRESS<br/>"; //check email address
            }else{
                if($email =="admin@test.com"){ //validate email
                    if($password =="1234"){ //validate password
                        $successfully_login  = true;
                        setcookie('successfully_login', 'yes', time()+60);
                        //echo "<Br>Welcome, '$email'! You successfully logged in. <br>";
                        
                        if($remember){                    
                            //echo "We will save your information for next 60 secs.<br>";
                            setcookie('email', 'admin@test.com', time()+60);
                            setcookie('password', '1234', time()+60);
                            setcookie('record_time', time(), time()+60);
                            setcookie('remember', 'yes', time()+60);


                        }else{
                            $remember = false;
                            echo "<Br>Welcome, '$email'! You successfully logged in. <br>";
                            echo "We won't save you in cookie<br/>";
                        }

                    }else{
                        
                        echo "<p class='error'>WRONG password!</p>";;
                    }
                }else{
                    echo "<p class='error'>Please check your email address!!!</p>";;
                    
                }                  
            }
            
              
        }else {
            //if the form is sent for the first time 
            //or
            //when the cookie is set after successfully login
            if($successfully_login || @$_COOKIE['successfully_login'] == 'yes'){
                echo "";
            }else{
                if(!isset($email)){
                    echo "<p class='error'>Enter Email address!</p>";
                } 
                if (!isset($password)){
                    echo "<p class='error'>Enter password!</p>";
                }                 
            }
            
           
        }
          
        // if the user successfully login
        if($successfully_login || @$_COOKIE['successfully_login'] == 'yes'){
            if(!isset($_COOKIE['email']) && !$logout && !$tried){
                echo '
                    <form action="';?><?php echo $_SERVER['PHP_SELF']; ?><?php echo'" method="POST" >
                    <p>Please use ID:<strong>admin@test.com</strong> Password:<strong>1234</strong> to test login</p>
                    Email: <input type="email" name="email" value="'?><?php echo $email ;?><?php echo'" /><br/>
                    Password: <input type="password" name="password" value="'?><?php echo $password ;?><?php echo'"/><br/>
                    Status: <input type="checkbox" name="remember" value="yes"';?>
                    <?php if ($remember) { echo "checked"; } ?> 
                    <?php echo '/> Remember me!<br />
                     <input type="submit" value="login" />';

                echo '<input type="hidden" name="tried" value="yes" />'
                . '</form>';

            }else {
                echo 
                    '
                    <form action="';?><?php echo $_SERVER['PHP_SELF']; ?><?php echo'" method="POST" >    
                    <input type="submit" name="logout" value="logout"/>
                    </form>';


                    if($logout) echo "you just clicked logout<Br>";

                    //if the user wants to save the cookie...
                    if($remember || @$_COOKIE['remember'] == 'yes'){
                        if($logout ){

                            setcookie('email', '', time()-3600);
                            setcookie('password', '', time() - 3600);
                            setcookie('record_time', '', time()-3600);
                            setcookie('remember', '', time()-3600);
                            setcookie('successfully_login', '', time()-3600);

                            $page = $_SERVER['PHP_SELF'];
                            $sec = ".1";
                            header("Refresh: $sec; url=$page");                    
                            //unset($_COOKIE);
                        }else{ 
                            $tracktime = time() - (int)@$_COOKIE['record_time'];
                            echo "Howdy, ". @$_COOKIE['email']. "! You successfully logged in. <br>";                        
                            echo "<br>We will save your login info for 1 minute!<br>";
                            
                            //Show how many seconds left for until automatically logout
                            echo "The System will log you out in : <strong class='error'>" . (60 - $tracktime) . "</strong> Seconds.<br>";
                            echo "please click 'logout' to log out and clear your cookie!<Br/>";
                            
                            // for test (refresh the page)
                            $page = $_SERVER['PHP_SELF'];
                            if($remember){
                                $sec = ".1";
                            }else{
                                $sec = "1";
                            }
                            
                            header("Refresh: $sec; url=$page");                      
                        }                    
                        if($logout){ 
                            setcookie('successfully_login', '', time()-3600);
                            $page = $_SERVER['PHP_SELF'];
                            $sec = ".1";
                            header("Refresh: $sec; url=$page");                    
                            //unset($_COOKIE);
                        }                    

                    }else if(!$remember){ //if the user doesn't want to save cookies
                        if($logout){  // And click logout button -->Cookies Expire...
                            setcookie('successfully_login', '', time()-3600);
                            
                            //refresh the page..
                            $page = $_SERVER['PHP_SELF'];
                            $sec = ".1";
                            header("Refresh: $sec; url=$page");                    
                            //unset($_COOKIE);
                        }                     
                    }       
            }            
            
        }else{ //if not successful login --> Show login form again!
            echo '
                
                <form action="';?><?php echo $_SERVER['PHP_SELF']; ?><?php echo'" method="POST" >
                <p>Please use ID:<strong>admin@test.com</strong> Password:<strong>1234</strong> to test login</p>
                Email: <input type="email" name="email" value="'?><?php echo $email ;?><?php echo'" /><br/>
                Password: <input type="password" name="password" value="'?><?php echo $password ;?><?php echo'"/><br/>
                Status: <input type="checkbox" name="remember" value="yes"';?>
                <?php if ($remember) { echo "checked"; } ?> 
                <?php echo '/> Remember me!<br />
                 <input type="submit" value="login" />';

            echo '<input type="hidden" name="tried" value="yes" />'
            . '</form>';            
            
        }

        


    
    ?>
    
    
    
</body>

</html>



