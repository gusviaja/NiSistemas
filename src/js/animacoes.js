$(function(){
	$( ".chamada" ).toggle(1000,function(){
		$(".artigoFormMini").fadeIn(1000,function(){
			$(".artigoFormMini").effect( "bounce", "6000" );
		});
		});	
	

	// $(".botaoWhatsapp").mouseenter(function(){

	// 	$(".botaoWhatsapp").stop().animate({right: '20px'});
	// 	$(".botaoWhatsapp>a").stop().animate({right: '20px'});
	// });

	// $(".botaoWhatsapp").mouseleave(function(){

	// 	$(".botaoWhatsapp>a").stop().animate({right: '-20px'});
	// 	$(".botaoWhatsapp").stop().animate({right: '-20px'});
		
	// });

	$(".sliphover").sliphover();

	$(".form-control").focus(function(){  
		var campoatual = $(this); 
		campoatual.removeAttr("placeholder")
	});
    

	// $( "#chamada" ).toggle(1000,function(){
	// 	$("#artigoFormMini").effect( "bounce", "6000" );
	// });


});