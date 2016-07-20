
/***********************************************************************************
  
HTML Preloader
  
************************************************************************************/

$(window).load(function() {
    $("#loading").delay(2000).fadeOut();
});

/***********************************************************************************
  
Video Functions
  
************************************************************************************/

$(document).ready(function() {

	var fadeElements = $('header, footer, .intro, .poster');

	// Play animations.
    function video_start(){
        fadeElements.removeClass('fade-in').addClass('animated fade-out');

        $('.pause').removeClass('paused').addClass('playing');
    }
    
    // Stop animations.
    function video_stop(){
        fadeElements.removeClass('fade-out').addClass('animated fade-in');

        $('.pause').removeClass('playing').addClass('paused');
    }

    // Play the video.
    $('.play').click(function() {
        $('video').trigger('play');
        video_start();

        // Update the play count.
        $.ajax({
            type: 'POST',
            url: 'assets/helpers/plays.php'
        });

        setTimeout(function(){  
            $('.plays h3 strong').load('index.php .plays h3 strong');
        }, 500);

        // Return false.
        return false;
    });
    
    // Pause the video.
    $('.pause').click(function() {
        $('video').trigger('pause');
        video_stop();

        // Return false.
        return false;
    });
    
    // Video end.
    $('video').on('ended',function(){
        video_stop();
        
        setTimeout(function(){  
            $('video')[0].load();
        }, 1000);
    });
});

/***********************************************************************************
  
Panel Toggles
  
************************************************************************************/

$(document).ready(function() {
    $('.open').click(function(){
        var myelement = $(this).attr('href');
        
        $('.panel').removeClass('opened').addClass('closed');
        
        $(myelement).removeClass('fade-out closed');
        $(myelement).addClass('opened animated fast fade-in');
        
        return false;
    });
    
    $('.close').click(function(){
        var myelement = $(this).attr('href');
        
        $(myelement).removeClass('fade-in opened');
        $(myelement).addClass('animated fast fade-out');

        setTimeout(function(){  
            $(myelement).addClass('closed');
        }, 500);
        
        return false;
    });
});

/***********************************************************************************
  
Love
  
************************************************************************************/

$(document).ready(function(){
    $('.love').click(function(){
        if (!sessionStorage.alreadyClicked) {
            $.ajax({
                type: 'POST',
                url: 'assets/helpers/loves.php'
            });

            $('.loved').addClass('animated fast fade-out');

            setTimeout(function(){  
                $('.loves').load('index.php .loves');
                $('.loved').removeClass('fade-out').addClass('fade-in');
                $('.love').addClass('done');
            }, 500);
        }
        
        sessionStorage.alreadyClicked = "true";

        return false;
    });
});

/***********************************************************************************
  
Mailchimp Form Processing
  
************************************************************************************/

$(function() {

    // Get the form.
    var form = $('#mailchimp');

    // Get the messages div.
    var formLoading = $('.response');
    var formMessages = $('.status');

    // Set up an event listener for the subscribe form.
    $(form).submit(function(e) {

        // Stop the browser from submitting the form.
        e.preventDefault();
        
        // Show the loading div.
        $(formLoading).fadeIn(100);

        // Serialize the form data.
        var formData = $(form).serialize();

        // Submit the form using AJAX.
        $.ajax({
            type: 'POST',
            url: $(form).attr('action'),
            data: formData
        })

        .done(function() {

            // Make sure that the formMessages div has the 'success' class.
            $(formMessages).removeClass('error');
            $(formMessages).addClass('success');
            $(formMessages).fadeIn(100);
            $(formMessages).delay(1000).fadeOut(500);
            $(formLoading).delay(1000).fadeOut(500);

            // Clear the form.
            $('#email').val('');
        })

        .fail(function() {

            // Make sure that the formMessages div has the 'error' class.
            $(formMessages).removeClass('success');
            $(formMessages).addClass('error');
            $(formMessages).fadeIn(100);
            $(formMessages).delay(1000).fadeOut(500);
            $(formLoading).delay(1000).fadeOut(500);
            
            // Clear the form.
            $('#email').val('');
        });
    });
});
