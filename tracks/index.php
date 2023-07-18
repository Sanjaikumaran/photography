<?php

include $_SERVER['DOCUMENT_ROOT'].'/__lib/main.php';

?>
<style>


body {
  margin: 40px 0;
 
  font-size: 14px;
  font-weight: 500;
  background-color: #BCAAA4;
  -webkit-font-smoothing: antialiased;
  font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont,
    "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif,
    "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
}

.title {
 
  font-size: 24px;
  font-weight: 700;
  color: #5D4037;
  text-align: center;
}

p {
  line-height: 1.5em;
}

h1 + p, p + p {
  margin-top: 10px;
}

.container {

  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.card-wrap {
  margin: 10px;
  transform: perspective(800px);
  transform-style: preserve-3d;
  cursor: pointer;
}
.card-wrap:hover .card-info {
  transform: translateY(0);
}
.card-wrap:hover .card-info p {
  opacity: 1;
}
.card-wrap:hover .card-info, .card-wrap:hover .card-info p {
  transition: 0.6s cubic-bezier(0.23, 1, 0.32, 1);
}
.card-wrap:hover .card-info:after {
  transition: 5s cubic-bezier(0.23, 1, 0.32, 1);
  opacity: 1;
  transform: translateY(0);
}
.card-wrap:hover .card-bg {
  transition: 0.6s cubic-bezier(0.23, 1, 0.32, 1), opacity 5s cubic-bezier(0.23, 1, 0.32, 1);
  filter: blur(3.5px);
}
.card-wrap:hover .card {
  transition: 0.6s cubic-bezier(0.23, 1, 0.32, 1), box-shadow 2s cubic-bezier(0.23, 1, 0.32, 1);
  box-shadow: rgba(255, 255, 255, 0.2) 0 0 40px 5px, white 0 0 0 1px, rgba(0, 0, 0, 0.66) 0 30px 60px 0, inset #333 0 0 0 5px, inset white 0 0 0 6px;
}

.card {
  position: relative;
  flex: 0 0 240px;
  width: 400px;
  height: 480px;
  background-color: #333;
  overflow: hidden;
  border-radius: 10px;
  box-shadow: rgba(0, 0, 0, 0.66) 0 30px 60px 0, inset #333 0 0 0 5px, inset rgba(255, 255, 255, 0.5) 0 0 0 6px;
  transition: 1s cubic-bezier(0.445, 0.05, 0.55, 0.95);
  
}

.card-bg {
  opacity: 0.5;
  position: absolute;
  top: 0px;
  left: 0px;
  width: 100%;
  height: 100%;
  padding: 20px;
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  transition: 1s cubic-bezier(0.445, 0.05, 0.55, 0.95), opacity 5s 1s cubic-bezier(0.445, 0.05, 0.55, 0.95);
  pointer-events: none;
}

.card-info {
  padding: 20px;
  position: absolute;
  bottom: 0;
  color: #fff;
  transform: translateY(40%);
  transition: 0.6s 1.6s cubic-bezier(0.215, 0.61, 0.355, 1);
}
.card-info p {
  opacity: 0;
  text-shadow: black 0 2px 3px;
  transition: 0.6s 1.6s cubic-bezier(0.215, 0.61, 0.355, 1);
}
.card-info * {
  position: relative;
  z-index: 1;
}
.card-info:after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  z-index: 0;
  width: 100%;
  height: 100%;
  background-image: linear-gradient(to bottom, transparent 0%, rgba(0, 0, 0, 0.6) 100%);
  background-blend-mode: overlay;
  opacity: 0;
  transform: translateY(100%);
  transition: 5s 1s cubic-bezier(0.445, 0.05, 0.55, 0.95);
}

.card-info h1 {
  font-family: "Playfair Display";
  font-size: 36px;
  font-weight: 700;
  text-shadow: rgba(0, 0, 0, 0.5) 0 10px 10px;
}


body {
  margin: 40px 0;

  font-size: 14px;
  font-weight: 500;
  background-color: #BCAAA4;
  -webkit-font-smoothing: antialiased;
}

.title {

  font-size: 24px;
  font-weight: 700;
  color: #5D4037;
  text-align: center;
}

