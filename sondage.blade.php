<!DOCTYPE html>
<html lang="en">

@include('head')
<style>
    
.quiz-container {
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 0 10px 2px rgba(100, 100, 100, 0.1);
  width: 600px;
  max-width: 95vw;
  overflow: hidden;
}

.quiz-header {
  padding: 4rem;
}

h2 {
  padding: 1rem;
  text-align: center;
  margin: 0;
}

ul {
  list-style-type: none;
  padding: 0;
}

ul li {
  font-size: 1.2rem;
  margin: 1rem 0;
}

ul li label {
  cursor: pointer;
}

button {
  background-color: #8e44ad;
  color: #fff;
  border: none;
  display: block;
  width: 100%;
  cursor: pointer;
  font-size: 1.1rem;
  font-family: inherit;
  padding: 1.3rem;
}

button:hover {
  background-color: #732d91;
}

button:focus {
  outline: none;
  background-color: #5e3370;
}

.panel-container {
  background-color: #fff;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
  border-radius: 4px;
  font-size: 90%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  padding: 30px;
  max-width: 400px;
}

.panel-container strong {
  line-height: 20px;
}

.ratings-container {
  display: flex;
  margin: 20px 0;
}

.rating {
  flex: 1;
  cursor: pointer;
  padding: 20px;
  margin: 10px 5px;
}

.rating:hover,
.rating.active {
  border-radius: 4px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  background-color: #3d80e4
}

.rating img {
  width: 40px;
}

.rating small {
  color: #555;
  display: inline-block;
  margin: 10px 0 0;
}

.rating:hover small,
.rating.active small {
  color: #111;
}

.btn {
  background-color: #302d2b;
  color: #fff;
  border: 0;
  border-radius: 4px;
  padding: 12px 30px;
  font-family: inherit;
  cursor: pointer;
}

.btn:focus {
  outline: none;
}

.btn:active {
  transform: scale(0.98);
}

.fa-heart {
  color: red;
  font-size: 30px;
  margin-bottom: 10px;
}

</style>
<body>

@include('header')
  <!-- ======= Testimonials Section ======= -->
  <section id="" class="main" style="top:250px; height:auto">

<br>
<br>
<div class="row col-12 justify-content-center" style="top:80px; font-family: Aparajita;font-size: 25px;direction:rtl;">
    
    <center><h1 class="" style="color: #3d80e4;border-bottom:15px">إستبيانات متعلقة بتحسين الخدمة العمومية


 </h1></center>
      
 <div class="quiz-container" id="quiz">
      <div id="panel" class="quiz-header">
      <div class="row title" style="text-align:center">
        ما رأيك في مستوى الخدمة المقدمة اليك ؟
        </div>
      <div class="ratings-container div">
      
        <div class="rating">
          <img src="https://i.ibb.co/fYN2rVn/no.png" alt="">
          <small>سيئة</small>
        </div>

        <div class="rating">
          <img src="https://i.ibb.co/3M8Ddsf/neutral.png" alt=""/>
          <small>متوسطة</small>
        </div>

        <div class="rating active">
          <img src="https://i.ibb.co/VVDYGLZ/yes.png" alt=""/>
          <small>جيدة</small>
        </div>
      </div>


      



      <div class="ratings-container div1 d-none">
        
        <div class="rating">
          <img src="https://i.ibb.co/fYN2rVn/no.png" alt="">
          <small>سيئ</small>
        </div>

        <div class="rating">
          <img src="https://i.ibb.co/3M8Ddsf/neutral.png" alt=""/>
          <small>حسن</small>
        </div>

        <div class="rating active">
          <img src="https://i.ibb.co/VVDYGLZ/yes.png" alt=""/>
          <small>جيد</small>
        </div>
      </div>
      <div class="ratings-container div2 d-none">
        <div class="rating">
          <img src="https://i.ibb.co/fYN2rVn/no.png" alt="">
          <small>سيئ</small>
        </div>

        <div class="rating">
          <img src="https://i.ibb.co/3M8Ddsf/neutral.png" alt=""/>
          <small>حسن</small>
        </div>

        <div class="rating active">
          <img src="https://i.ibb.co/VVDYGLZ/yes.png" alt=""/>
          <small>جيد</small>
        </div>
      </div>
      <button class="" id="send">التالي</button>
      <button class="d-none" id="send1">التالي</button>
      <button class="d-none" id="send2">أرسل</button>

      </div>
    </div>
</div>


    </section><!-- End Testimonials Section -->

  @include('footer') 
  <script>
const ratings = document.querySelectorAll(".rating");
const title = document.querySelectorAll(".title");
const ratingsContainer = document.querySelector(".div");
const ratingsContainer1 = document.querySelector(".div1");
const third = document.querySelector('.div1 :nth-child(3)');

const ratingsContainer2 = document.querySelector(".div2");
const third2 = document.querySelector('.div2 :nth-child(3)');

const sendButton = document.getElementById("send");
const sendButton1 = document.getElementById("send1");
const sendButton2 = document.getElementById("send2");
const panel = document.getElementById("panel");
let selectedRating = "Satisfied";

const removeActive = () => {
  for (let i = 0; i < ratings.length; i++) {
    ratings[i].classList.remove("active");
  }
};

ratingsContainer.addEventListener("click", (e) => {
  if (e.target.parentNode.classList.contains("rating")) {
    removeActive();
    e.target.parentNode.classList.add("active");
    selectedRating = e.target.nextElementSibling.innerHTML;
  }
});
ratingsContainer1.addEventListener("click", (e) => {
  if (e.target.parentNode.classList.contains("rating")) {
    removeActive();
    e.target.parentNode.classList.add("active");
    selectedRating = e.target.nextElementSibling.innerHTML;
  }
});
ratingsContainer2.addEventListener("click", (e) => {
  if (e.target.parentNode.classList.contains("rating")) {
    removeActive();
    e.target.parentNode.classList.add("active");
    selectedRating = e.target.nextElementSibling.innerHTML;
  }
});

sendButton.addEventListener("click", (e) => {
    sendButton1.classList.remove("d-none");
    sendButton.classList.add("d-none");
    ratingsContainer1.classList.remove("d-none");
    third.classList.add("active");
    ratingsContainer.classList.add("d-none");
    title[0].innerHTML="ما رأيك في مظهر و تعامل عمال المؤسسة؟";
     selectedRating = "Satisfied";
});
sendButton1.addEventListener("click", (e) => {
    sendButton2.classList.remove("d-none");
    sendButton1.classList.add("d-none");
    ratingsContainer2.classList.remove("d-none");
    third2.classList.add("active");

    ratingsContainer1.classList.add("d-none");
    title[0].innerHTML="ما رأيك في تعامل مراقبي الحافلات مع الزبائن ؟";
     selectedRating = "Satisfied";
});
sendButton2.addEventListener("click", (e) => {
  panel.innerHTML = `
        <i class="fas fa-heart"></i>
        <strong>شكرا زبوننا المحترم </strong>
        <br>
        
        <p> نستفيد من ارائكم لتحسين خدماتنا  </p>
        <br>
        
        <p>نتفانى في خدمتكم </p>
    `;//<strong>Feedback: ${selectedRating}</strong>
});

  </script> 
</body>
</html>




     
    