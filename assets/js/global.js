/*---------------------------------------->> Bxslider <<----------------------------------------*/
$(document).ready(function () {

    $('.slick-banner').slick({
        dots: true,
        arrows: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 8000,
        speed: 2000,
        fade: true,
        cssEase: 'linear'
    });
    $('.slick-work').slick({
        dots: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        draggable: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 5000,
        speed: 1000,
        horizontal: true,
        cssEase: 'linear'
//  touchMove: false
    });
    $('.slick-testimonial').slick({
        dots: true,
        arrows: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 5000,
        speed: 1000,
        fade: true,
//        horizontal: true,
        cssEase: 'linear'
    });
    $('.slick-partner').slick({
          dots: false,
        slidesToShow: 6,
        slidesToScroll: 1,
        arrows: true,
        draggable: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 5000,
        speed: 1000,
        horizontal: true,
        cssEase: 'linear'
    });



});


// Add slideDown animation to Bootstrap dropdown. 
$('.dropdown').on('show.bs.dropdown', function () {
    $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
});
// Add slideUp animation to Bootstrap dropdown when collapsing. 
$('.dropdown').on('hide.bs.dropdown', function () {
    $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
});

//-----------------------------Datepicker / Timepicker / Maps ----------------------------

$(".datepicker").datepicker({
    dateFormat: 'dd/mm/yy',
    minDate: 0
});
//
//$(".timepicker").timepicker();

$(".reserve-form").hide();
$(".one_way_trip_item").hide();
$(".round_trip_item").hide();
$(".hourly_trip_item").hide();

$('.journey-title ul li').click(function () {
    $(this).addClass('active').siblings().removeClass('active');
});

$('.one_way_trip').click(function () {
    $(".one_way_trip_item").slideToggle();
    $(".round_trip_item").slideUp();
    $(".hourly_trip_item").slideUp();
    $(".reserve-form").slideDown();
});

$('.round_trip').click(function () {

    $(".round_trip_item").slideToggle();
    $(".one_way_trip_item").slideUp();
    $(".hourly_trip_item").slideUp();
    $(".reserve-form").slideDown();
});
$('.hourly_trip').click(function () {
    $(".hourly_trip_item").slideToggle();
    $(".round_trip_item").slideUp();
    $(".one_way_trip_item").slideUp();
    $(".reserve-form").slideDown();
});