<!DOCTYPE html>
<html lang="en">

<?php
include 'head.php';

?> 
<style>
  .img-popup {
    z-index: 100000;
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background: rgba(255, 255, 255, .9);
    display: flex;
    justify-content: center;
    align-items: center;
    display: none;
    width: 900px;
}

.img-popup img {
    /*max-width: ;
width: 100%;*/
    opacity: 0.8;
    transform: translateY(-100px);
    -webkit-transform: translateY(-100px);
    -moz-transform: translateY(-100px);
    -ms-transform: translateY(-100px);
    -o-transform: translateY(-100px);
}

.close-img-popup {
    width: 35px;
    height: 30px;
    display: flex;
    justify-content: center;
    flex-direction: column;
    position: absolute;
    top: 20px;
    right: 20px;
    cursor: pointer;
}

.close-img-popup .bar {
    height: 4px;
    background: #333;
}

.close-img-popup .bar:nth-child(1) {
    transform: rotate(45deg);
}

.close-img-popup .bar:nth-child(2) {
    transform: translateY(-4px) rotate(-45deg);
}

.opened {
    display: flex;
}

.opened img {
    animation: animatepopup 1s ease-in-out .8s;
    -webkit-animation: animatepopup .3s ease-in-out forwards;
}

@keyframes animatepopup {

    to {
        opacity: 1;
        transform: translateY(0);
        -webkit-transform: translateY(0);
        -moz-transform: translateY(0);
        -ms-transform: translateY(0);
        -o-transform: translateY(0);
    }

}


</style>
<body>

<?php
include 'header.php';

?> 
  <!-- ======= Testimonials Section ======= -->
  <section id="" class="main" style="padding:90px;top:100px;direction: rtl;">
  
  
<br>
<center><h1 class="" style="color: #3d80e4">مركز التكوين </h1></center>
<br>
<div class="row" style="text-align: center;font-family: Aparajita;font-size: 25px">
    <p class=""> 
تملك المؤسسة العمومية للنقل الحضري والشبه الحصري سيدي بلعباس مركز تكوين معتمد للحصول على شهادة الكفاءة المهنية لسائقي مركبات نقل الأشخاص و البضائع،حيث سيتم فتح تخصصات جديدة مستقبلا في المجالات التالية : <br>
<ul style="text-align: right;">
  <li>تكوين سائقي سيارات الأجرة للحصول على دفتر المقاعد
</li>
<li>
تكوين المدربين للحصول على شهادة الكفاءة المهنية و البيداغوجية لتعليم سياقة مركبات ذات المحركات لمختلف الأصناف

</li>
</ul> 
  </p>
  </div>
      <!-- ======= Testimonials Section ======= -->
  
       
    
    <div class="contain" style="direction: rtl;height: auto">
            <div class="card card_op capp capp" data-aos="zoom-out" >
              <!-- <a href="assets/pdf/CAPP.rar" download="CAPP_formation"> -->
            <img src="assets/image/capp.png" alt="">
            <div class="info-card">
            <h1>CAPP</h1>
            <p>
              حمّل دليل تكوين ممرني CAPP
            </p>
            
            </div>
            <!-- </a> -->
            </div>
            <div class="card card_op taxi" data-aos="zoom-out" data-aos-delay="200">
            <!-- <a href="assets/pdf/taxi.pdf" download="taxi_formation"> -->

            <img src="assets/image/taxi.png" alt="">
            <div class="info-card">
            <h1 class="taxi">TAXI</h1>
            <p>
            حمّل دليل تكوين سائقي سيارة الأجرة 
            </p>
            
            </div>
<!-- </a> -->
            </div>  
            <div class="card card_op link_vid" data-aos="zoom-out" data-aos-delay="400">
            <img src="assets/image/centre/55.jpg" alt="">
            <div class="info-card">
            <h1>فيديو مركز التكوين</h1>
            <p></p>
            </div>
            </div>  
            <div class="card card_op" data-aos="zoom-out" data-aos-delay="600">
            <a  class="stretched-link menu-link" href="CenterFormation.php" >
            <img src="assets/image/ereg.jpg" alt="">
            <div class="info-card">
            <h1>بوابة التكوين</h1>
            <p>مجال النقل </p>
            </div>
            </a>
            </div>   
        </div>
        <div class="img-popup" style="width: 100vw; height: 620px">

        <video width="100%" height="400" controls="" >
  <source src="assets/video/centre.mp4" type="video/mp4">
  <source src="movie.ogg" type="video/ogg">

