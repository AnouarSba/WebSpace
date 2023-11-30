<style>


html {
  font-size: 100%;
  box-sizing: inherit;
  scroll-behavior: smooth;
  height: -webkit-fill-available;
}



main {
  overflow: hidden;
}

a,
button {
  cursor: pointer;
  border: none;
  outline: none;
  background: none;
  text-transform: unset;
  text-decoration: none;
}

img,
video {
  display: block;
  max-width: 100%;
  height: auto;
  object-fit: cover;
}

img {
  image-rendering: -webkit-optimize-contrast;
  image-rendering: -moz-crisp-edges;
  image-rendering: crisp-edges;
}

.section {
  margin: 0 auto;
  padding: 6rem 0 1rem;
}

.container {
  max-width: 100%;
  height: auto;
  margin: 0 auto;
  padding: 0 0.5rem;
}

.brand {
  font-family: inherit;
  font-size: 1rem;
  font-weight: 600;
  line-height: 1.5;
  letter-spacing: -1px;
  text-transform: uppercase;
  color: var(--color-blue-100);
}

.header {
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  height: auto;
  z-index: 10;
  margin: 0 auto;
  background-color: var(--color-white);
  box-shadow: var(--shadow-medium);
}

.navbar {
  position: relative;
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: space-between;
  width: 100%;
  height: 4rem;
  margin: 0 auto;
}

.menu {
  position: fixed;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  z-index: 10;
overflow: visible;
  background-color: var(--color-white);
  box-shadow: var(--shadow-medium);
  transition: all 0.5s ease-in-out;
}
.menu.is-active {
  top: 0;
  left: 0;
  overflow-y: scroll ;
  width: 80%;
}
.menu-inner {
  display: flex;
  flex-direction: column;
  row-gap: 1rem;
  margin: 1rem;
}
.menu-link {
  font-family: inherit;
  font-size: 0.5rem;
  font-weight: 400;
  line-height: 1.5;
  text-transform: uppercase;
  color: var(--color-black);
  transition: all 0.3s ease;
}
.menu-link:hover {
  color: var(--color-blue-200);
}
@media only screen and (min-width: 90rem) {
  .menu {
    position: relative;
    top: 0;
    left: 0;
    width: auto;
    height: auto;
    margin-left: auto;
    background: none;
    box-shadow: none;
  }
  .menu-inner {
    display: flex;
    flex-direction: row;
    column-gap: 0.05px;
    margin: 0 auto;
    margin-right: 0.000005rem;
  }
  .menu-link {
    text-transform: capitalize;
  }
  .menu-block {
    margin-left: 2rem;
  }
}

.burger {
  position: relative;
  display: block;
  cursor: pointer;
  order: -1;
  width: 1.75rem;
  height: auto;
  border: none;
  outline: none;
  visibility: visible;
}
.burger-line {
  display: block;
  cursor: pointer;
  width: 100%;
  height: 2px;
  margin: 6px auto;
  transform: rotate(0deg);
  background-color: var(--color-black);
  transition: all 0.3s ease-in-out;
}
@media only screen and (min-width: 90rem) {
  .burger {
    display: none;
    visibility: hidden;
  }
}

.overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 9;
  opacity: 0;
  visibility: hidden;
  background-color: rgba(0, 0, 0, 0.6);
  transition: all 0.3s ease-in-out;
}
.overlay.is-active {
  display: block;
  opacity: 1;
  visibility: visible;
}
.blink_me {
  color: red;
  position: relative;
  top: -15px;
  animation: blinker 1s linear infinite;
}

@keyframes blinker {
  50% {
    opacity: 0;
  }
}
</style>
<header class="header" id="header" dir="rtl">
   <nav class="navbar container" >
  <a href="#body" class="scrollto"><img src="assets/image/Etu.jpg"><span></span></a>
  
      <div class="burger" id="burger">
         <span class="burger-line"></span>
         <span class="burger-line"></span>
         <span class="burger-line"></span>
      </div>
      <span class="overlay"></span>
      <div class="menu" id="menu">
      <ul class="menu-inner" style="width:100%" dir="rtl">
     

          <li class="menu-item" class="menu-active"><a class="menu-link" href="/" >الرئيسية</a></li>


          <li class="menu-item"><a class="menu-link" href="Welcome.php" > الكلمة الترحيبية </a></li>

