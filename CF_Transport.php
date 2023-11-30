<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>بوابة التكوين</title>
 <link rel="stylesheet" href="./style.css">
<link href="assets/image/log.png" rel="icon">
<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

 
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
  <!-- Variables CSS Files. Uncomment your preferred color scheme -->
  <link href="assets/css/variables.css" rel="stylesheet">

  <link href="assets/css/main3.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>

<body dir="ltr">

<?php
include 'header.php';

?> 

<!-- partial:index.partial.html -->
<section class="wrapper">
    <div class="container-fostrap">
        <div>
           <!-- <img src="https://4.bp.blogspot.com/-7OHSFmygfYQ/VtLSb1xe8kI/AAAAAAAABjI/FxaRp5xW2JQ/s320/logo.png" class="fostrap-logo"/> -->
            <h1 class="heading" style="margin-bottom: 50px;margin-top: 30px">
                سائقي مركبات نقل الأشخاص و البضائع
            </h1>
        </div>
        <div class="content">
            <div class="container" dir="rtl" style="text-align: right;">
                <div class="row">
                    
                    
                    <div class="col-xs-12 col-sm-4">
                        <div class="card">
                            <a class="img-card" href="info_Diplome.php">
                            <img src="assets/image/att.jpg"  style="object-fit: scale-down; background-color: lightslategray" />
                          </a>
                            <div class="card-content"  style="text-align: right;" dir="rtl">
                                <h4 class="card-title" dir="rtl">
                                    <a href="info_Diplome.php" style="text-align: right;" dir="rtl"> شهادة الكفاءة المهنية
                                  </a>
                                </h4>
                                <p class="">
                                    معلومات عن شهادة  الكفاءة المهنيةسائقي مركبات نقل الأشخاص و البضائع 
                                </p>
                            </div>
                            <div class="card-read-more">
                                <a href="info_Diplome.php" class="btn btn-link btn-block">
                                    اقرأ المزيد
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="card">
            <a  class="img-card"  data-toggle="modal" data-target="#exampleModal_ch">
                            
                            <img src="assets/image/ereg.jpg"  style="object-fit: scale-down; background-color: teal" />
                          </a>
                            <div class="card-content"  style="text-align: right;">
                                <h4 class="card-title">
            <a data-toggle="modal" data-target="#exampleModal_ch">
                                     التسجيل الالكتروني
                                  </a>
                                </h4>
                                <p class="">
                                    التكوين في مجال  الكفاءة المهنيةسائقي مركبات نقل الأشخاص و البضائع 
                                </p>
                            </div>
                            <div class="card-read-more">
            <a  class="btn btn-link btn-block"  data-toggle="modal" data-target="#exampleModal_ch">
                                
                                    اقرأ المزيد
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="card">
                            <a class="img-card" href="#" onclick="swalert();">
                            <img src="assets/image/ma-formation.png" style="object-fit: scale-down; background-color: dodgerblue"  />
                          </a>
                            <div class="card-content"  style="text-align: right;">
                                <h4 class="card-title">
                                    <a href="#" onclick="swalert();">
                                       الدورات التكوينية
                                  </a>
                                </h4>
                                <p class="">
                                      فضاء المترشحين وأساتذة التكوين    <br> &nbsp;
                                </p>
                            </div>
                            <div class="card-read-more">
                                <a href="#" onclick="swalert();" class="btn btn-link btn-block">
                                    اقرأ المزيد
                                </a>
                            </div>
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
 <div class="modal fade bd-example-modal-lg" style="direction:rtl; width: 95%" id="exampleModal_ch" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content" style="top: 150px">
      
        <div class="modal-body" style="color:black;width: 95%; margin: auto;">
            <div class="contain" style="direction: rtl;height: auto">
             <center> <div class="row">
                 <div class="card col-6 card_op capp capp justify-content-center" style="text-align: center;" data-aos="zoom-out" >
             <a href="Registration_Ep.php" onclick="test();" > 
            <img src="assets/image/pm.png" alt="">
            <div class="info-card">
            <h1>المؤسسة</h1>
            <p>
             
            </p>
            </div>
            </a>
            </div>
            <div class="card col-6 card_op taxi  justify-content-center" data-aos="zoom-out" style="text-align: center;" data-aos-delay="200">
             <a href="Registration.php" onclick="test();" > 

            <img src="assets/image/cl.png" alt="" style=" width:350px; height:250px">
            <div class="info-card">
            <h1 class="taxi">مترشح حر</h1>
            <p>
            
            </p>
            </div>
 </a> 
            </div>             
  
              </div>
         
               </center>
        </div>
        </div>
      </div>
    </div>
  </div>


</html>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script src="assets/js/sweetalert.js" ></script>

<script >
  function swalert() {
    swal.fire({
  title: "أدخل رمز المستخدم",
  html: "<form id='form' action='Formations_content.php' method='POST' onsubmit='valid()'><input type='text' id='pswd' name='pswd' placeholder='رمز المستخدم'><br><div id='err' hidden>يرجى ادخال رمز المستخدم</div><div id='wrong' hidden>رمز المستخدم خاطئ</div><br> <input type='submit' value='تأكيد'></form>",
  showCancelButton: false,
  showConfirmButton: false,
  closeOnConfirm: false,
  animation: "slide-from-top",
})
  }
  function valid() {
    event.preventDefault();
  if (document.getElementById("pswd").value === "") {
    document.getElementById("err").hidden = false;
    document.getElementById("wrong").hidden = true;
  }
  if (document.getElementById("pswd").value != "CF-2023") {
    document.getElementById("err").hidden = true;
    document.getElementById("wrong").hidden = false;
  }
  else{
    document.getElementById("err").hidden = true;
    document.getElementById("wrong").hidden = true;
    document.getElementById("form").submit();

  }
}
</script>