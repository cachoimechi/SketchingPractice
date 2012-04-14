$(document).ready(function () {
	"use strict";

	//Tour Nav
	$("#tour").click(function () {
		$("#timer_slide").show();
		$("#tour_bar_2").parent().show();
		$("body,html").animate({
			scrollTop: ($("#timer_slide").offset().top) - 100
		}, 1000);
		event.preventDefault();
		return false;
	});

	//Register Nav
	$("#register").click(function (event) {
		event.preventDefault();
		$("#drop_register_form").show();
	});

	var mouse_is_inside_register,
		mouse_is_inside_login;

	$('#drop_register_form').hover(function () {
        mouse_is_inside_register = true;
    }, function () {
        mouse_is_inside_register = false;
    });

    $("html").mouseup(function () {
        if (!mouse_is_inside_register) {
			$('#drop_register_form').hide();
        }
    });

    //Login Nav
	$("#login").click(function (event) {
		event.preventDefault();
		$("#drop_login_form").show();
	});

	$('#drop_login_form').hover(function () {
        mouse_is_inside_login = true;
    }, function () {
        mouse_is_inside_login = false;
    });

    $("html").mouseup(function () {
        if (!mouse_is_inside_login) {
			$('#drop_login_form').hide();
        }
    });

	//Tour Bar
	$("#tour_bar_1").click(function () {
		$("#timer_slide").show();
		$("#tour_bar_2").parent().show();
		$("body,html").animate({
			scrollTop: ($("#timer_slide").offset().top) - 100
		}, 1000);
		event.preventDefault();
		return false;
	});

	$("#tour_bar_2").click(function () {
		$("#community_slide").show();
		$("#tour_bar_3").parent().show();
		$("body,html").animate({
			scrollTop: ($("#community_slide").offset().top) - 100
		}, 1000);
		event.preventDefault();
		return false;
	});

	$("#tour_bar_3").click(function () {
		$("#content_slide").show();
		$("#tour_bar_4").parent().show();
		$("body,html").animate({
			scrollTop: ($("#content_slide").offset().top) - 100
		}, 1000);
		event.preventDefault();
		return false;
	});

	$("#tour_bar_4").click(function () {
		$("#register_slide").show();
		$("#tour_bar_5").parent().show();
		$("body,html").animate({
			scrollTop: ($("#register_slide").offset().top) - 100
		}, 1000);
		event.preventDefault();
		return false;
	});

	$("#tour_bar_5").click(function (event) {
		$('body,html').animate({
			scrollTop: 0
		}, 1000);
		event.preventDefault();
		return false;
	});

});