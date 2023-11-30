<!DOCTYPE html>
<html lang="en">

<?php
include 'head.php';

?> 
<style>
  
.heading_t {
  position: relative;
  width: fit-content;
  margin:0 auto;
}

.h1_t {
  font-family: "Bebas Neue", arial;

  font-size: clamp(1.5rem, 18vw, 8rem);
  line-height: 0.9em;
  text-transform: uppercase;
  text-align:center;
  letter-spacing: -0.01em;
  padding: 0.3em 0em;
  background-image: linear-gradient(
    -90deg,
    blue 0%,
    #4682B4 var(--split),
    #3d80e4 var(--split)
  );
  background-size: 100%;
  -webkit-background-clip: text;
  -moz-background-clip: text;
  -webkit-text-fill-color: transparent;
  -moz-text-fill-color: transparent;
}

.h1_t:before {
  content: "";
  background-color: blue;
  width: 3px;
  height: 90%;
  top: 5%;
  right: var(--split);
  position: absolute;
}

.h1_t span {
  font-size: 0.3em;
  line-height: 1em;
  letter-spacing: 0.02em;
  display: block;
}
.card {
    display: block;
    
  }
  /* Hide the primary nav */
  .app {
    display: block;
  }
  .mrq1 {
    display: none;
    
  }.mrq {
    display: block;
    
  }
  .img {
  width: 100%;
  height: 625px;
  object-fit: fill;
}
/* Mobile menu breakpoint */
@media screen and (max-width: 450px) {
  .text{
  	text-align:center;
  	align-items: center;
  	right: 20%;
  }
  .carte {
    display: none;
    
  }
  .mrq {
    display: none;
    
  }.mrq1 {
    display: block;
    
  }
  /* Hide the primary nav */
  .app {
    display: none;
  }
  .pub {
    display: none;
  }
  .img {
  width: 100%;
  height: 325px;
  object-fit: contain;
}
}

