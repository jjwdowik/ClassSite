$(function() {
	var pull 		= $('#pull');
		menu 		= $('nav ul');
		menuHeight	= menu.height();
        isPulled = 0;

	$(pull).on('click', function(e) {
		e.preventDefault();
		menu.slideToggle();
        isPulled = 1;
	});

    $('nav ul li').on('click', function(e){
        if(isPulled == 1){
            menu.slideToggle();
            isPulled = 0;
        }
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
	$(this).attr('id', 'current');
});

//for scroll

$(document).ready(function() {
  $('#nav').localScroll({duration:800});

  var identifier = window.location.pathname;

  var myString = identifier.substr(identifier.lastIndexOf("/") + 1);

  switch(myString)
        {
            case'index.php':
            $('#nav ul li').removeAttr('id', 'current');
            $('.index').attr('id', 'current');
            break;

            case'skills.php':
            //edit proper tag's css
            $('#nav ul li').removeAttr('id', 'current');
            $('.skills').attr('id', 'current');
            break;

            case'projects.php':
            $('#nav ul li').removeAttr('id', 'current');
            $('.projects').attr('id', 'current');
            break;

            case'experiences.php':
            $('#nav ul li').removeAttr('id', 'current');
            $('.experiences').attr('id', 'current');
            break;

            case'ideas.php':
            $('#nav ul li').removeAttr('id', 'current');
            $('.ideas').attr('id', 'current');
            break;

        }



});





