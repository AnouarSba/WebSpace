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

            <center>
                <h1 class="" style="color: #3d80e4">
                    نشاطات المؤسسة </h1>
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
                            إعادة تجديد الحافلات </button>
                    </h5>
                </div>

                <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body row" style="direction:rtl;text-align: right;">
                        <div class=" row col-12" style="padding-top:8%;direction:rtl;text-align: right;">

                            في إطار تحسين الخدمة العمومية أطلقت المؤسسة العمومية للنقل الحضري و شبه الحضري سيدي بلعباس
                            عملية تجديد حافلاتها إبتداء من شهر جوان 2022 , حيث تضمنت عملية التجديد الآتي:

                            <br>- طلاء الحافلات <br>

                            - إعادة تجديد الكراسي <br>

                            - الإحتفاء بالذكرى الستون لإستقلال الجزائر من خلال وضع ملصقات مخلدة لهذه الذكرى بالحافلات
                            <br>

                            * حيث ستتواصل عملية التجديد مستقبلا لتشمل باقي حافلات المؤسسة
                            </p>

                        </div>
                        <div class="row">
                            <img src="{{ asset('assets/image/bus_up.jpg') }}" alt="" width="80%" height="100%">

                        </div>
                    </div>
                </div>
                <div class="card-header" style="direction:rtl;text-align: right;" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed d2"
                            style="direction:rtl;text-align: right;font-size: 28px;" data-toggle="collapse"
                            data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            تكوين عمال المؤسسة </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body justify-content-center" style="direction:rtl;text-align: right;">
                        <div class="col-12 justify-content-center" style="padding:4%">
                            <p style="text-align: center; font-size: 25px;">
                                نظمت المؤسسة العمومية للنقل الحضري و الشبه حضري لمدينة سيدي بلعباس خلال شهر مارس 2022
                                <br>دورة تكوينية لصالح جميع عمال المؤسسة حول الاسعافات الأولية و التدخلات الاستعجالية
                                الوقائية واطفاء الحريق <br>لحماية ممتلكات المؤسسة.


                            </p>
                            <div class="row justify-content-center">
                                <div class="col-10">
                                    <img src="{{ asset('assets/image/centre/1.jpg') }}" alt="" width="100%"
                                        height="90%">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-header" style="direction:rtl;text-align: right;" id="heading3">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed d3"
                            style="direction:rtl;text-align: right;font-size: 28px;" data-toggle="collapse"
                            data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                            استغلال المحطة الحضرية رقم 17
                        </button>
                    </h5>
                </div>
                <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion">
                    <div class="card-body justify-content-center" style="direction:rtl;text-align: right;">
                        <div class="row">
                            <div class="col-12 justify-content-center" style="padding:4%">
                                في إطار تحسين الخدمه العموميه لساكنه سيدي بلعباس انطلقت المؤسسة العمومية للنقل الحضري و
                                شبه الحضري لولاية سيدي بلعباس في استغلال المحطة الحضرية رقم 17 ابتداءا من تاريخ
                                09/11/2022 والتي ستتخصص لانطلاق الحافلات عبر المسارات الحضرية. حيث قامت المؤسسة بتوفير
                                واقيات الحافلات وكشك تجاري لصالح زبائنها الكرام.
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <!-- <div class="col-6">
      <img src="{{ asset('assets/image/m_17_2.jpg') }}" alt="" width="100%" height="100%">

      </div> -->
                            <div class="col-10">
                                <img src="{{ asset('assets/image/gch.jpg') }}" alt="" width="100%" height="100%">

                            </div>
                        </div>


                    </div>
                </div>
                <div class="card-header" style="direction:rtl;text-align: right;" id="heading4">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed d4"
                            style="direction:rtl;text-align: right;font-size: 28px;" data-toggle="collapse"
                            data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                            الوقوف دقيقة صمت تخليدا لأرواح شهداء مجازر 17 أكتوبر 1961 </button>
                    </h5>
                </div>
                <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion">
                    <div class="card-body justify-content-center" style="direction:rtl;text-align: right;">
                        <div class="row col-12 justify-content-center" style="padding:4%">
                            بتاريخ 17 أكتوبر 2022 وقف بمقر المؤسسة و بالمحطات الحضرية عمال و إطارات المؤسسة دقيقة صمت
                            ترحما على أرواح الشهداء بمناسبة اليوم الوطني للهجرة المُخلّد لمظاهرات 17 أكتوبر 1967. </div>
                    </div>
                    <div class="row">
                        <img src="{{ asset('assets/image/min_s.jpg') }}" alt="" width="80%" height="100%">

                    </div>
                </div>
                <div class="card-header" style="direction:rtl;text-align: right;" id="heading5">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed d5"
                            style="direction:rtl;text-align: right;font-size: 28px;" data-toggle="collapse"
                            data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                            اطلاق عملية الدفع الالكتروني لتذكرة الحافلة </button>
                    </h5>
                </div>
                <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordion">
                    <div class="card-body justify-content-center" style="direction:rtl;text-align: right;">
                        <div class="row col-12 justify-content-center" style="padding:4%">
                            في إطار الاحتفالات بعيد ثورة نوفمبر المجيد و بتاريخ 31اكتوبر 2022 اعطى السيد والي ولايه سيدي
                            بلعباس بالمحطة الحضريه رقم 17 اشاره انطلاق الدفع الالكتروني لتذكرة الحافلة عبر بطاقه و تطبيق
                            رحلات على مستوى حافلات المؤسسة.
                        </div>
                        <div class="row">
                            <img src="{{ asset('assets/image/py_elec.jpg') }}" alt="" width="80%" height="100%">

                        </div>
                    </div>
                </div>
                <div class="card-header" style="direction:rtl;text-align: right;" id="heading6">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed d6"
                            style="direction:rtl;text-align: right;font-size: 28px;" data-toggle="collapse"
                            data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                            إنشاء شبكة حريق نظامية
                        </button>
                    </h5>
                </div>
                <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordion">
                    <div class="card-body justify-content-center" style="direction:rtl;text-align: right;">

                        <div class="row col-12 justify-content-center" style="">
                            <div class="col-7" style="height:500px">
                                <div class="row">
                                    في إطار حماية ممتلكات المؤسسة و لأجل تدعيم أنظمة السلامة والوقاية أنشأت مصالح
                                    المؤسسة خلال سنة 2022 شبكة حريق نظامية بمقر المؤسسة تتضمن مجموعة من خراطيم
                                    المياه وأعمدة الحريق تغطي كافة حظيرة المؤسسة.
                                </div>
                                <br>
                                <div class="row">
                                    <img src="{{ asset('assets/image/i6.jpg') }}" alt="" width="80%" height="100%">
                                </div>
                            </div>
                            <div class="col-5" style="height:500px">
                                <img src="{{ asset('assets/image/i3.jpg') }}" alt="" width="80%" height="95%">

                            </div>
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

    @include('footer')
    <script>
    $('.d' + window.location.href.split('/').pop()).click();
    </script>
</body>

</html>