.planet-holder {
  position: relative;
  padding: 113px;
  border-radius: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  overflow: hidden;
  transform: scale(0);
  animation: planetScale 0.5s cubic-bezier(0.64, 0.57, 0.67, 1.53) forwards;
}
@keyframes planetScale {
  to {
    transform: scale(1);
  }
}
.planet-holder .outer {
  position: absolute;
  height: 100%;
  width: 100%;
}
.planet-holder .outer .outerClouds:nth-child(1) {
  position: absolute;
  width: 134px;
  height: 31px;
  background: #b50086;
  border-radius: 16px;
  left: 8%;
  top: 52%;
  transform: rotate(-20deg) translate(-150%);
  animation: outerClouds 5s linear infinite 0.5s;
}
.planet-holder .outer .outerClouds:nth-child(2) {
  position: absolute;
  width: 35px;
  height: 35px;
  background: #b50086;
  border-radius: 100px;
  left: 23%;
  top: 72%;
  transform: rotate(-20deg) translate(-150%);
  animation: outerClouds2 10s linear infinite 0.5s;
}
.planet-holder .outer .outerClouds:nth-child(3) {
  position: absolute;
  width: 178px;
  height: 27px;
  background: #efe933;
  border-radius: 16px;
  left: 24%;
  top: 2%;
  transform: rotate(-20deg) translate(-150%);
  animation: outerClouds 6s linear infinite 1.2s;
}
.planet-holder .outer .outerClouds:nth-child(4) {
  position: absolute;
  width: 35px;
  height: 35px;
  background: #efe933;
  border-radius: 100px;
  left: 81%;
  top: 55%;
  transform: rotate(-20deg) translate(-150%);
  animation: outerClouds2 9s linear infinite 0.8s;
}
.planet-holder .outer .outerClouds:nth-child(5) {
  position: absolute;
  width: 135px;
  height: 45px;
  background: #9a5edc;
  border-radius: 100px;
  left: 42%;
  top: 84%;
  transform: rotate(-20deg) translate(-150%);
  animation: outerClouds 4s linear infinite 0.6s;
}
.planet-holder .outer .outerClouds:nth-child(6) {
  position: absolute;
  width: 135px;
  height: 45px;
  background: #3fe279;
  border-radius: 100px;
  left: 12%;
  top: 29%;
  transform: rotate(-20deg) translate(-150%);
  animation: outerClouds 7s linear infinite 1.2s;
}
.planet-holder .outer .outerClouds:nth-child(7) {
  position: absolute;
  width: 25px;
  height: 25px;
  background: #efe933;
  border-radius: 100px;
  left: 49%;
  top: 10%;
  transform: rotate(-20deg) translate(-150%);
  animation: outerClouds2 7s linear infinite 1.1s;
}
@keyframes outerClouds {
  from {
    transform: rotate(-20deg) translate(-150%);
  }
  to {
    transform: rotate(-20deg) translate(400px);
  }
}
@keyframes outerClouds2 {
  0% {
    transform: rotate(-20deg) translate(-150%);
  }
  50% {
    transform: rotate(-20deg) translate(110%);
  }
  100% {
    transform: rotate(-20deg) translate(-150%);
  }
}
.planet-holder .planet {
  position: relative;
  width: 200px;
  height: 200px;
  background: #dd008d;
  background: linear-gradient(345deg, #dd008d 0%, #5757dd 87%);
  border-radius: 100%;
  overflow: hidden;
}
.planet-holder .planet .cloud:nth-child(1) {
  position: absolute;
  width: 120px;
  height: 39px;
  background: #56bbbb;
  border-radius: 21px;
  top: 46%;
  left: 41%;
  transform: rotate(-20deg) translate(-150%);
  animation: innerClouds 7s linear infinite;
}
.planet-holder .planet .cloud:nth-child(2) {
  position: absolute;
  width: 28px;
  height: 28px;
  background: #ff64e5;
  border-radius: 16px;
  top: 3%;
  left: 31%;
  transform: rotate(-20deg) translate(-180%);
  animation: innerClouds2 5s linear infinite;
}
.planet-holder .planet .cloud:nth-child(3) {
  position: absolute;
  width: 148px;
  height: 17px;
  background: #ff64e5;
  border-radius: 16px;
  top: 80%;
  left: 27%;
  transform: rotate(-20deg) translate(-150%);
  animation: innerClouds 8s linear infinite 2s;
}
.planet-holder .planet .cloud:nth-child(4) {
  position: absolute;
  width: 148px;
  height: 17px;
  background: #56bbbb;
  border-radius: 16px;
  left: 8%;
  top: 16%;
  transform: rotate(-20deg) translate(-150%);
  animation: innerClouds 8s linear infinite 1s;
}
.planet-holder .planet .cloud:nth-child(5) {
  position: absolute;
  width: 35px;
  height: 35px;
  background: #18e08d;
  border-radius: 100%;
  top: 53%;
  left: 60%;
  transform: rotate(-20deg) translate(-150%);
  animation: innerClouds2 8s linear infinite;
}
.planet-holder .planet .cloud:nth-child(6) {
  left: 22%;
  position: absolute;
  width: 148px;
  height: 25px;
  background: #18e08d;
  border-radius: 16px;
  top: 31%;
  transform: rotate(-20deg) translate(-150%);
  animation: innerClouds 7s linear infinite 4s;
}
@keyframes innerClouds {
  from {
    transform: rotate(-20deg) translate(-150%);
  }
  to {
    transform: rotate(-20deg) translate(110%);
  }
}
@keyframes innerClouds2 {
  0% {
    transform: rotate(-20deg) translate(-150%);
  }
  50% {
    transform: rotate(-20deg) translate(110%);
  }
  100% {
    transform: rotate(-20deg) translate(-150%);
  }
}
.planet-holder .text {
  color: #ffffff;
  border-top: 4px solid #ffffff;
  border-bottom: 4px solid #ffffff;
  text-align: center;
  padding: 15px 0;
  padding-top: 15px;
  padding-right: 0px;
  padding-bottom: 15px;
  padding-left: 0px;
  font-size: 25px;
  width: 70%;
  position: absolute;
  transform: rotate(25deg) scale(0);
  animation: titleAnim 0.5s cubic-bezier(0.24, 0.97, 0.37, 1.53) forwards 0.5s;
}
@keyframes titleAnim {
  0% {
    transform: rotate(25deg) scale(0);
  }
  45% {
    transform: rotate(-5deg) scale(1);
  }
  85% {
    transform: rotate(5deg) scale(1);
  }
  100% {
    transform: rotate(0deg) scale(1);
  }
}

   #master a {
       margin: 0;
       padding: 0;
       border: 0;
       font-size: 80%;
       vertical-align: baseline;
       background: transparent;
       text-decoration: none;
       color: #2c9ab7
   }

   #master a:hover {
       text-decoration: underline
   }

   #master {
      font-family: "Helvetica Neue", Arial, Helvetica, sans-serif;
      font-size: 60px;
      line-height: 1;
      font-weight: bold;
      letter-spacing: 0;
      -webkit-font-smoothing: inherit
  }

  #master {
      text-rendering: optimizeLegibility
  }

  #master-container {
      background-color: #F5C59C;
      -webkit-animation: master-container-bg 15s cubic-bezier(0.645, 0.045, 0.355, 1) infinite;
      animation: master-container-bg 15s cubic-bezier(0.645, 0.045, 0.355, 1) infinite;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
      height: 100vmin;
      min-height: 0;
      max-height: 100%;
  }

  #master-container .content {
      height: auto;
      margin-left: inherit;
      margin-right: inherit
  }

  @media screen and (max-width: 615px) {
      #master-container {
          -webkit-animation: master-container-bg-mobile 15s cubic-bezier(0.645, 0.045, 0.355, 1) infinite;
          animation: master-container-bg-mobile 15s cubic-bezier(0.645, 0.045, 0.355, 1) infinite
      }
  }

  @media screen and (max-width: 615px) {
      #master {
          font-size: 40px;
          font-line: 1.2
      }
  }

  #master-container-scroller {
      height: 66px;
      margin-bottom: -6px;
      overflow: hidden;
      position: relative
  }

  #master-container-scroller .master-container-scroller_item {
      display: block;
      padding-bottom: 6px;
      -webkit-animation: scroll 15s cubic-bezier(0.645, 0.045, 0.355, 1) infinite;
      animation: scroll 15s cubic-bezier(0.645, 0.045, 0.355, 1) infinite
  }

  #master-container-scroller .master-container-scroller_item[href]:hover {
      text-decoration: underline
  }

  #master-container-scroller .master-container-scroller_item:nth-child(1),
  #master-container-scroller .master-container-scroller_item:nth-child(1) a {
      color: #E65F48
  }

  #master-container-scroller .master-container-scroller_item:nth-child(2),
  #master-container-scroller .master-container-scroller_item:nth-child(2) a {
      color: #E65F48
  }

  #master-container-scroller .master-container-scroller_item:nth-child(3),
  #master-container-scroller .master-container-scroller_item:nth-child(3) a {
      color: #76BCAD
  }

  #master-container-scroller .master-container-scroller_item:nth-child(4),
  #master-container-scroller .master-container-scroller_item:nth-child(4) a {
      color: #bfb7cb
  }

  #master-container-scroller .master-container-scroller_item:nth-child(5),
  #master-container-scroller .master-container-scroller_item:nth-child(5) a {
      color: #d47787
  }

  #master-container-scroller .master-container-scroller_item:nth-child(6),
  #master-container-scroller .master-container-scroller_item:nth-child(6) a {
      color: #F09551
  }

  #master-container-scroller .master-container-scroller_item:nth-child(7),
  #master-container-scroller .master-container-scroller_item:nth-child(7) a {
      color: #6cb8cd
  }

  #master-container-scroller .master-container-scroller_item:nth-child(8),
  #master-container-scroller .master-container-scroller_item:nth-child(8) a {
      color: #e86042
  }

  #master-container-scroller .master-container-scroller_item:nth-child(9),
  #master-container-scroller .master-container-scroller_item:nth-child(9) a {
      color: #74bcae
  }

  #master-container-scroller .master-container-scroller_item:nth-child(10),
  #master-container-scroller .master-container-scroller_item:nth-child(10) a {
      color: #E65F48
  }

  @media screen and (max-width: 615px) {
      #master-container-scroller {
          height: 48px;
          line-height: 1.2;
          margin-bottom: 0
      }
      #master-container-scroller .master-container-scroller_item {
          padding-bottom: 0;
          -webkit-animation: scroll-mobile 15s cubic-bezier(0.645, 0.045, 0.355, 1) infinite;
          animation: scroll-mobile 15s cubic-bezier(0.645, 0.045, 0.355, 1) infinite
      }
  }

  #master-container-grid .master-container-grid_item:nth-child(1) .grid_item-overlay {
      background-color: rgba(230, 95, 72, 0.9)
  }

  @media screen and (max-width: 520px) {
      #master-container-grid .master-container-grid_item:nth-child(1) .grid_item-overlay .link:hover {
          color: #E65F48
      }
  }

  #master-container-grid .master-container-grid_item:nth-child(2) .grid_item-overlay {
      background-color: rgba(230, 95, 72, 0.9)
  }

  @media screen and (max-width: 520px) {
      #master-container-grid .master-container-grid_item:nth-child(2) .grid_item-overlay .link:hover {
          color: #E65F48
      }
  }

  #master-container-grid .master-container-grid_item:nth-child(3) .grid_item-overlay {
      background-color: rgba(118, 188, 173, 0.9)
  }

  @media screen and (max-width: 520px) {
      #master-container-grid .master-container-grid_item:nth-child(3) .grid_item-overlay .link:hover {
          color: #76BCAD
      }
  }

  #master-container-grid .master-container-grid_item:nth-child(4) .grid_item-overlay {
      background-color: rgba(132, 113, 159, 0.9)
  }

  @media screen and (max-width: 520px) {
      #master-container-grid .master-container-grid_item:nth-child(4) .grid_item-overlay .link:hover {
          color: #84719f
      }
  }

  #master-container-grid .master-container-grid_item:nth-child(5) .grid_item-overlay {
      background-color: rgba(212, 119, 135, 0.9)
  }

  @media screen and (max-width: 520px) {
      #master-container-grid .master-container-grid_item:nth-child(5) .grid_item-overlay .link:hover {
          color: #d47787
      }
  }

  #master-container-grid .master-container-grid_item:nth-child(6) .grid_item-overlay {
      background-color: rgba(240, 149, 81, 0.9)
  }

  @media screen and (max-width: 520px) {
      #master-container-grid .master-container-grid_item:nth-child(6) .grid_item-overlay .link:hover {
          color: #F09551
      }
  }

  #master-container-grid .master-container-grid_item:nth-child(7) .grid_item-overlay {
      background-color: rgba(52, 154, 181, 0.9)
  }

  @media screen and (max-width: 520px) {
      #master-container-grid .master-container-grid_item:nth-child(7) .grid_item-overlay .link:hover {
          color: #349AB5
      }
  }

  #master-container-grid .master-container-grid_item:nth-child(8) .grid_item-overlay {
      background-color: rgba(232, 96, 66, 0.9)
  }

  @media screen and (max-width: 520px) {
      #master-container-grid .master-container-grid_item:nth-child(8) .grid_item-overlay .link:hover {
          color: #e86042
      }
  }

  #master-container-grid .master-container-grid_item:nth-child(9) .grid_item-overlay {
      background-color: rgba(116, 188, 174, 0.9)
  }

  @media screen and (max-width: 520px) {
      #master-container-grid .master-container-grid_item:nth-child(9) .grid_item-overlay .link:hover {
          color: #74bcae
      }
  }

  #master-container-grid .master-container-grid_item:nth-child(10) .grid_item-overlay {
      background-color: rgba(230, 95, 72, 0.9)
  }

  @media screen and (max-width: 520px) {
      #master-container-grid .master-container-grid_item:nth-child(10) .grid_item-overlay .link:hover {
          color: #E65F48
      }
  }

  #master-container-grid .master-container-grid_item .img {
      position: relative
  }

  #master-container-grid .master-container-grid_item .grid_item-overlay {
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
      font-size: 26px;
      font-weight: bold;
      color: #fff;
      opacity: 0;
      transition: opacity .3s ease-in-out;
      text-decoration: none
  }

  #master-container-grid .master-container-grid_item .grid_item-overlay:hover {
      opacity: 1
  }

  #master-container-grid .master-container-grid_item .grid_item-overlay .link {
      display: inline-block;
      box-shadow: 0 1px 0 0 #fff, inset 0 0 0 #fff;
      transition: box-shadow .2s ease
  }

  #master-container-grid .master-container-grid_item .grid_item-overlay .link:hover {
      box-shadow: 0 2px 0 0 #fff, inset 0 -1px 0 0 #fff
  }

  @media screen and (max-width: 520px) {
      #master-container-grid .master-container-grid_item {
          margin-bottom: 18px
      }
      #master-container-grid .master-container-grid_item .grid_item-overlay {
          position: relative;
          background: none !important;
          color: #3a3a3a;
          opacity: 1;
          display: block;
          margin-top: 18px;
          text-align: left
      }
      #master-container-grid .master-container-grid_item .grid_item-overlay .link {
          box-shadow: none
      }
      #master-container-grid .master-container-grid_item .grid_item-overlay .link:hover {
          text-decoration: underline
      }
  }

  @-webkit-keyframes master-container-bg {
      0.0% {
          background-color: #F5C59C
      }
      3.7037037037037037% {
          background-color: #F5C59C
      }
      11.11111111111111% {
          background-color: #ECC9CB
      }
      14.814814814814815% {
          background-color: #ECC9CB
      }
      22.22222222222222% {
          background-color: #D9E2CB
      }
      25.925925925925927% {
          background-color: #D9E2CB
      }
      33.333333333333336% {
          background-color: #f6c599
      }
      37.03703703703704% {
          background-color: #f6c599
      }
      44.44444444444444% {
          background-color: #c4bbd3
      }
      48.148148148148145% {
          background-color: #c4bbd3
      }
      55.55555555555556% {
          background-color: #F9E7AF
      }
      59.25925925925926% {
          background-color: #F9E7AF
      }
      66.66666666666667% {
          background-color: #B4E2EE
      }
      70.37037037037037% {
          background-color: #B4E2EE
      }
      77.77777777777777% {
          background-color: #cbe5f4
      }
      81.48148148148148% {
          background-color: #cbe5f4
      }
      88.88888888888889% {
          background-color: #d2e7e2
      }
      92.5925925925926% {
          background-color: #d2e7e2
      }
      100.0% {
          background-color: #F5C59C
      }
  }

  @keyframes master-container-bg {
      0.0% {
          background-color: #F5C59C
      }
      3.7037037037037037% {
          background-color: #F5C59C
      }
      11.11111111111111% {
          background-color: #ECC9CB
      }
      14.814814814814815% {
          background-color: #ECC9CB
      }
      22.22222222222222% {
          background-color: #D9E2CB
      }
      25.925925925925927% {
          background-color: #D9E2CB
      }
      33.333333333333336% {
          background-color: #f6c599
      }
      37.03703703703704% {
          background-color: #f6c599
      }
      44.44444444444444% {
          background-color: #c4bbd3
      }
      48.148148148148145% {
          background-color: #c4bbd3
      }
      55.55555555555556% {
          background-color: #F9E7AF
      }
      59.25925925925926% {
          background-color: #F9E7AF
      }
      66.66666666666667% {
          background-color: #B4E2EE
      }
      70.37037037037037% {
          background-color: #B4E2EE
      }
      77.77777777777777% {
          background-color: #cbe5f4
      }
      81.48148148148148% {
          background-color: #cbe5f4
      }
      88.88888888888889% {
          background-color: #d2e7e2
      }
      92.5925925925926% {
          background-color: #d2e7e2
      }
      100.0% {
          background-color: #F5C59C
      }
  }

  @-webkit-keyframes master-container-bg-mobile {
      0.0% {
          background-color: #F5C59C
      }
      3.7037037037037037% {
          background-color: #F5C59C
      }
      11.11111111111111% {
          background-color: #ECC9CB
      }
      14.814814814814815% {
          background-color: #ECC9CB
      }
      22.22222222222222% {
          background-color: #D9E2CB
      }
      25.925925925925927% {
          background-color: #D9E2CB
      }
      33.333333333333336% {
          background-color: #f6c599
      }
      37.03703703703704% {
          background-color: #f6c599
      }
      44.44444444444444% {
          background-color: #c4bbd3
      }
      48.148148148148145% {
          background-color: #c4bbd3
      }
      55.55555555555556% {
          background-color: #F9E7AF
      }
      59.25925925925926% {
          background-color: #F9E7AF
      }
      66.66666666666667% {
          background-color: #B4E2EE
      }
      70.37037037037037% {
          background-color: #B4E2EE
      }
      77.77777777777777% {
          background-color: #cbe5f4
      }
      81.48148148148148% {
          background-color: #cbe5f4
      }
      88.88888888888889% {
          background-color: #d2e7e2
      }
      92.5925925925926% {
          background-color: #d2e7e2
      }
      100.0% {
          background-color: #F5C59C
      }
  }

  @keyframes master-container-bg-mobile {
      0.0% {
          background-color: #F5C59C
      }
      3.7037037037037037% {
          background-color: #F5C59C
      }
      11.11111111111111% {
          background-color: #ECC9CB
      }
      14.814814814814815% {
          background-color: #ECC9CB
      }
      22.22222222222222% {
          background-color: #D9E2CB
      }
      25.925925925925927% {
          background-color: #D9E2CB
      }
      33.333333333333336% {
          background-color: #f6c599
      }
      37.03703703703704% {
          background-color: #f6c599
      }
      44.44444444444444% {
          background-color: #c4bbd3
      }
      48.148148148148145% {
          background-color: #c4bbd3
      }
      55.55555555555556% {
          background-color: #F9E7AF
      }
      59.25925925925926% {
          background-color: #F9E7AF
      }
      66.66666666666667% {
          background-color: #B4E2EE
      }
      70.37037037037037% {
          background-color: #B4E2EE
      }
      77.77777777777777% {
          background-color: #cbe5f4
      }
      81.48148148148148% {
          background-color: #cbe5f4
      }
      88.88888888888889% {
          background-color: #d2e7e2
      }
      92.5925925925926% {
          background-color: #d2e7e2
      }
      100.0% {
          background-color: #F5C59C
      }
  }

  @-webkit-keyframes scroll {
      0.0% {
          -webkit-transform: translateY(0px);
          transform: translateY(0px)
      }
      3.7037037037037037% {
          -webkit-transform: translateY(0px);
          transform: translateY(0px)
      }
      11.11111111111111% {
          -webkit-transform: translateY(-66px);
          transform: translateY(-66px)
      }
      14.814814814814815% {
          -webkit-transform: translateY(-66px);
          transform: translateY(-66px)
      }
      22.22222222222222% {
          -webkit-transform: translateY(-132px);
          transform: translateY(-132px)
      }
      25.925925925925927% {
          -webkit-transform: translateY(-132px);
          transform: translateY(-132px)
      }
      33.333333333333336% {
          -webkit-transform: translateY(-198px);
          transform: translateY(-198px)
      }
      37.03703703703704% {
          -webkit-transform: translateY(-198px);
          transform: translateY(-198px)
      }
      44.44444444444444% {
          -webkit-transform: translateY(-264px);
          transform: translateY(-264px)
      }
      48.148148148148145% {
          -webkit-transform: translateY(-264px);
          transform: translateY(-264px)
      }
      55.55555555555556% {
          -webkit-transform: translateY(-330px);
          transform: translateY(-330px)
      }
      59.25925925925926% {
          -webkit-transform: translateY(-330px);
          transform: translateY(-330px)
      }
      66.66666666666667% {
          -webkit-transform: translateY(-396px);
          transform: translateY(-396px)
      }
      70.37037037037037% {
          -webkit-transform: translateY(-396px);
          transform: translateY(-396px)
      }
      77.77777777777777% {
          -webkit-transform: translateY(-462px);
          transform: translateY(-462px)
      }
      81.48148148148148% {
          -webkit-transform: translateY(-462px);
          transform: translateY(-462px)
      }
      88.88888888888889% {
          -webkit-transform: translateY(-528px);
          transform: translateY(-528px)
      }
      92.5925925925926% {
          -webkit-transform: translateY(-528px);
          transform: translateY(-528px)
      }
      100.0% {
          -webkit-transform: translateY(-594px);
          transform: translateY(-594px)
      }
  }

  @keyframes scroll {
      0.0% {
          -webkit-transform: translateY(0px);
          transform: translateY(0px)
      }
      3.7037037037037037% {
          -webkit-transform: translateY(0px);
          transform: translateY(0px)
      }
      11.11111111111111% {
          -webkit-transform: translateY(-66px);
          transform: translateY(-66px)
      }
      14.814814814814815% {
          -webkit-transform: translateY(-66px);
          transform: translateY(-66px)
      }
      22.22222222222222% {
          -webkit-transform: translateY(-132px);
          transform: translateY(-132px)
      }
      25.925925925925927% {
          -webkit-transform: translateY(-132px);
          transform: translateY(-132px)
      }
      33.333333333333336% {
          -webkit-transform: translateY(-198px);
          transform: translateY(-198px)
      }
      37.03703703703704% {
          -webkit-transform: translateY(-198px);
          transform: translateY(-198px)
      }
      44.44444444444444% {
          -webkit-transform: translateY(-264px);
          transform: translateY(-264px)
      }
      48.148148148148145% {
          -webkit-transform: translateY(-264px);
          transform: translateY(-264px)
      }
      55.55555555555556% {
          -webkit-transform: translateY(-330px);
          transform: translateY(-330px)
      }
      59.25925925925926% {
          -webkit-transform: translateY(-330px);
          transform: translateY(-330px)
      }
      66.66666666666667% {
          -webkit-transform: translateY(-396px);
          transform: translateY(-396px)
      }
      70.37037037037037% {
          -webkit-transform: translateY(-396px);
          transform: translateY(-396px)
      }
      77.77777777777777% {
          -webkit-transform: translateY(-462px);
          transform: translateY(-462px)
      }
      81.48148148148148% {
          -webkit-transform: translateY(-462px);
          transform: translateY(-462px)
      }
      88.88888888888889% {
          -webkit-transform: translateY(-528px);
          transform: translateY(-528px)
      }
      92.5925925925926% {
          -webkit-transform: translateY(-528px);
          transform: translateY(-528px)
      }
      100.0% {
          -webkit-transform: translateY(-594px);
          transform: translateY(-594px)
      }
  }

  @-webkit-keyframes scroll-mobile {
      0.0% {
          -webkit-transform: translateY(0px);
          transform: translateY(0px)
      }
      3.7037037037037037% {
          -webkit-transform: translateY(0px);
          transform: translateY(0px)
      }
      11.11111111111111% {
          -webkit-transform: translateY(-48px);
          transform: translateY(-48px)
      }
      14.814814814814815% {
          -webkit-transform: translateY(-48px);
          transform: translateY(-48px)
      }
      22.22222222222222% {
          -webkit-transform: translateY(-96px);
          transform: translateY(-96px)
      }
      25.925925925925927% {
          -webkit-transform: translateY(-96px);
          transform: translateY(-96px)
      }
      33.333333333333336% {
          -webkit-transform: translateY(-144px);
          transform: translateY(-144px)
      }
      37.03703703703704% {
          -webkit-transform: translateY(-144px);
          transform: translateY(-144px)
      }
      44.44444444444444% {
          -webkit-transform: translateY(-192px);
          transform: translateY(-192px)
      }
      48.148148148148145% {
          -webkit-transform: translateY(-192px);
          transform: translateY(-192px)
      }
      55.55555555555556% {
          -webkit-transform: translateY(-240px);
          transform: translateY(-240px)
      }
      59.25925925925926% {
          -webkit-transform: translateY(-240px);
          transform: translateY(-240px)
      }
      66.66666666666667% {
          -webkit-transform: translateY(-288px);
          transform: translateY(-288px)
      }
      70.37037037037037% {
          -webkit-transform: translateY(-288px);
          transform: translateY(-288px)
      }
      77.77777777777777% {
          -webkit-transform: translateY(-336px);
          transform: translateY(-336px)
      }
      81.48148148148148% {
          -webkit-transform: translateY(-336px);
          transform: translateY(-336px)
      }
      88.88888888888889% {
          -webkit-transform: translateY(-384px);
          transform: translateY(-384px)
      }
      92.5925925925926% {
          -webkit-transform: translateY(-384px);
          transform: translateY(-384px)
      }
      100.0% {
          -webkit-transform: translateY(-432px);
          transform: translateY(-432px)
      }
  }

  @keyframes scroll-mobile {
      0.0% {
          -webkit-transform: translateY(0px);
          transform: translateY(0px)
      }
      3.7037037037037037% {
          -webkit-transform: translateY(0px);
          transform: translateY(0px)
      }
      11.11111111111111% {
          -webkit-transform: translateY(-48px);
          transform: translateY(-48px)
      }
      14.814814814814815% {
          -webkit-transform: translateY(-48px);
          transform: translateY(-48px)
      }
      22.22222222222222% {
          -webkit-transform: translateY(-96px);
          transform: translateY(-96px)
      }
      25.925925925925927% {
          -webkit-transform: translateY(-96px);
          transform: translateY(-96px)
      }
      33.333333333333336% {
          -webkit-transform: translateY(-144px);
          transform: translateY(-144px)
      }
      37.03703703703704% {
          -webkit-transform: translateY(-144px);
          transform: translateY(-144px)
      }
      44.44444444444444% {
          -webkit-transform: translateY(-192px);
          transform: translateY(-192px)
      }
      48.148148148148145% {
          -webkit-transform: translateY(-192px);
          transform: translateY(-192px)
      }
      55.55555555555556% {
          -webkit-transform: translateY(-240px);
          transform: translateY(-240px)
      }
      59.25925925925926% {
          -webkit-transform: translateY(-240px);
          transform: translateY(-240px)
      }
      66.66666666666667% {
          -webkit-transform: translateY(-288px);
          transform: translateY(-288px)
      }
      70.37037037037037% {
          -webkit-transform: translateY(-288px);
          transform: translateY(-288px)
      }
      77.77777777777777% {
          -webkit-transform: translateY(-336px);
          transform: translateY(-336px)
      }
      81.48148148148148% {
          -webkit-transform: translateY(-336px);
          transform: translateY(-336px)
      }
      88.88888888888889% {
          -webkit-transform: translateY(-384px);
          transform: translateY(-384px)
      }
      92.5925925925926% {
          -webkit-transform: translateY(-384px);
          transform: translateY(-384px)
      }
      100.0% {
          -webkit-transform: translateY(-432px);
          transform: translateY(-432px)
      }
  }
