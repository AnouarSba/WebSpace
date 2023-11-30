<!DOCTYPE html>
<html lang="en">

@include('head')

<body>

@include('header')
<style>
  body{
    background-color: #fefefe
  }
</style>
  <!-- ======= Testimonials Section ======= -->
  <section id="" class="main" style="top:50px; height:auto">
  <!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
<script src="{{ asset('assets/js/sweetalert.js') }}" ></script>

@if(session()->has('suc'))

<script>
    Swal.fire({
  icon: 'success',
  title: 'تهانينا',
  text: 'لقد تم التسجيل بنجاح',
  type: "success",
  animation: true,
  showConfirmButton: false,

  footer: '<a class="btn btn-primary" href="/pdf">طباعة الاستمارة </a>'
})

</script>
@endif
<br>
<br>
<br>

<div class="row justify-content-md-center">
<div class="row  col-10 shadow p-3 mb-5 bg-white rounded" style="direction:rtl; padding 10%;">
    <div id="container">
            <form action="/reg" method="POST" class=" needs-validation" novalidate>
              @csrf
              <div class="row justify-content-md-center ">
               
        <!--      https://laravel.com/docs/9.x/queries -->
             <div class="print" id="print">
             <center><h1 class="" style="color: #3d80e4">التسجيل الالكتروني </h1></center>


<div class="row ">
  
  <div class="col-sm-12 col-md-6 py-3 px-lg-5 text-right">
    <label for="validationCustom01">اللقب</label>
    <input type="text" name="firstname" class="form-control text-right" id="validationCustom01" placeholder="اللقب" required>
    <div class="invalid-feedback">
      يرجى تقديم اللقب
    </div>
  </div>
  <div class="col-sm-12 col-md-6 py-3 px-lg-5 text-right">
    <label for="validationCustom02">الاسم</label>
    <input type="text" name="lastname" class="form-control text-right" id="validationCustom02" placeholder="الاسم" required>
    <div class="invalid-feedback">
      يرجى تقديم الاسم
    </div>
  </div>

</div>


<div class="row">
  
  <div class="col-sm-12 col-md-6 py-3 px-lg-5 text-right">
    <label for="validationCustom03">مكان الميلاد</label>
    <input type="text" name="birthplace" class="form-control text-right" id="validationCustom03" placeholder="مكان الميلاد" required>
    <div class="invalid-feedback">
      يرجى تقديم مكان الميلاد
    </div>
  </div>
  <div class="col-sm-12 col-md-6 py-3 px-lg-5 text-right">
    <label for="validationCustom04">تاريخ الميلاد</label>
    <input type="date" name="birthdate" class="form-control text-right" name="dateofbirth" placeholder="تاريخ الميلاد" id="validationCustom04" required>
    <div class="invalid-feedback">
      يرجى تقديم تاريخ الميلاد
    </div>
  </div>

</div>


<div class="row">
  
  <div class="col-sm-12 col-md-6 py-3 px-lg-5 text-right">
    <label for="validationCustom05">المؤسسة المنتمي اليها</label>
    <input type="text" name="entreprise" class="form-control text-right" id="validationCustom05" placeholder="المؤسسة المنتمي اليها" required>
    <div class="invalid-feedback">
      يرجى تقديم المؤسسة المنتمي اليها
    </div>
  </div>
  <div class="col-sm-12 col-md-6 py-3 px-lg-5 text-right">
    <label for="validationCustom06">العنوان</label>
    <input type="text" name="address" class="form-control text-right" id="validationCustom06" placeholder="العنوان" required>
    <div class="invalid-feedback">
      يرجى تقديم العنوان
    </div>
  </div>

</div>

<div class="row">
  
  <div class="col-sm-12 col-md-6 py-3 px-lg-5 text-right offset-md-6">
    <label for="validationCustom07">التكوين المرغوب فيه</label>
      <select class="form-control text-right" name="training" id="validationCustom07" required>
        <option value="0" hidden>... اختر</option>
        <option value="1">نقل الاشخاص</option>
        <option value="2">نقل البضائع</option>
      </select>
    <div class="invalid-feedback">
      يرجى تقديم التكوين المرغوب فيه
    </div>
  </div>

