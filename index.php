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


?>
</head>

<body >

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
                <a class="navbar-brand finger-deco" href="#">Finger Deco</a>
            </div>
            </div>
            
			<div class="col-lg-9 col-md-9 col-sm-9">
            <div class="collapse navbar-collapse" id="collapse">
                <ul class="nav nav-tabs nav-justified navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li ><a href="menu.php">Menu</a></li>                                     
                    <li class="dropdown"><a href="gallery.php" data-toggle="dropdown">Gallery <span class="caret"></span></a>
                    	<ul class="dropdown-menu">
                        	<li><a href="gallery.php#wedding">Wedding</a></li>
                                <li><a href="gallery.php#corporate">Corporate Events</a></li>
                            <li><a href="gallery.php#social">Social &amp; Others</a></li>
                        </ul>                    
                    </li>
                    <li><a href="contact.php">Contact Us</a></li>   
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

<div class="jumbotron second">
 	<!-- Carousel Bootstrap -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="images/slider1.jpg">
          <div class="container">
            <div class="carousel-caption">
              <h1>Let us find the best recipes &amp; decorations!</h1>
              <p><a class="btn btn-lg btn-primary" href="gallery.php" role="button">Visit gallery</a></p>
              <!-- <p><a class="btn btn-lg btn-primary" href="gallery.html" role="button">Visit gallery</a></p> -->
            </div>
          </div>
        </div>
        <div class="item">
          <img src="images/bgt3.jpg">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>-->
            </div>
          </div>
        </div>
        <div class="item">
          <img src="images/dessert2.jpg">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>-->
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- end of .carousel --> 
</div>


<div class="jumbotron">
	<div class="row">
    	<div class="col-lg-12">
        	<h1 class="innerblock">Finger Deco</h1><h2 class="innerblock pretty">&nbsp;&nbsp;&nbsp; Dessert Catering Services</h2>
            
            <div class="container-fluid event">
            	
                	<div class="col-lg-4 col-md-4 center">
                    <img class="img-circle img-responsive center-block" src="images/dessert3.jpg" alt="" style="width: 20em; height: 13em;">
                    <h2>Wedding</h2>
                    <em><blockquote>Go beyond wedding tradition, and offer guests a variety of dessert options at your celebration. Look through recipes, displays and more for the best desserts to serve at your wedding!   	
                    <p><a class="btn btn-default btn-group-justified" href="#" role="button">View details &raquo;</a></p>                </blockquote></em>
                    </div>

                	<div class="col-lg-4 col-md-4 center">
                    <img class="img-circle img-responsive center-block" src="images/dessert2.jpg" alt="Generic placeholder image" style="width: 20em; height: 13em;">
                    <h2>Corporate Event</h2>
                    <em><blockquote>Looking to add charm and festivity to that boring meeting or lackluster office party? Simply Desserts offers designer and logo cookies, imprinted with you company logo or design, cupcakes, cheesecake bites and other delectable treats that are perfect for your corporate event!
                    <p><a class="btn btn-default btn-group-justified" href="#" role="button">View details &raquo;</a></p>      </blockquote></em>          
                    </div>    
                    
                	<div class="col-lg-4 col-md-4 center">
                    <img class="img-circle img-responsive center-block" src="images/social/img8.jpg" alt="Generic placeholder image" style="width: 20em; height: 13em;">
                    <h2>Social &amp; Others</h2>
                    <em><blockquote>Time to be social? Tell us your special stories and let us find memorable design and taste for your events! Party dessert ideas pack outstanding taste in bite-size desserts. Impress your guests with mini desserts served in fun and pretty party style.
                    <p><a class="btn btn-default btn-group-justified" href="#" role="button">View details &raquo;</a></p>      </blockquote></em>          
                    </div>                                      
            </div>
        </div>
    	<div class="col-lg-12 news">
			<div><h1 id="news">Great News</h1>
            </div>
              
    	</div>
    </div>
</div>


<!-- Footer (sticky maybe..)-->
<div class="footer navbar-fixed-bottom">
<div class="container">
<!--
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#login_form">
  Log In
</button>
-->
</div>
</div>

<footer class="footer">
<div class="container text-center">
<p class="text-muted">Copyright&amp; 2015 <strong>Jiyoon Seo</strong></p>
</div>
</footer>



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

<?php

if($loggedin){
    echo "
    <script>
    $(function() {
       $(\"#loginSuccess\").modal();
    });
    </script>";    
}

?>

</body>
</html>