</style>
<body>

<?php
include 'header.php';

?> 
  <!-- ======= Testimonials Section ======= -->
  <section id="testimonials" class="testimonials" style="padding-bottom:0 ;top:20px">

        <div class="testimonials-slider swiper">
          <div class="swiper-wrapper">
            <!--	<div class="swiper-slide" style="margin-right:10px; height:650px">
              <div class="testimonial-item">
                <img class="img" src="assets/image/ramadan.png" style="" alt="">
          
              </div>
            </div> -->
          <div class="swiper-slide" style="margin-right:10px">
              <div class="testimonial-item">
                <div class="row justify-content-center" style="margin-top:60px;margin-bottom:25px">
              <img src="assets/image/log.png" style="width:120px; height:100px" alt="">
                </div>
              <div class="heading_t">
  <h2 class="h1_t">المـؤسسة العمومية للنــقل الحضــري والشبه الحضري 
<span>
 - سيدي بلعباس -</span></h2>
</div>             
<h3 style="color:#3d80e4;font-family: Bebas Neue, aria;font-size:28px"> نتفانى في خدمتكم</h3>  


              </div>
            </div> 
            <!-- End testimonial item

           
            <div class="swiper-slide" style="margin-right:10px">
              <div class="testimonial-item">
              <img src="assets/image/intro-carousel/nas.jpg" style="width:99%; height:525px" alt="">

                
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide" style="margin-right:10px; height:625px">
              <div class="testimonial-item">
                <img class="img" src="assets/image/lac.png" style="" alt="">
              
               
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide" style="margin-right:10px; height:625px">
              <div class="testimonial-item">
                <img class="img" src="assets/image/intro-carousel/rg.jpg" style="width:99%" alt="">
              
               
              </div>
            </div><!-- End testimonial item -->
             <div class="swiper-slide" style="margin-right:10px; height:625px">
              <div class="testimonial-item">
            		 <div class="pub" style="position: relative;">
      <div class="flip carte rounded" onclick="location.href ='E_pay_Card.php';"  style="cursor:pointer;margin-top: 15%;margin-left:-60%;transform: rotate(45deg);">
  <div class="flip">
    <div class="front" style="background-image: url(assets/image/card.png); background-size:cover">
    </div>
    <div class="back" style="background-image: url(assets/image/card_recto.png); background-size:cover;">
    </div>
