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

<?php
       $total_items = 8; // 8-1
	$menu = @$_COOKIE['menu'];
        $counter = 0;
        for($i = 0 ; $i< $total_items; $i++){
            if(@$menu[$i]=='true'){
                $counter++;
            }
        }
		
        setcookie("numberOfCount", $counter);
        
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
//    setcookie("menu[0]", "", time()-3600);
//    setcookie("menu[1]", "", time()-3600);
//    setcookie("menu[2]", "", time()-3600);
//    setcookie("menu[3]", "", time()-3600);
//    setcookie("menu[4]", "", time()-3600);
//    setcookie("menu[5]", "", time()-3600);
//    setcookie("menu[6]", "", time()-3600);
//    setcookie("menu[7]", "", time()-3600);        
?>
</head>


<body>
    <?php
    echo "<br><br><br>";
    print_r($menu);
    ?>

    
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
                    <li ><a href="index.html">Home</a></li>
                    <li class="active"><a href="menu.php">Menu</a></li>                                     
                    <li class="dropdown"><a href="gallery.html" data-toggle="dropdown">Gallery <span class="caret"></span></a>
                    	<ul class="dropdown-menu">
                        	<li><a href="#">Wedding</a></li>
                            <li><a href="#">Corporate Events</a></li>
                            <li><a href="#">Social &amp; Others</a></li>
                        </ul>                    
                    </li>
                    <li><a href="contact.html">Contact Us</a></li>   
                    <li>
                    <button id="login_button" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#login_form">
                      Log In
                    </button></li> 
                </ul> 
            </div>
            </div>
            
         </div>
      </nav> <!-- end of navbar -->
    
 

 
  </div> <!-- end of .container -->
</div><!-- end of jumbotron -->

