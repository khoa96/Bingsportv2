<?php include "templates/head.php"; ?>

<body>
  <?php include "templates/header.php"; ?>

  <div class="common-page-content-wrapper">
    <div class="container">

      <?php include "templates/subHeader.php"; ?>
      <div class="common-main-layout-wrapper">
        <div class="common-main-left-content-layout common-layout-block">
          <div class="header-title-block">
            <h3 class="txt-title">Football</h3>
          </div>
          <div class="list-league-wrapper">
            <ul class="common-list-league">
              <li class="active">
                <a href="#" class="common-league-item">
                  <img class="league-image-common" src="./images/league-1.png" alt="" />
                  <span class="league-name text-overflow-150">Premier League</span>
                </a>
              </li>
              <li>
                <a href="#" class="common-league-item">
                  <img class="league-image-common" src="./images/league-2.png" alt="" />
                  <span class="league-name text-overflow-150">Spain</span>
                </a>
              </li>
              <li>
                <a href="#" class="common-league-item">
                  <img class="league-image-common" src="./images/league-3.png" alt="" />
                  <span class="league-name text-overflow-150">Italia</span>
                </a>
              </li>

              <li>
                <a href="#" class="common-league-item">
                  <img class="league-image-common" src="./images/league-4.png" alt="" />
                  <span class="league-name text-overflow-150">France</span>
                </a>
              </li>

              <li>
                <a href="#" class="common-league-item">
                  <img class="league-image-common" src="./images/league-5.png" alt="" />
                  <span class="league-name text-overflow-150">Champions League</span>
                </a>
              </li>

              <li>
                <a href="#" class="common-league-item">
                  <img class="league-image-common" src="./images/league-6.png" alt="" />
                  <span class="league-name text-overflow-150">Germany</span>
                </a>
              </li>

              <li>
                <a href="#" class="common-league-item">
                  <img class="league-image-common" src="./images/league-7.png" alt="" />
                  <span class="league-name text-overflow-150">Europa League uropa League</span>
                </a>
              </li>
              <li>
                <a href="#" class="common-league-item">
                  <img class="league-image-common" src="./images/league-1.png" alt="" />
                  <span class="league-name text-overflow-150">Germany</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="common-main-right-content-layout">
          <div class="main-league-page-content__wrapper">
            <div class="main-league-page-content__category">
              <div class="common-list-category">
                <a href="#" target="">
                  <div class="category-item">
                    <span>Home</span>
                  </div>
                </a>
                <div class="arrow">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="13" viewBox="0 0 12 13" fill="none">
                    <path d="M4.5 3.5L7.5 6.5L4.5 9.5" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </div>
                <a href="#" target="">
                  <div class="category-item">
                    <span>Premier League</span>
                  </div>
                </a>
              </div>
            </div>

            <div class="main-league-page-content__header">
              <div class="main-league-page-content__header-left">
                <img src="./images/league-image-1.png" class="sport-league-image" alt="">
              </div>
              <div class="main-league-page-content__header-right">
                <span class="main-league-page-content__header-league-name">Premier League</span>
                <span class="main-league-page-content__header-description">Live stream and score</span>
                <span class="main-league-page-content__header-description">2022/2023</span>
              </div>
            </div>
            <div class="main-league-page-content__main-content">
              <div id="league-main-tabs">
                <ul class="common-tabs">
                  <li><a href="#tabs-1">Fixtures</a></li>
                  <li><a href="#tabs-2">Top Scorers</a></li>
                </ul>
                <div id="tabs-1">
                  <div class="main-league-page-content__feature-table">
                    <a class="feature-table-row" href="#" target="">
                      <div class="feature-table-row__left-column">
                        <span class="feature-table-row__time">19.05.22:00</span>
                      </div>
                      <div class="feature-table-row__right-column">
                        <div class="feature-table-row__list-club">
                          <div class="club-item first-club">
                            <span class="club-name">Arsenal Wolverhampton Wanderers Wolverhampton Wanderers</span>
                          </div>
                          <span class="score">-</span>
                          <div class="club-item">
                            <span class="club-name">Everton Wolverhampton Wanderers Wolverhampton Wanderers</span>
                          </div>
                        </div>
                        <div class="feature-table-row__watch">
                          <button class="btn-watch">Watch</button>
                        </div>
                      </div>
                    </a>
                    <a class="feature-table-row" href="#" target="">
                      <div class="feature-table-row__left-column">
                        <span class="feature-table-row__time">19.05.22:00</span>
                      </div>
                      <div class="feature-table-row__right-column">
                        <div class="feature-table-row__list-club">
                          <div class="club-item first-club">
                            <span class="club-name">Arsenal</span>
                          </div>
                          <span class="score">-</span>
                          <div class="club-item">
                            <span class="club-name">Everton</span>
                          </div>
                        </div>
                        <div class="feature-table-row__watch">
                          <button class="btn-watch">Watch</button>
                        </div>
                      </div>
                    </a>
                    <a class="feature-table-row" href="#" target="">
                      <div class="feature-table-row__left-column">
                        <span class="feature-table-row__time">19.05.22:00</span>
                      </div>
                      <div class="feature-table-row__right-column">
                        <div class="feature-table-row__list-club">
                          <div class="club-item first-club">
                            <span class="club-name">Arsenal</span>
                          </div>
                          <span class="score">-</span>
                          <div class="club-item">
                            <span class="club-name">Wolverhampton Wanderers</span>
                          </div>
                        </div>
                        <div class="feature-table-row__watch">
                          <button class="btn-watch">Watch</button>
                        </div>
                      </div>
                    </a>
                    <a class="feature-table-row" href="#" target="">
                      <div class="feature-table-row__left-column">
                        <span class="feature-table-row__time">19.05.22:00</span>
                      </div>
                      <div class="feature-table-row__right-column">
                        <div class="feature-table-row__list-club">
                          <div class="club-item first-club">
                            <span class="club-name">Wolverhampton Wanderers</span>
                          </div>
                          <span class="score">-</span>
                          <div class="club-item">
                            <span class="club-name">West Ham United</span>
                          </div>
                        </div>
                        <div class="feature-table-row__watch">
                          <button class="btn-watch">Watch</button>
                        </div>
                      </div>
                    </a>
                    <a class="feature-table-row hot-match" href="#" target="">
                      <div class="feature-table-row__left-column">
                        <span class="feature-table-row__time">19.05.22:00</span>
                      </div>
                      <div class="feature-table-row__right-column">
                        <div class="feature-table-row__list-club">
                          <div class="club-item first-club">
                            <span class="club-name">Wolverhampton Wanderers</span>
                          </div>
                          <span class="score">-</span>
                          <div class="club-item">
                            <span class="club-name">West Ham United</span>
                          </div>
                        </div>
                        <div class="feature-table-row__watch">
                          <button class="btn-watch">Watch</button>
                        </div>
                      </div>
                    </a>
                    <a class="feature-table-row hot-match" href="#" target="">
                      <div class="feature-table-row__left-column">
                        <span class="feature-table-row__time">19.05.22:00</span>
                      </div>
                      <div class="feature-table-row__right-column">
                        <div class="feature-table-row__list-club">
                          <div class="club-item first-club">
                            <span class="club-name">Wolverhampton Wanderers</span>
                          </div>
                          <span class="score">1 - 2</span>
                          <div class="club-item">
                            <span class="club-name">West Ham United</span>
                          </div>
                        </div>
                        <div class="feature-table-row__watch">
                          <button class="btn-watch">Watch</button>
                        </div>
                      </div>
                    </a>
                    <a class="feature-table-row " href="#" target="">
                      <div class="feature-table-row__left-column">
                        <span class="feature-table-row__time">19.05.22:00</span>
                      </div>
                      <div class="feature-table-row__right-column">
                        <div class="feature-table-row__list-club">
                          <div class="club-item first-club">
                            <span class="club-name">Wolverhampton</span>
                          </div>
                          <span class="score">1 - 2</span>
                          <div class="club-item">
                            <span class="club-name">West Ham United Wanderers</span>
                          </div>
                        </div>
                        <div class="feature-table-row__watch">
                          <button class="btn-watch">Highlight</button>
                        </div>
                      </div>
                    </a>

                  </div>
                </div>
                <div id="tabs-2">
                  <div class="main-league-page-content__top-score-table">
                    <div class="top-score-table__row top-score-table__header-row">
                      <div class="top-score-table__small-column">#</div>
                      <div class="top-score-table__column">Player</div>
                      <div class="top-score-table__column">Team</div>
                      <div class="top-score-table__small-column">G</div>
                    </div>

                    <div class="top-score-table__row">
                      <div class="top-score-table__small-column">1</div>
                      <div class="top-score-table__column">
                        Erling Braut Håland</div>
                      <div class="top-score-table__column">
                        Norway</div>
                      <div class="top-score-table__small-column">4</div>
                      <div>
                      </div>
                    </div>

                    <div class="top-score-table__row">
                      <div class="top-score-table__small-column">2</div>
                      <div class="top-score-table__column">
                        ladislavs Gutkovskis</div>
                      <div class="top-score-table__column">

                        Latvia</div>
                      <div class="top-score-table__small-column">4</div>
                      <div>
                      </div>
                    </div>

                    <div class="top-score-table__row">
                      <div class="top-score-table__small-column">3</div>
                      <div class="top-score-table__column">

                        Michy Batshuayi</div>
                      <div class="top-score-table__column">
                        Norway</div>
                      <div class="top-score-table__small-column">4</div>
                      <div>
                      </div>
                    </div>

                    <div class="top-score-table__row">
                      <div class="top-score-table__small-column">4</div>
                      <div class="top-score-table__column">

                        Michy Batshuayi  Michy Batshuayi</div>
                      <div class="top-score-table__column">
                        Norway</div>
                      <div class="top-score-table__small-column">4</div>
                      <div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php include "templates/collapse.php"; ?>
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

      $("#league-main-tabs").tabs({
        active: 0
      });
      </script>

      <script>
      // Hàm tính toán chiều cao
      function resizeWidth() {
        $('.club-name').each(function(index) {
          const parent = $(this).parent()
          const widthParent = parent.width()
          const maxWidth = widthParent - 20;
          $(this).css('maxWidth', maxWidth + 'px');

        })
      }

      // Sự kiện khi trang được tải
      $(document).ready(function() {
        resizeWidth(); // Cập nhật chiều cao khi trang được tải

        // Sự kiện resize cửa sổ
        $(window).resize(function() {
          resizeWidth(); // Cập nhật chiều cao khi cửa sổ được resize
        });
      });
      </script>
</body>

</html>