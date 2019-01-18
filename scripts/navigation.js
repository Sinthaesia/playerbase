$('ul li').click(function() {
  $(this).siblings().removeClass('active');
  $(this).toggleClass('active');
});

var $hamburger = $(".hamburger");
  $hamburger.on("click", function(e) {
    $hamburger.toggleClass("is-active");
    $('nav').toggleClass('is__active');
});

var $active = $(".hamburger--emphatic.is__active");
  $active.on("click", function(e) {
    // $active.toggleClass("is__closed");
    $('nav').animate({right: "0%"}, 250);
});