p {
  line-height: 1.5em;
}

h1 + p, p + p {
  margin-top: 10px;
}

.container {

  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.card-wrap {
  margin: 10px;
  transform: perspective(800px);
  transform-style: preserve-3d;
  cursor: pointer;
}
.card-wrap:hover .card-info {
  transform: translateY(0);
}
.card-wrap:hover .card-info p {
  opacity: 1;
}
.card-wrap:hover .card-info, .card-wrap:hover .card-info p {
  transition: 0.6s cubic-bezier(0.23, 1, 0.32, 1);
}
.card-wrap:hover .card-info:after {
  transition: 5s cubic-bezier(0.23, 1, 0.32, 1);
  opacity: 1;
  transform: translateY(0);
}
.card-wrap:hover .card-bg {
  transition: 0.6s cubic-bezier(0.23, 1, 0.32, 1), opacity 5s cubic-bezier(0.23, 1, 0.32, 1);
  filter: blur(3.5px);
}
.card-wrap:hover .card {
  transition: 0.6s cubic-bezier(0.23, 1, 0.32, 1), box-shadow 2s cubic-bezier(0.23, 1, 0.32, 1);
  box-shadow: rgba(255, 255, 255, 0.2) 0 0 40px 5px, white 0 0 0 1px, rgba(0, 0, 0, 0.66) 0 30px 60px 0, inset #333 0 0 0 5px, inset white 0 0 0 6px;
}

.card {
  position: relative;
  flex: 0 0 240px;
  width: 400px;
  height: 480px;
  background-color: #333;
  overflow: hidden;
  border-radius: 10px;
  box-shadow: rgba(0, 0, 0, 0.66) 0 30px 60px 0, inset #333 0 0 0 5px, inset rgba(255, 255, 255, 0.5) 0 0 0 6px;
  transition: 1s cubic-bezier(0.445, 0.05, 0.55, 0.95);
  
}

.card-bg {
  opacity: 0.5;
  position: absolute;
  top: 0px;
  left: 0px;
  width: 100%;
  height: 100%;
  padding: 20px;
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  transition: 1s cubic-bezier(0.445, 0.05, 0.55, 0.95), opacity 5s 1s cubic-bezier(0.445, 0.05, 0.55, 0.95);
  pointer-events: none;
}

.card-info {
  padding: 20px;
  position: absolute;
  bottom: 0;
  color: #fff;
  transform: translateY(40%);
  transition: 0.6s 1.6s cubic-bezier(0.215, 0.61, 0.355, 1);
  margin-bottom:2rem;

}
.card-info p {
  opacity: 0;
  text-shadow: black 0 2px 3px;
  transition: 0.6s 1.6s cubic-bezier(0.215, 0.61, 0.355, 1);
}
.card-info * {
  position: relative;
  z-index: 1;
}
.card-info:after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  z-index: 0;
  width: 100%;
  height: 100%;
  background-image: linear-gradient(to bottom, transparent 0%, rgba(0, 0, 0, 0.6) 100%);
  background-blend-mode: overlay;
  opacity: 0;
  transform: translateY(100%);
  transition: 5s 1s cubic-bezier(0.445, 0.05, 0.55, 0.95);
}
.card-wrap:hover:hover .mrg-btm{
  margin-bottom:2rem !important;
  transition: none !important;

}
.card-info h1 {

  font-size: 36px;
  font-weight: 700;
  text-shadow: rgba(0, 0, 0, 0.5) 0 10px 10px;
}



.navbar-logo{
  width:113%;
}
.navbar-logo img{
  height:67% !important;
}

    </style>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Tracks - Hackathon 23 </title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link
      rel="shortcut icon"
      href="/assets/images/logo/H-logo.png"
      type="image/x-icon"
    />
<link rel="stylesheet" href="/assets/css/animate.css" />
    <link rel="stylesheet" href="/assets/css/tailwind.css" />
    <script src="/assets/js/wow.min.js"></script>

</head>

<body style="background-image:url(../assets/images/header.png) !important;">

<?load_template('header')?>

