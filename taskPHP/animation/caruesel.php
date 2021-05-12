<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		.wrapper {
	 max-width: 60em;
	 margin: 1em auto;
	 position: relative;
}
 input {
	 display: none;
}
 .inner {
	 width: 500%;
	 line-height: 0;
}
 article {
	 width: 20%;
	 float: left;
	 position: relative;
}
 article img {
	 width: 100%;
}
/*---- SET UP CONTROL ----*/
 .slider-prev-next-control {
	 height: 50px;
	 position: absolute;
	 top: 50%;
	 width: 100%;
	 transform: translateY(-50%);
}
 .slider-prev-next-control label {
	 display: none;
	 width: 40px;
	 height: 40px;
	 border-radius: 50%;
	 background: #fff;
	 opacity: 0.7;
}
 .slider-prev-next-control label:hover {
	 opacity: 1;
}


/* Info Box */
 .info {
	 position: absolute;
	 font-style: italic;
	 line-height: 20px;
	 opacity: 0;
	 color: #000;
	 text-align: left;
	 transition: all 1000ms ease-out 600ms;
}
 .info h3 {
	 color: #fcfff4;
	 margin: 0 0 5px;
	 font-weight: normal;
	 font-size: 1.5em;
	 font-style: normal;
}
 .info.top-left {
	 top: 30px;
	 left: 30px;
}
 .info.top-right {
	 top: 30px;
	 right: 30px;
}
 .info.bottom-left {
	 bottom: 30px;
	 left: 30px;
}
 .info.bottom-right {
	 bottom: 30px;
	 right: 30px;
}
/* Slider Styling */
 .slider-wrapper {
	 width: 100%;
	 overflow: hidden;
	 border-radius: 5px;
	 box-shadow: 1px 1px 4px #666;
	 background: #fff;
	 background: #fcfff4;
	 transform: translateZ(0);
	 transition: all 500ms ease-out;
}
 .slider-wrapper .inner {
	 transform: translateZ(0);
	 transition: all 800ms cubic-bezier(0.77, 0, 0.175, 1);
}
/*---- SET POSITION FOR SLIDE ----*/
 #slide1:checked ~ .slider-prev-next-control label:nth-child(2)::after, #slide2:checked ~ .slider-prev-next-control label:nth-child(3)::after, #slide3:checked ~ .slider-prev-next-control label:nth-child(4)::after, #slide4:checked ~ .slider-prev-next-control label:nth-child(5)::after, #slide5:checked ~ .slider-prev-next-control label:nth-child(1)::after, #slide2:checked ~ .slider-prev-next-control label:nth-child(1)::after, #slide3:checked ~ .slider-prev-next-control label:nth-child(2)::after, #slide4:checked ~ .slider-prev-next-control label:nth-child(3)::after, #slide5:checked ~ .slider-prev-next-control label:nth-child(4)::after, #slide1:checked ~ .slider-prev-next-control label:nth-child(5)::after {
	 font-family: FontAwesome;
	 font-style: normal;
	 font-weight: normal;
	 text-decoration: inherit;
	 margin: 0;
	 line-height: 38px;
	 font-size: 3em;
	 display: block;
	 color: #777;
}
 #slide1:checked ~ .slider-prev-next-control label:nth-child(2)::after, #slide2:checked ~ .slider-prev-next-control label:nth-child(3)::after, #slide3:checked ~ .slider-prev-next-control label:nth-child(4)::after, #slide4:checked ~ .slider-prev-next-control label:nth-child(5)::after, #slide5:checked ~ .slider-prev-next-control label:nth-child(1)::after {
	 content: "\f105";
	 padding-left: 15px;
}
 #slide1:checked ~ .slider-prev-next-control label:nth-child(2), #slide2:checked ~ .slider-prev-next-control label:nth-child(3), #slide3:checked ~ .slider-prev-next-control label:nth-child(4), #slide4:checked ~ .slider-prev-next-control label:nth-child(5), #slide5:checked ~ .slider-prev-next-control label:nth-child(1) {
	 display: block;
	 float: right;
	 margin-right: 5px;
}
 #slide2:checked ~ .slider-prev-next-control label:nth-child(1), #slide3:checked ~ .slider-prev-next-control label:nth-child(2), #slide4:checked ~ .slider-prev-next-control label:nth-child(3), #slide5:checked ~ .slider-prev-next-control label:nth-child(4), #slide1:checked ~ .slider-prev-next-control label:nth-child(5) {
	 display: block;
	 float: left;
	 margin-left: 5px;
}
 #slide2:checked ~ .slider-prev-next-control label:nth-child(1)::after, #slide3:checked ~ .slider-prev-next-control label:nth-child(2)::after, #slide4:checked ~ .slider-prev-next-control label:nth-child(3)::after, #slide5:checked ~ .slider-prev-next-control label:nth-child(4)::after, #slide1:checked ~ .slider-prev-next-control label:nth-child(5)::after {
	 content: "\f104";
	 padding-left: 8px;
}
 #slide1:checked ~ .slider-dot-control label:nth-child(1), #slide2:checked ~ .slider-dot-control label:nth-child(2), #slide3:checked ~ .slider-dot-control label:nth-child(3), #slide4:checked ~ .slider-dot-control label:nth-child(4), #slide5:checked ~ .slider-dot-control label:nth-child(5) {
	 background: #333;
}
 #slide1:checked ~ .slider-wrapper article:nth-child(1) .info, #slide2:checked ~ .slider-wrapper article:nth-child(2) .info, #slide3:checked ~ .slider-wrapper article:nth-child(3) .info, #slide4:checked ~ .slider-wrapper article:nth-child(4) .info, #slide5:checked ~ .slider-wrapper article:nth-child(5) .info {
	 opacity: 1;
}
 #slide1:checked ~ .slider-wrapper .inner {
	 margin-left: 0%;
}
 #slide2:checked ~ .slider-wrapper .inner {
	 margin-left: -100%;
}
 #slide3:checked ~ .slider-wrapper .inner {
	 margin-left: -200%;
}
 #slide4:checked ~ .slider-wrapper .inner {
	 margin-left: -300%;
}
 #slide5:checked ~ .slider-wrapper .inner {
	 margin-left: -400%;
}
/*---- TABLET ----*/
 @media only screen and (max-width: 850px) and (min-width: 450px) {
	 .slider-wrapper {
		 border-radius: 0;
	}
}
/*---- MOBILE----*/
 @media only screen and (max-width: 450px) {
	 .slider-wrapper {
		 border-radius: 0;
	}
	 .slider-wrapper .info {
		 opacity: 0;
	}
}
 @media only screen and (min-width: 850px) {
	 body {
		 padding: 0 80px;
	}
}
 
	</style>
