<!DOCTYPE html>
<html lang="en">

<?php
include 'head.php';

?> 
<style>
/*** Service Tab Listing ***/
.service-tab-nav {
    box-shadow: 0px 0px 40px 0px rgba(0, 0, 0, .08);
    background-color: #fff;
}

.service-tab-nav li {
    border-bottom: 1px solid #e7e7e7;
}

.service-tab-nav li a {
    display: block;
    color: #333;
    padding: 30px;
    -webkit-transition: all .8s cubic-bezier(.19, 1, .22, 1) 0ms;
    -moz-transition: all .8s cubic-bezier(.19, 1, .22, 1) 0ms;
    -ms-transition: all .8s cubic-bezier(.19, 1, .22, 1) 0ms;
    -o-transition: all .8s cubic-bezier(.19, 1, .22, 1) 0ms;
    transition: all .8s cubic-bezier(.19, 1, .22, 1) 0ms;
    font-weight: bold;
    position: relative;
    z-index: 0;
    overflow: hidden;
}

.service-tab-nav li a:before {
    position: absolute;
    left: -77px;
    top: -31px;
    width: 128px;
    height: 225px;
    background-color: #f3f3f3;
    content: "";
    -webkit-transform: rotate(-345deg);
    -moz-transform: rotate(-345deg);
    -ms-transform: rotate(-345deg);
    -o-transform: rotate(-345deg);
    transform: rotate(-345deg);
    -webkit-transition: all .6s cubic-bezier(.19, 1, .22, 1) 0ms;
    -moz-transition: all .6s cubic-bezier(.19, 1, .22, 1) 0ms;
    -ms-transition: all .6s cubic-bezier(.19, 1, .22, 1) 0ms;
    -o-transition: all .6s cubic-bezier(.19, 1, .22, 1) 0ms;
    transition: all .6s cubic-bezier(.19, 1, .22, 1) 0ms;
    z-index: -1;
}

.service-tab-nav li a:hover,
.service-tab-nav li a:focus,
.service-tab-nav li a:active,
.service-tab-nav li a.active {
    background-color: #3d80e4;
    color: #fff;
}

.service-tab-nav li a:hover:before,
.service-tab-nav li a:focus:before,
.service-tab-nav li a:active:before,
.service-tab-nav li a.active:before {
    background-color: blue;
    -webkit-transform: rotate(-345deg) translate3d(30px, 0, 0);
    -moz-transform: rotate(-345deg) translate3d(30px, 0, 0);
    -ms-transform: rotate(-345deg) translate3d(30px, 0, 0);
    -o-transform: rotate(-345deg) translate3d(30px, 0, 0);
    transform: rotate(-345deg) translate3d(30px, 0, 0);
}

/*** Service Tab Content ***/
.service-tab-content {
    display: none;
}

.service-tab-content.show {
    display: block;
}

/* Common Tab */
/** Start: to style navigation tab **/
.nav {
    margin-bottom: 18px;
    margin-left: 0;
    list-style: none;
}

.nav>li>a {
    display: block;
}

.nav-tabs {
    *zoom: 1;
}

.nav-tabs:before,
.nav-tabs:after {
    display: table;
    content: "";
}

.nav-tabs:after {
    clear: both;
}

.nav-tabs>li {
    float: left;
}

.nav-tabs>li>a {
    padding-right: 12px;
    padding-left: 12px;
    margin-right: 2px;
    line-height: 14px;
}

.nav-tabs {
    border-bottom: 1px solid #ddd;
}

.nav-tabs>li {
    margin-bottom: -1px;
}

.nav-tabs>li>a {
    padding-top: 8px;
    padding-bottom: 8px;
    line-height: 18px;
    border: 1px solid transparent;
    -webkit-border-radius: 4px 4px 0 0;
    -moz-border-radius: 4px 4px 0 0;
    border-radius: 4px 4px 0 0;
}

.nav-tabs>li>a:hover {
    border-color: #eeeeee #eeeeee #dddddd;
}

.nav-tabs>.active>a,
.nav-tabs>.active>a:hover {
    color: #555555;
    cursor: default;
    background-color: #ffffff;
    border: 1px solid #ddd;
    border-bottom-color: transparent;
}

li {
    line-height: 18px;
}

.tab-content.active {
    display: block;
}

.tab-content.hide {
    display: none;
}

.zoom {
    transition: transform .2s;
    /* Animation */

    margin: 0 auto;
}

.zoom:hover {
    transform: scale(1.5);
    z-index: 1009;
    left: 50%
        /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}

.section-center {
    width: auto;
    margin: 2px auto;
    max-width: 1170px;
    min-width: 340px;
    padding: 1.5rem 0;
}

.btn-container {
    width: 500px;
    display: flex;
    gap: 20px;
}

.button {
    border: none;
    font-size: 1rem;
    background: #023047;
    color: #fff;
    font-family: vazir;
    border-radius: 5px;
    cursor: pointer;
    width: 100px;
    height: 30px
}

.button1 {
    border: none;
    font-size: 1rem;
    background: #023047;
    color: #fff;
    font-family: vazir;
    border-radius: 5px;
    cursor: pointer;
    width: 100px;
    height: 30px
}

.tabs-content {
    width: auto;
    height: auto;
    margin-top: 0px;
    padding: 0 1.5rem;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: rgba(0, 0, 0, 0.1) 0px 20px 25px -5px, rgba(0, 0, 0, 0.04) 0px 10px 10px -5px;
}

/* hide content */
.content {
    margin-top: 25px;
    padding: 5px;
    display: none;
}

.button.live {
    background: #ffffff;
    border-top: 5px solid #3d80e4;
    color: #023047;
}

.content.live {
    display: block;
}

.content1 {
    margin-top: 25px;
    padding: 5px;
    display: none;
}

.button1.live {
    background: #ffffff;
    border-top: 5px solid #3d80e4;
    color: #023047;
}

.content1.live {
    display: block;
}

.content2 {
    margin-top: 25px;
    padding: 5px;
    display: none;
}

.button2.live {
    background: #ffffff;
    border-top: 5px solid #3d80e4;
    color: #023047;
}

.content2.live {
    display: block;
}

.button2 {
    border: none;
    font-size: 1rem;
    background: #023047;
    color: #fff;
    font-family: vazir;
    border-radius: 5px;
    cursor: pointer;
    width: 100px;
    height: 30px
}

.content3 {
    margin-top: 25px;
    padding: 5px;
    display: none;
}

.button3.live {
    background: #ffffff;
    border-top: 5px solid #3d80e4;
    color: #023047;
}

.content3.live {
    display: block;
}

.button3 {
    border: none;
    font-size: 1rem;
    background: #023047;
    color: #fff;
    font-family: vazir;
    border-radius: 5px;
    cursor: pointer;
    width: 100px;
    height: 30px
}

.content4 {
    margin-top: 25px;
    padding: 5px;
    display: none;
}

.button4.live {
    background: #ffffff;
    border-top: 5px solid #3d80e4;
    color: #023047;
}

.content4.live {
    display: block;
}

.button4 {
    border: none;
    font-size: 1rem;
    background: #023047;
    color: #fff;
    font-family: vazir;
    border-radius: 5px;
    cursor: pointer;
    width: 100px;
    height: 30px
}

.content5 {
    margin-top: 25px;
    padding: 5px;
    display: none;
}

.button5.live {
    background: #ffffff;
    border-top: 5px solid #3d80e4;
    color: #023047;
}

.content5.live {
    display: block;
}

.button5 {
    border: none;
    font-size: 1rem;
    background: #023047;
    color: #fff;
    font-family: vazir;
    border-radius: 5px;
    cursor: pointer;
    width: 100px;
    height: 30px
}

.content6 {
    margin-top: 25px;
    padding: 5px;
    display: none;
}

.button6.live {
    background: #ffffff;
    border-top: 5px solid #3d80e4;
    color: #023047;
}

.content6.live {
    display: block;
}

.button6 {
    border: none;
    font-size: 1rem;
    background: #023047;
    color: #fff;
    font-family: vazir;
    border-radius: 5px;
    cursor: pointer;
    width: 100px;
    height: 30px
}

.content7 {
    margin-top: 25px;
    padding: 5px;
    display: none;
}

.button7.live {
    background: #ffffff;
    border-top: 5px solid #3d80e4;
    color: #023047;
}

.content7.live {
    display: block;
}

.button7 {
    border: none;
    font-size: 1rem;
    background: #023047;
    color: #fff;
    font-family: vazir;
    border-radius: 5px;
    cursor: pointer;
    width: 100px;
    height: 30px
}

.content8 {
    margin-top: 25px;
    padding: 5px;
    display: none;
}

.button8.live {
    background: #ffffff;
    border-top: 5px solid #3d80e4;
    color: #023047;
}

.content8.live {
    display: block;
}

.button8 {
    border: none;
    font-size: 1rem;
    background: #023047;
    color: #fff;
    font-family: vazir;
    border-radius: 5px;
    cursor: pointer;
    width: 100px;
    height: 30px
}

</style>

<body>

    <?php
include 'header.php';

?> 
    <!-- ======= Testimonials Section ======= -->
    <section id="" class="main" style="top:120px; height:auto">

        <br>
        <br>
        <div class="row col-12 justify-content-center"
            style="top:50px;font-family: Aparajita;font-size: 25px;direction:rtl;">


            <center>
                <h1 class="" style="color: #3d80e4">الأوقات

                </h1>
            </center>
            <div class="" style="text-align: center;font-family: Aparajita;font-size: 25px">
                أوقات الانطلاق من محطات النقل الحضري  الى كافة المسارات


            </div>

            <section class="serice-tab">
                <div id="chart-container" class="container" style="width:100%;height:100%">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-4">
                            <ul style="list-style-type: none;" class="service-tab-nav services-list-tab">
                                <!-- <li><a href="#tab-one" title="Tab">شبكة الاستغلال</a></li> -->
                                <li><a class="active" href="#tabs8" id="tab8" title="Tab">الحافلة السياحية</a></li>
                                <li><a href="#tab-two" id="tab3" title="Tab">الخط رقم 03B</a></li>
                                <li><a href="#tab-four" id="tab9" title="Tab">الخط رقم 09</a></li>
                                <li><a href="#tab-three" id="tab16" title="Tab">الخط رقم 16</a></li>
                                <li><a href="#tab-five" id="tab11" title="Tab">الخط رقم 11</a></li>
                                <li><a href="#tab-6" id="tab25" title="Tab">الخط رقم 25</a></li>
                                <li><a href="#tab-7" id="tab26" title="Tab">الخط رقم 26</a></li>
                                <li><a href="#tab-8" id="tab27" title="Tab">الخط رقم 27</a></li>
                                <li><a href="#tab-9" id="tab28" title="Tab">الخط رقم 28</a></li>
                            </ul>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-8">
                            <div class="service-tab-wrapper">
                                <!-- <div id="tab-one" class="service-tab-content show">
            <h4 style="font-size:24px;margin-top:15px">شبكة الاستغلال</h4>
      <img src="assets/image/rg.jpg" alt="" width="100%" height="100%">
      <img class="zoom" src="assets/image/tab.jpg"alt="" width="100%" height="100%">
          </div> -->

                                <div id="tabs8" class="service-tab-content show">
                                    <h4 style="font-size:24px;margin-top:15px"> القبة السماوية (وسط المدينة) <i
                                            class="bi bi-caret-right-fill"></i>
                                        <i class="bi bi-caret-left-fill"></i>
                                        بحيرة سيدي محمد بن علي
                                    </h4>
                                    <div class="section-center">
                                        <div class="tabs8">
                                            <!-- btn container -->
                                            <div class="btn-container">
                                                <button class="button8 live" data-id="step21">الذهاب</button>
                                                <button class="button8" data-id="step22">الإياب</button>
                                            </div>
                                            <div class="tabs-content">
                                                <!-- single item -->
                                                <div class="content8 live" id="step21">
                                                    الجمعة
                                                    <table class="table table-bordered">
                                                        <thead class="" style="background-color:#3d80e4">
                                                            <tr>
                                                                <th colspan="5"> مواقيت الانطلاق من  القبة السماوية
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td style="direction:ltr;">14 H 15</td>
                                                                <td style="direction:ltr;">15 H 15</td>
                                                                <td style="direction:ltr;">16 H 25</td>
                                                                <td style="direction:ltr;">17 H 35</td>
                                                                <td style="direction:ltr;">18 H 45</td>
                                                            </tr>
                                                           
                                                            
                                                        </tbody>
                                                    </table>
