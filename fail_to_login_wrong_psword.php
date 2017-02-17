<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Finger Deco - Dessert Catering Services</title>

<!-- in 3 seconds, it will redirect to index.php page-->
<meta http-equiv="refresh" content="3, URL=index.php">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link href="css/custom.css" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Gloria+Hallelujah' rel='stylesheet' type='text/css'>
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
<script>var __adobewebfontsappname__="dreamweaver"</script>
<script src="http://use.edgefonts.net/permanent-marker:n4:default.js" type="text/javascript"></script>


</head>

<body >
<Br><Br><Br><Br><Br><Br>
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
                    <li class="active"><a href="index.php">Home</a></li>
                    <li ><a href="menu.php">Menu</a></li>                                     
                    <li class="dropdown"><a href="gallery.php" data-toggle="dropdown">Gallery <span class="caret"></span></a>
                    	<ul class="dropdown-menu">
                        	<li><a href="gallery.php#">Wedding</a></li>
                            <li><a href="gallery.php#corporate">Corporate Events</a></li>
                            <li><a href="gallery.php#social">Social &amp; Others</a></li>
                        </ul>                    
                    </li>
                    <li><a href="contact.php">Contact Us</a></li>   
                    <li>
                    <button id="login_button" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#login_form">
                      Log In
                    </button></li>  
                </ul> 
            </div>
            </div>
            
         </div>
      </nav> <!-- end of navbar -->
    
  <?php include 'login_attempt.php'; ?>

 
  </div> <!-- end of .container -->
</div><!-- end of jumbotron -->

<div class="jumbotron second">
    
    


<!-- start modal for thank you for login-->
<form action="index.php">
<div class="modal fade" id="wrong_password" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title" id="myModalLabel">Failed to login - Wrong Password</h4>
      </div>
      <div class="modal-body">
          <p>For the email address <strong>
          <?php
          echo $_COOKIE['failed_loggedin_email'] ;
          //setcookie('successfully_loggedin', '0', time()+3600); 
          
          ?>
          </strong>, you entered wrong password. Please try again.
          </p>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
        <button type="button" class="btn btn-default">Go To Home Page</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#login_form">Go to Log In</button>
      </div>
    </div>
  </div>
</div>
</form>
<!-- end of modal -->

</div>

<script src="js/jquery-1.11.0.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/responsive.js"></script>
<?php
echo "
<script>
$(function() {
   $(\"#wrong_password\").modal();
});
</script>";
?>
<!-- script for #myModal call when the page load
<script>
$(function() {
   $("#myModal").modal();
});
</script>
-->

</body>
</html>