</video>        <div class="close-img-popup">
        <div class="bar"></div>
        <div class="bar"></div>
    </div>
</div>
    </section><!-- End Testimonials Section -->
<section id="testimonials" class="testimonials" style="top:-80px; height:auto; padding-top: 0">

<div class="testimonials-slider swiper">
  <div class="swiper-wrapper">

  <div class="swiper-slide" style="margin-right:10px">
      <div class="testimonial-item">
        <img src="assets/image/centre/c2.jpg" style="width:99%; height:525px"  alt="">
       
      </div>
    </div><!-- End testimonial item -->

   
    <div class="swiper-slide" style="margin-right:10px">
      <div class="testimonial-item">
      <img src="assets/image/centre/c1.jpg" style="width:99%; height:525px" alt="">

        
      </div>
    </div><!-- End testimonial item -->
    <div class="swiper-slide" style="margin-right:10px">
      <div class="testimonial-item">
        <img src="assets/image/centre/2.jpg" style="width:99%; height:525px" alt="">
       
      </div>
    </div><!-- End testimonial item -->

    <div class="swiper-slide" style="margin-right:10px">
      <div class="testimonial-item">
      <img src="assets/image/centre/44.jpg" style="width:99%; height:525px" alt="">

      </div>
    </div><!-- End testimonial item -->
    <div class="swiper-slide" style="margin-right:10px">
      <div class="testimonial-item">
      <img src="assets/image/centre/auto.png" style="width:99%; height:525px" alt="">

        
      </div>
    </div><!-- End testimonial item -->
    <div class="swiper-slide" style="margin-right:10px">
      <div class="testimonial-item">
        <img src="assets/image/centre/55.jpg" style="width:99%; height:525px"  alt="">
       
      </div>
    </div><!-- End testimonial item -->

   
    <div class="swiper-slide" style="margin-right:10px">
      <div class="testimonial-item">
      <img src="assets/image/centre/c3.jpg" style="width:99%; height:525px" alt="">

        
      </div>
    </div><!-- End testimonial item -->
    <div class="swiper-slide" style="margin-right:10px">
      <div class="testimonial-item">
        <img src="assets/image/centre/c3.png" style="width:99%; height:525px" alt="">
       
      </div>
    </div><!-- End testimonial item -->

    
  </div>
  <div class="swiper-pagination"></div>
</div>
</section><!-- End Testimonials Section -->
<?php
include 'footer.php';

?> 
<script src="assets/js/sweetalert.js" ></script>

  <script>


$(document).ready(function () {
    var imgPopup = $('.img-popup');
    var imgCont = $('.link_vid');
    var closeBtn = $('.close-img-popup');







    // handle events
    imgCont.on('click', function () {
        
        imgPopup.addClass('opened');
    });

    $(imgPopup, closeBtn).on('click', function () {
        imgPopup.removeClass('opened');
    });

    popupImage.on('click', function (e) {
        e.stopPropagation();
    });

})
document.querySelector(".capp").addEventListener("click", function() {
  Swal.fire({
    title: "CAPP",
    text:'تكوين المدربين للحصول على شهادة الكفاءة المهنية و البيداغوجية لتعليم سياقة مركبات ذات المحركات لمختلف الأصناف',
    type: "info",
    showCancelButton: false,
    confirmButtonText: "تحميل الدليل",
    confirmButtonColor: "#3d80e4",
    cancelButtonColor: "#999999",
    ShowCloseButtons: true,
    focusConfirm: false,
    focusCancel: true
  }).then((result) => {
    if (result['isConfirmed']){
      window.location = "assets/pdf/CAPP.rar";
    }
});
});
document.querySelector(".taxi").addEventListener("click", function() {
  Swal.fire({
    title: "Taxi",
    text:'تكوين سائقي سيارات الأجرة للحصول على دفتر المقاعد',
    type: "info",
    showCancelButton: false,
    confirmButtonText: "تحميل الدليل",
    confirmButtonColor: "#3d80e4",
    cancelButtonColor: "#999999",
    CloseButtons: true,
    focusConfirm: false,
    focusCancel: true
  }).then((result) => {
    if (result['isConfirmed']){
      window.location = "assets/pdf/taxi.pdf";
    }
});
});
  </script>
</body>
</html>




     
    