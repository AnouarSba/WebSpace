<!DOCTYPE html>
<html lang="en">

@include('head')
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
.img-popup {
    z-index: 100000;
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background: rgba(255, 255, 255, .5);
    display: flex;
    justify-content: center;
    align-items: center;
    display: none;
}

.img-popup img {
    /*max-width: ;
width: 100%;*/
    opacity: 0;
    transform: translateY(-100px);
    -webkit-transform: translateY(-100px);
    -moz-transform: translateY(-100px);
    -ms-transform: translateY(-100px);
    -o-transform: translateY(-100px);
}

.close-img-popup {
    width: 35px;
    height: 30px;
    display: flex;
    justify-content: center;
    flex-direction: column;
    position: absolute;
    top: 20px;
    right: 20px;
    cursor: pointer;
}

.close-img-popup .bar {
    height: 4px;
    background: #333;
}

.close-img-popup .bar:nth-child(1) {
    transform: rotate(45deg);
}

.close-img-popup .bar:nth-child(2) {
    transform: translateY(-4px) rotate(-45deg);
}

.opened {
    display: flex;
}

.opened img {
    animation: animatepopup 1s ease-in-out .8s;
    -webkit-animation: animatepopup .3s ease-in-out forwards;
}

@keyframes animatepopup {

    to {
        opacity: 1;
        transform: translateY(0);
        -webkit-transform: translateY(0);
        -moz-transform: translateY(0);
        -ms-transform: translateY(0);
        -o-transform: translateY(0);
    }

}
.container__img-holder{
  cursor: pointer;
}

</style>
<body>

@include('header')
  <!-- ======= Testimonials Section ======= -->
  <section id="" class="main" style="top:120px; height:auto">

<br>
<br>
<div class="row col-12 justify-content-center" style="top:50px;font-family: Aparajita;font-size: 25px;direction:rtl;">

    
    <center><h1 class="" style="color: #3d80e4">شبكة استغلال المؤسسة

 </h1></center>
        <div class="" style="text-align: center;font-family: Aparajita;font-size: 25px">
    </div>
   
<section class="serice-tab">
  <div id="chart-container" class="container" style="width:100%;height:100%">
    <div class="row">
      <div class="col-xl-4 col-lg-4 col-md-4">
        <ul  style="list-style-type: none;" class="service-tab-nav services-list-tab">
          <li><a class="active" href="#tab-one" title="Tab">شبكة الاستغلال</a></li>
          <li><a href="#tab-two" title="Tab">الخط رقم 03B</a></li>
          <li><a href="#tab-four" title="Tab">الخط رقم 09</a></li>
          <li><a href="#tab-three" title="Tab">الخط رقم 16</a></li>
          <li><a href="#tab-five" title="Tab">الخط رقم 11</a></li>
          <li><a href="#tab-6" title="Tab">الخط رقم 25</a></li>
          <li><a href="#tab-7" title="Tab">الخط رقم 26</a></li>
          <li><a href="#tab-8" title="Tab">الخط رقم 27</a></li>
          <li><a href="#tab-9" title="Tab">الخط رقم 28</a></li>
        </ul>
      </div>
      <div class="col-xl-8 col-lg-8 col-md-8">
        <div class="service-tab-wrapper">
          <div id="tab-one" class="service-tab-content show">
            <h4 style="font-size:24px;margin-top:15px">شبكة الاستغلال</h4>
      <img src="{{ asset('assets/image/rg.jpg') }}" alt="" width="100%" height="100%">
     
     
     

<div class="img-popup" style="width: 100vw">
    <img src="" alt="Popup Image " style="max-width:100%;height:auto">
    <div class="close-img-popup">
        <div class="bar"></div>
        <div class="bar"></div>
    </div>
</div>






<div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2 myResumes2">
    <div class="swiper-wrapper">
        <div class="swiper-slide container__img-holder">
        <img class="" src="{{ asset('assets/image/tab.jpg') }}"alt="" width="100%" height="100%">

        </div>
    </div>
</div>







     
     
     
          </div>
          <div id="tab-two" class="service-tab-content">
            <h4 style="font-size:24px;margin-top:15px">الخط رقم 03</h4>
      <img src="{{ asset('assets/image/3.jpg') }}" alt="" width="100%" height="100%">
            
          </div>
          <div id="tab-four" class="service-tab-content">
            <h4 style="font-size:24px;margin-top:15px">الخط رقم 09</h4>
      <img src="{{ asset('assets/image/9.jpg') }}" alt="" width="100%" height="100%">
            
          </div>
          <div id="tab-three" class="service-tab-content">
            <h4 style="font-size:24px;margin-top:15px">الخط رقم 16</h4>
      <img src="{{ asset('assets/image/16i.jpg') }}" alt="" width="100%" height="100%">
            
          </div>
          
          <div id="tab-five" class="service-tab-content">
            <h4 style="font-size:24px;margin-top:15px">الخط رقم 11</h4>
      <img src="{{ asset('assets/image/11i.jpg') }}" alt="" width="100%" height="100%">
            
          </div>
          <div id="tab-6" class="service-tab-content">
            <h4 style="font-size:24px;margin-top:15px">الخط رقم 25</h4>
      <img src="{{ asset('assets/image/25i.jpg') }}" alt="" width="100%" height="100%">
            
          </div>
          <div id="tab-7" class="service-tab-content">
            <h4 style="font-size:24px;margin-top:15px">الخط رقم 26</h4>
      <img src="{{ asset('assets/image/26i.jpg') }}" alt="" width="100%" height="100%">
            
          </div>
          <div id="tab-8" class="service-tab-content">
            <h4 style="font-size:24px;margin-top:15px">الخط رقم 27</h4>
      <img src="{{ asset('assets/image/27i.jpg') }}" alt="" width="100%" height="100%">
            
          </div>
          <div id="tab-9" class="service-tab-content">
            <h4 style="font-size:24px;margin-top:15px">الخط رقم 28</h4>
      <img src="{{ asset('assets/image/28i.jpg') }}" alt="" width="100%" height="100%">
            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>  


      
</div>


    </section><!-- End Testimonials Section -->

  @include('footer')  
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


$(document).ready(function () {
    var imgPopup = $('.img-popup');
    var imgCont = $('.container__img-holder');
    var popupImage = $('.img-popup img');
    var closeBtn = $('.close-img-popup');







    // handle events
    imgCont.on('click', function () {
        var img_src = $(this).children('img').attr('src');
        imgPopup.children('img').attr('src', img_src);
        imgPopup.addClass('opened');
    });

    $(imgPopup, closeBtn).on('click', function () {
        imgPopup.removeClass('opened');
        imgPopup.children('img').attr('src', '');
    });

    popupImage.on('click', function (e) {
        e.stopPropagation();
    });

})
  </script>
</body>
</html>




     
    