السبت
                                                    <table class="table table-bordered">
                                                        <thead class="" style="background-color:#3d80e4">
                                                            <tr>
                                                                <th colspan="6"> مواقيت الانطلاق من  القبة السماوية
                                                                </th> 
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td style="direction:ltr;">13 H 00</td>
                                                                <td style="direction:ltr;">14 H 10</td>
                                                                <td style="direction:ltr;">15 H 25</td>
                                                                <td style="direction:ltr;">16 H 35</td>
                                                                <td style="direction:ltr;">17 H 40</td>
                                                                <td style="direction:ltr;">18 H 45</td>
                                                            </tr>
                                                           
                                                            
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- end of single item -->
                                                <!-- single item -->
                                                <div class="content8" id="step22">
                                                    الجمعة
                                                    <table class="table table-bordered">
                                                        <thead class="" style="background-color:#3d80e4">
                                                            <tr>
                                                                <th colspan="5"> مواقيت الانطلاق من بحيرة  سيدي محمد بن علي
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td style="direction:ltr;">14 H 45</td>
                                                                <td style="direction:ltr;">15 H 50</td>
                                                                <td style="direction:ltr;">17 H 00</td>
                                                                <td style="direction:ltr;">18 H 10</td>
                                                                <td style="direction:ltr;">19 H 20</td>
                                                            </tr>
                                                            
                                                        </tbody>
                                                    </table>
                                                    السبت
                                                    <table class="table table-bordered">
                                                        <thead class="" style="background-color:#3d80e4">
                                                            <tr>
                                                                <th colspan="6"> مواقيت الانطلاق من بحيرة  سيدي محمد بن علي
                                                                </th> 
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td style="direction:ltr;">13 H 35</td>
                                                                <td style="direction:ltr;">14 H 50</td>
                                                                <td style="direction:ltr;">16 H 00</td>
                                                                <td style="direction:ltr;">17 H 10</td>
                                                                <td style="direction:ltr;">18 H 15</td>
                                                                <td style="direction:ltr;">19 H 20</td>
                                                            </tr>
                                                            
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- end of single item -->
                                                <!-- single item -->

                                                <!-- end of single item -->
                                            </div>
                                        </div>
                                    </div>

                                </div>




                                <div id="tab-two" class="service-tab-content ">
                                    <h4 style="font-size:24px;margin-top:15px"> المحطة رقم 17 <i
                                            class="bi bi-caret-right-fill"></i>
                                        <i class="bi bi-caret-left-fill"></i>
                                        حي 800 مسكن (طريق تسالة)
                                    </h4>
                                    <div class="section-center">
                                        <div class="tabs">
                                            <!-- btn container -->
                                            <div class="btn-container">
                                                <button class="button live" data-id="step1">الذهاب</button>
                                                <button class="button" data-id="step2">الإياب</button>
                                            </div>
                                            <div class="tabs-content">
                                                <!-- single item -->
                                                <div class="content live" id="step1">
                                                    <table class="table table-bordered">
                                                        <thead class="" style="background-color:#3d80e4">
                                                            <tr>
                                                                <th > وقت الانطلاق 
                                                                </th>
                                                                <th> المحطة رقم 17 </th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>وقت الانطلاق  -1-</td> <td style="direction:ltr;">07 H 25</td> </tr>
                                                                <tr>
                                                                <td>وقت الانطلاق  -2-</td> <td style="direction:ltr;">07 H 55</td> </tr>
                                                                <td>وقت الانطلاق  -3-</td> <td style="direction:ltr;">08 H 20</td> </tr>
                                                                <td>وقت الانطلاق  -4-</td> <td style="direction:ltr;">08 H 50</td> </tr>
                                                                <td>وقت الانطلاق  -5-</td> <td style="direction:ltr;">09 H 20</td> </tr>
                                                                <td>وقت الانطلاق  -6-</td> <td style="direction:ltr;">09 H 45</td> </tr>
                                                            <tr>
                                                                <td>وقت الانطلاق  -7-</td> <td style="direction:ltr;">10 H 15</td> </tr>
                                                                <td>وقت الانطلاق  -8-</td> <td style="direction:ltr;">10 H 45</td> </tr>
                                                                <td>وقت الانطلاق  -9-</td> <td style="direction:ltr;">11 H 15</td> </tr>
                                                                <td>وقت الانطلاق  -10</td> <td style="direction:ltr;">11 H 45</td> </tr>
                                                                <td>وقت الانطلاق  -11-</td> <td style="direction:ltr;">12 H 15</td> </tr>
                                                            </tr>
                                                            <tr>
                                                                <td>وقت الانطلاق  -12-</td> <td style="direction:ltr;">12 H 45</td> </tr>
                                                                <td>وقت الانطلاق  -13-</td> <td style="direction:ltr;">13 H 15</td> </tr>
                                                                <td>وقت الانطلاق  -14-</td> <td style="direction:ltr;">13 H 45</td> </tr>
                                                                <td>وقت الانطلاق  -15-</td> <td style="direction:ltr;">14 H 15</td> </tr>
                                                                <td>وقت الانطلاق  -16-</td> <td style="direction:ltr;">14 H 45</td> </tr>
                                                            </tr>
                                                            <tr>
                                                                <td>وقت الانطلاق  -17-</td> <td style="direction:ltr;">15 H 15</td> </tr>
                                                                <td>وقت الانطلاق  -18-</td> <td style="direction:ltr;">15 H 45</td> </tr>
                                                                <td>وقت الانطلاق  -19-</td> <td style="direction:ltr;">16 H 15</td> </tr>
                                                                <td>وقت الانطلاق  -20-</td> <td style="direction:ltr;">16 H 45</td> </tr>
                                                                <td>وقت الانطلاق  -21-</td> <td style="direction:ltr;">17 H 15</td> </tr>
                                                                <td>وقت الانطلاق  -22-</td> <td style="direction:ltr;">17 H 45</td> </tr>

                                                                <td>وقت الانطلاق  -23-</td> <td style="direction:ltr;">18 H 15</td> </tr>
                                                                <td>وقت الانطلاق  -24-</td> <td style="direction:ltr;">18 H 45</td>
                                                                <td>وقت الانطلاق  -25-</td> <td style="direction:ltr;">19 H 20</td> </tr>
                                                            </tr>
                                                            
                                                        </tbody>
                                                    </table>

                                                </div>
                                                <!-- end of single item -->
                                                <!-- single item -->
                                                <div class="content" id="step2">
                                                    <table class="table table-bordered">
                                                        <thead class="" style="background-color:#3d80e4">
                                                            <tr>
                                                                <th > وقت العودة  
                                                                </th>
                                                                <th>حي 800 مسكن</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                               <td>وقت العودة -1- </td> <td style="direction:ltr;">07 H 25</td></tr><tr>
                                                               <td>وقت العودة -2- </td> <td style="direction:ltr;">07 H 50</td></tr>
                                                               <td>وقت العودة -3- </td> <td style="direction:ltr;">08 H 25</td></tr>
                                                               <td>وقت العودة -4- </td> <td style="direction:ltr;">08 H 50</td></tr>
                                                               <td>وقت العودة -5- </td> <td style="direction:ltr;">09 H 20</td></tr>
                                                               <td>وقت العودة -6- </td> <td style="direction:ltr;">09 H 50</td></tr>
                                                            </tr>
                                                            <tr>
                                                               <td>وقت العودة -7- </td> <td style="direction:ltr;">10 H 15</td></tr>
                                                               <td>وقت العودة -8- </td> <td style="direction:ltr;">10 H 45</td></tr>
                                                               <td>وقت العودة -9- </td> <td style="direction:ltr;">11 H 15</td></tr>
                                                               <td>وقت العودة -10- </td> <td style="direction:ltr;">11 H 45</td></tr>
                                                               <td>وقت العودة -11- </td> <td style="direction:ltr;">12 H 15</td></tr>
                                                            </tr>
                                                            <tr>
                                                               <td>وقت العودة -12- </td> <td style="direction:ltr;">12 H 45</td></tr>
                                                               <td>وقت العودة -13- </td> <td style="direction:ltr;">13 H 15</td></tr>
                                                               <td>وقت العودة -14- </td> <td style="direction:ltr;">13 H 45</td></tr>
                                                               <td>وقت العودة -15- </td> <td style="direction:ltr;">14 H 15</td></tr>
                                                               <td>وقت العودة -16- </td> <td style="direction:ltr;">14 H 45</td></tr>
                                                            </tr>
                                                            <tr>
                                                               <td>وقت العودة -17- </td> <td style="direction:ltr;">15 H 15</td></tr>
                                                               <td>وقت العودة -18- </td> <td style="direction:ltr;">15 H 45</td></tr>
                                                               <td>وقت العودة -19- </td> <td style="direction:ltr;">16 H 15</td></tr>

                                                               <td>وقت العودة -20- </td> <td style="direction:ltr;">16 H 45</td></tr>
                                                               <td>وقت العودة -21- </td> <td style="direction:ltr;">17 H 15</td></tr>
                                                               <td>وقت العودة -22- </td> <td style="direction:ltr;">17 H 45</td></tr>

                                                               <td>وقت العودة -23- </td> <td style="direction:ltr;">18 H 15</td></tr>
                                                               <td>وقت العودة -24- </td> <td style="direction:ltr;">18 H 45</td><td>وقت العودة -25- </td> <td style="direction:ltr;">19 H 15</td></tr>
                                                            </tr>
                                                            
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- end of single item -->
                                                <!-- single item -->

                                                <!-- end of single item -->
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div id="tab-four" class="service-tab-content">
                                    <h4 style="font-size:24px;margin-top:15px">المحطة رقم 17 <i
                                            class="bi bi-caret-right-fill"></i>
                                        <i class="bi bi-caret-left-fill"></i>
                                        حي الاخوة عدنان (الصخرة)
                                    </h4>
                                    <div class="section-center">
                                        <div class="tabs2">
                                            <!-- btn container -->
                                            <div class="btn-container">
                                                <button class="button2 live" data-id="step3">الذهاب</button>
                                                <button class="button2" data-id="step4">الإياب</button>
                                            </div>
                                            <div class="tabs-content">
                                                <!-- single item -->
                                                <div class="content2 live" id="step3">
                                                    <table class="table table-bordered">
                                                        <thead class="" style="background-color:#3d80e4">
                                                            <tr>
                                                                <th>وقت الانطلاق </th>
                                                                <th> المحطة رقم 17
                                                                </th> 
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                               <td>وقت الانطلاق -1- </td> <td style="direction:ltr;">07 H 55</td></tr>
                                                               <td>وقت الانطلاق -2- </td> <td style="direction:ltr;">08 H 20</td></tr>
                                                               <td>وقت الانطلاق -3- </td> <td style="direction:ltr;">08 H 45</td></tr>
                                                               <td>وقت الانطلاق -4- </td> <td style="direction:ltr;">09 H 05</td></tr>
                                                               <td>وقت الانطلاق -5- </td> <td style="direction:ltr;">09 H 30</td></tr>
                                                            </tr>
                                                            <tr>
                                                               <td>وقت الانطلاق -6- </td> <td style="direction:ltr;">09 H 55</td></tr>
                                                               <td>وقت الانطلاق -7- </td> <td style="direction:ltr;">10 H 20</td></tr>
                                                               <td>وقت الانطلاق -8- </td> <td style="direction:ltr;">10 H 45</td></tr>
                                                               <td>وقت الانطلاق -9- </td> <td style="direction:ltr;">11 H 10</td></tr>
                                                               <td>وقت الانطلاق -10- </td> <td style="direction:ltr;">11 H 35</td></tr>
                                                            </tr>
                                                            <tr>
                                                               <td>وقت الانطلاق -11- </td> <td style="direction:ltr;">12 H 00</td></tr>
                                                               <td>وقت الانطلاق -12- </td> <td style="direction:ltr;">12 H 25</td></tr>
                                                               <td>وقت الانطلاق -13- </td> <td style="direction:ltr;">12 H 50</td></tr>
                                                               <td>وقت الانطلاق -14- </td> <td style="direction:ltr;">13 H 15</td></tr>
                                                               <td>وقت الانطلاق -15- </td> <td style="direction:ltr;">13 H 40</td></tr>
                                                            </tr>
                                                            <tr>
                                                               <td>وقت الانطلاق -16- </td> <td style="direction:ltr;">14 H 05</td></tr>
                                                               <td>وقت الانطلاق -17- </td> <td style="direction:ltr;">14 H 30</td></tr>
                                                               <td>وقت الانطلاق -18- </td> <td style="direction:ltr;">14 H 55</td></tr>
                                                               <td>وقت الانطلاق -19- </td> <td style="direction:ltr;">15 H 25</td></tr>
                                                              

                                                            </tr>
                                                            <tr>
                                                               <td>وقت الانطلاق -20- </td> <td style="direction:ltr;">16 H 05</td></tr>
                                                               <td>وقت الانطلاق -21- </td> <td style="direction:ltr;">16 H 35</td></tr>
                                                               <td>وقت الانطلاق -22- </td> <td style="direction:ltr;">17 H 00</td></tr>
                                                               <td>وقت الانطلاق -23- </td> <td style="direction:ltr;">17 H 25</td></tr>
                                                               <td>وقت الانطلاق -24- </td> <td style="direction:ltr;">17 H 45</td></tr>

                                                            </tr>
                                                            <tr>
                                                               <td>وقت الانطلاق -25- </td> <td style="direction:ltr;">18 H 15</td></tr>
                                                               <td>وقت الانطلاق -26- </td> <td style="direction:ltr;">18 H 40</td></tr>
                                                               <td>وقت الانطلاق -27- </td> <td style="direction:ltr;">19 H 00</td>
                                                               <td>وقت الانطلاق -28- </td> <td style="direction:ltr;">19 H 20</td></tr>
                                                            </tr>
                                                            
                                                        </tbody>
                                                    </table>

                                                </div>
                                                <!-- end of single item -->
                                                <!-- single item -->
                                                <div class="content2" id="step4">
                                                    <table class="table table-bordered">
                                                        <thead class="" style="background-color:#3d80e4">
                                                            <tr>
                                                                <th>وقت العودة  </th>
                                                                <th>حي الاخوة عدنان (الصخرة)
                                                                </th> 
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                               <td>وقت العودة -1- </td> <td style="direction:ltr;">07 H 25</td></tr>
                                                               <td>وقت العودة -2- </td> <td style="direction:ltr;">07 H 45</td></tr>
                                                               <td>وقت العودة -3- </td> <td style="direction:ltr;">08 H 15</td></tr>
                                                               <td>وقت العودة -4- </td> <td style="direction:ltr;">08 H 30</td></tr>
                                                               <td>وقت العودة -5- </td> <td style="direction:ltr;">08 H 55</td></tr>
                                                            </tr>
                                                            <tr>
                                                               <td>وقت العودة -6- </td> <td style="direction:ltr;">09 H 15</td></tr>
                                                               <td>وقت العودة -7- </td> <td style="direction:ltr;">09 H 40</td></tr>
                                                               <td>وقت العودة -8- </td> <td style="direction:ltr;">10 H 05</td></tr>
                                                               <td>وقت العودة -9- </td> <td style="direction:ltr;">10 H 30</td></tr>
                                                               <td>وقت العودة -10- </td> <td style="direction:ltr;">10 H 55</td></tr>
                                                            </tr>
                                                            <tr>
                                                               <td>وقت العودة -11- </td> <td style="direction:ltr;">11 H 20</td></tr>
                                                               <td>وقت العودة -12- </td> <td style="direction:ltr;">11 H 45</td></tr>
                                                               <td>وقت العودة -13- </td> <td style="direction:ltr;">12 H 10</td></tr>
                                                               <td>وقت العودة -14- </td> <td style="direction:ltr;">12 H 35</td></tr>
                                                               <td>وقت العودة -15- </td> <td style="direction:ltr;">13 H 00</td></tr>
                                                            </tr>
                                                            <tr>
                                                               <td>وقت العودة -16- </td> <td style="direction:ltr;">13 H 25</td></tr>
                                                               <td>وقت العودة -17- </td> <td style="direction:ltr;">13 H 50</td></tr>
                                                               <td>وقت العودة -18- </td> <td style="direction:ltr;">14 H 15</td></tr>
                                                               <td>وقت العودة -19- </td> <td style="direction:ltr;">14 H 40</td></tr>
                                                               <td>وقت العودة -20- </td> <td style="direction:ltr;">15 H 05</td></tr>

                                                            </tr>
                                                            <tr>
                                                               <td>وقت العودة -21- </td> <td style="direction:ltr;">15 H 30</td></tr>
                                                               <td>وقت العودة -22- </td> <td style="direction:ltr;">15 H 55</td></tr>
                                                               
                                                               <td>وقت العودة -23- </td> <td style="direction:ltr;">16 H 45</td></tr>
                                                               <td>وقت العودة -24- </td> <td style="direction:ltr;">17 H 10</td></tr>

                                                            </tr>
                                                            <tr>
                                                               <td>وقت العودة -25- </td> <td style="direction:ltr;">17 H 35</td></tr>
                                                               <td>وقت العودة -26- </td> <td style="direction:ltr;">18 H 00</td></tr>
                                                               <td>وقت العودة -27- </td> <td style="direction:ltr;">18 H 20</td></tr>
                                                               <td>وقت العودة -28- </td> <td style="direction:ltr;">18 H 45</td><td>وقت العودة -29- </td> <td style="direction:ltr;">19 H 15</td>
                                                           <td>وقت العودة -30- </td> <td style="direction:ltr;">19 H 30</td></tr>
                                                            </tr>
                                                            
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- end of single item -->
                                                <!-- single item -->

                                                <!-- end of single item -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-three" class="service-tab-content">
                                    <h4 style="font-size:24px;margin-top:15px">المحطة رقم 17 <i
                                            class="bi bi-caret-right-fill"></i>
                                        <i class="bi bi-caret-left-fill"></i>
                                        حي بن حمودة
                                    </h4>
                                    <div class="section-center">
                                        <div class="tabs3">
                                            <!-- btn container -->
                                            <div class="btn-container">
                                                <button class="button3 live" data-id="step5">الذهاب</button>
                                                <button class="button3" data-id="step6">الإياب</button>
                                            </div>
                                            <div class="tabs-content">
                                                <!-- single item -->
                                                <div class="content3 live" id="step5">
                                                    <table class="table table-bordered">
                                                        <thead class="" style="background-color:#3d80e4">
                                                            <tr>
                                                                <th>وقت الانطلاق </th>
                                                                <th> المحطة رقم 17
                                                                </th> 
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                               <td>وقت الانطلاق -1- </td> <td style="direction:ltr;">08 H 00</td></tr>
                                                               <td>وقت الانطلاق -2- </td> <td style="direction:ltr;">08 H 20</td></tr>
                                                               <td>وقت الانطلاق -3- </td> <td style="direction:ltr;">08 H 45</td></tr>
                                                               <td>وقت الانطلاق -4- </td> <td style="direction:ltr;">09 H 00</td></tr>
                                                               <td>وقت الانطلاق -5- </td> <td style="direction:ltr;">09 H 20</td></tr>
                                                            </tr>
                                                            <tr>
                                                               <td>وقت الانطلاق -6- </td> <td style="direction:ltr;">09 H 40</td></tr>
                                                               <td>وقت الانطلاق -7- </td> <td style="direction:ltr;">10 H 00</td></tr>
                                                               <td>وقت الانطلاق -8- </td> <td style="direction:ltr;">10 H 20</td></tr>
                                                               <td>وقت الانطلاق -9- </td> <td style="direction:ltr;">10 H 40</td></tr>
                                                               <td>وقت الانطلاق -10- </td> <td style="direction:ltr;">11 H 00</td></tr>
                                                            </tr>
                                                            <tr>
                                                               <td>وقت الانطلاق -11- </td> <td style="direction:ltr;">11 H 20</td></tr>
                                                               <td>وقت الانطلاق -12- </td> <td style="direction:ltr;">11 H 40</td></tr>
                                                               <td>وقت الانطلاق -13- </td> <td style="direction:ltr;">11 H 55</td></tr>
                                                               <td>وقت الانطلاق -14- </td> <td style="direction:ltr;">12 H 15</td></tr>
                                                               <td>وقت الانطلاق -15- </td> <td style="direction:ltr;">12 H 35</td></tr>
                                                            </tr>
                                                            <tr>
                                                               <td>وقت الانطلاق -16- </td> <td style="direction:ltr;">12 H 55</td></tr>
                                                               <td>وقت الانطلاق -17- </td> <td style="direction:ltr;">13 H 10</td></tr>
                                                               <td>وقت الانطلاق -18- </td> <td style="direction:ltr;">13 H 30</td></tr>
                                                               <td>وقت الانطلاق -19- </td> <td style="direction:ltr;">13 H 50</td></tr>
                                                               <td>وقت الانطلاق -20- </td> <td style="direction:ltr;">14 H 10</td></tr>

                                                            </tr>
                                                            <tr>
                                                               <td>وقت الانطلاق -21- </td> <td style="direction:ltr;">14 H 25</td></tr>
                                                               <td>وقت الانطلاق -22- </td> <td style="direction:ltr;">14 H 45</td></tr>
                                                               <td>وقت الانطلاق -23- </td> <td style="direction:ltr;">15 H 05</td></tr>
                                                               <td>وقت الانطلاق -24- </td> <td style="direction:ltr;">15 H 25</td></tr>
                                                               <td>وقت الانطلاق -25- </td> <td style="direction:ltr;">16 H 00</td></tr>

                                                            </tr>
                                                            <tr>
                                                               <td>وقت الانطلاق -26- </td> <td style="direction:ltr;">16 H 40</td></tr>
                                                               <td>وقت الانطلاق -27- </td> <td style="direction:ltr;">16 H 55</td></tr>
                                                               <td>وقت الانطلاق -28- </td> <td style="direction:ltr;">17 H 15</td></tr>
                                                               <td>وقت الانطلاق -29- </td> <td style="direction:ltr;">17 H 35</td></tr>
                                                               <td>وقت الانطلاق -30- </td> <td style="direction:ltr;">17 H 55</td></tr>

                                                            </tr>
                                                            <tr>
                                                               <td>وقت الانطلاق -31- </td> <td style="direction:ltr;">18 H 10</td></tr>
                                                               <td>وقت الانطلاق -32- </td> <td style="direction:ltr;">18 H 30</td></tr>
                                                               <td>وقت الانطلاق -33- </td> <td style="direction:ltr;">18 H 50</td><td>وقت الانطلاق -34- </td> <td style="direction:ltr;">19 H 05</td><td>وقت الانطلاق -35- </td> <td style="direction:ltr;">19 H 20</td></tr>
                                                            </tr>
                                                            
                                                        </tbody>
                                                    </table>

                                                </div>
                                                <!-- end of single item -->
                                                <!-- single item -->
                                                <div class="content3" id="step6">
                                                    <table class="table table-bordered">
                                                        <thead class="" style="background-color:#3d80e4">
                                                            <tr>
                                                                <th>وقت العودة  </th>
                                                                <th>حي بن حمودة
                                                                </th> 
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                               <td>وقت العودة -1- </td> <td style="direction:ltr;">07 H 25</td></tr>
                                                               <td>وقت العودة -2- </td> <td style="direction:ltr;">07 H 45</td></tr>
                                                               <td>وقت العودة -3- </td> <td style="direction:ltr;">08 H 25</td></tr>
                                                               <td>وقت العودة -4- </td> <td style="direction:ltr;">08 H 40</td></tr>
                                                               <td>وقت العودة -5- </td> <td style="direction:ltr;">09 H 00</td></tr>
                                                            </tr>
                                                            <tr>
                                                               <td>وقت العودة -6- </td> <td style="direction:ltr;">09 H 20</td></tr>
                                                               <td>وقت العودة -7- </td> <td style="direction:ltr;">09 H 40</td></tr>
                                                               <td>وقت العودة -8- </td> <td style="direction:ltr;">10 H 00</td></tr>
                                                               <td>وقت العودة -9- </td> <td style="direction:ltr;">10 H 20</td></tr>
                                                               <td>وقت العودة -10- </td> <td style="direction:ltr;">10 H 40</td></tr>
                                                            </tr>
                                                            <tr>
                                                               <td>وقت العودة -11- </td> <td style="direction:ltr;">11 H 00</td></tr>
                                                               <td>وقت العودة -12- </td> <td style="direction:ltr;">11 H 15</td></tr>
                                                               <td>وقت العودة -13- </td> <td style="direction:ltr;">11 H 35</td></tr>
                                                               <td>وقت العودة -14- </td> <td style="direction:ltr;">11 H 55</td></tr>
                                                               <td>وقت العودة -15- </td> <td style="direction:ltr;">12 H 15</td></tr>
                                                            </tr>
                                                            <tr>
                                                               <td>وقت العودة -16- </td> <td style="direction:ltr;">12 H 30</td></tr>
                                                               <td>وقت العودة -17- </td> <td style="direction:ltr;">12 H 50</td></tr>
                                                               <td>وقت العودة -18- </td> <td style="direction:ltr;">13 H 10</td></tr>
                                                               <td>وقت العودة -19- </td> <td style="direction:ltr;">13 H 30</td></tr>
                                                               <td>وقت العودة -20- </td> <td style="direction:ltr;">13 H 45</td></tr>

                                                            </tr>
                                                            <tr>
                                                               <td>وقت العودة -21- </td> <td style="direction:ltr;">14 H 05</td></tr>
                                                               <td>وقت العودة -22- </td> <td style="direction:ltr;">14 H 25</td></tr>
                                                               <td>وقت العودة -23- </td> <td style="direction:ltr;">14 H 45</td></tr>
                                                               <td>وقت العودة -24- </td> <td style="direction:ltr;">15 H 00</td></tr>
                                                               <td>وقت العودة -25- </td> <td style="direction:ltr;">15 H 20</td></tr>

                                                            </tr>
                                                            <tr>
                                                               <td>وقت العودة -26- </td> <td style="direction:ltr;">16 H 00</td></tr>
                                                               <td>وقت العودة -27- </td> <td style="direction:ltr;">16 H 35</td></tr>
                                                               <td>وقت العودة -28- </td> <td style="direction:ltr;">16 H 55</td></tr>
                                                               <td>وقت العودة -29- </td> <td style="direction:ltr;">17 H 15</td></tr>
                                                               <td>وقت العودة -30- </td> <td style="direction:ltr;">17 H 30</td></tr>

                                                            </tr>
                                                            <tr>
                                                               <td>وقت العودة -31- </td> <td style="direction:ltr;">17 H 50</td></tr>
                                                               <td>وقت العودة -32- </td> <td style="direction:ltr;">18 H 10</td></tr>
                                                               <td>وقت العودة -33- </td> <td style="direction:ltr;">18 H 30</td></tr>
                                                               <td>وقت العودة -34- </td> <td style="direction:ltr;">18 H 45</td><td>وقت العودة -35- </td> <td style="direction:ltr;">19 H 05</td><td>وقت العودة -36- </td> <td style="direction:ltr;">19 H 20</td></tr>
                                                            </tr>
                                                            
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- end of single item -->
                                                <!-- single item -->

                                                <!-- end of single item -->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="tab-five" class="service-tab-content">
                                    <h4 style="font-size:24px;margin-top:15px">محطة الأمير عبد القادر<i
                                            class="bi bi-caret-right-fill"></i>
                                        <i class="bi bi-caret-left-fill"></i>
                                        سيدي لحسن
                                    </h4>
                                    <div class="section-center">
                                        <div class="tabs4">
                                            <!-- btn container -->
                                            <div class="btn-container">
                                                <button class="button4 live" data-id="step7">الذهاب</button>
                                                <button class="button4" data-id="step8">الإياب</button>
                                            </div>
                                            <div class="tabs-content">
                                                <!-- single item -->
                                                <div class="content4 live" id="step7">
                                                    <table class="table table-bordered">
                                                        <thead class="" style="background-color:#3d80e4">
                                                            <tr>
                                                                <th>وقت الانطلاق </th>
                                                                <th> محطة الأمير عبد القادر
                                                                </th> 
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                               <td>وقت الانطلاق -1- </td> <td style="direction:ltr;">07 H 25</td></tr>
                                                               <td>وقت الانطلاق -2- </td> <td style="direction:ltr;">08 H 05</td></tr>
                                                               <td>وقت الانطلاق -3- </td> <td style="direction:ltr;">08 H 25</td></tr>
                                                               <td>وقت الانطلاق -4- </td> <td style="direction:ltr;">08 H 45</td></tr>
                                                                <td>وقت الانطلاق -5- </td><td style="direction:ltr;">09 H 05</td></tr>
                                                            </tr>
                                                            <tr>
                                                               <td>وقت الانطلاق -6- </td> <td style="direction:ltr;">09 H 30</td></tr>
                                                               <td>وقت الانطلاق -7- </td> <td style="direction:ltr;">09 H 50</td></tr>
                                                               <td>وقت الانطلاق -8- </td> <td style="direction:ltr;">10 H 10</td></tr>
                                                               <td>وقت الانطلاق -9- </td> <td style="direction:ltr;">10 H 35</td></tr>
                                                               <td>وقت الانطلاق -10- </td> <td style="direction:ltr;">11 H 00</td></tr>
                                                            </tr>
                                                            <tr>
                                                               <td>وقت الانطلاق -11- </td> <td style="direction:ltr;">11 H 20</td></tr>
                                                               <td>وقت الانطلاق -12- </td> <td style="direction:ltr;">11 H 40</td></tr>
                                                               <td>وقت الانطلاق -13- </td> <td style="direction:ltr;">12 H 05</td></tr>
                                                               <td>وقت الانطلاق -14- </td> <td style="direction:ltr;">12 H 30</td></tr>
                                                               <td>وقت الانطلاق -15- </td> <td style="direction:ltr;">12 H 50</td></tr>
                                                            </tr>
                                                            <tr>
                                                               <td>وقت الانطلاق -16- </td> <td style="direction:ltr;">13 H 10</td></tr>
                                                               <td>وقت الانطلاق -17- </td> <td style="direction:ltr;">13 H 35</td></tr>
                                                               <td>وقت الانطلاق -18- </td> <td style="direction:ltr;">14 H 00</td></tr>
                                                               <td>وقت الانطلاق -19- </td> <td style="direction:ltr;">14 H 20</td></tr>
                                                               <td>وقت الانطلاق -20- </td> <td style="direction:ltr;">14 H 40</td></tr>

                                                            </tr>
                                                            <tr>
                                                               <td>وقت الانطلاق -21- </td> <td style="direction:ltr;">15 H 00</td></tr>
                                                               <td>وقت الانطلاق -22- </td> <td style="direction:ltr;">15 H 45</td></tr>
                                                               <td>وقت الانطلاق -23- </td> <td style="direction:ltr;">16 H 05</td></tr>
                                                               <td>وقت الانطلاق -24- </td> <td style="direction:ltr;">16 H 25</td></tr>
                                                               <td>وقت الانطلاق -25- </td> <td style="direction:ltr;">16 H 50</td></tr>

                                                            </tr>
                                                            <tr>
                                                               <td>وقت الانطلاق -26- </td> <td style="direction:ltr;">17 H 10</td></tr>
                                                               <td>وقت الانطلاق -27- </td> <td style="direction:ltr;">17 H 30</td></tr>
                                                               <td>وقت الانطلاق -28- </td> <td style="direction:ltr;">17 H 50</td></tr>
                                                               <td>وقت الانطلاق -29- </td> <td style="direction:ltr;">18 H 15</td></tr>
                                                               <td>وقت الانطلاق -30- </td> <td style="direction:ltr;">18 H 35</td></tr>
                                                            </tr>
                                                            <tr>
                                                               <td>وقت الانطلاق -31- </td> <td style="direction:ltr;">18 H 55</td><td>وقت الانطلاق -32- </td> <td style="direction:ltr;">19 H 20</td></tr>
                                                            </tr>
                                                            
                                                        </tbody>
                                                    </table>

                                                </div>
                                                <!-- end of single item -->
                                                <!-- single item -->
                                                <div class="content4" id="step8">
                                                    <table class="table table-bordered">
                                                        <thead class="" style="background-color:#3d80e4">
                                                            <tr>
                                                                <th>وقت العودة  </th>
                                                                <th> سيدي لحسن
                                                                </th> 
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                               <td>وقت العودة -1- </td> <td style="direction:ltr;">07 H 25</td></tr>
                                                               <td>وقت العودة -2- </td> <td style="direction:ltr;">07 H 40</td></tr>
                                                               <td>وقت العودة -3- </td> <td style="direction:ltr;">08 H 05</td></tr>
                                                               <td>وقت العودة -4- </td> <td style="direction:ltr;">08 H 25</td></tr>
                                                               <td>وقت العودة -5- </td> <td style="direction:ltr;">08 H 45</td></tr>
                                                            </tr>
                                                            <tr>
                                                               <td>وقت العودة -6- </td> <td style="direction:ltr;">09 H 05</td></tr>
                                                               <td>وقت العودة -7- </td> <td style="direction:ltr;">09 H 25</td></tr>
                                                               <td>وقت العودة -8- </td> <td style="direction:ltr;">09 H 45</td></tr>
                                                               <td>وقت العودة -9- </td> <td style="direction:ltr;">10 H 10</td></tr>
                                                               <td>وقت العودة -10- </td> <td style="direction:ltr;">10 H 30</td></tr>
                                                            </tr>
                                                            <tr>
                                                               <td>وقت العودة -11- </td> <td style="direction:ltr;">10 H 50</td></tr>
                                                               <td>وقت العودة -12- </td> <td style="direction:ltr;">11 H 15</td></tr>
                                                               <td>وقت العودة -13- </td> <td style="direction:ltr;">11 H 40</td></tr>
                                                               <td>وقت العودة -14- </td> <td style="direction:ltr;">12 H 00</td></tr>
                                                               <td>وقت العودة -15- </td> <td style="direction:ltr;">12 H 20</td></tr>
                                                            </tr>
                                                            <tr>
                                                               <td>وقت العودة -16- </td> <td style="direction:ltr;">12 H 45</td></tr>
                                                               <td>وقت العودة -17- </td> <td style="direction:ltr;">13 H 10</td></tr>
                                                               <td>وقت العودة -18- </td> <td style="direction:ltr;">13 H 30</td></tr>
                                                               <td>وقت العودة -19- </td> <td style="direction:ltr;">13 H 50</td></tr>
                                                               <td>وقت العودة -20- </td> <td style="direction:ltr;">14 H 15</td></tr>

                                                            </tr>
                                                            <tr>
                                                               <td>وقت العودة -21- </td> <td style="direction:ltr;">14 H 40</td></tr>
                                                               <td>وقت العودة -22- </td> <td style="direction:ltr;">15 H 00</td></tr>
                                                               <td>وقت العودة -23- </td> <td style="direction:ltr;">15 H 20</td></tr>
                                                               <td>وقت العودة -24- </td> <td style="direction:ltr;">15 H 40</td></tr>
                                                               <td>وقت العودة -25- </td> <td style="direction:ltr;">16 H 25</td></tr>

                                                            </tr>
                                                            <tr>
                                                               <td>وقت العودة -26- </td> <td style="direction:ltr;">16 H 45</td></tr>
                                                               <td>وقت العودة -27- </td> <td style="direction:ltr;">17 H 05</td></tr>
                                                               <td>وقت العودة -28- </td> <td style="direction:ltr;">17 H 30</td></tr>
                                                               <td>وقت العودة -29- </td> <td style="direction:ltr;">17 H 50</td></tr>
                                                               <td>وقت العودة -30- </td> <td style="direction:ltr;">18 H 10</td></tr>

                                                            </tr>
                                                            <tr>
                                                               <td>وقت العودة -31- </td> <td style="direction:ltr;">18 H 30</td></tr>
                                                               <td>وقت العودة -32- </td> <td style="direction:ltr;">18 H 55</td><td>وقت العودة -33- </td> <td style="direction:ltr;">19 H 10</td><td>وقت العودة -34- </td> <td style="direction:ltr;">19 H 30</td></tr>
                                                            </tr>
                                                            
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- end of single item -->
                                                <!-- single item -->

                                                <!-- end of single item -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-6" class="service-tab-content">
                                    <h4 style="font-size:24px;margin-top:15px">محطة الأمير عبد القادر<i
                                            class="bi bi-caret-right-fill"></i>
                                        <i class="bi bi-caret-left-fill"></i>
                                        تلموني الجديدة
                                    </h4>
                                    <div class="section-center">
                                        <div class="tabs5">
                                            <!-- btn container -->
                                            <div class="btn-container">
                                                <button class="button5 live" data-id="step9">الذهاب</button>
                                                <button class="button5" data-id="step10">الإياب</button>
                                            </div>
                                            <div class="tabs-content">
                                                <!-- single item -->
                                                <div class="content5 live" id="step9">
                                                    <table class="table table-bordered">
                                                        <thead class="" style="background-color:#3d80e4">
                                                            <tr>
                                                                <th>وقت الانطلاق </th>
                                                                <th> محطة الأمير عبد القادر
                                                                </th> 
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                               <td>وقت الانطلاق -1- </td> <td style="direction:ltr;">07 H 25</td></tr>
                                                               <tr>
                                                               <td>وقت الانطلاق -2- </td> <td style="direction:ltr;">08 H 00</td></tr>
                                                               <td>وقت الانطلاق -3- </td> <td style="direction:ltr;">08 H 15</td></tr>
                                                               <td>وقت الانطلاق -4- </td> <td style="direction:ltr;">08 H 30</td></tr>
                                                               <td>وقت الانطلاق -5- </td> <td style="direction:ltr;">08 H 45</td></tr>
                                                               <td>وقت الانطلاق -6- </td> <td style="direction:ltr;">09 H 00</td></tr>
                                                            </tr>
                                                            <tr>
                                                               <td>وقت الانطلاق -7- </td> <td style="direction:ltr;">09 H 15</td></tr>
                                                               <td>وقت الانطلاق -8- </td> <td style="direction:ltr;">09 H 30</td></tr>
                                                               <td>وقت الانطلاق -9- </td> <td style="direction:ltr;">09 H 45</td></tr>
                                                               <td>وقت الانطلاق -10- </td> <td style="direction:ltr;">10 H 00</td></tr>
                                                               <td>وقت الانطلاق -11- </td> <td style="direction:ltr;">10 H 15</td></tr>
                                                            </tr>
                                                            <tr>
                                                               <td>وقت الانطلاق -12- </td> <td style="direction:ltr;">10 H 35</td></tr>
                                                               <td>وقت الانطلاق -13- </td> <td style="direction:ltr;">10 H 50</td></tr>
                                                               <td>وقت الانطلاق -14- </td> <td style="direction:ltr;">11 H 05</td></tr>
                                                               <td>وقت الانطلاق -15- </td> <td style="direction:ltr;">11 H 20</td></tr>
                                                               <td>وقت الانطلاق -16- </td> <td style="direction:ltr;">11 H 35</td></tr>
                                                            </tr>
                                                            <tr>
                                                               <td>وقت الانطلاق -17- </td> <td style="direction:ltr;">11 H 55</td></tr>    
                                                               <td>وقت الانطلاق -18- </td> <td style="direction:ltr;">12 H 10</td></tr>
                                                               <td>وقت الانطلاق -19- </td> <td style="direction:ltr;">12 H 25</td></tr>
                                                               <td>وقت الانطلاق -20- </td> <td style="direction:ltr;">12 H 40</td></tr>
                                                               <td>وقت الانطلاق -21- </td> <td style="direction:ltr;">12 H 55</td></tr>

                                                            </tr>
                                                            <tr>
                                                            
                                                               <td>وقت الانطلاق -22- </td> <td style="direction:ltr;">13 H 15</td></tr>
                                                               <td>وقت الانطلاق -23- </td> <td style="direction:ltr;">13 H 30</td></tr>    
                                                               <td>وقت الانطلاق -24- </td> <td style="direction:ltr;">13 H 45</td></tr>
                                                               <td>وقت الانطلاق -25- </td> <td style="direction:ltr;">14 H 00</td></tr>
                                                               <td>وقت الانطلاق -26- </td> <td style="direction:ltr;">14 H 15</td></tr>
                                                                
                                                            </tr>
                                                            <tr>
                                                               <td>وقت الانطلاق -27- </td> <td style="direction:ltr;">14 H 35</td></tr>
                                                               <td>وقت الانطلاق -28- </td> <td style="direction:ltr;">14 H 50</td></tr>
                                                               <td>وقت الانطلاق -29- </td> <td style="direction:ltr;">15 H 10</td></tr>
                                                               <td>وقت الانطلاق -30- </td> <td style="direction:ltr;">15 H 35</td></tr>
                                                               <td>وقت الانطلاق -31- </td> <td style="direction:ltr;">16 H 10</td></tr>
                                                                
                                                            </tr>
                                                            <tr>
                                                               <td>وقت الانطلاق -32- </td> <td style="direction:ltr;">16 H 25</td></tr>
                                                               <td>وقت الانطلاق -33- </td> <td style="direction:ltr;">16 H 40</td></tr>    
                                                               <td>وقت الانطلاق -34- </td> <td style="direction:ltr;">16 H 55</td></tr>
                                                               <td>وقت الانطلاق -35- </td> <td style="direction:ltr;">17 H 15</td></tr>
                                                               <td>وقت الانطلاق -36- </td> <td style="direction:ltr;">17 H 30</td></tr>
                                                                
                                                            </tr>
                                                            <tr>
                                                               <td>وقت الانطلاق -37- </td> <td style="direction:ltr;">17 H 45</td></tr>
                                                               <td>وقت الانطلاق -38- </td> <td style="direction:ltr;">18 H 00</td></tr>
                                                               <td>وقت الانطلاق -39- </td> <td style="direction:ltr;">18 H 15</td></tr>
                                                               <td>وقت الانطلاق -40- </td> <td style="direction:ltr;">18 H 35</td></tr>
                                                               <td>وقت الانطلاق -41- </td> <td style="direction:ltr;">18 H 50</td><td>وقت الانطلاق -42- </td> <td style="direction:ltr;">19 H 05</td><td>وقت الانطلاق -43- </td> <td style="direction:ltr;">19 H 20</td></tr>
                                                            </tr>
                                                            
                                                        </tbody>
                                                    </table>

                                                </div>
                                                <!-- end of single item -->
                                                <!-- single item -->
                                                <div class="content5" id="step10">
                                                    <table class="table table-bordered">
                                                        <thead class="" style="background-color:#3d80e4">
                                                            <tr>
                                                                <th>وقت العودة -- </th>
                                                                <th> تلموني الجديدة
                                                                </th> 
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                               <td>وقت العودة -1- </td> <td style="direction:ltr;">07 H 20</td></tr> <tr>
                                                               <td>وقت العودة -2- </td> <td style="direction:ltr;"> 07 H 20 <span style="font-size: 16px">تلموني القديمة</span></td></tr>
                                                               <td>وقت العودة -3- </td> <td style="direction:ltr;">07 H 35</td></tr>
                                                               <td>وقت العودة -4- </td> <td style="direction:ltr;">07 H 50</td></tr>
                                                               <td>وقت العودة -5- </td> <td style="direction:ltr;">08 H 05</td></tr>
                                                               <td>وقت العودة -6- </td> <td style="direction:ltr;">08 H 20</td></tr>
                                                            </tr>
                                                            <tr>
                                                               <td>وقت العودة -7- </td> <td style="direction:ltr;">08 H 35</td></tr>
                                                               <td>وقت العودة -8- </td> <td style="direction:ltr;">08 H 50</td></tr>
                                                               <td>وقت العودة -9- </td> <td style="direction:ltr;">09 H 05</td></tr>
                                                               <td>وقت العودة -10- </td> <td style="direction:ltr;">09 H 20</td></tr>
                                                               <td>وقت العودة -11- </td> <td style="direction:ltr;">09 H 35</td></tr>
                                                            </tr>
                                                            <tr>
                                                               <td>وقت العودة -12- </td> <td style="direction:ltr;">09 H 50</td></tr>
                                                               <td>وقت العودة -13- </td> <td style="direction:ltr;">10 H 05</td></tr>
                                                               <td>وقت العودة -14- </td> <td style="direction:ltr;">10 H 20</td></tr>
                                                               <td>وقت العودة -15- </td> <td style="direction:ltr;">10 H 35</td></tr>
                                                               <td>وقت العودة -16- </td> <td style="direction:ltr;">10 H 50</td></tr>
                                                            </tr>
                                                            <tr>
                                                               <td>وقت العودة -17- </td> <td style="direction:ltr;">11 H 10</td></tr>
                                                               <td>وقت العودة -18- </td> <td style="direction:ltr;">11 H 25</td></tr>
                                                               <td>وقت العودة -19- </td> <td style="direction:ltr;">11 H 40</td></tr>
                                                               <td>وقت العودة -20- </td> <td style="direction:ltr;">11 H 55</td></tr>
                                                               <td>وقت العودة -21- </td> <td style="direction:ltr;">12 H 10</td></tr>

                                                            </tr>
                                                            <tr>
                                                               <td>وقت العودة -22- </td> <td style="direction:ltr;">12 H 30</td></tr>
                                                               <td>وقت العودة -23- </td> <td style="direction:ltr;">12 H 45</td></tr>
                                                               <td>وقت العودة -24- </td> <td style="direction:ltr;">13 H 00</td></tr>
                                                               <td>وقت العودة -25- </td> <td style="direction:ltr;">13 H 15</td></tr>
                                                               <td>وقت العودة -26- </td> <td style="direction:ltr;">13 H 30</td></tr>
                                                            </tr>
                                                            <tr>
                                                               <td>وقت العودة -27- </td> <td style="direction:ltr;">13 H 50</td></tr>
                                                               <td>وقت العودة -28- </td> <td style="direction:ltr;">14 H 05</td></tr>
                                                               <td>وقت العودة -29- </td> <td style="direction:ltr;">14 H 20</td></tr>
                                                               <td>وقت العودة -30- </td> <td style="direction:ltr;">14 H 35</td></tr>
                                                               <td>وقت العودة -31- </td> <td style="direction:ltr;">14 H 50</td></tr>
                                                            </tr>
                                                            <tr>
                                                               <td>وقت العودة -32- </td> <td style="direction:ltr;">15 H 25</td></tr>
                                                               <td>وقت العودة -33- </td> <td style="direction:ltr;">15 H 45</td></tr>
                                                               <td>وقت العودة -34- </td> <td style="direction:ltr;">16 H 10</td></tr>
                                                               <td>وقت العودة -35- </td> <td style="direction:ltr;">16 H 30</td></tr>
                                                               <td>وقت العودة -36- </td> <td style="direction:ltr;">16 H 45</td></tr>
                                                            </tr>
                                                            <tr>
                                                               <td>وقت العودة -37- </td> <td style="direction:ltr;">17 H 00</td></tr>
                                                               <td>وقت العودة -38- </td> <td style="direction:ltr;">17 H 15</td></tr>
                                                               <td>وقت العودة -39- </td> <td style="direction:ltr;">17 H 30</td></tr>
                                                               <td>وقت العودة -40- </td> <td style="direction:ltr;">17 H 50</td></tr>
                                                               <td>وقت العودة -41- </td> <td style="direction:ltr;">18 H 05</td></tr>

                                                            </tr>
                                                            <tr>
                                                               <td>وقت العودة -42- </td> <td style="direction:ltr;">18 H 20</td></tr>
                                                               <td>وقت العودة -43- </td> <td style="direction:ltr;">18 H 35</td></tr>
                                                               <td>وقت العودة -44- </td> <td style="direction:ltr;">18 H 50</td><td>وقت العودة -45- </td> <td style="direction:ltr;">19 H 10</td><td>وقت العودة -46- </td> <td style="direction:ltr;">19 H 25</td></tr>
                                                            </tr>
                                                            
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- end of single item -->
                                                <!-- single item -->

                                                <!-- end of single item -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-7" class="service-tab-content">
                                    <h4 style="font-size:24px;margin-top:15px">محطة الأمير عبد القادر<i
                                            class="bi bi-caret-right-fill"></i>
                                        <i class="bi bi-caret-left-fill"></i>
                                        قايد بلعربي
                                    </h4>
                                    <div class="section-center">
                                        <div class="tabs6">
                                            <!-- btn container -->
                                            <div class="btn-container">
                                                <button class="button6 live" data-id="step11">الذهاب</button>
                                                <button class="button6" data-id="step12">الإياب</button>
                                            </div>
                                            <div class="tabs-content">
                                                <!-- single item -->
                                                <div class="content6 live" id="step11">
                                                    <table class="table table-bordered">
                                                        <thead class="" style="background-color:#3d80e4">
                                                            <tr>
                                                                <th>وقت الانطلاق </th>
                                                                <th>محطة الأمير عبد القادر
                                                                </th> 
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                               <td>وقت الانطلاق -1- </td> <td style="direction:ltr;">07 H 20</td></tr>
                                                               <td>وقت الانطلاق -2- </td> <td style="direction:ltr;">08 H 20</td></tr>
                                                               <td>وقت الانطلاق -3- </td> <td style="direction:ltr;">08 H 55</td></tr>
                                                               <td>وقت الانطلاق -4- </td> <td style="direction:ltr;">09 H 35</td></tr>
                                                               <td>وقت الانطلاق -5- </td> <td style="direction:ltr;">10 H 15</td></tr>
                                                            </tr>
                                                            <tr>
                                                               <td>وقت الانطلاق -6- </td> <td style="direction:ltr;">10 H 50</td></tr>
                                                               <td>وقت الانطلاق -7- </td> <td style="direction:ltr;">11 H 30</td></tr>
                                                               <td>وقت الانطلاق -8- </td> <td style="direction:ltr;">12 H 10</td></tr>
                                                               <td>وقت الانطلاق -9- </td> <td style="direction:ltr;">12 H 45</td></tr>
                                                               <td>وقت الانطلاق -10- </td> <td style="direction:ltr;">13 H 25</td></tr>
                                                            </tr>
                                                            <tr>
                                                               <td>وقت الانطلاق -11- </td> <td style="direction:ltr;">14 H 05</td></tr>
                                                               <td>وقت الانطلاق -12- </td> <td style="direction:ltr;">14 H 40</td></tr>
                                                               <td>وقت الانطلاق -13- </td> <td style="direction:ltr;">15 H 20</td></tr>
                                                               <td>وقت الانطلاق -14- </td> <td style="direction:ltr;">16 H 00</td></tr>
                                                               <td>وقت الانطلاق -15- </td> <td style="direction:ltr;">16 H 35</td></tr>
                                                            </tr>
                                                            <tr>
                                                               <td>وقت الانطلاق -16- </td> <td style="direction:ltr;">17 H 15</td></tr>
                                                               <td>وقت الانطلاق -17- </td> <td style="direction:ltr;">17 H 55</td></tr>
                                                               <td>وقت الانطلاق -18- </td> <td style="direction:ltr;">18 H 30</td><td>وقت الانطلاق -19- </td> <td style="direction:ltr;">19 H 00</td></tr>
                                                            </tr>
                                                            
                                                        </tbody>
                                                    </table>

                                                </div>
                                                <!-- end of single item -->
                                                <!-- single item -->
                                                <div class="content6" id="step12">
                                                    <table class="table table-bordered">
                                                        <thead class="" style="background-color:#3d80e4">
                                                            <tr>
                                                                <th>وقت العودة -- </th>
                                                                <th> قايد بلعربي
                                                                </th> 
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                               <td>وقت العودة -1- </td> <td style="direction:ltr;">07 H 25</td></tr>
                                                               <td>وقت العودة -2- </td> <td style="direction:ltr;">08 H 05</td></tr>
                                                               <td>وقت العودة -3- </td> <td style="direction:ltr;">08 H 40</td></tr>
                                                               <td>وقت العودة -4- </td> <td style="direction:ltr;">09 H 15</td></tr>
                                                               <td>وقت العودة -5- </td> <td style="direction:ltr;">09 H 50</td></tr>
                                                            </tr>
                                                            <tr>
                                                               <td>وقت العودة -6- </td> <td style="direction:ltr;">10 H 30</td></tr>
                                                               <td>وقت العودة -7- </td> <td style="direction:ltr;">11 H 10</td></tr>
                                                               <td>وقت العودة -8- </td> <td style="direction:ltr;">11 H 45</td></tr>
                                                               <td>وقت العودة -9- </td> <td style="direction:ltr;">12 H 25</td></tr>
                                                               <td>وقت العودة -10- </td> <td style="direction:ltr;">13 H 05</td></tr>
                                                            </tr>
                                                            <tr>
                                                               <td>وقت العودة -11- </td> <td style="direction:ltr;">13 H 40</td></tr>
                                                               <td>وقت العودة -12- </td> <td style="direction:ltr;">14 H 20</td></tr>
                                                               <td>وقت العودة -13- </td> <td style="direction:ltr;">15 H 00</td></tr>
                                                               <td>وقت العودة -14- </td> <td style="direction:ltr;">15 H 35</td></tr>
                                                               <td>وقت العودة -15- </td> <td style="direction:ltr;">16 H 15</td></tr>
                                                               <td>وقت العودة -16- </td> <td style="direction:ltr;">16 H 55</td></tr>
                                                            </tr>
                                                            <tr>
                                                               <td>وقت العودة -17- </td> <td style="direction:ltr;">17 H 30</td></tr>
                                                               <td>وقت العودة -18- </td> <td style="direction:ltr;">18 H 05</td></tr>
                                                               <td>وقت العودة -19- </td> <td style="direction:ltr;">18 H 50</td><td>وقت العودة -19- </td> <td style="direction:ltr;">19 H 15</td></tr>
                                                            </tr>
                                                            
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- end of single item -->
                                                <!-- single item -->

                                                <!-- end of single item -->
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div id="tab-8" class="service-tab-content">
                                    <h4 style="font-size:24px;margin-top:15px">محطة الأمير عبد القادر <i
                                            class="bi bi-caret-right-fill"></i>
                                        <i class="bi bi-caret-left-fill"></i>
                                        البواعيش
                                    </h4>
                                    <div class="section-center">
                                        <div class="tabs7">
                                            <!-- btn container -->
                                            <div class="btn-container">
                                                <button class="button7 live" data-id="step13">الذهاب</button>
                                                <button class="button7" data-id="step14">الإياب</button>
                                            </div>
                                            <div class="tabs-content">
                                                <!-- single item -->
                                                <div class="content7 live" id="step13">
                                                    <table class="table table-bordered">
                                                        <thead class="" style="background-color:#3d80e4">
                                                            <tr>
                                                                <th>وقت الانطلاق -- </th>
                                                                <th>محطة الأمير عبد القادر
                                                                </th> 
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                               <td>وقت الانطلاق -1- </td> <td style="direction:ltr;">07 H 20</td></tr>
                                                               <td>وقت الانطلاق -2- </td> <td style="direction:ltr;">08 H 00</td></tr>
                                                               <td>وقت الانطلاق -3- </td> <td style="direction:ltr;">08 H 25</td></tr>
                                                               <td>وقت الانطلاق -4- </td> <td style="direction:ltr;">08 H 55</td></tr>
                                                               <td>وقت الانطلاق -5- </td> <td style="direction:ltr;">09 H 20</td></tr>
                                                            </tr>
                                                            <tr>
                                                               <td>وقت الانطلاق -6- </td> <td style="direction:ltr;">09 H 45</td></tr>
                                                               <td>وقت الانطلاق -7- </td> <td style="direction:ltr;">10 H 15</td></tr>
                                                               <td>وقت الانطلاق -8- </td> <td style="direction:ltr;">10 H 45</td></tr>
                                                               <td>وقت الانطلاق -9- </td> <td style="direction:ltr;">11 H 10</td></tr>
                                                               <td>وقت الانطلاق -10- </td> <td style="direction:ltr;">11 H 40</td></tr>
                                                            </tr>
                                                            <tr>
                                                               <td>وقت الانطلاق -11- </td> <td style="direction:ltr;">12 H 10</td></tr>
                                                               <td>وقت الانطلاق -12- </td> <td style="direction:ltr;">12 H 35</td></tr>
                                                               <td>وقت الانطلاق -13- </td> <td style="direction:ltr;">13 H 05</td></tr>
                                                               <td>وقت الانطلاق -14- </td> <td style="direction:ltr;">13 H 35</td></tr>
                                                               <td>وقت الانطلاق -15- </td> <td style="direction:ltr;">14 H 00</td></tr>
                                                            </tr>
                                                            <tr>
                                                               <td>وقت الانطلاق -16- </td> <td style="direction:ltr;">14 H 30</td></tr>
                                                               <td>وقت الانطلاق -17- </td> <td style="direction:ltr;">15 H 00</td></tr>
                                                               <td>وقت الانطلاق -18- </td> <td style="direction:ltr;">15 H 55</td></tr>
                                                               <td>وقت الانطلاق -19- </td> <td style="direction:ltr;">16 H 25</td></tr>
                                                               <td>وقت الانطلاق -20- </td> <td style="direction:ltr;">16 H 50</td></tr>

                                                            </tr>
                                                            <tr>
                                                               <td>وقت الانطلاق -21- </td> <td style="direction:ltr;">17 H 20</td></tr>
                                                               <td>وقت الانطلاق -22- </td> <td style="direction:ltr;">17 H 50</td></tr>
                                                               <td>وقت الانطلاق -23- </td> <td style="direction:ltr;">18 H 15</td></tr>
                                                               <td>وقت الانطلاق -24- </td> <td style="direction:ltr;">18 H 45</td><td>وقت الانطلاق -25- </td> <td style="direction:ltr;">19 H 20</td></tr>
                                                            </tr>
                                                            
                                                        </tbody>
                                                    </table>

                                                </div>
                                                <!-- end of single item -->
                                                <!-- single item -->
                                                <div class="content7" id="step14">
                                                    <table class="table table-bordered">
                                                        <thead class="" style="background-color:#3d80e4">
                                                            <tr>
                                                                <th>وقت العودة -- </th>
                                                                <th>البواعيش
                                                                </th> 
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                               <td>وقت العودة -1- </td> <td style="direction:ltr;">07 H 20</td></tr>
                                                               <td>وقت العودة -2- </td> <td style="direction:ltr;">07 H 45</td></tr>
                                                               <td>وقت العودة -3- </td> <td style="direction:ltr;">08 H 15</td></tr>
                                                               <td>وقت العودة -4- </td> <td style="direction:ltr;">08 H 40</td></tr>
                                                               <td>وقت العودة -5- </td> <td style="direction:ltr;">09 H 05</td></tr>
                                                            </tr>
                                                            <tr>
                                                               <td>وقت العودة -6- </td> <td style="direction:ltr;">09 H 35</td></tr>
                                                               <td>وقت العودة -7- </td> <td style="direction:ltr;">10 H 00</td></tr>
                                                               <td>وقت العودة -8- </td> <td style="direction:ltr;">10 H 25</td></tr>
                                                               <td>وقت العودة -9- </td> <td style="direction:ltr;">10 H 55</td></tr>
                                                               <td>وقت العودة -10- </td> <td style="direction:ltr;">11 H 20</td></tr>
                                                            </tr>
                                                            <tr>
                                                               <td>وقت العودة -11- </td> <td style="direction:ltr;">11 H 50</td></tr>
                                                               <td>وقت العودة -12- </td> <td style="direction:ltr;">12 H 20</td></tr>
                                                               <td>وقت العودة -13- </td> <td style="direction:ltr;">12 H 50</td></tr>
                                                               <td>وقت العودة -14- </td> <td style="direction:ltr;">13 H 15</td></tr>
                                                               <td>وقت العودة -15- </td> <td style="direction:ltr;">13 H 45</td></tr>
                                                            </tr>
                                                            <tr>
                                                               <td>وقت العودة -16- </td> <td style="direction:ltr;">14 H 15</td></tr>
                                                               <td>وقت العودة -17- </td> <td style="direction:ltr;">14 H 40</td></tr>
                                                               <td>وقت العودة -18- </td> <td style="direction:ltr;">15 H 10</td></tr>
                                                               <td>وقت العودة -19- </td> <td style="direction:ltr;">15 H 40</td></tr>
                                                               <td>وقت العودة -20- </td> <td style="direction:ltr;">16 H 35</td></tr>

                                                            </tr>
                                                            <tr>
                                                               <td>وقت العودة -21- </td> <td style="direction:ltr;">17 H 05</td></tr>
                                                               <td>وقت العودة -22- </td> <td style="direction:ltr;">17 H 30</td></tr>
                                                               <td>وقت العودة -23- </td> <td style="direction:ltr;">18 H 00</td></tr>
                                                               <td>وقت العودة -24- </td> <td style="direction:ltr;">18 H 30</td></tr>
                                                               <td>وقت العودة -25- </td> <td style="direction:ltr;">18 H 55</td><td>وقت العودة -26- </td> <td style="direction:ltr;">19 H 20</td></tr>
                                                            </tr>
                                                            
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- end of single item -->
                                                <!-- single item -->

                                                <!-- end of single item -->
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div id="tab-9" class="service-tab-content">
                                    <h4 style="font-size:24px;margin-top:15px">محطة الأمير عبد القادر <i
                                            class="bi bi-caret-right-fill"></i>
                                        <i class="bi bi-caret-left-fill"></i>
                                        سيدي حمادوش
                                    </h4>
                                    <div class="section-center">
                                        <div class="tabs1">
                                            <!-- btn container -->
                                            <div class="btn-container">
                                                <button class="button1 live" data-id="step15">الذهاب</button>
                                                <button class="button1" data-id="step16">الإياب</button>
                                            </div>
                                            <div class="tabs-content">
                                                <!-- single item -->
                                                <div class="content1 live" id="step15">
                                                    <table class="table table-bordered">
                                                        <thead class="" style="background-color:#3d80e4">
                                                            <tr>
                                                                <th>وقت الانطلاق </th>
                                                                <th> محطة الأمير عبد القادر
                                                                </th> 
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                       <td>وقت الانطلاق -1- </td> <td style="direction:ltr;">07 H 20<span style="font-size: 16px">محطة الغالمي</span></td></tr>
                                                       <td>وقت الانطلاق -2- </td> <td style="direction:ltr;">08 H 10</td></tr>
                                                               <td>وقت الانطلاق -3- </td> <td style="direction:ltr;">08 H 30</td></tr>
                                                               <td>وقت الانطلاق -4- </td> <td style="direction:ltr;">08 H 50</td></tr>
                                                               <td>وقت الانطلاق -5- </td> <td style="direction:ltr;">09 H 10</td></tr>
                                                               <td>وقت الانطلاق -6- </td> <td style="direction:ltr;">09 H 35</td></tr>
                                                            </tr>
                                                            <tr>
                                                               <td>وقت الانطلاق -7- </td> <td style="direction:ltr;">09 H 55</td></tr>
                                                               <td>وقت الانطلاق -8- </td> <td style="direction:ltr;">10 H 15</td></tr>
                                                               <td>وقت الانطلاق -9- </td> <td style="direction:ltr;">10 H 40</td></tr>
                                                               <td>وقت الانطلاق -10- </td> <td style="direction:ltr;">11 H 05</td></tr>
                                                               <td>وقت الانطلاق -11- </td> <td style="direction:ltr;">11 H 25</td></tr>
                                                            </tr>
                                                            <tr>
                                                               <td>وقت الانطلاق -12- </td> <td style="direction:ltr;">11 H 45</td></tr>
                                                               <td>وقت الانطلاق -13- </td> <td style="direction:ltr;">12 H 10</td></tr>
                                                               <td>وقت الانطلاق -14- </td> <td style="direction:ltr;">12 H 35</td></tr>
                                                               <td>وقت الانطلاق -15- </td> <td style="direction:ltr;">12 H 55</td></tr>
                                                               <td>وقت الانطلاق -16- </td> <td style="direction:ltr;">13 H 15</td></tr>
                                                            </tr>
                                                            <tr>
                                                               <td>وقت الانطلاق -17- </td> <td style="direction:ltr;">13 H 40</td></tr>
                                                               <td>وقت الانطلاق -18- </td> <td style="direction:ltr;">14 H 05</td></tr>
                                                               <td>وقت الانطلاق -19- </td> <td style="direction:ltr;">14 H 25</td></tr>
                                                               <td>وقت الانطلاق -20- </td> <td style="direction:ltr;">14 H 45</td></tr>
                                                               <td>وقت الانطلاق -21- </td> <td style="direction:ltr;">15 H 10</td></tr>

                                                            </tr>
                                                            <tr>
                                                               <td>وقت الانطلاق -22- </td> <td style="direction:ltr;">15 H 55</td></tr>
                                                               <td>وقت الانطلاق -23- </td> <td style="direction:ltr;">16 H 15</td></tr>
                                                               <td>وقت الانطلاق -24- </td> <td style="direction:ltr;">16 H 40</td></tr>
                                                               <td>وقت الانطلاق -25- </td> <td style="direction:ltr;">17 H 05</td></tr>
                                                               <td>وقت الانطلاق -26- </td> <td style="direction:ltr;">17 H 25</td></tr>

                                                            </tr>
                                                            <tr>
                                                               <td>وقت الانطلاق -27- </td> <td style="direction:ltr;">17 H 45</td></tr>
                                                               <td>وقت الانطلاق -28- </td> <td style="direction:ltr;">18 H 10</td></tr>
                                                               <td>وقت الانطلاق -29- </td> <td style="direction:ltr;">18 H 35</td></tr> <td>وقت الانطلاق -30- </td> <td style="direction:ltr;">18 H 55</td><td>وقت الانطلاق -31- </td>
                                                                <td style="direction:ltr;">19 H 20 <br><span style="fo<td>وقت الانطلاق -- </td>nt-size:16px"> (سيدي براهيم)</span></td></tr>
                                                            </tr>

                                                            
                                                        </tbody>
                                                    </table>

                                                </div>
                                                <!-- end of single item -->
                                                <!-- single item -->
                                                <div class="content1" id="step16">
                                                    <table class="table table-bordered">
                                                        <thead class="" style="background-color:#3d80e4">
                                                            <tr>
                                                                <th>وقت العودة -- </th>
                                                                <th> سيدي حمادوش
                                                                </th> 
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                               <td>وقت العودة -1- </td> <td style="direction:ltr;">07 H 20</td></tr>
                                                               <td>وقت العودة -2- </td> <td style="direction:ltr;">07 H 40</td></tr>
                                                               <td>وقت العودة -3- </td> <td style="direction:ltr;">08 H 00</td></tr>
                                                               <td>وقت العودة -4- </td> <td style="direction:ltr;">08 H 20</td></tr>
                                                               <td>وقت العودة -5- </td> <td style="direction:ltr;">08 H 50</td></tr>
                                                                </tr>
                                                            <tr>
                                                               <td>وقت العودة -6- </td> <td style="direction:ltr;">09 H 10</td></tr>
                                                               <td>وقت العودة -7- </td> <td style="direction:ltr;">09 H 30</td></tr>
                                                               <td>وقت العودة -8- </td> <td style="direction:ltr;">09 H 55</td></tr>
                                                               <td>وقت العودة -9- </td> <td style="direction:ltr;">10 H 15</td></tr>
                                                               <td>وقت العودة -10- </td> <td style="direction:ltr;">10 H 35</td></tr>
                                                            </tr>
                                                            <tr>
                                                               <td>وقت العودة -11- </td> <td style="direction:ltr;">10 H 55</td></tr>
                                                               <td>وقت العودة -12- </td> <td style="direction:ltr;">11 H 20</td></tr>
                                                               <td>وقت العودة -13- </td> <td style="direction:ltr;">11 H 45</td></tr>
                                                               <td>وقت العودة -14- </td> <td style="direction:ltr;">12 H 05</td></tr>
                                                               <td>وقت العودة -15- </td> <td style="direction:ltr;">12 H 25</td></tr>
                                                            </tr>
                                                            <tr>
                                                               <td>وقت العودة -16- </td> <td style="direction:ltr;">12 H 50</td></tr>
                                                               <td>وقت العودة -17- </td> <td style="direction:ltr;">13 H 15</td></tr>
                                                               <td>وقت العودة -18- </td> <td style="direction:ltr;">13 H 35</td></tr>
                                                               <td>وقت العودة -19- </td> <td style="direction:ltr;">13 H 55</td></tr>
                                                               <td>وقت العودة -20- </td> <td style="direction:ltr;">14 H 20</td></tr>

                                                            </tr>
                                                            <tr>
                                                               <td>وقت العودة -21- </td> <td style="direction:ltr;">14 H 45</td></tr>
                                                               <td>وقت العودة -22- </td> <td style="direction:ltr;">15 H 05</td></tr>
                                                               <td>وقت العودة -23- </td> <td style="direction:ltr;">15 H 25</td></tr>
                                                               <td>وقت العودة -24- </td> <td style="direction:ltr;">15 H 50</td></tr>
                                                               <td>وقت العودة -25- </td> <td style="direction:ltr;">16 H 35</td></tr>

                                                            </tr>
                                                            <tr>
                                                               <td>وقت العودة -26- </td> <td style="direction:ltr;">17 H 20</td></tr>
                                                               <td>وقت العودة -27- </td> <td style="direction:ltr;">17 H 45</td></tr>
                                                               <td>وقت العودة -28- </td> <td style="direction:ltr;">18 H 05</td></tr>
                                                               <td>وقت العودة -29- </td> <td style="direction:ltr;">18 H 25</td></tr>
                                                               <td>وقت العودة -30- </td> <td style="direction:ltr;">18 H 50</td><td>وقت العودة -31- </td> <td style="direction:ltr;">19 H 10</td><td>وقت العودة -32- </td> <td style="direction:ltr;">19 H 25</td></tr>
                                                            </tr>
                                                            
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- end of single item -->
                                                <!-- single item -->

                                                <!-- end of single item -->
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



        </div>


    </section><!-- End Testimonials Section -->

    <?php