<li class="menu-item dropdown" ><a class="menu-link" href="" >المؤسسة <i class="bi bi-caret-down"></i> </a>
            <ul>
              <li ><a class="menu-link" href="Presentation.php">تعريف المؤسسة</a></li>
              <!-- <li ><a class="menu-link" href="Statistiques">الاحصاء</a></li> -->
              <li ><a class="menu-link" href="Organigrame.php">الهيكل التنظيمي</a></li>
              <li ><a class="menu-link" href="Nachat.php">نشاطات المؤسسة </a></li>
            </ul>
          </li>
        <li class="menu- dropdown" ><a class="menu-link" href="" >الاستغلال <i class="bi bi-caret-down"></i></a>
            <ul>
              <li ><a class="menu-link" href="Reseau.php">شبكة الاستغلال </a></li>
              <li ><a class="menu-link" href="Horaires.php">الاوقات<span class="blink">جديد </span></a></li>
              <li ><a class="menu-link" href="Nidam.php"> نظام الإستغلال  </a></li>
             
            </ul>
          </li>
           
    
 <li class="menu-item dropdown" ><a class="menu-link" href="E_pay.php" > الدفع الالكتروني <i class="bi bi-caret-down"></i></a>
            <ul>
              <li ><a class="menu-link" href="E_pay_App.php">تطبيق رحلات</a></li>
              <li ><a class="menu-link" href="E_pay_Card.php">بطاقة رحلات</a></li>
             
            </ul>
          </li>

      <li class="menu-item dropdown" ><a class="menu-link" href="#services" > خدماتنا <i class="bi bi-caret-down"></i> </a>
            <ul>
              <li ><a class="menu-link" href="CentreFormation.php"> مركز التكوين  </a></li>
              <li ><a class="menu-link" href="StationUrbain.php"> المحطات الحضرية  </a></li>
              <li ><a class="menu-link" href="Maintenance.php"> الصيانة  </a></li>
              <li ><a class="menu-link" href="carte.php"> بطاقة الاشتراك الموحد حافلة-ترامواي </a></li>
              <li ><a class="menu-link" href="Transport.php"> النقل الظرفي و  الرحلات </a></li>
              <li ><a class="menu-link" href="Publicite.php"> الاشهار على الحافلات </a></li>
              <li ><a class="menu-link" href="Control.php"> مركز المراقبة التقنية </a></li>
            </ul>
          </li>
         
        
          <li class="menu-item"><a class="menu-link" href="CenterFormation.php" > بوابة التكوين <div class="blink_me">جديد</div>
  </a></li>
          <li class="menu-item"><a class="menu-link" href="Reglementation.php" > القوانين  </a></li>

       <!--   <li class="menu-item"><a class="menu-link" href="Sondage.php" > الاستبيانات </a></li> -->

         <li class="menu-item"><a class="menu-link" href="#contact" class="nav-link scrollto" >  اتصل بنا  </a></li>
           
