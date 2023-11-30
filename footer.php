<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

<div class="modal fade" style="direction:rtl" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="color: black;background-color:#3d80e4">
        <h5 class="modal-title" id="exampleModalLabel" style="color: black;">شكاوى</h5>
        <button type="button" style="position:absolute;float:left;left:0" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="color:black">
      <form action="msg2.php" method="post"> 
      <div class="row py-3 px-lg-5 text-right">
      <div class="col-6 form-outline">
    <!-- <label  class="form-label" for="validationCustom01">اللقب</label> -->

          <input type="text" class="form-control" required name="name" placeholder="الاسم واللقب">
          <i class='fas fa-user'></i>
        </div>
	<div class="col-6 form-outline">
  <!-- <label for="validationCustom01">عنوان البريد الالكتروني</label> -->

          <input type="text" name="email" class="form-control" placeholder="عنوان البريد الالكتروني">
          <i class='fas fa-envelope'></i>
        </div>
    </div>
	<div class="row py-3 px-lg-5 text-right">
        <div class="col-6 form-outline">
    <!-- <label for="validationCustom01">رقم الهاتف</label> -->

          <input type="text" name="phone" required class="form-control" placeholder="رقم الهاتف">
          <i class='fas fa-phone-alt'></i>
        </div>
	<div class="col-6 form-outline">
    <!-- <label for="validationCustom01">موقع التواصل الاجتماعي</label> -->
          <input type="text" name="website" class="form-control" placeholder="موقع التواصل الاجتماعي ان وجد ">
          <i class='fas fa-globe'></i>
        </div>
    </div>
<!-- <label for="validationCustom01">الرسالة</label> -->
<div class="form-outline row" style="margin: 0 50px">
  <textarea placeholder="أكتب رسالتك" required class="form-control" rows="10" name="message" id="textAreaExample" ></textarea>
</div>
      
<div class="button-area" >
        <span></span>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
        <button type="submit" class="btn btn-primary" >إرسال</button>
      </div>
    </form>
    </div>
  </div>
</div>
  <div class="modal fade bd-example-modal-lg" style="direction:rtl; width: 95%" id="exampleModal_ch" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content" style="top: 150px">
      
        <div class="modal-body" style="color:black;width: 95%">
            <div class="contain" style="direction: rtl;height: auto">
            <div class="card card_op capp capp" data-aos="zoom-out" >
             <a href="#" onclick="alert('غير متاحة حاليا');" > 
            <img src="assets/image/pm.png" alt="">
            <div class="info-card">
            <h1>المؤسسة</h1>
            <p>
             
            </p>
            
            </div>
            </a>
            </div>
            <div class="card card_op taxi" data-aos="zoom-out" data-aos-delay="200">
             <a href="#" onclick="alert('غير متاحة حاليا');" > 

            <img src="assets/image/cl.png" alt="">
            <div class="info-card">
            <h1 class="taxi">مترشح حر</h1>
            <p>
            
            </p>
            
            </div>
 </a> 
            </div>  
              
        </div>
        </div>
      </div>
    </div>
  </div>
<!-- href="Registration.php" Modal -->
<div class="modal fade" style="direction:rtl;color:#000;" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="color: black;background-color:#3d80e4">
        <h5 class="modal-title" id="exampleModalLabel1">اقتراحات</h5>
        <button type="button" class="close" style="position:absolute;float:left;left:0" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="msg.php" method="post"> 
      <div class="row py-3 px-lg-5 text-right">

      

        <div class="col-6 form-outline">
    <!-- <label  class="form-label" for="validationCustom01">اللقب</label> -->

          <input type="text" class="form-control" required name="name" placeholder="الاسم واللقب">
          <i class='fas fa-user'></i>
        </div>
	<div class="col-6 form-outline">
  <!-- <label for="validationCustom01">عنوان البريد الالكتروني</label> -->

          <input type="text" name="email" class="form-control" placeholder="عنوان البريد الالكتروني">
          <i class='fas fa-envelope'></i>
        </div>
    </div>
	<div class="row py-3 px-lg-5 text-right">
        <div class="col-6 form-outline">
    <!-- <label for="validationCustom01">رقم الهاتف</label> -->

          <input type="text" name="phone" class="form-control" placeholder="رقم الهاتف">
          <i class='fas fa-phone-alt'></i>
        </div>
	<div class="col-6 form-outline">
    <!-- <label for="validationCustom01">موقع التواصل الاجتماعي</label> -->
          <input type="text" name="website" class="form-control" placeholder="موقع التواصل الاجتماعي ان وجد ">
          <i class='fas fa-globe'></i>
        </div>
    </div>
    <div class="form-outline row" style="margin: 0 50px">
  <textarea placeholder="أكتب رسالتك" required class="form-control" rows="10" name="message" id="textAreaExample" ></textarea>
