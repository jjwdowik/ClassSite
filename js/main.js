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


        if (direction === 'down' && dataslide!=1) {
            $('#nav ul li[data-slide="' + dataslide + '"]').attr('id', 'current').prev().removeAttr('id', 'current');
        }
        else if(direction === 'up' && dataslide!=1) {
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


    //check email function
    function checkEmail() {
        if($('#email').val() != $('#verifyEmail').val()) {
            $('#errorForm').fadeIn( 2000, function () {
                $('#errorForm').delay( 4000 ).fadeOut("slow");
            }); 
            return false;
        }
        else{
            return true;
        }
    };


    $("#contactForm").submit(function() {

        if(checkEmail()) {
            var url = "processForm.php"; // the script where you handle the form input.
            var data = {};

            data['name'] = $('#name').val();
            data['email'] = $('#email').val();
            data['verifyEmail'] = $('#verifyEmail').val(); 
            data['message'] = $('#message').val(); 

            $.ajax({
                   type: "POST",
                   url: url,
                   data: data, // serializes the form's elements.
                   success: function(data)
                   {
                       $('#contactForm').fadeOut("slow", function () {
                            $('#thankYou').fadeIn( 2000); 
                       });
                       
                   }
                 });

        }
        return false;
    });




    //form stuff







   
});


