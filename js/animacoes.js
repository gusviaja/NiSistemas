$(function(){
	$(".botaoWhatsapp").mouseenter(function(){

		$(".botaoWhatsapp").stop().animate({right: '20px'});
		$(".botaoWhatsapp>a").stop().animate({right: '20px'});
	});

	$(".botaoWhatsapp").mouseleave(function(){

		$(".botaoWhatsapp>a").stop().animate({right: '-20px'});
		$(".botaoWhatsapp").stop().animate({right: '-20px'});
		
	});

	$(".sliphover").sliphover();
    


});