</div>
<div class="button-area" >
        <span></span>
      </div>
     </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
        <button type="submit" class="btn btn-primary">ارسال</button>
      </div>
    </form>     </div>
  </div>
</div>
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-header">
          <h2>اتصل بنا</h2>
          <p>للاستفساراتكم يرجى الاتصال بمصلحة المؤسسة عبر المعلومات الاتية</p>
        </div>

      </div>

      
      <div class="container" style="direction:rtl">

        <div class="row gy-5 gx-lg-5">

          <div class="col-lg-4">

            <div class="info">
               <h3>&nbsp;</h3>
           <!--   <p>Et id eius voluptates atque nihil voluptatem enim in tempore minima sit ad mollitia commodi minus.</p>
-->
              <div class="info-item d-flex">
                <i style=" margin-left:20px;" class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4 style=" margin-left:100%;" >الموقع:</h4>
                  <p style="direction:ltr; margin-left:20px;">Route de maascara - Sidi Bel Abbès,22000 ALGERIE</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i style=" margin-left:20px;" class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>البريد الالكتروني:</h4>
                  <p style="direction:ltr; margin-left:-20px;">etus22.info@gmail.com</p>
                </div>
              </div><!-- End Info Item -->

              <div  class="info-item d-flex">
                <i style=" margin-left:20px;" class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4 >الهاتف:</h4>
                  <p style="direction:ltr; margin-left:-20px;">048 76 40 72</p>
                </div>
              </div><!-- End Info Item -->
              <h3>&nbsp;</h3>

            </div>

          </div>

          <div class="col-lg-8">
            <!--<form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form> -->
            <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11620.552733198041!2d-0.6121566337474933!3d35.183860433175155!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x56e4d638cb0fedd7!2zRW50cmVwcmlzZSB0cmFuc3BvcnQgdXJiYWluIGV0IHN1YnVyYmFpbiBFVFVTIFNCQSDYp9mE2YXYpNiz2LPYqSDYp9mE2LnZhdmI2YXZitipINmE2YTZhtmC2YQg2KfZhNit2LbYsdmKINmIINi02KjZhyDYp9mE2K3Yttix2Yog2LPZitiv2Yog2KjZhNi52KjYp9iz!5e0!3m2!1sfr!2sdz!4v1658758086749!5m2!1sfr!2sdz" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div><!-- End Google Maps -->

          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->


<div class="footer-legal text-center">
  <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

    <div class="d-flex flex-column align-items-center align-items-lg-start">
      <div class="copyright">
        &copy; Copyright <strong><span>المؤسسة العمومية للنقل الحضري و الشبه الحضري سيدي بلعباس</span></strong>.  جميع الحقوق محفوظة
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
        Designed by <a href="/">ETUS-SIDI BEL ABBES</a>
      </div>
    </div>
     
    <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
      <a href="https://www.facebook.com/etus22" class="facebook"><i class="bi bi-facebook"></i></a>
      <a href="https://www.youtube.com/@etussba2031" class="youtube"><i class="bi bi-youtube"></i></a>
    </div>

  </div>
</div>

</footer><!-- End Footer -->

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>

<!-- Vendor JS Files -->


<!-- Template Main JS File -->
<script src="assets/js/jquery.js" defer></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js" defer></script>
<script src="assets/vendor/aos/aos.js" defer></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js" defer></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js" defer></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js" defer></script>
<script src="assets/vendor/php-email-form/validate.js" defer></script>
<script src="assets/js/main.js" defer></script>

