// JavaScript Document
$(document).ready(function () {
	
	//navbar-iconbar amination effect	
	$(".navbar-toggle").on("click", function () {
		$(this).toggleClass("active");
	});


	//navbar show/hide upon scoll up or down
	var didScroll;
	var prevScroll = $(window).scrollTop();
	var curScroll;
	// on scroll, let the interval function know the user has scrolled
	$(window).scroll(function(event){
	  didScroll = true;
	  curScroll = $(window).scrollTop();
	});
	
	// run hasScrolled() and reset didScroll status
	setInterval(function() {
	  if (didScroll) {
		hasScrolled();
		didScroll = false;
		
	  }
	}, 250);
	
	function hasScrolled() {
		//alert("prev:"+prevScroll + " cur:"+curScroll);
		if(prevScroll > curScroll){
			//$('navbar').show();
			//alert("1");
			
			$('.jumbotron.navi').removeClass('hide');
		}else if (prevScroll < curScroll){
			//$('navbar').hide();
			//alert("2");
			
			$('.jumbotron.navi').addClass('hide');
		}
		prevScroll = $(window).scrollTop();
	}






});