<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Finger Deco - Dessert Catering Services</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link href="css/custom.css" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Gloria+Hallelujah' rel='stylesheet' type='text/css'>
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
<script>var __adobewebfontsappname__="dreamweaver"</script>
<script src="http://use.edgefonts.net/permanent-marker:n4:default.js" type="text/javascript"></script>

<?PHP
if($_COOKIE['successfully_loggedin'] == 'true'){
    $loggedin = true;
}else{
    $loggedin = false;
}

//setcookie('successfully_loggedin_for_fingerdeco_website', true, time()+3600);

function getEmailWhenLoggedIn(){
    if($_COOKIE['successfully_loggedin'] == 'true'){
        return $_COOKIE['successfully_loggedin_email'];
    }else{
        return 'Enter Email';
    }
}

function getFirstNameWhenLoggedIn(){
    if($_COOKIE['successfully_loggedin'] == 'true'){
        return $_COOKIE['successfully_loggedin_fname'];
    }else{
        return 'Enter First Name';
    }    
}

function getLaststNameWhenLoggedIn(){
    if($_COOKIE['successfully_loggedin'] == 'true'){
        return $_COOKIE['successfully_loggedin_lname'];
    }else{
        return 'Enter Last Name';
    } 
    
}

function submitMessage(){
    if($_COOKIE['successfully_loggedin'] == 'true'){
        return 'Submit';
    }else{
        return 'Register and Submit';
    }     
}

?>
</head>


<body>
<div class="jumbotron navi">
  <div class="container"> <!-- CONTAIN THE ENTIRE CONTENTS OF THE WEBSITE -->
    
   	<nav class="navbar navbar-default navbar-fixed-top ">
        <div class="row">
        	<div class="col-lg-3 col-md-3 col-sm-3">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar" ></span>
                  <span class="icon-bar" ></span>
                  <span class="icon-bar" ></span>
                </button>
                <a class="navbar-brand finger-deco" href="index.php">Finger Deco</a>
            </div>
            </div>
            
			<div class="col-lg-9 col-md-9 col-sm-9">
            <div class="collapse navbar-collapse" id="collapse">
                <ul class="nav nav-tabs nav-justified navbar-nav">
                    <li><a href="index.php">Home</a></li>
                    <li ><a href="menu.php">Menu</a></li>                                     
                    <li class="dropdown"><a href="gallery.php" data-toggle="dropdown">Gallery <span class="caret"></span></a>
                    	<ul class="dropdown-menu">
                        	<li><a href="gallery.php#">Wedding</a></li>
                            <li><a href="gallery.php#corporate">Corporate Events</a></li>
                            <li><a href="gallery.php#social">Social &amp; Others</a></li>
                        </ul>                    
                    </li>
                    <li  class="active"><a href="contact.php">Contact Us</a></li>   
                    <li>
                    <button id="login_button" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#login_form">
                      <?php 
                        if($loggedin){
                            echo "Log Out";
                        }else{
                            echo "Log In";
                        }
                      ?>
                    </button></li> 
                </ul> 
            </div>
            </div>
            
         </div>
      </nav> <!-- end of navbar -->
    
 

 
  </div> <!-- end of .container -->
</div><!-- end of jumbotron -->
<!-- end of jumbotron navi -->





<!-- clearfix col-md-4 -->
<div class="jumbotron">
	<div class="row">
        <div class="col-lg-5">
        	<div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
        	<h2>Our Bakery</h2>
            	<div class="row">
				<img class="img-rounded img-responsive img-float-left " src="images/about/baker.jpg" alt="" style="width: 13em; height: 17em;">                 
                <p class="text-wrap-around ">We have provided services for last 5 years in greater seattle area. We have mobile bakery, so we can go anywhere you want us to be. Please see our menu and contact us to serve your best day with great people!</p>
                </div>
            </div>
            
            <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
        	<h2>Our Service Area</h2>
        	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d85940.23153343596!2d-122.20556395!3d47.69156175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x549012c02852ce7b%3A0x7a776aaa70782857!2sKirkland%2C+WA!5e0!3m2!1sen!2sus!4v1426372067130" width="100%" height="100%" frameborder="0" style="border:0"></iframe>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <address>
                  <strong>FingerDeco, Inc.</strong><br>
                  37 Folsom Ave, Suite 376<br>
                  Kirkland, WA 98034<br>
                  <abbr title="Phone">Phone:</abbr> (425) 234-3847
                </address>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <address>
                  <strong>FingerDeco Email</strong><br>
                  <a href="mailto:info@fingerdeco.com">info@fingerdeco.com</a>
                </address>
            </div>
           </div>
        </div>  
          
    	<div class="col-lg-7 col-md-12 col-sm-12 col-xs-12 " >
	        <h2>Contact Us</h2>
            <div class="jumbotron relative_position">
              
                 <div id="our_bakery_contact_form">
                     <form action="contact_data_handle.php" method="POST">
                         <?php
                         if($loggedin){
                             include 'contact_afterLogin.php';
                         }else{
                             include 'contact_beforeLogin.php';
                         }
                         
                         
                         ?>

                     </form>        
                 </div> <!-- end of #our_bakery_contact_form -->
                 
                 
                <div id="our_bakery_background" > <!-- background image with opacity .7 -->
                </div> 
                                 
            </div>  
              
        </div>

     </div>	
</div>





<footer class="real-footer">
<div class="container text-center">
<p class="text-muted">Copyright&amp; 2015 <strong>Jiyoon Seo</strong></p>
</div>
</footer>

<!-- Login Attempt -->
<!-- Modal -->


<?php

if(!$loggedin){
    include 'login_attempt.php';
    
}else{
    include 'logout_attempt.php';
}

?>

<script src="js/jquery-1.11.0.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/responsive.js"></script>
</body>
</html>