<!-- partial:index.partial.html -->
<div id="app" class="container relative pt-[120px] md:pt-[130px] lg:pt-[160px]">

              <h2
                class="mb-4 text-3xl font-bold text-white text-dark sm:text-4xl md:text-[42px]"
              >
                Tracks
              </h2>
              <p
                class="text-lg leading-relaxed  text-[#e4e4e4] sm:text-xl sm:leading-relaxed"
              >
              The tracks on which Hackathon 23 is going to endeavor to bring such innovative ideas
are:- Artificial intelligence, machine learning etc. The participant is allowed to do projects related to any of the above mentioned topics.
              </p>
             
            
  <card data-image="https://img.freepik.com/free-vector/ai-technology-microchip-background-vector-digital-transformation-concept_53876-112222.jpg?size=626&ext=jpg&ga=GA1.1.205786248.1679157567&semt=ais">
    <h2 style="margin-bottom: -9rem;transition: 0.6s 2s cubic-bezier(0.215, 0.61, 0.355, 1);" slot="header" class="mrg-btm mb-4 text-3xl font-bold text-white text-dark sm:text-4xl md:text-[42px]">Artificial intelligence</h2>
    <p slot="content">Artificial intelligence, or AI, is a branch of computer science concerned with developing intelligent machines capable of learning from and making decisions based on data. It has applications in robotics, natural language processing, and computer vision, among others.</p>
   
  </card>
  <card data-image="https://img.freepik.com/free-photo/ai-chip-intelligence-technology-deep-learning_53876-143122.jpg?size=626&ext=jpg&ga=GA1.1.205786248.1679157567&semt=ais" >
    <h2 style="margin-bottom: -21rem;transition: 0.6s 2s cubic-bezier(0.215, 0.61, 0.355, 1);" slot="header" class="mrg-btm mb-4 text-3xl font-bold text-white text-dark sm:text-4xl md:text-[42px]">Machine learning</h2> 
   <p  slot="content">Building systems that can learn from data and make decisions based on it is the focus of the artificial intelligence subfield of machine learning. It is used for a variety of tasks, such as speech recognition and image categorization, and is gaining importance across a number of sectors. Building systems that can learn from data and make decisions based on it is the focus of the artificial intelligence subfield of machine learning. It is used for a variety of tasks, such as speech recognition and image categorization, and is gaining importance across a number of sectors.</p>
  </card>
  <card data-image="https://img.freepik.com/premium-vector/artificial-intelligence-abstract-background-digital-technology-deep-learning-big-data-concept-tech-visual-energy-template-geometric-artificial-intelligence-backdrop_121461-3005.jpg?size=626&ext=jpg&ga=GA1.2.205786248.1679157567&semt=ais">
  <h2 style="margin-bottom: -7rem;transition: 0.6s 2s cubic-bezier(0.215, 0.61, 0.355, 1);" slot="header" class="mrg-btm mb-4 text-3xl font-bold text-white text-dark sm:text-4xl md:text-[42px]">Big Data</h2> 
    <p slot="content">Big data refers to large and complex sets of data that traditional data processing methods cannot handle. To analyse and derive insights from data, advanced technologies and techniques are required.
    </p>
  </card>
  <card data-image="https://img.freepik.com/premium-vector/digital-vector-flying-drone-objects-icon-set-collection_1268-3583.jpg?size=626&ext=jpg&ga=GA1.1.205786248.1679157567&semt=ais">
  <h2 style="margin-bottom: -10rem;transition: 0.6s 2s cubic-bezier(0.215, 0.61, 0.355, 1);" slot="header" class="mrg-btm mb-4 text-3xl font-bold text-white text-dark sm:text-4xl md:text-[42px]">Drone Technology</h2> 
    <p slot="content">Unmanned aerial vehicles that can be operated remotely or automatically are referred to as drones. They have a range of sensors and cameras for use in a variety of tasks, such as delivery, search and rescue, surveillance, and photography. They have grown in acceptance as a result of their adaptability, affordability, and ease.
