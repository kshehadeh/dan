
"use strict";
var dt = {};
dt.mainNavEasing = 'easeOutQuint';

$(function () {
    $("ul.home-carousel").simplecarousel({
        width:700,
        height:500,
        auto:4000,
        fade:400,
        pagination: true
    });


    $('.bwWrapper').BlackAndWhite({
        responsive: true,
        speed: 500
    });

    $('.image-container a').fancybox({
        'nextEffect':'fade',
        'prevEffect':'fade',
        'closeEffect':'fade',
        'overlayShow':true
    });

    preparePrimaryNav();
    prepareSubNavs();

    $('#submitbground').click(function(){
        var me = this;
        // validate fields first
        var name = $('#formcontent-name').val();
        var email = $('#formcontent-email').val();
        var comments = $('#formcontent-comments').val();

        if (name == "") {
            alert("Please enter your name");
            return;
        }

        if (!validateEmail(email)) {
            alert("Please enter a valid email address");
            return;
        }

        if (comments == "") {
            alert("Please enter a comment");
            return;
        }

        $(this).attr('disabled','disabled').text("Submitting...");
        $.post('contact.php',{
            'name':name,
            'email':email,
            'comments':comments
        },function(data) {
            $(me).removeAttr('disabled').text("Submit");
            if (data.success) {
                alert("Thanks!  I'll be in touch soon");
            }
            else {
                alert("There was a problem sending the email.");
            }
        },'json');
    })
});

function preparePrimaryNav() {

    // If the home nav marker is clicked then remove the nav marker
    $('#home-link').click(function(){
        $('#navmarker').fadeOut('slow');
        $('html, body').animate({
            scrollTop: 0
        }, 2000, dt.mainNavEasing);
    });

    $('#firstnav').find('a').click(function () {


        // Animate the navigation marker to the right place
        var $nav = $('#navmarker'),
            top = $(this).offset().top - $(document).scrollTop(),
            left = $(this).offset().left,
            id = $(this).attr('id').split('-')[0];

        $nav.data('navid',$(this).attr('id'));

        $nav.animate({
            'top': top + 'px',
            'left': (left - 5) + "px"
        }, 250);

        if (!$nav.is(':visible')) {
            $nav.fadeIn('slow');
        }

        // Scroll to the right section

        $('html, body').animate({
            scrollTop: $("#container-" + id).offset().top
        }, 2000, dt.mainNavEasing);

    });

    $(window).resize(function(){
        var $nav = $('#navmarker');
        var navid = $nav.data('navid');
        var newLeft = $('#'+navid).offset().left-5;
        $nav.css({'left':newLeft + "px"})
    })
}

/**
 * This will make it so that whenever a properly classed/id'd
 * subnav menu is interacted with it will behave in the correct
 * way highlighting the last selected item.
 */
function prepareSubNavs() {

    // For each "section" that has subnavs add click listeners
    //  that show the associated subsection and hide the others.
    $('.section').each(function () {
        var id = $(this).attr('id');
        $(this).find('.subnav-link').click(function(){

            var root = $(this).attr('id').split('-')[0];

            // Show the right subsection and hide the others.
            $('#' + id).find('.include-section').hide();
            $('#' + root + '-include').show();

            // Replace active with inactive in all subnav links
            //  in this section.
            $('.subnav-link')
                .removeClass('active-subnav')
                .addClass('inactive-subnav');

            // Update the newly active subnav link with the
            //  correct classes.
            $(this)
                .removeClass('inactive-subnav')
                .addClass('active-subnav');
        });
    });
}

/**
 * Ensures that the given string is a valid email address
 * @param {string} email The string to validate
 * @return {Boolean} Returns true if valid email
 */
function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}