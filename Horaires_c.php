<!DOCTYPE html>
<html lang="en">

<?php
include 'head.php';

?> 
<style>
    
/*** Service Tab Listing ***/
.service-tab-nav { 
  box-shadow: 0px 0px 40px 0px rgba(0, 0, 0, .08);
  background-color:#fff;
}
.service-tab-nav li { border-bottom: 1px solid #e7e7e7; }
.service-tab-nav li a { display:block; color:#333; 
  padding:30px; 
 -webkit-transition: all .8s cubic-bezier(.19, 1, .22, 1) 0ms;
	-moz-transition: all .8s cubic-bezier(.19, 1, .22, 1) 0ms;
	-ms-transition: all .8s cubic-bezier(.19, 1, .22, 1) 0ms;
	-o-transition: all .8s cubic-bezier(.19, 1, .22, 1) 0ms;
	transition: all .8s cubic-bezier(.19, 1, .22, 1) 0ms;
  font-weight:bold; position:relative; z-index:0; 
  overflow:hidden;
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
.service-tab-nav li a.active{ 
  background-color:#3d80e4; 
  color:#fff; }
.service-tab-nav li a:hover:before,
.service-tab-nav li a:focus:before,
.service-tab-nav li a:active:before,
.service-tab-nav li a.active:before
{ 
  background-color:blue; 
  -webkit-transform: rotate(-345deg) translate3d(30px,0,0);
	-moz-transform: rotate(-345deg) translate3d(30px,0,0);
	-ms-transform: rotate(-345deg) translate3d(30px,0,0);
	-o-transform: rotate(-345deg) translate3d(30px,0,0);
	transform: rotate(-345deg) translate3d(30px,0,0);
}

/*** Service Tab Content ***/
.service-tab-content {
	display: none;
}
.service-tab-content.show {
  display:block;
}

/* Common Tab */
	/** Start: to style navigation tab **/
.nav {
  margin-bottom: 18px;
  margin-left: 0;
  list-style: none;
}

.nav > li > a {
  display: block;
}

.nav-tabs{
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

.nav-tabs > li {
  float: left;
}

.nav-tabs > li > a {
  padding-right: 12px;
  padding-left: 12px;
  margin-right: 2px;
  line-height: 14px;
}

.nav-tabs {
  border-bottom: 1px solid #ddd;
}

.nav-tabs > li {
  margin-bottom: -1px;
}

.nav-tabs > li > a {
  padding-top: 8px;
  padding-bottom: 8px;
  line-height: 18px;
  border: 1px solid transparent;
  -webkit-border-radius: 4px 4px 0 0;
  -moz-border-radius: 4px 4px 0 0;
  border-radius: 4px 4px 0 0;
}

.nav-tabs > li > a:hover {
  border-color: #eeeeee #eeeeee #dddddd;
}

.nav-tabs > .active > a,
.nav-tabs > .active > a:hover {
  color: #555555;
  cursor: default;
  background-color: #ffffff;
  border: 1px solid #ddd;
  border-bottom-color: transparent;
}

li {
  line-height: 18px;
}

.tab-content.active{
  display: block;
}

.tab-content.hide{
  display: none;
}
.zoom {
  transition: transform .2s; /* Animation */
  
  margin: 0 auto;
}
.zoom:hover {
  transform: scale(1.5);
  z-index:1009;
  left:50% /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
.section-center {
  width:auto;
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
  width:100px;
  height:30px
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
  margin-top:25px;
  padding:5px;
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

</style>
<body>

<?php
include 'header.php';

?> 
  <!-- ======= Testimonials Section ======= -->
  <section id="" class="main" style="top:120px; height:auto">

<br>
<br>
<div class="row col-12 justify-content-center" style="top:50px;font-family: Aparajita;font-size: 25px;direction:rtl;">

    
    <center><h1 class="" style="color: #3d80e4">الأوقات

 </h1></center>
        <div class="" style="text-align: center;font-family: Aparajita;font-size: 25px">
        أوقات الانطلاق من محطة الأمير عبد القادر الى كافة المسارات


    </div>
   
<section class="serice-tab">
  <div id="chart-container" class="container" style="width:100%;height:100%">
    <div class="row">
      <div class="col-xl-4 col-lg-4 col-md-4">
        <ul  style="list-style-type: none;" class="service-tab-nav services-list-tab">
          <!-- <li><a href="#tab-one" title="Tab">شبكة الاستغلال</a></li> -->
          <li><a class="active" href="#tab-two" id="3" title="Tab">الخط رقم 03</a></li>
          <li><a href="#tab-four" id="9" title="Tab">الخط رقم 09</a></li>
          <li><a href="#tab-three" id="16" title="Tab">الخط رقم 16</a></li>
          <li><a href="#tab-five" id="11" title="Tab">الخط رقم 11</a></li>
          <li><a href="#tab-6" id="25" title="Tab">الخط رقم 25</a></li>
          <li><a href="#tab-7" id="26" title="Tab">الخط رقم 26</a></li>
          <li><a href="#tab-8" id="27" title="Tab">الخط رقم 27</a></li>
          <li><a href="#tab-9" id="28" title="Tab">الخط رقم 28</a></li>
        </ul>
      </div>
      <div class="col-xl-8 col-lg-8 col-md-8">
        <div class="service-tab-wrapper">
          <!-- <div id="tab-one" class="service-tab-content show">
            <h4 style="font-size:24px;margin-top:15px">شبكة الاستغلال</h4>
      <img src="assets/image/rg.jpg" alt="" width="100%" height="100%">
      <img class="zoom" src="assets/image/tab.jpg"alt="" width="100%" height="100%">
          </div> -->
          <div id="tab-two" class="service-tab-content show">
            <h4 style="font-size:24px;margin-top:15px">  المحطة رقم 17  <i class="bi bi-caret-right-fill"></i>
<i class="bi bi-caret-left-fill"></i>
 حي 800 مسكن (طريق تسالة) </h4>
            <div class="section-center">
      <div class="tabs">
        <!-- btn container -->
        <div class="btn-container">
        <button class="button live" id="3_btn" data-id="step1">الذهاب</button>
          <button class="button" id="3-btn2" data-id="step2">الإياب</button>
        </div>
        <div class="tabs-content">
          <!-- single item -->
          <div class="content 3_btn live" id="step1">
<table class="table table-bordered" >
  <thead class="" style="background-color:#3d80e4">
    <tr>
      <th colspan="5">    مواقيت الانطلاق من المحطة رقم 17 
 </th>
 </tr>
  </thead>
  <tbody>
  <tr>
      <td style="direction:ltr;" >07 H 55</td>
      <td style="direction:ltr;">08 H 20</td>
      <td style="direction:ltr;">08 H 50</td>
      <td style="direction:ltr;">09 H 20</td>
      <td style="direction:ltr;">09 H 45</td>
    </tr>
    <tr>
      <td style="direction:ltr;" >10 H 15</td>
      <td style="direction:ltr;">10 H 45</td>
      <td style="direction:ltr;">11 H 15</td>
      <td style="direction:ltr;">11 H 45</td>
      <td style="direction:ltr;">12 H 15</td>
    </tr>
    <tr>
      <td style="direction:ltr;" >12 H 45</td>
      <td style="direction:ltr;">13 H 15</td>
      <td style="direction:ltr;">13 H 45</td>
      <td style="direction:ltr;">14 H 15</td>
      <td style="direction:ltr;">14 H 45</td>
    </tr>
    <tr>
      <td style="direction:ltr;" >15 H 15</td>
      <td style="direction:ltr;">16 H 15</td>
      <td style="direction:ltr;">16 H 45</td>
      <td style="direction:ltr;">17 H 15</td>
      <td style="direction:ltr;">17 H 45</td>

    </tr>
    <tr>
      <td style="direction:ltr;">18 H 15</td>
      <td style="direction:ltr;">18 H 45</td>
    </tr>
    <!-- scope="row"
    scope="row"
    scope="row"
    scope="row"
    scope="row" -->
  </tbody>
</table>

          </div>
          <!-- end of single item -->
          <!-- single item -->
          <div class="content" id="step2">
<table class="table table-bordered" >
  <thead class="" style="background-color:#3d80e4">
    <tr>
      <th colspan="5">    مواقيت الانطلاق من حي 800 مسكن 
 </th>
 </tr>
  </thead>
  <tbody>
  <tr>
      <td style="direction:ltr;" >07 H 25</td>
      <td style="direction:ltr;">08 H 25</td>
      <td style="direction:ltr;">08 H 50</td>
      <td style="direction:ltr;">09 H 20</td>
      <td style="direction:ltr;">09 H 50</td>
    </tr>
    <tr>
      <td style="direction:ltr;" >10 H 15</td>
      <td style="direction:ltr;">10 H 45</td>
      <td style="direction:ltr;">11 H 15</td>
      <td style="direction:ltr;">11 H 45</td>
      <td style="direction:ltr;">12 H 15</td>
    </tr>
    <tr>
      <td style="direction:ltr;" >12 H 45</td>
      <td style="direction:ltr;">13 H 15</td>
      <td style="direction:ltr;">13 H 45</td>
      <td style="direction:ltr;">14 H 15</td>
      <td style="direction:ltr;">14 H 45</td>
    </tr>
    <tr>
      <td style="direction:ltr;" >15 H 15</td>
      <td style="direction:ltr;">15 H 45</td>
      <td style="direction:ltr;">16 H 45</td>
      <td style="direction:ltr;">17 H 15</td>
      <td style="direction:ltr;">17 H 45</td>

    </tr>
    <tr>
      <td style="direction:ltr;">18 H 15</td>
      <td style="direction:ltr;">18 H 45</td>
    </tr>
    <!-- scope="row"
    scope="row"
    scope="row"
    scope="row"
    scope="row" -->
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
          <h4 style="font-size:24px;margin-top:15px">المحطة رقم 17 <i class="bi bi-caret-right-fill"></i>
<i class="bi bi-caret-left-fill"></i>
 حي الروشي</h4>
 <div class="section-center">
      <div class="tabs">
        <!-- btn container -->
        <div class="btn-container">
          <button class="button 9_btn" id="9_btn" data-id="step3">الذهاب</button>
          <button class="button 9_btn2" id="9_btn2" data-id="step4">الإياب</button>
        </div>
        <div class="tabs-content">
          <!-- single item -->
          <div class="content 9_c" id="step3">
            test
          </div>
          <!-- end of single item -->
          <!-- single item -->
          <div class="content 9_c2" id="step4">
            
          </div>
          <!-- end of single item -->
          <!-- single item -->
          
          <!-- end of single item -->
        </div>
      </div>
    </div>            
          </div>
          <div id="tab-three" class="service-tab-content">
            <h4 style="font-size:24px;margin-top:15px">المحطة رقم 17 <i class="bi bi-caret-right-fill"></i>
<i class="bi bi-caret-left-fill"></i>
 حي بن حمودة</h4>
      <img src="assets/image/t16i.jpg" alt="" width="100%" height="100%">
            
          </div>
          
          <div id="tab-five" class="service-tab-content">
            <h4 style="font-size:24px;margin-top:15px">محطة الأمير عبد القادر<i class="bi bi-caret-right-fill"></i>
<i class="bi bi-caret-left-fill"></i>
 سيدي لحسن</h4>
      <img src="assets/image/t11i.jpg" alt="" width="100%" height="100%">
            
          </div>
          <div id="tab-6" class="service-tab-content">
            <h4 style="font-size:24px;margin-top:15px">محطة الأمير عبد القادر<i class="bi bi-caret-right-fill"></i>
<i class="bi bi-caret-left-fill"></i>
 تلموني الجديدة</h4>
      <img src="assets/image/t25i.jpg" alt="" width="100%" height="100%">
            
          </div>
          <div id="tab-7" class="service-tab-content">
            <h4 style="font-size:24px;margin-top:15px">محطة الأمير عبد القادر<i class="bi bi-caret-right-fill"></i>
<i class="bi bi-caret-left-fill"></i>
 قايد بلعربي</h4>
      <img src="assets/image/t26i.jpg" alt="" width="100%" height="100%">
            
          </div>
          <div id="tab-8" class="service-tab-content">
            <h4 style="font-size:24px;margin-top:15px">محطة الأمير عبد القادر <i class="bi bi-caret-right-fill"></i>
<i class="bi bi-caret-left-fill"></i>
 البواعيش</h4>
      <img src="assets/image/t27i.jpg" alt="" width="100%" height="100%">
            
          </div>
          <div id="tab-9" class="service-tab-content">
            <h4 style="font-size:24px;margin-top:15px">محطة الأمير عبد القادر <i class="bi bi-caret-right-fill"></i>
<i class="bi bi-caret-left-fill"></i>
 سيدي حمادوش
</h4>
      <img src="assets/image/t28i.jpg" alt="" width="100%" height="100%">
            
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
      $('#'+$(this).prop('id')+'_btn').addClass("live");
      $('.service-tab-content').removeClass('show');
      $($(this).attr('href')).addClass('show');
const articles = document.querySelectorAll(".content");
articles.forEach(function (article) {
      article.classList.remove("live");
    });
    $('.'+$(this).prop('id')+'_c').addClass("live") ;
    const btn = document.querySelector('.9_btn');
    btn.addEventListener("click", function (e) {
alert($(this).prop('id'))
})
  });

// Tab-2 Demo
  $('.nav-tabs > li > a').click(function(event){
    event.preventDefault();//stop browser to take action for clicked anchor

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
tabs.addEventListener("click", function (e) {
  const id = e.target.dataset.id;
  if (id) {
    // remove selected from other buttons
    btns.forEach(function (btn) {
      btn.classList.remove("live");
    });
    e.target.classList.add("live");
    // hide other articles
    articles.forEach(function (article) {
      article.classList.remove("live");
    });
    const element = document.getElementById(id);
    element.classList.add("live");
  }
});

  </script>
</body>
</html>




     
    