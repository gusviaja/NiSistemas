$(document).ready(function(){
  $(".slideInicial").each(function(){

    $(this).addClass("slideVertical");
  });
  $(this).addClass("slideVertical");

  // Add smooth scrolling to all links in navbar + footer link
  $(".scrollar,.vamosDevagar").on('click', function(event) {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){
   
      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
    });
  });
  
  // Slide in elements on scroll
  $(window).scroll(function() {
    $(".slideH").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();

      

        if (pos < winTop + 600) {
          $(this).addClass("slideHorizontal");
        }
    });
    $(".slideV").each(function(){
      var pos = $(this).offset().top;
      var winTop = $(window).scrollTop();

      
        if (pos < winTop + 600) {
          $(this).addClass("slideVertical");
        }
    });

    

    if ($(this).scrollTop() > $('header').outerHeight() + 30) {
            
            $('.j_back').fadeIn(500);}
    else{
    	$('.j_back').fadeOut(500);
    }        
  });

//BACK TOPO
    $('.j_back').click(function () {
        $('html, body').animate({scrollTop: 0}, 1000);
    });
})