<!DOCTYPE html>
<html lang="en">

@include('head')

<body>

@include('header')
  <!-- ======= Testimonials Section ======= -->
  <section id="" class="main" style="top:50px; height:auto">

<br>
<br>
<div class="row col-12 justify-content-center" style="font-family: Aparajita;font-size: 25px;direction:rtl;">
    
    <center><h1 class="" style="color: #3d80e4">نظام الاستغلال
 </h1></center>
        <div class="" style="text-align: center;font-family: Aparajita;font-size: 25px">
    </div>
   
  

        <div id="accordion" class=" col-10 shadow p-3 mb-5 bg-white rounded" style="font-family: Aparajita;font-size: 25px;direction:rtl;width:90%;">
    <div class="card-header" id="headingOne" style="direction:rtl;text-align: right;font-size: 28px;">
      <h5 class="mb-0 mr-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" style="direction:rtl;text-align: right;font-size: 28px;" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        تعريف نظام الاستغلال      </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse " aria-labelledby="headingOne"  style="direction:rtl;" data-parent="#accordion">
      <div class="card-body row"  style="direction:rtl;text-align: right;">
      <div class="col-6" style="padding-top:8%">
      يتضمن مجموعة من الارشادات و الممنوعات موجهة للزبائن المستغلين لحافلات
المؤسسة عبر شبكة الاستغلال.


      </div>
      <div class="col-6">
      <video width="650" height="400" controls="" >
  <source src="{{ asset('assets/video/exploita.mp4') }}" type="video/mp4">
  <source src="movie.ogg" type="video/ogg">

</video>
      </div>
      </div>
    </div>
    <div class="card-header"  style="direction:rtl;text-align: right;" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" style="direction:rtl;text-align: right;font-size: 28px;" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        الهدف من نظام الاستغلال
       </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body justify-content-center"  style="direction:rtl;text-align: right;">
      <div class="col-12 justify-content-center"  style="padding:4%">
      هو تلبية احتياجات المواطنين في ميدان النقل الحضري ضمن شروط لائـــقة ترتكز على معايير
الأمن ، الراحة ، الوقـت ، تسـعيرة غير مكـلفة و معاملة حسنة ، و مـن أجل القيام بهذه المهمة
بصفة جيدة لخدمة الصالح العام ، فإن المؤسـسة مؤهـلة لاتخــاذ كــل التدابير التي تسـمح بالحـفاظ
على وسائل النقل و المنشأة و ضـمان رفاهـية و أمن مسـتعملي الحـافـلات بالشروط المحددة بهذا النظام.


      </div>
          </div>
    </div>
    <div class="card-header"  style="direction:rtl;text-align: right;" id="heading3">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" style="direction:rtl;text-align: right;font-size: 28px;" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
        تحميل نظام الاستغلال
       </button>
      </h5>
    </div>
    <div id="collapse3" class="collapse  justify-content-center" aria-labelledby="heading3" data-parent="#accordion">
      <div class="card-body justify-content-center"  style="direction:rtl;text-align: right;">
      <div class="col-12 justify-content-center"  style="padding:4%">
      <embed src="{{ asset('assets/pdf/nidam.pdf') }}" width=900 height=700 type='application/pdf'/>


      </div>
          </div>
    </div>
</div>    
  

</div>


    </section><!-- End Testimonials Section -->

  @include('footer')  
</body>
</html>




     
    