</div>


<div class="row">
  
  <div class="col-sm-12 col-md-6 py-3 px-lg-5 text-right">
    <label for="validationCustom08">رقم الهاتف</label>
    <input type="text" name="phone" class="form-control text-right" id="validationCustom08" placeholder="رقم الهاتف" required>
    <div class="invalid-feedback">
      يرجى تقديم رقم الهاتف
    </div>
  </div>
  <div class="col-sm-12 col-md-6 py-3 px-lg-5 text-right">
    <label for="validationCustom09">البريد الالكتروني</label>
    <input type="email" name="mail" class="form-control text-right" id="validationCustom09" placeholder="name@example.com" required>
    <div class="invalid-feedback">
      يرجى تقديم البريد الالكتروني
    </div>
  </div>

</div>


<div class="row">
  
  <div class="col-sm-12 col-md-6 py-3 px-lg-5 text-right">

      <label for="validationCustom10">تاريخ صدور رخصة القيادة</label>
      <input type="date" name="drivinglicensedate" class="form-control text-right" id="validationCustom10" placeholder="تاريخ صدور رخصة القيادة" required>
      <div class="invalid-feedback">
       يرجى تقديم تاريخ صدور رخصة القيادة
      </div>

  </div>
  <div class="col-sm-12 col-md-6 py-3 px-lg-5 text-right">
    <label for="validationCustom11">رخصة السياقة</label>
    <input type="text" name="drivinglicense" class="form-control text-right" id="validationCustom11" placeholder="رخصة السياقة" required>
    <div class="invalid-feedback">
      يرجى تقديم رخصة السياقة
    </div>
  </div>

</div>


<div class="row">
  
  <div class="col-sm-12 col-md-6 py-3 px-lg-5 text-right">
    <label for="validationCustom12">بلدية صدور رخصة القيادة</label>
    <select class="form-control text-right" name="commune" id="validationCustom12" required>
        <option value="0" hidden>... اختر</option>
        @foreach($towns as $t)
        <option value="{{$t->id}}" >{{$t->name}}</option>

        @endforeach
      </select>
    <div class="invalid-feedback">
      يرجى تقديم بلدية صدور رخصة القيادة
    </div>
  </div>
  <div class="col-sm-12 col-md-6 py-3 px-lg-5 text-right">
    <label for="validationCustom13">صنف رخصة السياقة</label>
      <select class="form-control text-right" name="drivinglicenseclass" id="validationCustom13" required>
        <option value="0" hidden>... اختر</option>
        <option value="1">1ج</option>
        <option value="2">ج</option>
        <option value="3">1ر</option>
        <option value="4">2ج</option>
      </select>
    <div class="invalid-feedback">
      يرجى تقديم صنف رخصة السياقة
    </div>
  </div>

</div>
             </div>

                
              <div class="row">
                <div class="col-sm-12 col-md-6 py-3 px-lg-5 text-left">
                    <button class="btn btn-primary" name="save_client" type="submit">إرسال</button>
                </div>   
                <div class="col-sm-12 col-md-6 py-3 px-lg-5 text-right">
                    <button class="btn btn-primary" type="button" onclick="print()">طباعة</button>
                </div>
                               
              </div>

            </form>




                <!-- MESSAGES -->

                <?php if (isset($_SESSION['message'])) { ?>
                <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message']?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php session_unset(); } ?>


        </div>
  </div>
</div>

  




    </section><!-- End Testimonials Section -->

  @include('footer')  
  <script>
    function print() {

var divToPrint=document.getElementById('print');

var newWin=window.open('','Print-Window');

newWin.document.open();

newWin.document.write('<html><body onload="window.print()">'+divToPrint.innerHTML+'</body></html>');

newWin.document.close();

setTimeout(function(){newWin.close();},10);

}
  </script>
</body>
</html>




     
    