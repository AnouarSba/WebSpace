<!DOCTYPE html>
<html lang="en">

<?php
include 'head.php';

?> 

<body>

<?php
include 'header.php';

?> 
<style>
    
.tabs {
  left: 50%;
  transform: translateX(-50%);
  position: relative;
  background: white;
  padding: 50px;
  margin:3%;
  padding-bottom: 80px;
  width: 95%;
  height: 650px;
  box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
  border-radius: 5px;
  min-width: 240px;
}
.tabs input[name=tab-control] {
  display: none;
}
.tabs .content section h2,
.tabs ul li label {
  font-family: "Montserrat";
  font-weight: bold;
  font-size: 18px;
  color: #428bff;
}
.tabs ul {
  list-style-type: none;
  padding-left: 0;
  display: flex;
  flex-direction: row;
  margin-bottom: 10px;
  justify-content: space-between;
  align-items: flex-end;
  flex-wrap: wrap;
}
.tabs ul li {
  box-sizing: border-box;
  flex: 1;
  width: 25%;
  padding: 0 10px;
  text-align: center;
}
.tabs ul li label {
  transition: all 0.3s ease-in-out;
  color: #929daf;
  padding: 5px auto;
  overflow: hidden;
  text-overflow: ellipsis;
  display: block;
  cursor: pointer;
  transition: all 0.2s ease-in-out;
  white-space: nowrap;
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
.tabs ul li label br {
  display: none;
}
.tabs ul li label svg {
  fill: #929daf;
  height: 1.2em;
  vertical-align: bottom;
  margin-right: 0.2em;
  transition: all 0.2s ease-in-out;
}
.tabs ul li label:hover, .tabs ul li label:focus, .tabs ul li label:active {
  outline: 0;
  color: #bec5cf;
}
.tabs ul li label:hover svg, .tabs ul li label:focus svg, .tabs ul li label:active svg {
  fill: #bec5cf;
}
.tabs .slider {
  position: relative;
  width: 20%;
  transition: all 0.33s cubic-bezier(0.38, 0.8, 0.32, 1.07);
}
.tabs .slider .indicator {
  position: relative;
  width: 50px;
  max-width: 100%;
  margin: 0 auto;
  height: 4px;
  background: #428bff;
  border-radius: 1px;
}
.tabs .content {
  margin-top: 30px;
}
.tabs .content section {
  display: none;
  -webkit-animation-name: content;
          animation-name: content;
  -webkit-animation-direction: normal;
          animation-direction: normal;
  -webkit-animation-duration: 0.3s;
          animation-duration: 0.3s;
  -webkit-animation-timing-function: ease-in-out;
          animation-timing-function: ease-in-out;
  -webkit-animation-iteration-count: 1;
          animation-iteration-count: 1;
  line-height: 1.4;
}
.tabs .content section h2 {
  color: #428bff;
  display: none;
}
.tabs .content section h2::after {
  content: "";
  position: relative;
  display: block;
  width: 30px;
  height: 3px;
  background: #428bff;
  margin-top: 5px;
  left: 1px;
}
.tabs input[name=tab-control]:nth-of-type(1):checked ~ ul > li:nth-child(1) > label {
  cursor: default;
  color: #428bff;
}
.tabs input[name=tab-control]:nth-of-type(1):checked ~ ul > li:nth-child(1) > label svg {
  fill: #428bff;
}
@media (max-width: 600px) {
  .tabs input[name=tab-control]:nth-of-type(1):checked ~ ul > li:nth-child(1) > label {
    background: rgba(0, 0, 0, 0.08);
  }
}
.tabs input[name=tab-control]:nth-of-type(1):checked ~ .slider {
  transform: translateX(0%);
}
.tabs input[name=tab-control]:nth-of-type(1):checked ~ .content > section:nth-child(1) {
  display: block;
}
.tabs input[name=tab-control]:nth-of-type(2):checked ~ ul > li:nth-child(2) > label {
  cursor: default;
  color: #428bff;
}
.tabs input[name=tab-control]:nth-of-type(2):checked ~ ul > li:nth-child(2) > label svg {
  fill: #428bff;
}
@media (max-width: 600px) {
  .tabs input[name=tab-control]:nth-of-type(2):checked ~ ul > li:nth-child(2) > label {
    background: rgba(0, 0, 0, 0.08);
  }
}
.tabs input[name=tab-control]:nth-of-type(2):checked ~ .slider {
  transform: translateX(100%);
}
.tabs input[name=tab-control]:nth-of-type(2):checked ~ .content > section:nth-child(2) {
  display: block;
}
.tabs input[name=tab-control]:nth-of-type(3):checked ~ ul > li:nth-child(3) > label {
  cursor: default;
  color: #428bff;
}
.tabs input[name=tab-control]:nth-of-type(3):checked ~ ul > li:nth-child(3) > label svg {
  fill: #428bff;
}
@media (max-width: 600px) {
  .tabs input[name=tab-control]:nth-of-type(3):checked ~ ul > li:nth-child(3) > label {
    background: rgba(0, 0, 0, 0.08);
  }
}
.tabs input[name=tab-control]:nth-of-type(3):checked ~ .slider {
  transform: translateX(200%);
}
.tabs input[name=tab-control]:nth-of-type(3):checked ~ .content > section:nth-child(3) {
  display: block;
}
.tabs input[name=tab-control]:nth-of-type(4):checked ~ ul > li:nth-child(4) > label {
  cursor: default;
  color: #428bff;
}
.tabs input[name=tab-control]:nth-of-type(4):checked ~ ul > li:nth-child(4) > label svg {
  fill: #428bff;
}
@media (max-width: 600px) {
  .tabs input[name=tab-control]:nth-of-type(4):checked ~ ul > li:nth-child(4) > label {
    background: rgba(0, 0, 0, 0.08);
  }
}
.tabs input[name=tab-control]:nth-of-type(4):checked ~ .slider {
  transform: translateX(300%);
}
.tabs input[name=tab-control]:nth-of-type(4):checked ~ .content > section:nth-child(4) {
  display: block;
}
.tabs input[name=tab-control]:nth-of-type(5):checked ~ ul > li:nth-child(5) > label {
  cursor: default;
  color: #428bff;
}
.tabs input[name=tab-control]:nth-of-type(5):checked ~ ul > li:nth-child(5) > label svg {
  fill: #428bff;
}
@media (max-width: 600px) {
  .tabs input[name=tab-control]:nth-of-type(5):checked ~ ul > li:nth-child(5) > label {
    background: rgba(0, 0, 0, 0.08);
  }
}
.tabs input[name=tab-control]:nth-of-type(5):checked ~ .slider {
  transform: translateX(400%);
}
.tabs input[name=tab-control]:nth-of-type(5):checked ~ .content > section:nth-child(5) {
  display: block;
}
@-webkit-keyframes content {
  from {
    opacity: 0;
    transform: translateY(5%);
  }
  to {
    opacity: 1;
    transform: translateY(0%);
  }
}
@keyframes content {
  from {
    opacity: 0;
    transform: translateY(5%);
  }
  to {
    opacity: 1;
    transform: translateY(0%);
  }
}
@media (max-width: 1000px) {
  .tabs ul li label {
    white-space: initial;
  }
  .tabs ul li label br {
    display: initial;
  }
  .tabs ul li label svg {
    height: 1.5em;
  }
}
@media (max-width: 600px) {
  .tabs ul li label {
    padding: 5px;
    border-radius: 5px;
  }
  .tabs ul li label span {
    display: none;
  }
  .tabs .slider {
    display: none;
  }
  .tabs .content {
    margin-top: 20px;
  }
  .tabs .content section h2 {
    display: block;
  }
}
body {
  font-family: "Roboto Slab", serif;
}
ul.nav > li > a,
a,
.dunkel .logoimg,
.hell .logoimg,
.logoimg,
.hell,
.dunkel,
.navbar,
.magazine-infolink-box:hover,
.magazine-infolink-box,
.teamitem .img-team,
.teamitem .teamitem-inner,
.teaser:hover img,
.teaser,
.teaser img,
.photo,
.mediadata-overlay,
.magazine-mediadata:hover .mediadata-overlay,
.magazine-mediadata:hover .overlay-icon,
.round-badge,
.navbar-nav {
  -webkit-transition: all 0.4s ease-out;
  -moz-transition: all 0.4s ease-out;
  -ms-transition: all 0.4s ease-out;
  -o-transition: all 0.4s ease-out;
  transition: all 0.4s ease-out;
}
/*teamsection*******************/
.teamitem {
  margin: 7.5em auto 2em auto;
  position: relative;
}
.teamitem-inner {
  padding: 15px;
  border: 1px solid #ccc;
}
.teamitem:hover .teamitem-inner {
  background: #eee;
  -moz-box-shadow: 0px 0px 8px #000;
  -webkit-box-shadow: 0px 0px 8px #000;
  box-shadow: 0px 0px 8px #000;
  border: 1px solid #fff;
}
.img-team-outer {
  display: block;
  height: 9em;
}
.img-team {
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
  -webkit-border-bottom-left-radius: 0;
  border-bottom-left-radius: 0;
  -moz-border-radius-bottomleft: 0;
  height: 95%;
  width: auto;
  margin: 0 auto;
  position: relative;
  padding: 5px;
  border: 1px solid #004595;
  margin-top: -5em;
  background: #fff;
}
.teamitem:hover .img-team {
  -moz-box-shadow: 0px 0px 8px #000;
  -webkit-box-shadow: 0px 0px 8px #000;
  box-shadow: 0px 0px 8px #000;
  height: 100%;
  width: auto;
}

.team-name {
  /*background:rgba(0,69,149,0.9);*/
  color: #004595;
  padding: 10px 0 0 0;
  text-align: center;
  font-family: "Cormorant", serif;
  font-size: 1.5em;
  font-weight: 600;
}
/*
.team-name:after {
	display:block;
	content:"";
	width:30%;
	height:1px;
	background-color:#004595;
	margin:10px auto;
	
}
*/
.teamname-title {
  font-family: "Cormorant", serif;
  text-align: center;
  margin: -1.2em 0 0 0;
  /*padding:0 0 0 10px;*/
  font-size: 1em;
  font-weight: 800;
}
.teamname-title:after {
  display: block;
  content: "";
  width: 30%;
  height: 1px;
  background-color: #004595;
  margin: 10px auto;
}
.team-magazinelogo {
  width: 50%;
  height: auto;
  margin: -5em 0 0 2em;
  display: block;
  position: relative;
  background: #fff;
  padding: 10px;
  -moz-box-shadow: 0px 0px 8px #000;
  -webkit-box-shadow: 0px 0px 8px #000;
  box-shadow: 0px 0px 8px #000;
}
.team-wichmagazine {
  margin: 1em 0 0 10px;
  font-family: "Cormorant", serif;
  font-weight: 800;
  color: #004595;
  text-align: center;
}
.teamitem hr {
  margin: 1em -15px;
  border-color: #ccc;
}
.team-contactdata {
  text-align: left;
  line-height: 1.4em;
  margin: 1em 0 0 10px;
  font-size: 0.9em;
}

</style>
  <!-- ======= Testimonials Section ======= -->
  <section id="" class="main" style="top:50px; height:auto">

<br>
<br>
<div class="row col-12 justify-content-center" style="direction:rtl;">
<div class="tabs" style="height: auto">
  
  <input type="radio" id="tab1" name="tab-control" checked>
  <input type="radio" id="tab2" name="tab-control">
  <input type="radio" id="tab3" name="tab-control">  
  <input type="radio" id="tab4" name="tab-control">
  <ul>
    <li title="Features"><label for="tab1" role="button"><svg viewBox="0 0 24 24"><path d="M14,2A8,8 0 0,0 6,10A8,8 0 0,0 14,18A8,8 0 0,0 22,10H20C20,13.32 17.32,16 14,16A6,6 0 0,1 8,10A6,6 0 0,1 14,4C14.43,4 14.86,4.05 15.27,4.14L16.88,2.54C15.96,2.18 15,2 14,2M20.59,3.58L14,10.17L11.62,7.79L10.21,9.21L14,13L22,5M4.93,5.82C3.08,7.34 2,9.61 2,12A8,8 0 0,0 10,20C10.64,20 11.27,19.92 11.88,19.77C10.12,19.38 8.5,18.5 7.17,17.29C5.22,16.25 4,14.21 4,12C4,11.7 4.03,11.41 4.07,11.11C4.03,10.74 4,10.37 4,10C4,8.56 4.32,7.13 4.93,5.82Z"/>
</svg><br><span>التعريف بالمؤسسة</span></label></li>
    <li title="Delivery Contents"><label for="tab2" role="button"><svg viewBox="0 0 24 24"><path d="M14,2A8,8 0 0,0 6,10A8,8 0 0,0 14,18A8,8 0 0,0 22,10H20C20,13.32 17.32,16 14,16A6,6 0 0,1 8,10A6,6 0 0,1 14,4C14.43,4 14.86,4.05 15.27,4.14L16.88,2.54C15.96,2.18 15,2 14,2M20.59,3.58L14,10.17L11.62,7.79L10.21,9.21L14,13L22,5M4.93,5.82C3.08,7.34 2,9.61 2,12A8,8 0 0,0 10,20C10.64,20 11.27,19.92 11.88,19.77C10.12,19.38 8.5,18.5 7.17,17.29C5.22,16.25 4,14.21 4,12C4,11.7 4.03,11.41 4.07,11.11C4.03,10.74 4,10.37 4,10C4,8.56 4.32,7.13 4.93,5.82Z"/>
</svg><br><span>نشـــأة المؤسســـة</span></label></li>
    <li title="Shipping"><label for="tab3" role="button"><svg viewBox="0 0 24 24"><path d="M14,2A8,8 0 0,0 6,10A8,8 0 0,0 14,18A8,8 0 0,0 22,10H20C20,13.32 17.32,16 14,16A6,6 0 0,1 8,10A6,6 0 0,1 14,4C14.43,4 14.86,4.05 15.27,4.14L16.88,2.54C15.96,2.18 15,2 14,2M20.59,3.58L14,10.17L11.62,7.79L10.21,9.21L14,13L22,5M4.93,5.82C3.08,7.34 2,9.61 2,12A8,8 0 0,0 10,20C10.64,20 11.27,19.92 11.88,19.77C10.12,19.38 8.5,18.5 7.17,17.29C5.22,16.25 4,14.21 4,12C4,11.7 4.03,11.41 4.07,11.11C4.03,10.74 4,10.37 4,10C4,8.56 4.32,7.13 4.93,5.82Z"/>
</svg><br><span>مهام المؤسسة</span></label></li>    <li title="Returns"><label for="tab4" role="button"><svg viewBox="0 0 24 24"><path d="M14,2A8,8 0 0,0 6,10A8,8 0 0,0 14,18A8,8 0 0,0 22,10H20C20,13.32 17.32,16 14,16A6,6 0 0,1 8,10A6,6 0 0,1 14,4C14.43,4 14.86,4.05 15.27,4.14L16.88,2.54C15.96,2.18 15,2 14,2M20.59,3.58L14,10.17L11.62,7.79L10.21,9.21L14,13L22,5M4.93,5.82C3.08,7.34 2,9.61 2,12A8,8 0 0,0 10,20C10.64,20 11.27,19.92 11.88,19.77C10.12,19.38 8.5,18.5 7.17,17.29C5.22,16.25 4,14.21 4,12C4,11.7 4.03,11.41 4.07,11.11C4.03,10.74 4,10.37 4,10C4,8.56 4.32,7.13 4.93,5.82Z"/>
</svg><br><span>إطارات المؤسســــــــــــة</span></label></li>
  </ul>
  
  <div class="slider"><div class="indicator"></div></div>
  <div class="content" style="font-family: Aparajita;font-size: 25px;height: auto">
    <section>
    <div class="row" style="direction:rtl;">
            <div class="col-6" >
            <p class="align-middle" style="margin-top:5%">
 <h2>التعريف بالمؤسسة </h2>
      <center>
    المؤسسة العمومية للنقل الحضري و شبه الحضري لمدينة سيدي بلعباس هي مؤسسة صناعية و تجارية تتمتع
بالشخصية المعنوية والإستقلال المالي ،تخضع للقواعد الإدارية في علاقاتهـــــــــــا مع الدولــــــة وذلك تحت وصاية وزارة النقـــــل.
</center> 
</p>

          </div>
          <div class="col-6">
          <img src="assets/image/intro-carousel/station.jpg" alt="" width="80%" height="100%">

          </div>
          </div>
     
    </section>
        <section>
          
          
          <h2>:نشـــأة المؤسســـة
</h2>
<center>
      أنشأت المؤسسة بموجب المرسوم التنفيذي رقم 09-168 المؤرخ في 2009/05/02
دخلت حيز الخدمة بتاريخ 2010/07/07.
</center>

  <br>
  <br>
<div class="row justify-content-center" >
	<div class="col-6 row justify-content-center 
	" style="width: 60%">
          <img src="assets/image/log.png" alt="" width="10%" height="50%">

          </div>
</div>
        </section>
        <section>
          <h2>:مهام المؤسسة
</h2>
<center>
          يتمثل الهدف الأساسي في ضمان النقل العمومي للمسافرين بكل الوسائل الممكنة و الملائمة على إمتداد النسيج الحضري و شبه الحضري لولاية سيدي بلعباس.

          </center>
          <br>
          <br>
<div class="row">
	<div class="col-10">
          <img src="assets/image/intro-carousel/nas.JPG" alt="" width="80%" height="100%">

          </div>
</div>
        </section>
        <section>
          <h2>:إطارات المؤسســــــــــــة
</h2>
<center>
<div class="row" style="height: 100%">
	<div class="container gek-content-padd">
	<div class="row gek-content" dir="rtl">
		<h1>عمال المؤسسة</h1>
<div class="col-md-4 col-xs-6 teamitem">
<div class="teamitem-inner">
<div class="img-team-outer"><img src="assets/image/d.png" class="img-responsive img-team" height="600" width="600" /></div>
<p class="team-name">رحمانية فتحي</p>
<br>
<p class="teamname-title">048-76-40-72</p>
<p class="team-wichmagazine">المدير &amp; العام</p>
<hr />
<center>
	<p class="team-contactdata"><center>
		 <i class="icon-mail"></i>you@yourmail.com
	</center></p>

</center>
</div>
</div>
<div class="col-md-4 col-xs-6 teamitem">
<div class="teamitem-inner">
<div class="img-team-outer"><img src="assets/image/h.png" class="img-responsive img-team" height="600" width="600" /></div>
<p class="team-name">عمرون كريم</p>
<br>
<p class="teamname-title">0770-35-80-35</p>
<p class="team-wichmagazine"> رئيس مصلحة الاستغلال  </p>
<hr />
<p class="team-contactdata"><center>
		 <i class="icon-mail"></i>you@yourmail.com
	</center></p>
</div>
</div>
    <div class="col-md-4 col-xs-6 teamitem">
<div class="teamitem-inner">
<div class="img-team-outer"><img src="assets/image/h.png" class="img-responsive img-team" height="600" width="600" /></div>
<p class="team-name">جميل عبد الكريم</p>
<br>
<p class="teamname-title">0770-36-51-14</p>
<p class="team-wichmagazine">رئيس مصلحة المحاسبة والمالية</p>
<hr />
<p class="team-contactdata"><center>
		 <i class="icon-mail"></i>you@yourmail.com
	</center></p>
</div>
</div>
    <div class="col-md-4 col-xs-6 teamitem">
<div class="teamitem-inner">
<div class="img-team-outer"><img src="assets/image/h.png" class="img-responsive img-team" height="600" width="600" /></div>
<p class="team-name">بن مايسة عبد المجيد</p>
<br>
<p class="teamname-title">0770-35-79-21</p>
<p class="team-wichmagazine">رئيس مصلحة الصيانة</p>
<hr />
<p class="team-contactdata"><center>
		 <i class="icon-mail"></i>you@yourmail.com
	</center></p>
</div>
</div>
    <div class="col-md-4 col-xs-6 teamitem">
<div class="teamitem-inner">
<div class="img-team-outer"><img src="assets/image/h.png" class="img-responsive img-team" height="600" width="600" /></div>
<p class="team-name">عطاوي أسامة</p>
<br>
<p class="teamname-title">0770-36-47-89</p>
<p class="team-wichmagazine">رئيس مصلحة التموينات</p>
<hr />
<p class="team-contactdata"><center>
		 <i class="icon-mail"></i>you@yourmail.com
	</center></p>
</div>
</div>
    <div class="col-md-4 col-xs-6 teamitem">
<div class="teamitem-inner">
<div class="img-team-outer"><img src="assets/image/f.png" class="img-responsive img-team" height="600" width="600" /></div>
<p class="team-name">كلال حفيظة</p>
<br>
<p class="teamname-title">0783-20-34-81</p>
<p class="team-wichmagazine">رئيسة مصلحة الادارة والمستخدمين</p><hr />
<p class="team-contactdata"><center>
		 <i class="icon-mail"></i>you@yourmail.com
	</center></p>
</div>
</div>
<div class="col-md-4 col-xs-6 teamitem">
<div class="teamitem-inner">
<div class="img-team-outer"><img src="assets/image/h.png" class="img-responsive img-team" height="600" width="600" /></div>
<p class="team-name">ناصري ابراهيم الخليل</p>
<br>
	<p class="teamname-title">0772-77-29-25</p>
<p class="team-wichmagazine">مكلف بالاعلام الآلي</p>
<hr />
<p class="team-contactdata"><center>
		 <i class="icon-mail"></i>you@yourmail.com
	</center></p>
</div>
</div>
</div>
</div>

	
</center>

        </section>
        <section>
          <h2>:موقع المؤسســــــــــــة
</h2>
<center>

<div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11620.552733198041!2d-0.6121566337474933!3d35.183860433175155!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x56e4d638cb0fedd7!2zRW50cmVwcmlzZSB0cmFuc3BvcnQgdXJiYWluIGV0IHN1YnVyYmFpbiBFVFVTIFNCQSDYp9mE2YXYpNiz2LPYqSDYp9mE2LnZhdmI2YXZitipINmE2YTZhtmC2YQg2KfZhNit2LbYsdmKINmIINi02KjZhyDYp9mE2K3Yttix2Yog2LPZitiv2Yog2KjZhNi52KjYp9iz!5e0!3m2!1sfr!2sdz!4v1658758086749!5m2!1sfr!2sdz" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div></center>

        </section>
  </div>
</div>

</div>
  



    </section><!-- End Testimonials Section -->

<?php
include 'footer.php';

?> 
</body>
</html>




     
    