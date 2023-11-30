<?php header('Access-Control-Allow-Origin: www.facebook.com'); ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>بوابة التكوين</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'><link rel="stylesheet" href="./style.css">
<link href="assets/image/log.png" rel="icon">
<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">


  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Variables CSS Files. Uncomment your preferred color scheme -->
  <link href="assets/css/variables.css" rel="stylesheet">
  <link href="assets/css/main3.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body dir="ltr">
<!-- Messenger Plugin de discussion Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin de discussion code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "360671841458741");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v16.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/ar_AR/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
<?php
include 'header.php';

?> 

<!-- partial:index.partial.html -->
<section class="wrapper">
    <div class="container-fostrap">
        <div>
           <!-- <img src="https://4.bp.blogspot.com/-7OHSFmygfYQ/VtLSb1xe8kI/AAAAAAAABjI/FxaRp5xW2JQ/s320/logo.png" class="fostrap-logo"/> -->
            <h1 class="heading" style="margin-bottom: 50px;margin-top: 30px">
                بوابة التكوين في مجال النقل
            </h1>
        </div>
        <div class="content">
            <div class="container" dir="rtl" style="text-align: right;">
                <div class="row">
                    
                    
                    <div class="col-xs-12 col-sm-4">
                        <div class="card">
                            <a class="img-card" href="CF_Transport.php">
                            <img src="assets/image/c_bus.png"  style="object-fit: scale-down;" />
                          </a>
                            <div class="card-content"  style="text-align: right;" dir="rtl">
                                <h4 class="card-title" dir="rtl">
                                    <a href="CF_Transport.php" style="text-align: right;" dir="rtl"> سائقي مركبات نقل الأشخاص و البضائع
                                  </a>
                                </h4>
                                <p class="">
                                    التكوين للحصول على شهادة الكفاءة المهنية سائقي مركبات نقل الأشخاص و البضائع 
                                </p>
                            </div>
                            <div class="card-read-more">
                                <a href="CF_Transport.php" class="btn btn-link btn-block">
                                    اقرأ المزيد
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="card">
                            <a class="img-card" href="CF_Capp.php" >
                            <img src="assets/image/ae.png"  style="object-fit: scale-down;" />
                          </a>
                            <div class="card-content"  style="text-align: right;">
                                <h4 class="card-title">
                                    <a href="CF_Capp.php"  > تعليم سياقة مركبات ذات محرك
                                  </a>
                                </h4>
                                <p class="">
                                    التكوين للحصول على شهادة  الكفاءةالمهنية و البيداغوجية لتعليم سياقة مركبات ذات محرك بمختلف الأصناف (A, B, C, D)
                                </p>
                            </div>
                            <div class="card-read-more">
                                <a href="CF_Capp.php"   class="btn btn-link btn-block">
                                    اقرأ المزيد
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="card">
                            <a class="img-card" href="Taxi.php"  >
                            <img src="assets/image/taxi2.png" style="object-fit: scale-down;"  />
                          </a>
                            <div class="card-content"  style="text-align: right;">
                                <h4 class="card-title">
                                    <a href="Taxi.php"  >
                                        دفتر المقاعد
                                  </a>
                                </h4>
                                <p class="">
                                    التكوين للحصول  على دفتر المقاعد
                                    <br> &nbsp;
                                </p>
                            </div>
                            <div class="card-read-more">
                                <a href="Taxi.php"   class="btn btn-link btn-block">
                                    اقرأ المزيد
                                </a>
                            </div> 
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
  

</section>
<!-- partial -->
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
</body>
</html>
