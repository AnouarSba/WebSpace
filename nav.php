<!-- 


Don't forget to grab the JS and CSS from the other tabs
 
Please use the <main></main> tag to wrap around the content after the nav.
-->
<style type="text/css">
	
/* Removing default padding and margin for fulwidth navbar */
* {
  padding: 0;
  margin: 0;
  font-family: "Open Sans", sans-serif;
}
.b-padding {
  padding: 2em;
}
.b-padding p {
  margin-top: 1em;
}
.logo {
  height: 100%;
}
.nav {
  display: flex;
  align-items: center;
  background: #085158;
  height: 5.5rem;
  padding: 0 1em 0 1em;
  /* Feel free to use a different font */
  font-family: "Open Sans", sans-serif;
  font-size: 1.1em;
  flex: 0.5;
  box-shadow: 0 2px 2px -2px rgba(0, 0, 0, 0.2);
}

.nav ul {
  display: flex;
  list-style: none;
  height: 100%;
  justify-content: end;
  align-items: center;
  flex: 1;
  z-index: 2;
}

.nav .item {
  justify-content: center;
  align-items: center;
  display: flex;
  height: 100%;
}

.nav a {
  text-decoration: none;
  color: white;
  height: 100%;
  text-transform: uppercase;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0 15px 0 15px;
  transition: 0.1s;
  white-space: nowrap;
}

.nav a:hover {
  background-color: #05373c;
  transition: 0.1s;
}
/* Icon padding */
.nav a i {
  margin-right: 10px;
}



/* Mobile Menu Toggle */
.toggle {
  display: none;
  position: absolute;
  top: 32px;
  right: 30px;
  color: white;
  font-size: 1.1em;
  background-color: none;
  cursor: pointer;
  pointer-events: auto;
}

/* Animation Easing */
.animatedtoggle {
  transition: all 0.1s ease;
}
/* Rotate Menu item on toggle*/
.rotate {
  transform: rotate(90deg);
  transition: all 0.2s ease-in-out;
}

/* Mobile menu breakpoint */
@media screen and (max-width: 950px) {
  .menu {
    display: block;
  }
  .nav {
    display: block;
    height: fit-content;
    padding: 0;
  }

  .nav ul {
    display: block;
    padding-bottom: 1em;
    position: absolute;
    height: fit-content;
    width: 100%;
    
  }
  .nav ul .item {
    display: block;
    background-color: #085158;
  }
  .logo {
    height: 88px;
  }
  .nav a {
    height: 60px;
    justify-content: start;
  }
  /* Display the toggle */
  .toggle {
    display: block;
    background-color: transparent;
    border: none;
  }
  /* Hide the primary nav */
  ul.inactive {
    display: none;
  }
}

/* Denotes the active menu item */
.active {
  background-color: #05373c !important;
  transition: 0.1s;
}
.main-filter {
  filter: blur(.9px);
  transition: .1s;
}

@media screen and (min-width: 951px) {
  .main-filter {
    filter: blur(0);
  }
}
body{
	background-color: #eceef1;
}

</style>
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<!-- This font awesome kit needs to be replaced with a productions codew hen implimented -->
<script src="https://kit.fontawesome.com/862d8dad60.js" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

<nav class="nav">
  <button onclick="changeMenu()" id="menuBars" type="button" class="toggle"><i id="menuIcon" class="fa-solid fa-bars animatedtoggle"></i></button><a href="/">
  <img alt="Pierce County Logo" class="logo" src="assets/image/log.png" style="    height: 70px;
    margin: 1%;
    background-color: #eeeeef;
    padding: 5px;
    /* border: aliceblue; */
    border-radius: 50%;"></a>
  <ul id="menuList" class="menu inactive" style="   
    position: relative;">
    <li id="ft" class="item"><a href="Formations_taxi.php"> الدورات التكوينية دفتر المقاعد &nbsp; &nbsp; <i class="fa-light fa-graduation-cap"></i></a></li>
    <li id="lt" class="item"><a href="list_candidat_taxi.php">قوائم  دفتر المقاعد &nbsp; &nbsp; <i class="fa-light fa-list"></i></a></li>
    <li id="t" class="item"><a href="candidat_taxi.php">قائمة المقبولين دفتر المقاعد &nbsp; &nbsp; <i class="fa-light fa-list"></i></a></li>
    <li id="f" class="item"><a href="Formations.php"> الدورات التكوينية  &nbsp; &nbsp; <i class="fa-light fa-graduation-cap"></i></a></li>
    <li id="r" class="item"><a href="Registration_Ep_candidat.php">المؤسسات &nbsp; &nbsp; <i class="fa-light fa-building"></i></a></li>
    <li id="l" class="item"><a href="list.php">قائمة المسجلين &nbsp; &nbsp; <i class="fa-light fa-list"></i></a></li>
    <li id="c" class="item"><a href="centerF.php">الرئيسية &nbsp; &nbsp; <i class="fa-light fa-home"></i></a></li>
</ul>
</nav>

<script type="text/javascript">
	var x =  window.location.href.split('/').pop();
	switch (x) {
		case 'list.php':
    var element = document.getElementById("l");
  element.classList.add("active");
    break;
    case 'candidat_taxi.php':
    var element = document.getElementById("t");
  element.classList.add("active");
    break;
    case 'list_candidat_taxi.php':
    var element = document.getElementById("lt");
  element.classList.add("active");
    break;
    case 'centerF.php':
var element = document.getElementById("c");
  element.classList.add("active");
  		break;
		case 'Registration_Ep_candidat.php':
		var element = document.getElementById("r");
  element.classList.add("active");
		break;
    case 'Formations.php':
var element = document.getElementById("f");
  element.classList.add("active");
      break;
    case 'Formations_taxi.php':
var element = document.getElementById("ft");
  element.classList.add("active");
      break;
	}
	const menuIcon = document.getElementById("menuIcon");
const menuList = document.getElementById("menuList");
const main = document.querySelector('main');

function changeMenu() {
  menuIcon.classList.toggle("fa-x");
  menuIcon.classList.toggle("rotate");
  menuList.classList.toggle("inactive");
  main.classList.toggle('main-filter');
}
</script>