</div>
</div>
        <!-- <div class="text" style="font-family: Aparajita;font-size:2rem;color:white; width:30%; height:40%; position: absolute;
        top: 75px;
        right: 45%;direction:rtl" >
        حمل تطبيق REHALAT
<br>أو
استعمل بطاقة رحلات<br> 
        </div> -->
        <div class="text " style=" text-align:center;font-family: Aparajita;font-size:2rem;color:white; width:30%; height:40%; position: absolute;
        top: 75px;
        right: 5%;direction:rtl" >
        <center>
        	تطبيق REHALAT
       <br>
       <br>
     <img  src="assets/image/app_qr.jpg" alt="" width="225px" height="200px">
       
        </center>
       
     <br>
       <br>
       <center>
     <button class="" style="border-radius:8px;width: 220px;background-color: aliceblue;" onclick="location.href ='https://play.google.com/store/apps/details?id=com.deeper.etus.belabas';"><span style="font-size:20px;margin-left:-65px">او احصل عليه من</span><svg height="45" width="110"  y="0" x="0" id="Layer_2" version="1.1" viewBox="-1220.61 -475.92425 10578.62 2855.5455"><style id="style1175" type="text/css">.st7{fill-rule:evenodd;clip-rule:evenodd;fill:#808285}</style><g transform="translate(0 -.008)" id="g1231"><linearGradient gradientTransform="matrix(11.64 0 0 -22.55 -32777 34043.164)" y2="1449.456" x2="2784.353" y1="1504.53" x1="2891.046" gradientUnits="userSpaceOnUse" id="SVGID_1_"><stop id="stop1179" offset="0" stop-color="#00a0ff"/><stop id="stop1181" offset=".007" stop-color="#00a1ff"/><stop id="stop1183" offset=".26" stop-color="#00beff"/><stop id="stop1185" offset=".512" stop-color="#00d2ff"/><stop id="stop1187" offset=".76" stop-color="#00dfff"/><stop id="stop1189" offset="1" stop-color="#00e3ff"/></linearGradient><path id="path1192" d="M33.7 29.2C12.3 52.2 0 87.6 0 133.6v1636.2c0 46 12.3 81.4 34.5 103.6l5.8 4.9 916.8-916.8v-20.6L39.5 24.3l-5.8 4.9z" fill="url(#SVGID_1_)" fill-rule="evenodd" clip-rule="evenodd"/><linearGradient gradientTransform="matrix(9.145 0 0 -7.7 -25077.303 11907.105)" y2="1422.774" x2="2739.434" y1="1422.774" x1="2935.234" gradientUnits="userSpaceOnUse" id="SVGID_2_"><stop id="stop1194" offset="0" stop-color="#ffe000"/><stop id="stop1196" offset=".409" stop-color="#ffbd00"/><stop id="stop1198" offset=".775" stop-color="orange"/><stop id="stop1200" offset="1" stop-color="#ff9c00"/></linearGradient><path id="path1203" d="M1262.1 1268.3L956.3 962.4V941l305.9-305.9 6.6 4.1 361.8 205.6c103.6 58.4 103.6 154.6 0 213.8l-361.8 205.6c-.1 0-6.7 4.1-6.7 4.1z" fill="url(#SVGID_2_)" fill-rule="evenodd" clip-rule="evenodd"/><linearGradient gradientTransform="matrix(15.02 0 0 -11.5775 -43191.684 17692.937)" y2="1285.867" x2="2836.642" y1="1431.331" x1="2948.769" gradientUnits="userSpaceOnUse" id="SVGID_3_"><stop id="stop1205" offset="0" stop-color="#ff3a44"/><stop id="stop1207" offset="1" stop-color="#c31162"/></linearGradient><path id="path1210" d="M1268.7 1264.2L956.3 951.7 33.7 1874.3c33.7 36.2 90.4 40.3 153.8 4.9l1081.2-615" fill="url(#SVGID_3_)" fill-rule="evenodd" clip-rule="evenodd"/><linearGradient gradientTransform="matrix(15.02 0 0 -11.5715 -43191.684 17672.391)" y2="1506.756" x2="2912.461" y1="1571.747" x1="2862.393" gradientUnits="userSpaceOnUse" id="SVGID_4_"><stop id="stop1212" offset="0" stop-color="#32a071"/><stop id="stop1214" offset=".069" stop-color="#2da771"/><stop id="stop1216" offset=".476" stop-color="#15cf74"/><stop id="stop1218" offset=".801" stop-color="#06e775"/><stop id="stop1220" offset="1" stop-color="#00f076"/></linearGradient><path id="path1223" d="M1268.7 639.3L187.5 25.1C124.2-11.1 67.4-6.2 33.7 30l922.5 921.7z" fill="url(#SVGID_4_)" fill-rule="evenodd" clip-rule="evenodd"/><path id="path1225" d="M1262.1 1257.6L188.3 1867.7c-60 34.5-113.5 32.1-148 .8l-5.8 5.8 5.8 4.9c34.5 31.2 88 33.7 148-.8l1081.2-614.2-7.4-6.6z" opacity=".2" fill-rule="evenodd" clip-rule="evenodd"/><path id="path1227" d="M1630.5 1047.9l-369.2 209.7 6.6 6.6 361.8-205.6c51.8-29.6 77.3-68.2 77.3-106.9-3.3 35.4-29.6 69.1-76.5 96.2z" opacity=".12" fill-rule="evenodd" clip-rule="evenodd"/><path id="path1229" d="M187.5 35.8l1443 819.8c46.9 26.3 73.2 60.8 77.3 96.2 0-38.6-25.5-77.3-77.3-106.9L187.5 25.1C83.9-34.1 0 15.2 0 133.6v10.7C0 25.9 83.9-22.6 187.5 35.8z" opacity=".25" fill-rule="evenodd" clip-rule="evenodd" fill="#fff"/></g></svg></button>
</center>
        </div>
        <!-- <img src="assets/image/intro-carousel/5.jpg" style="width:30%; height:40%; position: absolute;
        bottom: 0px;
        right: 0px;" alt=""> -->
        <img src="assets/image/tel.png" class="app" onclick="location.href ='E_pay_App.php';" onmouseenter="this.style.transform
                       = 'rotate(0deg)';this.style.width
                       = '300px';this.style.height
                       = '600px'; " onmouseleave="this.style.transform
                       = 'rotate(15deg)';this.style.width
                       = '250px';this.style.height
                       = '500px'; " style="bottom: 30px;cursor:pointer;
        right: 37%;transform: rotate(15deg);width:250px; height:500px; position: absolute;  " alt="">
      </div>
              

            	</div>
            </div>
            <div class="swiper-slide" style="margin-right:10px; height:625px">
              <div class="testimonial-item">
              <img class="img" src="assets/image/intro-carousel/3x.jpg" style="width:99%" alt="">

              
                
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide" style="margin-right:10px; height:625px">
              <div class="testimonial-item">
              <img class="img" src="assets/image/intro-carousel/5.jpg" style="width:99%" alt="">

              
                
              </div>
            </div><!-- End testimonial item -->

          </div>

          <div class="swiper-pagination" style="width: 100%; margin: 0;  background-color: blue"></div>
        </div>
  </section><!-- End Testimonials Section -->
    <section style="padding:10px">
        <a href="CenterFormation.php" style="text-decoration: none;">
       <div style="background-color: midnightblue; height: 430px;cursor: pointer;" onclick="location.href = 'CenterFormation.php';">
       	<div class="planet-holder">

  <div class="planet">
    <div class="cloud"></div>
    <div class="cloud"></div>
    <div class="cloud"></div>
    <div class="cloud"></div>
    <div class="cloud"></div>
    <div class="cloud"></div>
  </div>

  <div class="outer">
    <div class="outerClouds"></div>
    <div class="outerClouds"></div>
    <div class="outerClouds"></div>
    <div class="outerClouds"></div>
    <div class="outerClouds"></div>
    <div class="outerClouds"></div>
    <div class="outerClouds"></div>
  </div>

  <div class="text" style="background-color: rgba(0, 139, 139, 0.3)">
  	  
            <h1 id='master'>
              <div style="color: white">بوابة التكوين في مجال النقل</div>
              <div id='master-container-scroller'>
                <div class='master-container-scroller_item'>
                  <a class='cta-link' href='CF_Transport.php'> سائقي مركبات نقل الأشخاص و البضائع</a>
                </div>
                <div class='master-container-scroller_item'>
                  <a class='cta-link' href='#'>&nbsp;</a>
                </div><div class='master-container-scroller_item'>
                  <a class='cta-link' href='#' >&nbsp;</a>
                </div>
                <div class='master-container-scroller_item'>
                  <a class='cta-link' href='CF_Capp.php'>تعليم سياقة مركبات ذات محرك</a>
                </div><div class='master-container-scroller_item'>
                  <a class='cta-link' href='#'>&nbsp;</a>
                </div><div class='master-container-scroller_item'>
                  <a class='cta-link' href='#'>&nbsp;</a>
                </div>
                <div class='master-container-scroller_item'>
                  <a class='cta-link' href='#' onclick="alert('غير متاحة حاليا');">دفتر المقاعد</a>
                </div><div class='master-container-scroller_item'>
                  <a class='cta-link' href='#'>&nbsp;</a>
                </div>
              </div>
            </h1>
  </div>
</div>
<div style="width: 27%; display: inline-block;position: relative;top: -140px">
  <img class="img" src="assets/image/mt.png" style="width:45%; display: inline-block; height: 45%; position: relative;top: -30px" alt="">
              <img class="img" src="assets/image/bs.png" style="width:45%; display: inline-block; height: 45%" alt="">
              
</div>
<div style="left: 15%;bottom: 0;position: relative;width: 27%;/* float: right; */display: inline-block;right: 1-50%;top: -120px">
              <img class="img" src="assets/image/taxi2.png" style="width:45%; display: inline-block; height: 45%; position: relative;top: 0px" alt="">
   

</div>
<div style="left: 15%;bottom: 0;position: relative;width: 27%;/* float: right; */display: inline-block;right: 1-50%;top: -120px">
              <img class="img" src="assets/image/cm.png" style="width:45%; display: inline-block; height: 45%; position: relative;top: -16px" alt="">
    <img class="img" src="assets/image/vt.png" style="width:45%; display: inline-block; height: 45%;position: relative;top: -40px" alt="">

</div>
       </div>
          </a>  
    </section>
    
    <section id="" class="" style="padding:0px ;direction: rtl;">
<div class="row col-12">
	   <div class="card card_op" data-aos="zoom-out" >
            <a href="Reseau.php" class="stretched-link">
            <img src="assets/image/map.jpg" alt="">
            <div class="info-card">
            <h1>شبكة الاستغلال</h1>
            <p>شبكة الاستغلال للمـؤسسة العمومية للنــقل الحضــري والشبه الحضري لمدينة سيدي بلعباس</p>
            </div>
</a>
            </div>
            <div class="card card_op" data-aos="zoom-out" data-aos-delay="200">
            <a href="E_pay.php" class="stretched-link">
            <img src="assets/image/epay.jpg" alt="">
            <div class="info-card">
            <h1>الدفع الالكتروني</h1>
            <p>تطبيق رحلات الذكي - يطاقة رحلات الذكية</p>
            </div>
            </a>
            </div>  
            <div class="card card_op" data-aos="zoom-out" data-aos-delay="400">
            <a href="Horaires.php" class="stretched-link">
            <img src="assets/image/time.jpg" alt="">
            <div class="info-card">
            <h1>أوقات الحافلات</h1>
            <p>أوقات الانطلاق من محطة الأمير عبد القادر الى كافة المسارات</p>
            </div>
</a>
            </div>  
            <div class="card card_op" data-aos="zoom-out" data-aos-delay="600">
            <a  class="stretched-link menu-link" href="CenterFormation.php" >
            <img src="assets/image/ereg.jpg" alt="">
            <div class="info-card">
            <h1>بوابة التكوين</h1>
            <p>مجال النقل </p>
            </div>
            </a>
            </div>   
</div>
         
</section> 
    <!-- ======= Services Section ======= -->
    <section id="services" class="services" style="padding:10px ;direction: rtl;">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>خدماتنا</h2>
          <p>يبحث بعض العملاء عن بعض الخدمات الخاصة المتنوعة مثل خدمات :</p>
        </div>

        <div class="row gy-5">

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="imgs">
                <img src="assets/image/blue.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                <i class="bi bi-mortarboard-fill"></i>
                </div>
                <a href="CentreFormation.php" class="stretched-link">
                  <h3>مركز التكوين</h3>
                </a>
                <p class="elipsis"> تملك المؤسسة العمومية للنقل الحضري والشبه الحصري سيدي بلعباس مركز تكوين معتمد للحصول على شهادة الكفاءة المهنية لسائقي مركبات نقل الأشخاص و البضائع 
</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="service-item">
              <div class="imgs">
                <img src="assets/image/blue.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                <i ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bus-front" viewBox="0 0 16 16">
  <path d="M5 11a1 1 0 1 1-2 0 1 1 0 0 1 2 0Zm8 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0Zm-6-1a1 1 0 1 0 0 2h2a1 1 0 1 0 0-2H7Zm1-6c-1.876 0-3.426.109-4.552.226A.5.5 0 0 0 3 4.723v3.554a.5.5 0 0 0 .448.497C4.574 8.891 6.124 9 8 9c1.876 0 3.426-.109 4.552-.226A.5.5 0 0 0 13 8.277V4.723a.5.5 0 0 0-.448-.497A44.303 44.303 0 0 0 8 4Zm0-1c-1.837 0-3.353.107-4.448.22a.5.5 0 1 1-.104-.994A44.304 44.304 0 0 1 8 2c1.876 0 3.426.109 4.552.226a.5.5 0 1 1-.104.994A43.306 43.306 0 0 0 8 3Z"/>
  <path d="M15 8a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1V2.64c0-1.188-.845-2.232-2.064-2.372A43.61 43.61 0 0 0 8 0C5.9 0 4.208.136 3.064.268 1.845.408 1 1.452 1 2.64V4a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1v3.5c0 .818.393 1.544 1 2v2a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5V14h6v1.5a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-2c.607-.456 1-1.182 1-2V8ZM8 1c2.056 0 3.71.134 4.822.261.676.078 1.178.66 1.178 1.379v8.86a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 11.5V2.64c0-.72.502-1.301 1.178-1.379A42.611 42.611 0 0 1 8 1Z"/>
</svg></i>

                </div>
                <a href="StationUrbain.php" class="stretched-link">
                  <h3>المحطات الحضرية</h3>
                </a>
                <p class="elipsis">تستغل المؤسسة العمومية للنقل الحضري وشبه الحضري لولاية سيدي بلعباس محطتين حضريتين هما:

</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
            <div class="service-item">
              <div class="imgs">
                <img src="assets/image/blue.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                <i class="bi bi-megaphone-fill"></i> 
                </div>
                <a href="Publicite.php" class="stretched-link">
                <h3>الاشهار على الحافلات</h3>
                </a>
                <p class="elipsis">تضمن المؤسسة العمومية للنقل الحضري و الشبه الحضري لولاية سيدي بلعباس خدمات الاشهار </p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="500">
            <div class="service-item">
              <div class="imgs">
                <img src="assets/image/blue.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                <i class="bi bi-tools"></i>
                </div>
                <a href="Maintenance.php" class="stretched-link">
                  <h3>خدمات الصيانة</h3>
                </a>
                <p class="elipsis">تعمل المؤسسة العمومية للنقل الحضري و الشبه الحضري سيدي بلعباس على تقديم مختلف أنماط الخدمات الميكانيكية لمختلف المركبات الخاصة منها أو المؤسساتية</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="600">
            <div class="service-item">
              <div class="imgs">
                <img src="assets/image/blue.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                <i class="bi bi-credit-card-2-front-fill"></i>
                </div>
                <a href="carte.php" class="stretched-link">
                  <h3>بطاقة الاشتراك الموحدة</h3>
                </a>
                <p class="elipsis">رحلات غير محدودة عبر ترامواي و حافلات ايتيس سيدي بلعباس طيلة شهر كامل بمبلغ 1300 دج فقط </p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="700">
            <div class="service-item">
              <div class="imgs">
                <img src="assets/image/blue.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                <i class="bi bi-bezier"></i>
                </div>
                <a href="Transport.php" class="stretched-link">
                  <h3>النقل الظرفي والاستثنائي</h3>
                </a>
                <p class="elipsis">تعلن المؤسسة العمومية للنقل الحضري و الشبه الحضري سيدي بلعباس عن تقديم </p>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section><!-- End Services Section -->
   
    <!-- ======= About Section ======= -->
    <main>
    	
    <section id="about" style="padding:10px" class="about">
      <div class="container row col-12" data-aos="fade-up">
      <div class="row" style="width:100%;margin:0;">
 <div class="mrq col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <section class="last-news wow fadeInDown" >
                <div class="news-wrapper" >
                <span class="news-box-colour" class="slideup animated"></span>
                <span class="news-title delay-animated slidein" onclick="location.href ='Nachat.php';" style="cursor:pointer;margin:200px">
                     أخبار و نشاطات المؤسسة 
                </span>
                <div class="carousel slide carousel-last-news" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active" style="text-align:right;right:300px">
                            <p onclick="location.href ='Nachat.php?1';" style="cursor:pointer">
                           
        إعادة تجديد الحافلات        
                            </p>
                        </div>
                        <div class="carousel-item" style="text-align:right;right:300px">
                            <p onclick="location.href ='Nachat.php?id=2';" style="direction: rtl;cursor: pointer;">

                            تكوين عمال المؤسسة                                   </p>
                        </div>
                        <div class="carousel-item" style="text-align:right;right:300px">
                            <p onclick="location.href ='Nachat.php?id=3';" style="direction: rtl;cursor: pointer;">

                           استغلال المحطة الحضرية رقم 17 
                                         </p>
                        </div>
                        <div class="carousel-item" style="text-align:right;right:300px">
                            <p onclick="location.href ='Nachat.php?id=4';" style="direction: rtl;cursor: pointer;">

                            الوقوف دقيقة صمت تخليدا لأرواح شهداء مجازر 17 أكتوبر 1961                                       </p>
                        </div>
                        <div class="carousel-item" style="text-align:right;right:300px">
                            <p onclick="location.href ='Nachat.php?id=5';" style="direction: rtl;cursor: pointer;">

                            اطلاق عملية الدفع الالكتروني لتذكرة الحافلة                                         </p>
                        </div>
                        <div class="carousel-item" style="text-align:right;right:300px">
                            <p onclick="location.href ='Nachat.php?id=6';" style="direction: rtl;cursor: pointer;">
                            إنشاء شبكة حريق نظامية 
                               </p>
                        </div>
                        <div class="carousel-item" style="text-align:right;right:300px">
                            <p onclick="location.href ='Nachat.php?id=7';" style="direction: rtl;cursor: pointer;">
                            مناورة افتراضية ومحاكاة لاطفاء حريق بمقر المؤسسة
                               </p>
                        </div>
                        <div class="carousel-item" style="text-align:right;right:300px">
                            <p onclick="location.href ='Nachat.php?id=8';" style="direction: rtl;cursor: pointer;">
                            ا تخصيص حافلة سياحية  باتجاه بحيرة سيدي محمد بن علي  يومي الجمعة و السبت
                               </p>
                        </div>
                        <!-- <div class="carousel-item" style="direction: rtl;">
                            <p>
للللللللللللل                            </p>
                        </div> -->
                    </div>


                </div>
            </section>
        </div>
</div>
</div><div class="mrq1 row col-12" style="margin:0; direction:rtl;">
      <div class="" onclick="location.href ='/Nachat';" style="width: 25%; display: inline; cursor:pointer;background-color:#004a60; color:white;height:100%;text-align:center;font-size: 18.2px;position: relative;top: -2px;">
      أخبار 
      </div>
      <div  style="width: 70%; display: inline; height:100%;direction:ltr">
      <MARQUEE direction="right" style="background-color:#3d80e4; color:white;height:100%;position: relative;top: 3px;width: 68%"> 
          <span style="margin:0 50px;cursor: pointer" onclick="location.href ='/Nachat/1';" >
                           
        إعادة تجديد الحافلات        
                            </span>
                            <span style="margin:0 50px;cursor: pointer" onclick="location.href ='/Nachat/2';" style="direction: rtl;cursor: pointer;">

                            تكوين عمال المؤسسة                                   </span>
                       <span style="margin:0 50px;cursor: pointer" onclick="location.href ='/Nachat/3';" style="direction: rtl;cursor: pointer;">

                            استغلال المحطة الحضرية رقم 17 
                                         </span><span style="margin:0 50px;cursor: pointer" onclick="location.href ='/Nachat/4';" style="direction: rtl;cursor: pointer;">

                            الوقوف دقيقة صمت تخليدا لأرواح شهداء مجازر 17 أكتوبر 1961                                       </span>
                        <span style="margin:0 50px;cursor: pointer" onclick="location.href ='/Nachat/5';" style="direction: rtl;cursor: pointer;">

                            اطلاق عملية الدفع الالكتروني لتذكرة الحافلة                                         </span>
                        <span style="margin:0 50px;cursor: pointer" onclick="location.href ='/Nachat/6';" style="direction: rtl;cursor: pointer;">
                            إنشاء شبكة حريق نظامية 
                               </span></MARQUEE>
      </div>
    </div> 
</section>
</main>
    
        <div class="section-header">
          <h2>روابط اضافية</h2>
          <p>للمزيد من المعلومات يرجى زيارت مواقع النقل التالية</p>
        </div>

  <!-- ======= Clients Section ======= -->
    <section style="padding:10px" id="clients" class="clients">
      <div class="container" >

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">  
            <div class="swiper-slide" style="margin-right:10px"><a href="http://www.metroalger-dz.com/fr"> <img src="assets/image/clients/Mitro.jpg" alt=""></a></div>
            <!-- <div class="swiper-slide" style="margin-right:10px"><a href="https://www.sogral.dz/index.php/fr"> <img src="assets/image/clients/Sogral.jpg" alt=""></a></div> -->
            <div class="swiper-slide" style="margin-right:10px"><a href="http://www.aotu-alger.dz/etusa.html"> <img src="assets/image/clients/Etusa.png" alt=""></a></div>
            <div class="swiper-slide" style="margin-right:10px"><a href="https://www.setram.dz/site/fr"> <img src="assets/image/clients/Setram.jpg" alt=""></a></div>
            <!-- <div class="swiper-slide" style="margin-right:10px"><a href="https://www.sntf.dz"> <img src="assets/image/clients/Sntf.jpg" alt=""></a></div> -->
            <div class="swiper-slide" style="margin-right:10px"><a href="https://web.etustiaret.dz"> <img src="assets/image/clients/EtusTiaret.jpg" alt=""></a></div>
            <div class="swiper-slide" style="margin-right:10px"><a href="http://etusguelma.dz/"> <img src="assets/image/clients/guelma.jfif" alt=""></a></div>
            <div class="swiper-slide" style="margin-right:10px"><a href="http://www.mt.gov.dz/?lang=ar"> <img src="assets/image/clients/dzCapture.PNG" alt=""></a></div>
          </div>
        </div>

      </div>
    </section><!-- End Clients Section -->
      </div>
    </section><!-- End About Section -->

  

    <!-- ======= On Focus Section ======= -->
    <section id="onfocus" class="onfocus" style="padding:10px; direction:rtl">
      <div class="container-fluid p-0" data-aos="fade-up">

        <div class="row g-0">
          <div class="col-lg-6 video-play position-relative">
            <a href="https://www.youtube.com/watch?v=EKHdUDbP0Pk" class="glightbox play-btn"></a>
          </div>
          <div class="col-lg-6" style="direction:rtl">
            <div class=" d-flex flex-column justify-content-center h-100" style="direction:rtl;text-align:right;">
     <!-- <button class="btn btn-link" onclick="location.href ='/Nachat';"><h3 style="direction:rtl">أخبار ونشاطات المؤسسة: </h3></button> -->
              
              <ul style="list-style-type: none;margin-bottom:0">
                <li >
                <div class="row">
                  <div class="col-lg-7 video-play1 position-relative" style="margin-bottom:5px; height:100px">
            <a href="https://www.youtube.com/watch?v=L2wQIe8i92U" class="glightbox play-btn"></a>
          </div>
          <div class="col-4"><h4>الدفع الالكتروني</h4></div>
                </div>  
                </li>
                <li>
                <div class="row">
                  <div class="col-lg-7 video-play2 position-relative" style="margin-bottom:5px; height:100px">
            <a href="https://www.youtube.com/watch?v=tkIkm3FUbSA" class="glightbox play-btn"></a>
          </div>
          <div class="col-4"><h4>شبكة الاستغلال</h4></div>
                </div>  
                
        </li>
              </ul>
            </div> 
          </div>
        </div>

      </div>
    </section><!-- End On Focus Section -->

<!-- Modal -->

  <?php
include 'footer.php';

?>   <script src="https://unpkg.co/gsap@3/dist/gsap.min.js"></script>
  <script>
    TweenMax.to(document.documentElement, 4, {
  "--split": "100%", 
  repeat:-1, 
  repeatDelay:1,
  yoyo:true,
 ease: "power4.inOut"
});
  </script>
</body>
</html>
