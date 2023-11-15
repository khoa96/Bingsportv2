<?php include "templates/head.php"; ?>
<body>
	<?php include "templates/header.php"; ?>

	<div class="common-page-content-wrapper">
		<div class="container">

		<?php include "templates/subHeader.php"; ?>
		</div>
	</div>
	<?php include "templates/footer.php"; ?>
	<script>
		$(function () {
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
</body>
</html>