<!-- clearfix col-md-4 -->
<div class="jumbotron">
	<div class="container-fluid">
    	<div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6">                
                <em><blockquote id="finderDeco_menu">
				<img class=" img-rounded img-responsive center-block" src="images/menu/menu0.jpg" alt="" style="width: 15em; height: 13em;">
                <h2><?php echo $item[0]; ?></h2> 
                    A beautivul wedding cake with almond, vanilla, flour, eggs, flaked coconut, pecans, butter, cream cheese, sugar, andpecans
                    <p><a class="btn btn-default btn-group-justified" role="button" onClick="addtoQuote(this, 0)" 
                        <?php 
                            if(@$menu[0]=='true') echo 'style="color:blue"' ;
                            else if(@$menu[0]=='false') echo 'style="color:red"' ;
                            else echo 'style="color:red"' ;
                        ?>                     
                          >
                    <?php 
                        if(@$menu[0]=='false') echo 'Add to Quote &raquo;' ;
                        else if(@$menu[0]=='true') echo 'Added to Quote List' ;
                        else echo 'Add to Quote &raquo;' ;
                    ?>
                    </a></p>                
                </blockquote></em>            	
            </div>
            
            <div class="col-lg-3 col-md-4 col-sm-6">                
                <em><blockquote id="finderDeco_menu">
				<img class=" img-rounded img-responsive center-block" src="images/menu/menu1.jpg" alt="" style="width: 15em; height: 13em;">
                <h2><?php echo $item[1]; ?></h2>                
                		Tasty Italian dessert made by blending thick cream, egg white and honey. Choose your favorite topping among strawberry, blueberr, and chocolate!
                	<p><a class="btn btn-default btn-group-justified" role="button" onClick="addtoQuote(this, 1)"
                        <?php 
                            if(@$menu[1]=='true') echo 'style="color:blue"' ;
                            else if(@$menu[1]=='false') echo 'style="color:red"' ;
                            else echo 'style="color:red"' ;
                        ?>                              
                        >
                    <?php 
                        if(@$menu[1]=='true') echo 'Added to Quote List' ;
                        else if(@$menu[1]=='false') echo 'Add to Quote &raquo;' ;
                        else echo 'Add to Quote &raquo;' ;
                    ?>
                        </a></p>                
                </blockquote></em>            	
            </div>
            
            <div class="col-lg-3 col-md-4 col-sm-6">                
                <em><blockquote id="finderDeco_menu">
				<img class=" img-rounded img-responsive center-block" src="images/menu/menu2.jpg" alt="" style="width: 15em; height: 13em;">
                <h2><?php echo $item[2]; ?></h2>                
                		A French sweet meringue-based confection made with egg white, almond and sugar, filled with ganache, buttercream or jam filling sandwiched.
                	<p><a class="btn btn-default btn-group-justified" role="button" onClick="addtoQuote(this, 2)"
                        <?php 
                            if(@$menu[2]=='true') echo 'style="color:blue"' ;
                            else if(@$menu[2]=='false') echo 'style="color:red"' ;
                            else echo 'style="color:red"' ;
                        ?>   
                              >
                    <?php 
                        if(@$menu[2]=='false') echo 'Add to Quote &raquo;' ;
                        else if(@$menu[2]=='true') echo 'Added to Quote List' ;
                        else echo 'Add to Quote &raquo;' ;
                    ?>
                        </a></p>                
                </blockquote></em>            	
            </div>
            
            <div class="clearfix visible-md-block"></div>
            <div class="col-lg-3 col-md-4 col-sm-6">                
                <em><blockquote id="finderDeco_menu">
				<img class=" img-rounded img-responsive center-block" src="images/menu/menu3.jpg" alt="" style="width: 15em; height: 13em;">
                <h2><?php echo $item[3]; ?></h2>                
                				A pudding with a hard caramel top. The custard is usually vanilla-flavored but can be served in other flavors such as lavendar, green tea or Grand Marnier. 
                	<p><a class="btn btn-default btn-group-justified" role="button" onClick="addtoQuote(this, 3)"
                        <?php 
                            if(@$menu[3]=='true') echo 'style="color:blue"' ;
                            else if(@$menu[3]=='false') echo 'style="color:red"' ;
                            else echo 'style="color:red"' ;
                        ?>   
                              >
                    <?php 
                        if(@$menu[3]=='false') echo 'Add to Quote &raquo;' ;
                        else if(@$menu[3]=='true') echo 'Added to Quote List' ;
                        else echo 'Add to Quote &raquo;' ;
                    ?>
                        </a></p>                
                </blockquote></em>            	
            </div>
                                                                       

            <div class="col-lg-3 col-md-4 col-sm-6">                
                <em><blockquote id="finderDeco_menu">
				<img class=" img-rounded img-responsive center-block" src="images/menu/menu4.jpg" alt="" style="width: 15em; height: 13em;">
                <h2><?php echo $item[4]; ?></h2>                
                		A small, soft, log-shaped pastry filled with cream and typically topped with chocolate icing.
                	<p><a class="btn btn-default btn-group-justified"  role="button" onClick="addtoQuote(this, 4)"
                        <?php 
                            if(@$menu[4]=='true') echo 'style="color:blue"' ;
                            else if(@$menu[4]=='false') echo 'style="color:red"' ;
                            else echo 'style="color:red"' ;
                        ?>  
                              >
                    <?php 
                        if(@$menu[4]=='false') echo 'Add to Quote &raquo;' ;
                        else if(@$menu[4]=='true') echo 'Added to Quote List' ;
                        else echo 'Add to Quote &raquo;' ;
                    ?>
                        </a></p>                
                </blockquote></em>            	
            </div>
            
            <div class="col-lg-3 col-md-4 col-sm-6">                
                <em><blockquote id="finderDeco_menu">
				<img class=" img-rounded img-responsive center-block" src="images/menu/menu5.jpg" alt="" style="width: 15em; height: 13em;">
                <h2><?php echo $item[5]; ?></h2>                
                		 A French Butter Cookie or Breton Biscuit, is a classic French cookie originating in Normandy France.
                	<p><a class="btn btn-default btn-group-justified"  role="button" onClick="addtoQuote(this, 5)"
                        <?php 
                            if(@$menu[5]=='true') echo 'style="color:blue"' ;
                            else if(@$menu[5]=='false') echo 'style="color:red"' ;
                            else echo 'style="color:red"' ;
                        ?>  
                              >
                    <?php 
                        if(@$menu[5]=='false') echo 'Add to Quote &raquo;' ;
                        else if(@$menu[5]=='true') echo 'Added to Quote List' ;
                        else echo 'Add to Quote &raquo;' ;
                    ?>
                        </a></p>                
                </blockquote></em>            	
            </div>
            
            <div class="clearfix visible-md-block"></div>
            <div class="col-lg-3 col-md-4 col-sm-6">                
                <em><blockquote id="finderDeco_menu">
				<img class=" img-rounded img-responsive center-block" src="images/menu/menu6.jpg" alt="" style="width: 15em; height: 13em;">
                <h2><?php echo $item[6]; ?></h2>                
                		Choose from our best cupcake selection: Red Velvet, Carrot, Chocolate, Blueberry, Vanilla, &amp; Oreo Chocolate!
                	<p><a class="btn btn-default btn-group-justified"  role="button" onClick="addtoQuote(this, 6)"
                        <?php 
                            if(@$menu[6]=='true') echo 'style="color:blue"' ;
                            else if(@$menu[6]=='false') echo 'style="color:red"' ;
                            else echo 'style="color:red"' ;
                        ?>                                
                              >
                    <?php 
                        if(@$menu[6]=='false') echo 'Add to Quote &raquo;' ;
                        else if(@$menu[6]=='true') echo 'Added to Quote List' ;
                        else echo 'Add to Quote &raquo;' ;
                    ?>
                        </a></p>                
                </blockquote></em>            	
            </div>
            
            <div class="col-lg-3 col-md-4 col-sm-6">                
                <em><blockquote id="finderDeco_menu">
				<img class=" img-rounded img-responsive center-block" src="images/menu/menu7.jpg" alt="" style="width: 15em; height: 13em;">
                <h2><?php echo $item[7]; ?></h2>                
                		A small round piece of cake coated with icing or chocolate and fixed on the end of a stick so as to resemble a lollipop.
                	<p><a class="btn btn-default btn-group-justified"  role="button" onClick="addtoQuote(this, 7)"
                        <?php 
                            if(@$menu[7]=='true') echo 'style="color:blue"' ;
                            else if(@$menu[7]=='false') echo 'style="color:red"' ;
                            else echo 'style="color:red"' ;
                        ?>  
                              >
                    <?php 
                        if(@$menu[7]=='false') echo 'Add to Quote &raquo;' ;
                        else if(@$menu[7]=='true') echo 'Added to Quote List' ;
                        else echo 'Add to Quote &raquo;' ;
                    ?>
                        </a></p>                
                </blockquote></em>            	
            </div>
                                                                       
        </div> <!-- end of second row-->        
	</div>