</p>
  </card>
  <card data-image="https://img.freepik.com/free-photo/3d-background-with-connecting-lines-dots_1048-12214.jpg?size=626&ext=jpg&ga=GA1.1.205786248.1679157567&semt=ais">
  <h2 style="margin-bottom: -8rem;transition: 0.6s 2s cubic-bezier(0.215, 0.61, 0.355, 1);" slot="header" class="mrg-btm mb-4 text-3xl font-bold text-white text-dark sm:text-4xl md:text-[42px]">Block Chain</h2> 
    <p slot="content">Blockchain is a decentralised digital ledger that records transactions in a secure and transparent manner. It enables the secure transfer of assets without the use of intermediaries.</p>
  </card>
  <card data-image="https://img.freepik.com/free-vector/background-items-connected-internet_23-2147627215.jpg?size=626&ext=jpg&ga=GA1.2.205786248.1679157567&semt=ais">
  <h2 style="margin-bottom: -5rem;transition: 0.6s 2s cubic-bezier(0.215, 0.61, 0.355, 1);" slot="header" class="mrg-btm mb-4 text-3xl font-bold text-white text-dark sm:text-4xl md:text-[42px]">Internet of Things</h2> 
  <p slot="content">The Internet of Things (IoT) is an interconnected network of physical devices, vehicles, and other objects that are equipped with sensors, software, and network connectivity to collect and exchange data.
</p>
  </card>
  <card data-image="https://img.freepik.com/free-vector/brain-functions-concept-infographic-symbolic-depiction-with-left-side-logic-science-mathematics-right-arts-creativity_1284-29036.jpg?size=626&ext=jpg&ga=GA1.1.205786248.1679157567&semt=sph">
  <h2 style="margin-bottom: -4rem;transition: 0.6s 2s cubic-bezier(0.215, 0.61, 0.355, 1);" slot="header" class="mrg-btm mb-4 text-3xl font-bold text-white text-dark sm:text-4xl md:text-[42px]">Open Elective</h2> 
    <p slot="content">In order to Encourage the participants to think out of the box, open elective is added  as a domain.</p>
  </card>
</div>

<br>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.1/vue.min.js'></script><script  src="./script.js"></script>

  <?load_template('footer')?>

  <script>

    
Vue.config.devtools = true;

Vue




.component('card', {
  template: `
    <div class="card-wrap"
      @mousemove="handleMouseMove"
      @mouseenter="handleMouseEnter"
      @mouseleave="handleMouseLeave"
      ref="card">
      <div class="card"
        :style="cardStyle">
        <div class="card-bg" :style="[cardBgTransform, cardBgImage]"></div>
        <div class="card-info">
          <slot name="header"></slot>
          <slot name="content"></slot>
        </div>
      </div>
    </div>`,
  mounted() {
    this.width = this.$refs.card.offsetWidth;
    this.height = this.$refs.card.offsetHeight;
  },
  props: ['dataImage'],
  data: () => ({
    width: 0,
    height: 0,
    mouseX: 0,
    mouseY: 0,
    mouseLeaveDelay: null }),

  computed: {
    mousePX() {
      return this.mouseX / this.width;
    },
    mousePY() {
      return this.mouseY / this.height;
    },
    cardStyle() {
      const rX = this.mousePX * 30;
      const rY = this.mousePY * -30;
      return {
        transform: `rotateY(${rX}deg) rotateX(${rY}deg)` };

    },
    cardBgTransform() {
      const tX = this.mousePX * -40;
      const tY = this.mousePY * -40;
      return {
        transform: `translateX(${tX}px) translateY(${tY}px)` };

    },
    cardBgImage() {
      return {
        backgroundImage: `url(${this.dataImage})` };

    } },

  methods: {
    handleMouseMove(e) {
      this.mouseX = e.pageX - this.$refs.card.offsetLeft - this.width / 2;
      this.mouseY = e.pageY - this.$refs.card.offsetTop - this.height / 2;
    },
    handleMouseEnter() {
      clearTimeout(this.mouseLeaveDelay);
    },
    handleMouseLeave() {
      this.mouseLeaveDelay = setTimeout(() => {
        this.mouseX = 0;
        this.mouseY = 0;
      }, 1000);
    } } });



const app = new Vue({
  el: '#app' });






    </script>


<script src="/assets/js/main.js"></script>
    

</body>
</html>





