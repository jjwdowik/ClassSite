$(function() {
	var pull 		= $('#pull');
		menu 		= $('nav ul');
		menuHeight	= menu.height();

	$(pull).on('click', function(e) {
		e.preventDefault();
		menu.slideToggle();
	});

	$(window).resize(function(){
		var w = $(window).width();
		if(w > 320 && menu.is(':hidden')) {
			menu.removeAttr('style');
		}
	});
});

$('#nav ul li').click(function(){
	$('#nav ul li').removeAttr('id', 'current');
	$(this).attr('id', 'current');;
});

//for scroll

$(document).ready(function() {
   $('#nav').localScroll({duration:800});
});


