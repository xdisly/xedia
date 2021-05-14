'use strict';

(function ($) {

    /*------------------
        Preloader
    --------------------*/
    $(window).on('load', function () {
        $(".loader").fadeOut();
        $("#preloder").delay(200).fadeOut("slow");
    });

    /*------------------
        Background Set
    --------------------*/
    $('.set-bg').each(function () {
        var bg = $(this).data('setbg');
        $(this).css('background-image', 'url(' + bg + ')');
    });

    /*------------------
        Canvas Menu
    --------------------*/
    $(".canvas__open").on('click', function () {
        $(".offcanvas__menu__wrapper").addClass("show__offcanvas__menu");
        $(".offcanvas__menu__overlay").addClass("active");
    });

    $(".canvas__close, .offcanvas__menu__overlay").on('click', function () {
        $(".offcanvas__menu__wrapper").removeClass("show__offcanvas__menu");
        $(".offcanvas__menu__overlay").removeClass("active");
    });

    /*------------------
        Accordin Active
    --------------------*/
    $('.collapse').on('shown.bs.collapse', function () {
        $(this).prev().addClass('active');
    });

    $('.collapse').on('hidden.bs.collapse', function () {
        $(this).prev().removeClass('active');
    });

    /*------------------
		Navigation
	--------------------*/
    $(".mobile-menu").slicknav({
        prependTo: '#mobile-menu-wrap',
        allowParentLinks: true
    });
	    
	/*------------------
        Achieve Counter
    --------------------*/
    $('.achieve-counter').each(function () {
        $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
        }, {
            duration: 4000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });

    /*------------------
        Radio btn
    --------------------*/
    $(".pricing__swipe-btn label").on('click', function (e) {
        $(".pricing__swipe-btn label").removeClass("active");
        $(this).addClass("active");

        if(e.target.htmlFor == 'month') {
            $(".yearly__plans").removeClass('active');
            $(".monthly__plans").addClass('active');
        } else if (e.target.htmlFor == 'yearly') {
            $(".monthly__plans").removeClass('active');
            $(".yearly__plans").addClass('active');
        }     
    });
	
	/*------------------
        Radio btn Login
    --------------------*/
    $(".login_form-btn label").on('click', function (e) {
        $(".login_form-btn label").removeClass("active");
        $(this).addClass("active");

        if(e.target.htmlFor == 'admin') {
            $(".partner_login").removeClass('active');
            $(".admin_login").addClass('active');
        } else if (e.target.htmlFor == 'partner') {
            $(".admin_login").removeClass('active');
            $(".partner_login").addClass('active');
        }     
    });

})(jQuery);