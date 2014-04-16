dataslide = 1;

$(function() {
    var pull        = $('#pull');
        menu        = $('nav ul');
        menuHeight  = menu.height();
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
	$(this).attr('id', 'current');;
});

//for scroll

$(document).ready(function() {
   $('#nav').localScroll({duration:800});

   $(window).stellar();

    var slide = $('.slide');

    slide.waypoint(function (event, direction) {

        var newTemp = dataslide;

        dataslide = $(this).attr('data-slide');

        console.log("heree" + dataslide + " direction " + direction);


        if (direction === 'down' && dataslide!=1) {
            console.log(" downnn ");
            $('#nav ul li[data-slide="' + dataslide + '"]').attr('id', 'current').prev().removeAttr('id', 'current');
        }
        else if(direction === 'up' && dataslide!=1) {
            console.log(" upppp ");
            $('#nav ul li[data-slide="' + dataslide + '"]').attr('id', 'current').next().removeAttr('id', 'current');
        }
        else if(dataslide == 1) {
            dataslide = newTemp;
        }


    });

    $(window).scroll(function () {
        if ($(window).scrollTop() === 0) {          
            $('#nav ul li[data-slide="1"]').attr('id', 'current');
            $('#nav ul li[data-slide="2"]').removeAttr('id', 'current');
        }

    });



   
});


