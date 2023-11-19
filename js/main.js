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

$(".btn-register-membership").on("click", function () {
  $(".popup-sign-in-content").hide();
  $(".popup-sign-up-content").show();
	$(".popup-forgot-password").hide()
  $(".popup").addClass("popup--show");
});

$(".btn-login").on("click", function () {
  $(".popup-sign-in-content").show();
  $(".popup-sign-up-content").hide();
	$(".popup-forgot-password").hide();
  $(".popup").addClass("popup--show");
});


$(".btn-forgot-password").on('click', function(event) {
event.preventDefault();
 $(".popup-sign-in-content").hide();
 $(".popup-sign-up-content").hide();
 $(".popup-forgot-password").show();
 $(".popup").addClass("popup--show");
})



// =================== HANDLE SELECT LEAGUE RANKING ===================

// hidden list league ranking when init
$(".news-detail-list-league-ranking-dropdown").hide();

// toggle show list league ranking when click.
$("#btn-league-ranking-dropdown").on("click", function () {
  $(".news-detail-list-league-ranking-dropdown").toggle();
});

// handle click league for mobile
$(".news-detail-league-ranking-item").on("click", function () {
  const imgElement = $(this).children("img");
  const spanElement = $(this).children("span");
  if (imgElement.length && spanElement.length) {
    const src = imgElement.attr("src");
    const leagueName = spanElement.text();
    $("#league-ranking-image").attr("src", src);
    $("#league-ranking-name").text(leagueName);
  }
  $(".news-detail-list-league-ranking-dropdown").hide();
  // code something here .....
});
// =================== HANDLE SELECT LEAGUE RANKING ===================
