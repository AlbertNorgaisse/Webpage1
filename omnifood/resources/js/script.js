/* global $ */

/* eslint-env jquery */

$(document).ready(function() { 
    /*must start of like this with dollar sign $ called selector code goes inside*/
    /*$('h1').click(function()  {/*remeber $().operator(function() {code actions}) order and first you have name of function then action you want to do using $(this).css then parenthesise
        $(this).css('background-color', '#ff0000')this is reffering to the h1 
    }) */
    
    /*this is for the sticky navigation also used waypoint plugin which is saved in js vender file */
    $('.js--section-features').waypoint(function(direction)/*detects if user is scrolling up or down */ {
        if (direction == 'down') {
            $('nav').addClass('sticky'); /*activates class to happen */
        } else {
            $('nav').removeClass('sticky'); /*removes class from happening */
        }
    },/*first function in brackets than comma next function*/ {
    offset: '60px;'/*occurs before the default time it will appear when scrolling down */
    });
    
/* var waypoints = $('#handler-first').waypoint(function(direction) {
    notify(this.element.id + ' hit 25% from top of window') 
    }, {
    offset: '25%'
    })
    */
    
    /* Scroll on bottom. also for this needed to create special classes for each button only for j-query */
    $('.js--scroll-to-plans').click(function () {
        $('html, body').animate({scrollTop: $('.js--section-plans').offset().top}, 1000);
        /*this whole line about allows for user to click the im hungry button and get to it
        in 1000millesconds being one second and.offset().top brings to the top also animate() and scroolTop: are key in this function */
    });
    
    $('.js--scroll-to-start').click(function () {
        $('html, body').animate({scrollTop: $('.js--section-features').offset().top}, 1000);/*key thing to remeber very important when doing scrolling make sure to next be in your main index.html or it will not scroll when clicking your buttons */
      });  
    
    
    /*Navigation scroll obtained  */
    // Select all links with hashes
    $('a[href*="#"]')
      // Remove links that don't actually link to anything
      .not('[href="#"]')
      .not('[href="#0"]')
      .click(function(event) {
        // On-page links
        if (
          location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
          && 
          location.hostname == this.hostname
        ) {
          // Figure out element to scroll to
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
          // Does a scroll target exist?
          if (target.length) {
            // Only prevent default if animation is actually gonna happen
            event.preventDefault();
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 1000, function() {
              // Callback after animation
              // Must change focus!
              var $target = $(target);
              $target.focus();
              if ($target.is(":focus")) { // Checking if the target was focused
                return false;
              } else {
                $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                $target.focus(); // Set focus again
              };
            });
          }
        }
      });
    
    /*animations on scroll */
    
    $('.js--wp-1').waypoint(function (direction) {
        $('.js--wp-1').addClass('animated fadeIn');/*adding the class puts the framework around it */
    }, {
        offset: '50%'
    });
    
    $('.js--wp-2').waypoint(function (direction) {
        $('.js--wp-2').addClass('animated fadeInUp');
    }, {
        offset: '50%'
    });
    
    $('.js--wp-3').waypoint(function (direction) {
        $('.js--wp-3').addClass('animated fadeIn');
    }, {
        offset: '50%'
    });
    
    $('.js--wp-4').waypoint(function (direction) {
        $('.js--wp-4').addClass('animated pulse');
    }, {
        offset: '50%'
    });
    
    /*  old Mobile nav 
    ---------------------------------------------------------------------------------------------
    $('.js--nav-icon').click(function () { /*remember all this happens when its clicked */
        var nav = $('.js--main-nav');
        /*first variable in the lecture 
        var icon = $('.js--nav-icon i');/*remeber icon is determined by the class so to change it
        just change the class 
        
        nav.slideToggle(200);/*slideToggle opens and closes a box also 200 is for millseconds */
        /*all it takes to create sliding effect 
        
        /*this switches the icons using if and else statements 
        if(icon.hasClass('ion-ios-menu')) {
            icon.addClass('ion-ios-close');
            icon.removeClass('ion-ios-menu');
        } else {
            icon.addClass('ion-ios-menu');
            icon.removeClass('ion-ios-close');
        }
        }) 
    -----------------------------------------------------------------------------------------------
*/ /*New navigation that allows for showcase of nav when max size still */
    $('.js--nav-icon, .js--main-nav a, .logo-black').click(function(element){
        var nav = $('.js--main-nav');
        var icon = $('.js--nav-icon i');

        //Gets the class name of the element that triggered the event
        var clicked = element.target.className;

        //Exists the function if the menu is closed AND the logo-black element (logo image) was clicked
        if (icon.hasClass('ion-ios-menu') && clicked == 'logo-black')
            return;

        //Opens and closes the menu
        if ($(window).width() < 768){
            nav.slideToggle(200);
        }

        //Changes icon states of the menu button
        if (icon.hasClass('ion-ios-menu')) {
            icon.addClass('ion-ios-close');
            icon.removeClass('ion-ios-menu');
        } else {
            icon.addClass('ion-ios-menu');
            icon.removeClass('ion-ios-close');
        }
    });


    $(window).resize(function(){
        var nav = $('.js--main-nav');
        var icon = $('.js--nav-icon i');

        if ($(window).width() > 767){
            nav.css("display", "block");
            icon.addClass('ion-ios-close');
            icon.removeClass('ion-ios-menu');
        } else {
            nav.css("display", "none");
            icon.addClass('ion-ios-menu');
            icon.removeClass('ion-ios-close');
        }

    });
});

/* Mobile nav */
