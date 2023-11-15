$(function () {
  /* -----------------------------------------------------------
		Header fixed
	----------------------------------------------------------- */
  $(window).on("scroll", function () {
    if ($(window).scrollTop() > 0) {
      $("body")
        .addClass("fixed-header")
        .css("padding-top", $(".main-header").outerHeight());
    } else {
      $("body").removeClass("fixed-header").css("padding-top", "");
    }
  });
});
//handle show popup
// function - Hide popup & body scroll off
const hidePopup = () => {
  $(".popup").removeClass("popup--show");
};
// Hide popup on click close button
$(".popup__close").on("click", hidePopup);

// Hide popup on click outside of popup
$(".popup").on("click", function (event) {
  if (event.target.classList.contains("popup")) {
    hidePopup();
  }
});

$(".btn-sign-up").on("click", function () {
  $(".popup-sign-in-content").hide();
  $(".popup-sign-up-content").show();
  $(".popup").addClass("popup--show");
});

$(".btn-login").on("click", function () {
  $(".popup-sign-in-content").show();
  $(".popup-sign-up-content").hide();
  $(".popup").addClass("popup--show");
});
