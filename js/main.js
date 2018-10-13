$(document).ready(function(){
    $('.ir-arriba').click(function(){
        $('body, html').animate({
            scrollTop: '0'}, 300);
    });



    $(window).scroll(function(){
        var wScroll=$(this).scrollTop();
        if( wScroll > $('.cover').offset().top + 400){
            $('.top-bar').addClass('top-bar-color');
        } else {
            $('.top-bar').removeClass('top-bar-color');
        }
    });

 


$(document).ready(main);
var contador=1;

function main(){
    $('.icon-menu').click(function(){
        $(this).toggleClass('open');
        if (contador==1) {               
            $('.menu').css('margin-top', '0');
            $('.logo').css('left','0');
            $('.top-bar').css('background','#20222b');
            $('.main-layer').css('display','block');
            contador=0;
        }else{
            $('.menu').css('margin-top', '-100%');  
            $('.logo').css('left','-100%');          
            $('.top-bar').css('background','rgba(0,0,0,0)');
            $('.main-layer').css('display','none');
            contador=1; 
        }
    });
 



$(function() {

    // Get the form.
    var form = $('#ajax-contact');

    // Get the messages div.
    var formMessages = $('#form-messages');

    // Set up an event listener for the contact form.
    $(form).submit(function(e) {
        // Stop the browser from submitting the form.
        e.preventDefault();

        // Serialize the form data.
        var formData = $(form).serialize();

        // Submit the form using AJAX.
        $.ajax({
            type: 'POST',
            url: $(form).attr('action'),
            data: formData
        })
        .done(function(response) {
            // Make sure that the formMessages div has the 'success' class.
            $(formMessages).removeClass('error');
            $(formMessages).addClass('success');


            // Set the message text.
            $(formMessages).text(response).slideDown();
            $(formMessages).delay(5000).slideUp();

            // Clear the form.
            $('#name, #email, #message').val('');

        })
        .fail(function(data) {
            // Make sure that the formMessages div has the 'error' class.
            $(formMessages).removeClass('success');
            $(formMessages).addClass('error').slideDown();
            $(formMessages).delay(5000).slideUp();


            // Set the message text.
            if (data.responseText !== '') {
                $(formMessages).text(data.responseText);
            } else {
                $(formMessages).text('No internet connection');
            }
        });

    });

});





}


});