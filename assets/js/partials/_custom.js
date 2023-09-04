//jQuery no-conflict mode
(function ($) {
  //SCROLL TO TOP
  $(window).scroll(function () {
    if ($(this).scrollTop() >= 250) {
      $("#back-up").fadeIn(200); // Fade in the arrow
    } else {
      $("#back-up").fadeOut(200); // Else fade out the arrow
    }
  });
  $("#back-up").click(function () {
    // When arrow is clicked
    $("body,html").animate(
      {
        scrollTop: 0, // Scroll to top of body
      },
      0
    );
  });
  // Preloader
  $(window).on("load", function () {
    setTimeout(function () {
      $("#preLoader").fadeOut("slow", function () {});
    }, 0);
  });
})(jQuery);