</div>

<!-- Footer (sticky maybe..)-->
<div class="footer navbar-fixed-bottom">
    <div class="container">

    <!-- modal button -->
    <button  class="btn btn-primary btn-lg" name="request_send" data-toggle="modal" data-target="#sendQuote" 
             id="request_footer" onclick="sendQuoteList()">Request Selected Item(s)
    <span class="badge" id="nitem"><?php echo $counter ;?></span>
    </button>
    
    <!-- Modal -->
    <div class="modal fade" id="sendQuote" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Your Quote Summary</h4>
          </div>
          <div class="modal-body" >
              <!-- Read cookies, and bring data! -->
              
              <p id="modal_body_items"></p>
              
              <?php
//              $quoteResult = "";
//                for($i = 0 ; $i< count($menu)+1; $i++){
//                    if(@$menu[$i]=='true'){
//                        $quoteResult .= $item[$i];
//                        $quoteResult .= "<br>";
//                    }
//                }              
//                echo "<h1>You have selected:</h1>"
//                .$quoteResult
//                ."... "       
//                ;
              ?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <form action="index.html" id="" class="modal_submitbutton_inlineblock">
            <button type="submit" class="btn btn-primary" >Send Request</button>
            </form>
          </div>
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


<!-- Modal for LOGIN BUTTON  -->
<div class="modal fade" id="login_form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Please Log In for more service options!</h4>
      </div>
      <div class="modal-body">
       	<form>
          <div class="form-group">
            <label for="inputEmail">Email address</label>
            <input required type="email" class="form-control" id="inputEmail" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="inputPassword">Password</label>
            <input required type="password" class="form-control" id="inputPassword" placeholder="Enter Password">
          </div>        
          <div class="checkbox">
            <label>
              <input type="checkbox">Receive newsletters email
            </label>
          </div>
          <button type="submit" class="btn btn-primary btn-group-justified">Log In</button>
        </form>
      </div>
      <div class="modal-footer">
      <p>If you are a new customer, please click 'Register' to register first.</p>
        <button type="button" class="btn btn-default btn-group-justified" data-dismiss="modal" data-toggle="modal" data-target="#register">Register</button>
      
        <!-- <button type="button" class="btn btn-primary">Log In</button> -->
      </div>
    </div>
  </div>
</div>
<!-- end of login attempt -->

<!-- Modal for register BUTTON  -->
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Welcome! Please sign up!</h4>
      </div>
      <div class="modal-body">
       	<form>
        
          <div class="form-group">
            <label for="fname">First Name</label>
            <input required type="text" name="fname" class="form-control" id="fname" placeholder="Jane">
          </div>
            <div class="form-group">
            <label for="lname">Last Name</label>
            <input required type="text" name="lname"  class="form-control" id="lname" placeholder="Doe">
          </div>        
          <div class="form-group">
            <label for="inputEmail">Email address</label>
            <input required type="email" class="form-control" id="inputEmail" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="inputPassword1">Password</label>
            <input type="password" class="form-control" id="inputPassword1" placeholder="Password">
          </div>       
          <div class="form-group">
            <label for="inputPassword2">Password Confirmation</label>
            <input type="password" class="form-control" id="inputPassword2" placeholder="Password Confirmation">
          </div>             
          <div class="checkbox">
            <label>
              <input type="checkbox" required>By checking this box I agree to the terms and conditions. 
            </label>
          </div>
          <button type="submit" class="btn btn-primary btn-group-justified">Register</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-group-justified" data-dismiss="modal">Cancel</button>
        
      </div>
    </div>
  </div>
</div>
<!-- end of register attempt -->
	

<script src="js/jquery-1.11.0.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/responsive.js"></script>
<script src="js/menu.js"></script>
</body>
</html>