include 'footer.php';

?> 
    <script>
    $(document).ready(function() {
        $('ul.service-tab-nav li a').on('click', function(e) {
            e.preventDefault();
            $('ul.services-list-tab li a').removeClass('active');
            $(this).addClass('active');
            $('.service-tab-content').removeClass('show');
            $($(this).attr('href')).addClass('show');
        });

        // Tab-2 Demo
        $('.nav-tabs > li > a').click(function(event) {
            event.preventDefault(); //stop browser to take action for clicked anchor

            //get displaying tab content jQuery selector
            var active_tab_selector = $('.nav-tabs > li.active > a').attr('href');

            //find actived navigation and remove 'active' css
            var actived_nav = $('.nav-tabs > li.active');
            actived_nav.removeClass('active');

            //add 'active' css into clicked navigation
            $(this).parents('li').addClass('active');

            //hide displaying tab content
            $(active_tab_selector).removeClass('active');
            $(active_tab_selector).addClass('hide');

            //show target tab content
            var target_tab_selector = $(this).attr('href');
            $(target_tab_selector).removeClass('hide');
            $(target_tab_selector).addClass('active');
        });
    }); // Dom Ready End
    const tabs = document.querySelector(".tabs");
    const btns = document.querySelectorAll(".button");
    const articles = document.querySelectorAll(".content");
    tabs.addEventListener("click", function(e) {
        const id = e.target.dataset.id;
        if (id) {
            // remove selected from other buttons
            btns.forEach(function(btn) {
                btn.classList.remove("live");
            });
            e.target.classList.add("live");
            // hide other articles
            articles.forEach(function(article) {
                article.classList.remove("live");
            });
            const element = document.getElementById(id);
            element.classList.add("live");
        }
    });
    const tabs1 = document.querySelector(".tabs1");
    const btns1 = document.querySelectorAll(".button1");
    const articles1 = document.querySelectorAll(".content1");
    tabs1.addEventListener("click", function(e) {
        const id = e.target.dataset.id;
        if (id) {
            // remove selected from other buttons
            btns1.forEach(function(btn) {
                btn.classList.remove("live");
            });
            e.target.classList.add("live");
            // hide other articles1
            articles1.forEach(function(article) {
                article.classList.remove("live");
            });
            const element1 = document.getElementById(id);
            element1.classList.add("live");
        }
    });
    const tabs2 = document.querySelector(".tabs2");
    const btns2 = document.querySelectorAll(".button2");
    const articles2 = document.querySelectorAll(".content2");
    tabs2.addEventListener("click", function(e) {
        const id = e.target.dataset.id;
        if (id) {
            // remove selected from other buttons
            btns2.forEach(function(btn) {
                btn.classList.remove("live");
            });
            e.target.classList.add("live");
            // hide other articles1
            articles2.forEach(function(article) {
                article.classList.remove("live");
            });
            const element2 = document.getElementById(id);
            element2.classList.add("live");
        }
    });

    const tabs3 = document.querySelector(".tabs3");
    const btns3 = document.querySelectorAll(".button3");
    const articles3 = document.querySelectorAll(".content3");
    tabs3.addEventListener("click", function(e) {
        const id = e.target.dataset.id;
        if (id) {
            // remove selected from other buttons
            btns3.forEach(function(btn) {
                btn.classList.remove("live");
            });
            e.target.classList.add("live");
            // hide other articles1
            articles3.forEach(function(article) {
                article.classList.remove("live");
            });
            const element3 = document.getElementById(id);
            element3.classList.add("live");
        }
    });
    const tabs4 = document.querySelector(".tabs4");
    const btns4 = document.querySelectorAll(".button4");
    const articles4 = document.querySelectorAll(".content4");
    tabs4.addEventListener("click", function(e) {
        const id = e.target.dataset.id;
        if (id) {
            // remove selected from other buttons
            btns4.forEach(function(btn) {
                btn.classList.remove("live");
            });
            e.target.classList.add("live");
            // hide other articles1
            articles4.forEach(function(article) {
                article.classList.remove("live");
            });
            const element4 = document.getElementById(id);
            element4.classList.add("live");
        }
    });
    const tabs5 = document.querySelector(".tabs5");
    const btns5 = document.querySelectorAll(".button5");
    const articles5 = document.querySelectorAll(".content5");
    tabs5.addEventListener("click", function(e) {
        const id = e.target.dataset.id;
        if (id) {
            // remove selected from other buttons
            btns5.forEach(function(btn) {
                btn.classList.remove("live");
            });
            e.target.classList.add("live");
            // hide other articles1
            articles5.forEach(function(article) {
                article.classList.remove("live");
            });
            const element5 = document.getElementById(id);
            element5.classList.add("live");
        }
    });
    const tabs6 = document.querySelector(".tabs6");
    const btns6 = document.querySelectorAll(".button6");
    const articles6 = document.querySelectorAll(".content6");
    tabs6.addEventListener("click", function(e) {
        const id = e.target.dataset.id;
        if (id) {
            // remove selected from other buttons
            btns6.forEach(function(btn) {
                btn.classList.remove("live");
            });
            e.target.classList.add("live");
            // hide other articles1
            articles6.forEach(function(article) {
                article.classList.remove("live");
            });
            const element6 = document.getElementById(id);
            element6.classList.add("live");
        }
    });
    const tabs7 = document.querySelector(".tabs7");
    const btns7 = document.querySelectorAll(".button7");
    const articles7 = document.querySelectorAll(".content7");
    tabs7.addEventListener("click", function(e) {
        const id = e.target.dataset.id;
        if (id) {
            // remove selected from other buttons
            btns7.forEach(function(btn) {
                btn.classList.remove("live");
            });
            e.target.classList.add("live");
            // hide other articles1
            articles7.forEach(function(article) {
                article.classList.remove("live");
            });
            const element7 = document.getElementById(id);
            element7.classList.add("live");
        }
    });

    const tabs8 = document.querySelector(".tabs8");
    const btns8 = document.querySelectorAll(".button8");
    const articles8 = document.querySelectorAll(".content8");
    tabs8.addEventListener("click", function(e) {
        const id = e.target.dataset.id;
        if (id) {
            // remove selected from other buttons
            btns8.forEach(function(btn) {
                btn.classList.remove("live");
            });
            e.target.classList.add("live");
            // hide other articles1
            articles8.forEach(function(article) {
                article.classList.remove("live");
            });
            const element8 = document.getElementById(id);
            element8.classList.add("live");
        }
    });
    </script>
</body>

</html>