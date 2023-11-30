<!DOCTYPE html>
<html lang="en">
<head>
    <style type="text/css">
        
.alert {
  display: none;
  position: absolute;
  margin-top: 25px;
  right: 0px;
  width: 100%;
}
.alert .fa {
  margin-right: 0.5em;
}
    </style>
</head>
<?php
include 'head.php';

?> 

<body>

    <?php
include 'header.php';

?> 
    <!-- ======= Testimonials Section ======= -->
    <section id="" class="main" style="top:50px; height:auto">

        <br>
        <br>
        <div class="row col-12 justify-content-center" style="font-family: Aparajita;font-size: 25px;direction:rtl;">

            <center>
                <h1 class="" style="">دفتر المقاعد </h1>
                 <!--  <a href="#" class="link sendButton">المرجع</a>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <button type="button" class="close" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <p><i class="fa fa-check-circle"></i>القرار الوزاري المؤرخ في 19مايو 2016 المحدد لشروط و كيفيات التكوين للحصول على شهادة الكفاءة المهنية لسائقي مركبات نقل الأشخاص و البضائع المعدل و المتمم بالقرار الوزاري المؤرخ في 11 أفريل 2021</p>
</div> -->
            </center>
            <div class="" style="text-align: center;font-family: Aparajita;font-size: 25px">
                <p> </p>
            </div>



            <div id="accordion" class=" col-10 shadow p-3 mb-5 bg-white rounded"
                style="font-family: Aparajita;font-size: 25px;direction:rtl;width:90%;">
                <div class="card-header" id="headingOne" style="direction:rtl;text-align: right;font-size: 28px;">
                    <h5 class="mb-0 mr-0">
                        <button class="btn btn-link collapsed d1" data-toggle="collapse"
                            style="direction:rtl;text-align: right;font-size: 28px;" data-target="#collapseOne"
                            aria-expanded="true" aria-controls="collapseOne">
                            المرسوم التنفيذي رقم 12-230 المؤرخ في 24 مايو 2012 المتضمن تنظيم النقل بواسطة سيارات الأجرة</button>
                    </h5>
                </div>

                <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body row" style="direction:rtl;text-align: right;">
                        <div class=" row col-12" style="padding:3%;direction:rtl;text-align: right;">
                                  <embed src="assets/pdf/12_230.pdf" width=900 height=700 type='application/pdf'/>


                        </div>
                        
                    </div>
                </div>
                <div class="card-header" style="direction:rtl;text-align: right;" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed d2"
                            style="direction:rtl;text-align: right;font-size: 28px;" data-toggle="collapse"
                            data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                             المرسوم التنفيذي رقم 16-82 المؤرخ في 01 مارس 2016 </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body justify-content-center" style="direction:rtl;text-align: right;">
                        <div class="col-12 justify-content-center" style="padding:3%">
                            
                            المعدل والمتمم للمرسوم التنفيذي رقم 12-230المتضمن تنظيم النقل بواسطة سيارات الأجرة 
                                  <embed src="assets/pdf/16_82.pdf" width=900 height=700 type='application/pdf'/>

                        </div>
                    </div>
                </div>
                <div class="card-header" style="direction:rtl;text-align: right;" id="heading3">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed d3"
                            style="direction:rtl;text-align: right;font-size: 28px;" data-toggle="collapse"
                            data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                            
                                 قرار مؤرخ في 11 ذي القعدة عام 1437 الموافق 14 غشت سنة 2016

                        </button>
                    </h5>
                </div>
                <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion">
                    <div class="card-body justify-content-center" style="direction:rtl;text-align: right;">
                        <div class="row">
                            <div class="col-12 justify-content-center" style="padding:3%">
                               <ul>
                                <li> -تضمن دفتر الشروط المتعلق بشروط وكيفيات استغلال خدمة سيارة الأجرة</li>
                                <li> -سيارة الأجرةيحدد شروط وكيفيات تسليم دفتر المقاعد للنقل بواسطة </li>
                                <li> -يحدد نماذج الوثائق المرتبطة بممارسة النقل بواسطة سيارة الأجرة</li>
                               </ul>
                                 <embed src="assets/pdf/2016.pdf" width=900 height=700 type='application/pdf'/>

                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <!-- <div class="col-6">
      <img src="assets/image/m_17_2.jpg" alt="" width="100%" height="100%">

      </div> -->
                           
                        </div>


                    </div>
                </div>
                
          

            </div>



        </div>
        </div>
        </div>

        </div>


        </div>


    </section><!-- End Testimonials Section -->

    <?php
include 'footer.php';

?> 
    <script>
    $(".sendButton").click(function(){
  $(".alert").show('medium');
  setTimeout(function(){
    $(".alert").hide('medium');
  }, 10000);
});
$(".sendButton .close").click(function(){
    $(".alert").hide('medium');
});
    </script>
</body>

</html>