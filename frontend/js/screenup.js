$(document).ready(function(){

	$('.screenup').click(function(){
		$('body, html').animate({
			scrollTop: '0px'
		}, 300);
	});

	$(window).scroll(function(){
		if($(this).scrollTop() > 0){
			$('.screenup').slideDown(300);
		}
		else{
			$('.screenup').slideUp(300);
		}
	});

});