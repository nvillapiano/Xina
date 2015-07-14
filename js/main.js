<<<<<<< HEAD
// Smooth Scrolling
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 500);
        return false;
      }
    }
  });
});

// Toggle Form
$(".book").click(function(){
    $(".event-form").addClass('slide');
});

var hash = false; 
checkHash();

function checkHash(){ 
	if(window.location.hash != hash) { 
		hash = window.location.hash; 
		processHash(hash); 
	}
	t=setTimeout("checkHash()", 400); 
}

function processHash(hash){
    $(".event-form").addClass('slide');
    $('html,body').animate({
   		scrollTop: $("#event-form").offset().top
	});
}
=======
// Smooth Scrolling
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 500);
        return false;
      }
    }
  });
});

// Toggle Form
$(".book").click(function(){
    $(".event-form").addClass('slide');
});

var hash = false; 
checkHash();

function checkHash(){ 
	if(window.location.hash != hash) { 
		hash = window.location.hash; 
		processHash(hash); 
	}
	t=setTimeout("checkHash()", 400); 
}

function processHash(hash){
    $(".event-form").addClass('slide');
    $('html,body').animate({
   		scrollTop: $("#event-form").offset().top
	});
}
>>>>>>> origin/master
