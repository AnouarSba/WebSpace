<!-- FONT -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

<!-- BOOTSTRAP -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap-reboot.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap-grid.min.css" rel="stylesheet">

<!-- SLIDER -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<style type="">
  
/* ==========  Global  ========== */
body {
  display: flex;
  align-items: center;
  width: 100%;
  min-width: 320px;
  min-height: 100vh;
  position: relative;
  overflow-x: hidden;
  font-family: "Montserrat", sans-serif;
  font-size: 16px;
  font-weight: var(--font-normal);
  line-height: 1.6;
  color: var(--color-text);
  background-color: var(--color-body);
  @media (max-width: 768px) {
    line-height: 1.3;
  }
}

/* ==========  Layout  ========== */
.section {
  display: block;
  width: 100%;

  // .section_offset
  &_offset {
    padding: 50px 0;
  }
}

/* ==========  Slider  ========== */
.feedback {
  padding: 50px;
  border-radius: var(--radius-xl);
  background: var(--color-box);

  // .feedback__title
  &__title {
    font-size: 48px;
    font-weight: var(--font-bold);
    margin-bottom: 20px;
  }

  // .feedback__slider
  &__slider {
    height: auto;
    transition: var(--transition);
    position: relative;
    &::before {
      content: "";
      position: absolute;
      z-index: 9;
      top: 0;
      right: 0;
      left: 0;
      height: 150px;
      background: linear-gradient(
        180deg,
        var(--color-box) 41.72%,
        rgba(242, 246, 246, 0) 76.33%,
        rgba(242, 246, 246, 0) 76.33%
      );
    }
    &::after {
      content: "";
      position: absolute;
      z-index: 9;
      bottom: 0;
      right: 0;
      left: 0;
      height: 150px;
      background: linear-gradient(
        1.27deg,
        var(--color-box) 32.89%,
        rgba(242, 246, 246, 0) 76.89%,
        rgba(242, 246, 246, 0) 76.89%
      );
    }

    .swiper-button-prev,
    .swiper-button-next {
      top: initial;
      bottom: initial;
      left: 0;
      right: 0;
      width: 100%;
      height: 34px;
      margin: 0;
      padding: 0;
      background-repeat: no-repeat;
      background-position: center;
      background-size: 34px;
      &::before,
      &::after {
        display: none;
        content: "";
      }
    }

    .swiper-button-prev {
      top: 0;

      background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='34' height='34' viewBox='0 0 34 34' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cg clip-path='url(%23clip0_53_829)'%3E%3Cpath d='M17 26.7395L17 7.26033' stroke='%23007882' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/%3E%3Cpath d='M7.4375 16.823L17 7.2605L26.5625 16.823' stroke='%23007882' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/g%3E%3Cdefs%3E%3CclipPath id='clip0_53_829'%3E%3Crect width='34' height='34' fill='white' transform='translate(0 34) rotate(-90)'/%3E%3C/clipPath%3E%3C/defs%3E%3C/svg%3E") !important;
    }

    .swiper-button-next {
      bottom: 0;

      background-image: url("data:image/svg+xml;charset=utf-8,%0A%3Csvg width='34' height='34' viewBox='0 0 34 34' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cg clip-path='url(%23clip0_53_824)'%3E%3Cpath d='M17 7.2605L17 26.7397' stroke='%23007882' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/%3E%3Cpath d='M7.4375 17.177L17 26.7395L26.5625 17.177' stroke='%23007882' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/g%3E%3Cdefs%3E%3CclipPath id='clip0_53_824'%3E%3Crect width='34' height='34' fill='white' transform='matrix(0 1 1 0 0 0)'/%3E%3C/clipPath%3E%3C/defs%3E%3C/svg%3E%0A") !important;
    }
  }

  // .feedback__item
  &__item {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
    padding: 30px;
    border-radius: var(--radius);
    background: var(--color-body);
    text-align: center;
  }

  // .feedback__image
  &__image {
    display: inline-block;
    width: 58px;
    height: 58px;
    border-radius: 50%;
    margin-bottom: 20px;
  }

  // .feedback__name
  &__name {
    font-size: 18px;
    color: var(--color-primary);
    margin-bottom: 10px;
  }

  // .feedback__text
  &__text {
    margin: 0 0 1em 0;
    &:last-child {
      margin-bottom: 0;
    }
  }
}

/* ==========  Media  ========== */
@media (max-width: 991px) {
  .feedback__title,
  .feedback__text {
    text-align: center;
  }
}

</style>
<!-- FEEDBACK LAYOUT -->
<section class="section section_offset" dir="rtl">
  <div class="container">
    <div class="feedback">
      <div class="row align-items-center">
        <div class="col-xs-12 offset-lg-1 col-lg-3 mb-4 mb-lg-0">
          <h2 class="feedback__title">اقتراحاتكم</h2>
          <p class="feedback__text">منصة للاستماع لمقترحات المواطنين</p>
        </div>
        <div class="col-xs-12 offset-lg-1 col-lg-7">
          <div class="swiper feedback__slider">
            <div class="swiper-wrapper">
              <div class="feedback__item swiper-slide">
                <?php 
                $servername = "65.108.43.126";
$username = "etusd549_etus";
$password = "aBfvV$%yZdu$";
$db = "etusd549_WebSpace";
                $link = mysqli_connect($servername, $username, $password);
mysqli_select_db($db, $link);

$result = mysqli_query("SELECT * FROM propo", $link);
$num_rows = 7;

	echo '<h5 class="feedback__name"> proposss</h5>'.$num_rows;

if ($result) {
while ( $row =  $result->fetch_assoc() ){
	echo '<h5 class="feedback__name"> propos</h5>';

     if ($row["name"]) { 
                  echo '<h5 class="feedback__name"><'. $row["name"].'</h5>';
                } else {
                  echo '<h5 class="feedback__name">مواطن مجهول الهوية</h5>';
                }
                 echo'<p class="feedback__text">'. $row["message"].'.</p>';
  }
  $result -> free_result();
}
else { 
 echo '<h5 class="feedback__name">0 propo</h5>';

} 
$conn -> close();


                
                
                 ?>
                
              </div>
              
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<script type="text/javascript">
  const feedback = document.querySelector(".feedback__slider");
const feedback_offset = 300;

function feedbackUpdateHeight(height) {
  if (!height) return false;
  feedback.style.height = `${height + feedback_offset}px`;
}

if (feedback) {
  feedbackUpdateHeight(feedback.querySelector(".feedback__item").offsetHeight);

  const feedback_slider = new Swiper(feedback, {
    direction: "vertical",
    slidesPerView: "auto",
    autoHeight: true,
    centeredSlides: true,
    spaceBetween: 30,
    grabCursor: true,
    loop: true,
    mousewheel: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    }
  });

  feedback_slider.on("slideChange", () => {
    setTimeout(() => {
      feedbackUpdateHeight(
        feedback_slider.slides[feedback_slider.activeIndex].offsetHeight
      );
    }, 300);
  });
}

</script>