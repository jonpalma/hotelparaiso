$(window).scroll(function () {
    if ($(window).scrollTop() >= '160' && !$('.navbar').hasClass('navbar-fixed-top')) {
        $('.navbar').addClass('navbar-fixed-top');
    } else if ($(window).scrollTop() < '160' && $('.navbar').hasClass('navbar-fixed-top')) {
        $('.navbar').removeClass('navbar-fixed-top');
    }
});

$('.navbar-nav a').click(function() {
    $('.navbar-nav a').removeClass('active');
    $(this).addClass('active');
});

$('#myTabs a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
});