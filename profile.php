<?php include "templates/head.php"; ?>

<body>
  <?php include "templates/header.php"; ?>

  <div class="common-page-content-wrapper">
    <div class="container">
      <?php include "templates/subHeader.php"; ?>
      <div class="profile-page__wrapper">
        <h4 class="profile-page__title">Profile</h4>
        <div class="profile-page__header-block">
          <div class="profile-page__user-info-detail">
            <div class="avatar-user-wrapper">
              <img src="./images/avatar-1.jpeg" class="avatar-image" alt="">
            </div>
            <div class="profile-page__user-detail">
              <h3 class="user-detail__username">Nguyen Van A</h3>
              <div class="user-detail__line">
                <span class="user-detail__email">nguyenvana@gmail.com</span>
                <a href="#" target="" class="user-detail__secondary-link">Change email</a>
                <a href="#" target="" class="user-detail__secondary-link">Verify email</a>
              </div>
              <div class="user-detail__line">
                <span class="user-detail__label">Expiration Date: </span>
                <span class="user-detail__text">2045-12-20 02:02:19</span>
              </div>
              <div class="user-detail__line">
                <a href="#" target="" class="user-detail__primary-link">Change password</a>
              </div>
            </div>
          </div>
          <button class="profile-page__btn-logout">Log out</button>
        </div>
        <div class="profile-page__transaction-wrapper">
          <div class="profile-page__transaction-content">
            <h4 class="transaction__title">Transaction history</h4>
            <div class="transaction__list">
              <a class="transaction__row">
                <div class="transaction__column column-20">01.11.07.01</div>
                <div class="transaction__column column-30">US$60.00 - 1 year</div>
                <div class="transaction__column column-40">Paddle</div>
                <div class="transaction__column column-10">
                  <button class="transaction__btn-view">View</button>
                </div>
              </a>
              <a class="transaction__row">
                <div class="transaction__column column-20">20.10.07.01</div>
                <div class="transaction__column column-30">US$60.00 - 12 months</div>
                <div class="transaction__column column-40">Card</div>
                <div class="transaction__column column-10">
                  <button class="transaction__btn-view">View</button>
                </div>
              </a>
              <a class="transaction__row">
                <div class="transaction__column column-20">20.10.07.01</div>
                <div class="transaction__column column-30">US$90.00 - 1 month</div>
                <div class="transaction__column column-40">Card</div>
                <div class="transaction__column column-10">
                  <button class="transaction__btn-view">View</button>
                </div>
              </a>
              <a class="transaction__row">
                <div class="transaction__column column-20">20.10.07.01</div>
                <div class="transaction__column column-30">US$100.00 - 12 months</div>
                <div class="transaction__column column-40">Card</div>
                <div class="transaction__column column-10">
                  <button class="transaction__btn-view">View</button>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include "templates/footer.php"; ?>
    <script>
    $(function() {
      // PC
      $(".list-slider-image").slick({
        speed: 600,
        autoplaySpeed: 4000,
        autoplay: true,
        infinite: true,
        swipe: true,
        fade: false,
        dots: false,
        arrows: false,
        slidesToShow: 1,
        // variableWidth: true,
        adaptiveHeight: true,
        slidesToScroll: 1,
      });
    });
    </script>
    <script>
    $(".common-collapse-content").click(function() {
      $(this).toggleClass("masked open");
    });
    </script>
</body>

</html>