</head>
<body>
	<div class="wrapper">
  <input checked type=radio name="slider" id="slide1" />
  <input type=radio name="slider" id="slide2" />
  <input type=radio name="slider" id="slide3" />
  <input type=radio name="slider" id="slide4" />
  <input type=radio name="slider" id="slide5" />

  <div class="slider-wrapper">
    <div class=inner>
      <article>
        <div class="info top-left">
          <h3>Malacca</h3></div>
        <img src="https://farm9.staticflickr.com/8059/28286750501_dcc27b1332_h_d.jpg" />
      </article>

      <article>
        <div class="info bottom-right">
          <h3>Cameron Highland</h3></div>
        <img src="https://farm6.staticflickr.com/5812/23394215774_b76cd33a87_h_d.jpg" />
      </article>

      <article>
        <div class="info bottom-left">
          <h3>New Delhi</h3></div>
        <img src="https://farm8.staticflickr.com/7455/27879053992_ef3f41c4a0_h_d.jpg" />
      </article>

      <article>
        <div class="info top-right">
          <h3>Ladakh</h3></div>
        <img src="https://farm8.staticflickr.com/7367/27980898905_72d106e501_h_d.jpg" />
      </article>

      <article>
        <div class="info bottom-left">
          <h3>Nubra Valley</h3></div>
        <img src="https://farm8.staticflickr.com/7356/27980899895_9b6c394fec_h_d.jpg" />
      </article>
    </div>
    <!-- .inner -->
  </div>
  <!-- .slider-wrapper -->

  <div class="slider-prev-next-control">
    <label for=slide1></label>
    <label for=slide2></label>
    <label for=slide3></label>
    <label for=slide4></label>
    <label for=slide5></label>
  </div>
  <!-- .slider-prev-next-control -->

  
  <!-- .slider-dot-control -->
</div>


	<script>
		
	</script>
</body>
</html>

