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
                    <li class="active dropdown "><a href="gallery.php" data-toggle="dropdown">Gallery <span class="caret"></span></a>
                    	<ul class="dropdown-menu">
                        	<li><a href="#">Wedding</a></li>
                            <li><a href="#corporate">Corporate Events</a></li>
                            <li><a href="#social">Social &amp; Others</a></li>
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
<!-- end of jumbotron navi -->





<!-- clearfix col-md-4 -->
<div class="jumbotron">

    
    <!-- START GALLERY EXAMPLE -->
    <div id="wedding"></div>
    <div class="row" >    
        <div class="container-fluid">
            <h1>Finger Deco Gallery</h1>
            <div class="row row-wedding" id="wedding">        
              <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Wedding 2014" href="#galleryModal" data-toggle="modal" ><img class="thumbnail img-responsive" src="images/wedding/thumb/img1.jpg"></a></div>
              <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Sweets Fountain" href="#galleryModal" data-toggle="modal" ><img class="thumbnail img-responsive" src="images/wedding/thumb/img2.jpg"></a></div>
              <div class="col-lg-3 col-sm-4 col-xs-6"><a title="FingerDeco Wedding Sweets1" href="#galleryModal" data-toggle="modal"><img class="thumbnail img-responsive" src="images/wedding/thumb/img3.jpg"></a></div>
              <div class="col-lg-3 col-sm-4 col-xs-6"><a title="FingerDeco Wedding Sweets2" href="#galleryModal" data-toggle="modal"><img class="thumbnail img-responsive" src="images/wedding/thumb/img4.jpg"></a></div>
              <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Wedding Dessert Bar1" href="#galleryModal" data-toggle="modal"><img class="thumbnail img-responsive" src="images/wedding/thumb/img5.jpg"></a></div>
              <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Wedding Dessert Bar2" href="#galleryModal" data-toggle="modal"><img class="thumbnail img-responsive" src="images/wedding/thumb/img6.jpg"></a></div>
              <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Wedding Dessert Bar3" href="#galleryModal" data-toggle="modal"><img class="thumbnail img-responsive" src="images/wedding/thumb/img7.jpg"></a></div>
              <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Wedding Dessert Bar4" href="#galleryModal" data-toggle="modal"><img class="thumbnail img-responsive" src="images/wedding/thumb/img8.jpg"></a></div>
            </div>
        </div>   
    </div> 
    
    <div id="corporate"></div>
    <div class="row" >    
        <div class="container-fluid">
            <h1>Finger Deco Corporate Gallery</h1>
            <div class="row row-corporate" id="corporate" >        
              <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Celebration" href="#galleryCorpModal" ><img class="thumbnail img-responsive" src="images/corp/thumb/img1.jpg"></a></div>
              <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Welcome Party" href="#galleryCorpModal"  ><img class="thumbnail img-responsive" src="images/corp/thumb/img2.jpg"></a></div>
              <div class="clearfix visible-xs-block"></div>
              <div class="col-lg-3 col-sm-4 col-xs-6"><a title="FD Corp Party" href="#galleryCorpModal"  ><img class="thumbnail img-responsive" src="images/corp/thumb/img3.jpg"></a></div>
              <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Corporate Sweets" href="#galleryCorpModal"  ><img class="thumbnail img-responsive" src="images/corp/thumb/img4.jpg"></a></div>
              <div class="clearfix visible-lg-block"></div>
              <div class="clearfix visible-xs-block"></div>
              <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Corporate Dessert Bar1" href="#galleryCorpModal"><img class="thumbnail img-responsive" src="images/corp/thumb/img5.jpg"></a></div>
              <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Corporate Dessert Bar2" href="#galleryCorpModal"><img class="thumbnail img-responsive" src="images/corp/thumb/img6.jpg"></a></div>
              <div class="clearfix visible-md-block"></div>
              <div class="clearfix visible-sm-block"></div>
              <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Corporate Dessert Bar3" href="#galleryCorpModal"><img class="thumbnail img-responsive" src="images/corp/thumb/img7.jpg"></a></div>
              <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Corporate Dessert Bar4" href="#galleryCorpModal" ><img class="thumbnail img-responsive" src="images/corp/thumb/img8.jpg"></a></div>
            </div>
        </div>   
    </div>     
    
    <div id="social"></div>
    <div class="row" >    
        <div class="container-fluid">
            <h1>Finger Deco Social Gallery</h1>
            <div class="row row-social" id="social" >        
              <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Celebration" href="#gallerySocialModal" ><img class="thumbnail img-responsive" src="images/social/thumb/img1.jpg"></a></div>
              <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Welcome Party" href="#gallerySocialModal"  ><img class="thumbnail img-responsive" src="images/social/thumb/img2.jpg"></a></div>
              <div class="clearfix visible-xs-block"></div>
              <div class="col-lg-3 col-sm-4 col-xs-6"><a title="FD Corp Party" href="#gallerySocialModal"  ><img class="thumbnail img-responsive" src="images/social/thumb/img3.jpg"></a></div>
              <div class="clearfix visible-md-block"></div>
              <div class="clearfix visible-sm-block"></div>
              <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Corporate Sweets" href="#gallerySocialModal"  ><img class="thumbnail img-responsive" src="images/social/thumb/img4.jpg"></a></div>
              <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Corporate Dessert Bar1" href="#gallerySocialModal"><img class="thumbnail img-responsive" src="images/social/thumb/img5.jpg"></a></div>
              <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Corporate Dessert Bar2" href="#gallerySocialModal"><img class="thumbnail img-responsive" src="images/social/thumb/img6.jpg"></a></div>
              <div class="clearfix visible-md-block"></div>
              <div class="clearfix visible-sm-block"></div>
              <div class="clearfix visible-xs-block"></div>
              <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Corporate Dessert Bar3" href="#gallerySocialModal"><img class="thumbnail img-responsive" src="images/social/thumb/img7.jpg"></a></div>
              <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Corporate Dessert Bar4" href="#gallerySocialModal" ><img class="thumbnail img-responsive" src="images/social/thumb/img8.jpg"></a></div>
            </div>
        </div>   
    </div>
    
    
                 
        <!-- click on the image, it will polulate modal with carousel -->
        <div class="modal" id="galleryModal" role="dialog">
          <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal">x</button>
                <h3 class="modal-title"></h3>
            </div>
            <div class="modal-body">
                <div id="galleryModalCarousel" class="carousel"> 
                  <div class="carousel-inner"></div>
                  <a class="carousel-control left" href="#galleryModalCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                  <a class="carousel-control right" href="#galleryModalCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
           </div>
          </div>
        </div>
   
    <!-- end GALLERY EXAMPLE -->
    
    


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
<script>


$('.row-wedding .thumbnail').on('load', function() {
  
}).each(function(i) {
  if(this.complete) {
  	var itemw = $('<div class="item"></div>');
    var itemDiv = $(this).parents('div');
    var title = $(this).parent('a').attr("title");
    
    itemw.attr("title",title);
  	$(itemDiv.html()).appendTo(itemw);
  	itemw.appendTo('.carousel-inner'); 
    if (i==0){ // set first item active
     itemw.addClass('active');
    }
  }
});


/* activate the carousel */
$('#galleryModalCarousel').carousel({interval:false});

/* change modal title when slide changes */
$('#galleryModalCarousel').on('slid.bs.carousel', function () {
  $('.modal-title').html($(this).find('.active').attr("title"));
})

/* when clicking a thumbnail */
$('.row-wedding .thumbnail').click(function(){
    var idx = $(this).parents('div').index();
  	var id = parseInt(idx);
  	//$('#myModal').modal('show'); // show the modal
    $('#galleryModalCarousel').carousel(id); // slide carousel to selected
  	
});


/////////////////////////////////////////////////////////////



</script>
</body>
</html>
