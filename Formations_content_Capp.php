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
<style type="text/css">
	a.underline {
  background: linear-gradient(#313166, #313166);
  background-size: 0 2px;
  background-repeat: no-repeat;
  transition: all 0.3s ease;
}
a.underline.infromleft {
  background-position: left bottom;
}
a.underline:hover {
  background-size: 100% 2px;
}
a.underline.infromedges {
  background: linear-gradient(to bottom, #313166, #313166), linear-gradient(to bottom, #313166, #313166);
  background-size: 0 2px, 0 2px;
  background-position: bottom left, bottom right;
  background-repeat: no-repeat;
}
a.underline.infromedges:hover {
  background-size: 100% 2px, 100% 2px;
}

a.diagonalfill {
      width: 100%;
    text-align: right;
    margin-top: 25px;
    font-size: 25px;
  background: linear-gradient(-45deg, #313166, #313166 50%, transparent 50%), linear-gradient(-45deg, transparent, transparent 50%, #313166 50%);
  background-size: 0 100%;
  background-repeat: no-repeat;
  background-position: center right, center left;
  transition: all 0.3s ease;
}
a.diagonalfill:hover {
  background-size: 100% 100%;
  color: #fee8a2;
}

</style>
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
                الدورات التكوينية
            </h1>
        </div>
        <div class="content">
            <div class="container" dir="rtl" style="text-align: right;">
                <div class="row">
                    
                    
                    <div class="col-xs-12 col-sm-4">
                        <div class="card">
                            <a class="img-card" href="Reglement_interieur_CF.php">
                            <img src="assets/image/reg_int.png"  style="object-fit: scale-down; background-color: lightgrey " />
                          </a>
                            <div class="card-content"  style="text-align: right;" dir="rtl">
                                <h4 class="card-title" dir="rtl">
                                    <a href="Reglement_interieur_CF.php" style="text-align: right;" dir="rtl"> النظام الداخلي لمركز التكوين 
                                  </a>
                                </h4>
                                <p class="">
                                    يجب على كل مترشح الالتزام بما ينص عليه النظام الداخلي لمركز التكوين 
                                </p>
                            </div>
                            <div class="card-read-more">
                                <a href="Reglement_interieur_CF.php" class="btn btn-link btn-block">
                                    الاطلاع على النظام الداخلي
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="card">
            <a  class="img-card"  href="info_formations_Capp.php">
                            
                            <img src="assets/image/infoo.png"  style="object-fit: scale-down; background-color: lightskyblue" />
                          </a>
                            <div class="card-content"  style="text-align: right;">
                                <h4 class="card-title">
            <a href="info_formations_Capp.php">
                                     الدورات التكوينية 
                                  </a>
                                </h4>
                                <p class="">
                                   للاطلاع على برنامج الدورة و قوائم المسجلين
                                </p>
                            </div>
                            <div class="card-read-more">
            <a  class="btn btn-link btn-block"  href="info_formations_Capp.php">
                                
                                    اقرأ المزيد
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="card">
                            <a class="img-card" data-toggle="modal" data-target="#exampleModal_ch" >
                            <img src="assets/image/Guide-PNG-File.png" style="object-fit: scale-down; background-color: aliceblue"  />
                          </a>
                            <div class="card-content"  style="text-align: right;">
                                <h4 class="card-title">
                                    <a data-toggle="modal" data-target="#exampleModal_ch" >
                                       دليل التكوين
                                  </a>
                                </h4>
                                <p class="">
                                        &nbsp;
                                        <br> &nbsp;
                                </p>
                            </div>
                            <div class="card-read-more">
                                <a data-toggle="modal" data-target="#exampleModal_ch"  class="btn btn-link btn-block">
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
      
        <div class="modal-body" style="width: 80%; color:black;width: 95%; margin: auto;">
            <div class="contain" style="direction: rtl;height: auto">
             <center> <div class="row">
            
            	<h3>دليل التكوين للحصول على  شهادة الكفاءة المهنية و البيداغوجية لتعليم سياقة السيارات  </h3><br>
                   <a  class="diagonalfill" target="_blank" download href="CentreFormation/Capp/Cours1.pdf">المقياس 1 التقنية الأساسية للمركبة ذات المحرك     </a> <br><br>
<a  class="diagonalfill" target="_blank" download href="CentreFormation/Capp/Cours2.pdf">المقياس 2 حركة المرور في الطرق</a> <br><br>
<a  class="diagonalfill" target="_blank" download href="CentreFormation/Capp/Cours3.pdf">المقياس 3 الوقاية والسلامة في الطرق</a> <br><br>
<a  class="diagonalfill" target="_blank" download href="CentreFormation/Capp/Cours4.pdf">المقياس 4 حسن سياقة السيارات</a> <br><br>
<a  class="diagonalfill" target="_blank" download href="CentreFormation/Capp/Cours5.pdf">المقياس 5 الاتصال وبيداغوجية السياقة</a> <br><br>
<a  class="diagonalfill" target="_blank" download href="CentreFormation/Capp/Cours6.pdf">المقياس 6  بعد النقل و الجانب التنظيمي المتعلق بالنقل</a> <br><br>
<a  class="diagonalfill" target="_blank" download href="CentreFormation/Capp/Cours7.pdf">المقياس 7 التسيير والاعلام الآلي</a> <br><br>

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
  html: "<form id='form' action='Formations_content.php' method='POST' onsubmit='valid()'><input type='text' id='pswd' name='pswd' placeholder='رمز المستخدم'><br><div id='err' hidden>يرجى ادخال رمز المستخدم</div><div id='wrong' hidden>رمز المستخدم خاطئ</div><br> <input type='submit' value=''></form>",
  showCancelButton: false,
  showConfirmButton: false,
  closeOnConfirm: false,
  animation: "slide-from-top",
})
  }
  function valid() {
    event.preventDefault();
  alert(document.getElementById("pswd").value);
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