<li class="menu-item dropdown"><a class="menu-link" href="Espace_client.php"> فضاء الزبائن <i class="bi bi-caret-down"></i> </a>
          <ul>
            <li ><a class="menu-link"  data-toggle="modal" data-target="#exampleModal">شكاوى</a></li>
           
          <li ><a class="menu-link"  data-toggle="modal" data-target="#exampleModal1"> إقتراحات </a></li>
          <li ><a class="menu-link" href="Sondage.php" > الاستبيانات </a></li>
          </ul></li> 

          
           <li class="menu-item" style="margin: 0 -30px">
          <a class="menu-link" href="https://www.facebook.com/etus22" class="facebook" title="facebook"><svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 48 48" width="24px" height="24px"><path fill="#039be5" d="M24 5A19 19 0 1 0 24 43A19 19 0 1 0 24 5Z"/><path fill="#fff" d="M26.572,29.036h4.917l0.772-4.995h-5.69v-2.73c0-2.075,0.678-3.915,2.619-3.915h3.119v-4.359c-0.548-0.074-1.707-0.236-3.897-0.236c-4.573,0-7.254,2.415-7.254,7.917v3.323h-4.701v4.995h4.701v13.729C22.089,42.905,23.032,43,24,43c0.875,0,1.729-0.08,2.572-0.194V29.036z"/></svg></a>
   
          </li> 
           <li class="menu-item">
          <a class="menu-link" href="https://www.youtube.com/@etussba2031" class="youtube" title="youtube"><svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 48 48" width="24px" height="24px"><linearGradient id="PgB_UHa29h0TpFV_moJI9a" x1="9.816" x2="41.246" y1="9.871" y2="41.301" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#f44f5a"/><stop offset=".443" stop-color="#ee3d4a"/><stop offset="1" stop-color="#e52030"/></linearGradient><path fill="url(#PgB_UHa29h0TpFV_moJI9a)" d="M45.012,34.56c-0.439,2.24-2.304,3.947-4.608,4.267C36.783,39.36,30.748,40,23.945,40  c-6.693,0-12.728-0.64-16.459-1.173c-2.304-0.32-4.17-2.027-4.608-4.267C2.439,32.107,2,28.48,2,24s0.439-8.107,0.878-10.56 c0.439-2.24,2.304-3.947,4.608-4.267C11.107,8.64,17.142,8,23.945,8s12.728,0.64,16.459,1.173c2.304,0.32,4.17,2.027,4.608,4.267  C45.451,15.893,46,19.52,46,24C45.89,28.48,45.451,32.107,45.012,34.56z"/><path d="M32.352,22.44l-11.436-7.624c-0.577-0.385-1.314-0.421-1.925-0.093C18.38,15.05,18,15.683,18,16.376 v15.248c0,0.693,0.38,1.327,0.991,1.654c0.278,0.149,0.581,0.222,0.884,0.222c0.364,0,0.726-0.106,1.04-0.315l11.436-7.624  c0.523-0.349,0.835-0.932,0.835-1.56C33.187,23.372,32.874,22.789,32.352,22.44z" opacity=".05"/><path d="M20.681,15.237l10.79,7.194c0.689,0.495,1.153,0.938,1.153,1.513c0,0.575-0.224,0.976-0.715,1.334 c-0.371,0.27-11.045,7.364-11.045,7.364c-0.901,0.604-2.364,0.476-2.364-1.499V16.744C18.5,14.739,20.084,14.839,20.681,15.237z" opacity=".07"/><path fill="#fff" d="M19,31.568V16.433c0-0.743,0.828-1.187,1.447-0.774l11.352,7.568c0.553,0.368,0.553,1.18,0,1.549  l-11.352,7.568C19.828,32.755,19,32.312,19,31.568z"/></svg></a>

          </li>
         
</ul>
         
      </div>
    <a href="#body" class="scrollto"><img src="assets/image/pm.jpg"> <span></span></a>
      
   </nav>
</header>











<script>
  // Open and Close Navbar Menu
const navbarMenu = document.getElementById("menu");
const burgerMenu = document.getElementById("burger");
const bgOverlay = document.querySelector(".overlay");

if (burgerMenu && bgOverlay) {
   burgerMenu.addEventListener("click", () => {
      navbarMenu.classList.add("is-active");
      bgOverlay.classList.toggle("is-active");
   });

   bgOverlay.addEventListener("click", () => {
      navbarMenu.classList.remove("is-active");
      bgOverlay.classList.toggle("is-active");
   });
}

// Close Navbar Menu on Links Click
document.querySelectorAll(".menu-link").forEach((link) => {
   link.addEventListener("click", () => {
      navbarMenu.classList.remove("is-active");
      bgOverlay.classList.remove("is-active");
   });
});

// Open and Close Search Bar Toggle
const searchBlock = document.querySelector(".search-block");
const searchToggle = document.querySelector(".search-toggle");
const searchCancel = document.querySelector(".search-cancel");

if (searchToggle && searchCancel) {
   searchToggle.addEventListener("click", () => {
      searchBlock.classList.add("is-active");
   });

   searchCancel.addEventListener("click", () => {
      searchBlock.classList.remove("is-active");
   });
}

</script>