
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dynamic Videos</title>
    <script src="assets/js/anime.min.js"></script>
    <!--<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">-->
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/keyframe.js"></script>
	<link rel="stylesheet" href="assets/css/style.css">	
	<script>
		var isMobile = {
			Android: function() {
				return /Android/i.test(navigator.userAgent);
			},
			iOS: function() {
				return /iPhone|iPad|iPod/i.test(navigator.userAgent);
			}
		};
		if(isMobile.Android())
			{
				var previousWidth=$(window).width();
				$(window).on({
				resize: function(e) {
				var YourFunction=(function(){

					var screenWidth=$(window).width();
					if(previousWidth!=screenWidth)
					{
						previousWidth=screenWidth;
						//alert("oreientation changed");
					}

				})();

				}
			});

			}
			else//mainly for ios
			{
				$(window).on({
					orientationchange: function(e) {
					//alert("orientation changed");
					}   
				});
			}
	</script>
	<script>
		$(document).ready(function(){

			var audioGetss="";

			$("#audioBg")[0].volume = 0.1;
			var myAudio = document.getElementById('audioIntro');
			var myAudio2 = document.getElementById('audioIntro2');
			var myAudio3 = document.getElementById('audioIntro3');
			var myAudio4 = document.getElementById('audioIntro4');
			var myAudio5 = document.getElementById('audioIntro5');
			var myAudio6 = document.getElementById('audioIntro6');
			var myAudio7 = document.getElementById('audioIntro7');
			var myAudio8 = document.getElementById('audioIntro8');
			var myAudio9 = document.getElementById('audioIntro9');
			var myAudio10 = document.getElementById('audioIntro10');
			
			setInterval(function(){
			
                if (myAudio.duration > 0 && !myAudio.paused || myAudio2.duration > 0 && !myAudio2.paused || myAudio3.duration > 0 && !myAudio3.paused || myAudio4.duration > 0 && !myAudio4.paused || myAudio5.duration > 0 && !myAudio5.paused || myAudio6.duration > 0 && !myAudio6.paused || myAudio7.duration > 0 && !myAudio7.paused || myAudio8.duration > 0 && !myAudio8.paused || myAudio9.duration > 0 && !myAudio9.paused || myAudio10.duration > 0 && !myAudio10.paused) {
					$("#audioBg,#audioIntro,#audioIntro2,#audioIntro3,#audioIntro4,#audioIntro5,#audioIntro6,#audioIntro7,#audioIntro8,#audioIntro9,#audioIntro10")[0].volume = 1;
					$("#audioBg")[0].volume = 0.1;
				}
				else
				{
					$("#audioBg,#audioIntro,#audioIntro2,#audioIntro3,#audioIntro4,#audioIntro5,#audioIntro6,#audioIntro7,#audioIntro8,#audioIntro9,#audioIntro10")[0].volume = 1;
					$("#audioBg")[0].volume = 1;
				}
				$("audio").hide();
			},100);
			
			if(myAudio.duration > 0 && !myAudio.paused)
			{

				//Its playing...do your job
				$("#audioBg")[0].volume = 0.3;

			}
			else
			{
				//Not playing...maybe paused, stopped or never played.
				$("#audioBg")[0].volume = 1;
			}
			myAudio.addEventListener('ended',function(){
			  //play next song
				myAudio.currentTime = 0;
				var sTimeout = setTimeout(function(){
					$("#audioIntro2")[0].play();
					audioGetss=2;
				},4000);
				
				if(myAudio2.duration > 0 && !myAudio2.paused)
				{

					//Its playing...do your job
					$("#audioBg")[0].volume = 0.3;

				}
				else
				{
					//Not playing...maybe paused, stopped or never played.
					$("#audioBg")[0].volume = 1;
				}
			});
			
			myAudio2.addEventListener('ended',function(){
			  //play next song
				myAudio2.currentTime = 0;
				var sTimeout = setTimeout(function(){
					$("#audioIntro3")[0].play();
					audioGetss=3;
				},1000);
				
				if(myAudio3.duration > 0 && !myAudio3.paused)
				{

					//Its playing...do your job
					$("#audioBg")[0].volume = 0.3;

				}
				else
				{
					//Not playing...maybe paused, stopped or never played.
					$("#audioBg")[0].volume = 1;
				}
			});
			
			myAudio3.addEventListener('ended',function(){
			  //play next song
				myAudio3.currentTime = 0;
				var sTimeout = setTimeout(function(){
					$("#audioIntro4")[0].play();
					audioGetss=4;
				},1000);

				if(myAudio4.duration > 0 && !myAudio4.paused)
				{

					//Its playing...do your job
					$("#audioBg")[0].volume = 0.3;

				}
				else
				{
					//Not playing...maybe paused, stopped or never played.
					$("#audioBg")[0].volume = 1;
				}
			});
			
			myAudio4.addEventListener('ended',function(){
			  //play next song
				myAudio4.currentTime = 0;
				var sTimeout = setTimeout(function(){
					$("#audioIntro5")[0].play();
					audioGetss=5;
				},1000);
				
				if(myAudio5.duration > 0 && !myAudio5.paused)
				{

					//Its playing...do your job
					$("#audioBg")[0].volume = 0.3;

				}
				else
				{
					//Not playing...maybe paused, stopped or never played.
					$("#audioBg")[0].volume = 1;
				}
			});
			
			myAudio5.addEventListener('ended',function(){
			  //play next song
				myAudio5.currentTime = 0;
				var sTimeout = setTimeout(function(){
					$("#audioIntro6")[0].play();
					audioGetss=6;
				},2000);
				
				if(myAudio6.duration > 0 && !myAudio6.paused)
				{

					//Its playing...do your job
					$("#audioBg")[0].volume = 0.3;

				}
				else
				{
					//Not playing...maybe paused, stopped or never played.
					$("#audioBg")[0].volume = 1;
				}
			});

			myAudio6.addEventListener('ended',function(){
			  //play next song
				myAudio6.currentTime = 0;
				var sTimeout = setTimeout(function(){
					$("#audioIntro7")[0].play();
					audioGetss=7;
				},2000);
				
				if(myAudio7.duration > 0 && !myAudio7.paused)
				{

					//Its playing...do your job
					$("#audioBg")[0].volume = 0.3;

				}
				else
				{
					//Not playing...maybe paused, stopped or never played.
					$("#audioBg")[0].volume = 1;
				}
			});

			myAudio7.addEventListener('ended',function(){
			  //play next song
				myAudio7.currentTime = 0;
				var sTimeout = setTimeout(function(){
					$("#audioIntro8")[0].play();
					audioGetss=8;
				},2000);
				
				if(myAudio8.duration > 0 && !myAudio8.paused)
				{

					//Its playing...do your job
					$("#audioBg")[0].volume = 0.3;

				}
				else
				{
					//Not playing...maybe paused, stopped or never played.
					$("#audioBg")[0].volume = 1;
				}
			});
			
			myAudio8.addEventListener('ended',function(){
			  //play next song
				myAudio8.currentTime = 0;
				var sTimeout = setTimeout(function(){
					$("#audioIntro9")[0].play();
					audioGetss=9;
				},1000);
				
				if(myAudio9.duration > 0 && !myAudio9.paused)
				{

					//Its playing...do your job
					$("#audioBg")[0].volume = 0.3;

				}
				else
				{
					//Not playing...maybe paused, stopped or never played.
					$("#audioBg")[0].volume = 1;
				}
			});
			
			myAudio9.addEventListener('ended',function(){
			  //play next song
				myAudio9.currentTime = 0;
				var sTimeout = setTimeout(function(){
					$("#audioIntro10")[0].play();
					audioGetss=10;
				},1000);
				
				if(myAudio10.duration > 0 && !myAudio10.paused)
				{

					//Its playing...do your job
					$("#audioBg")[0].volume = 0.3;

				}
				else
				{
					//Not playing...maybe paused, stopped or never played.
					$("#audioBg")[0].volume = 1;
				}
			});		

			var intervalClear;

			$(".timeline-controls-demo .pause").click(function(){
				$("audio").each(function(){
					this.pause();
				});

				intervalClear = setInterval(function()
				{
					$("audio").each(function(){
						this.pause();
					});
				},100);
			});
			$(".timeline-controls-demo .play").click(function(){
				clearInterval(intervalClear);
				$("#audioBg")[0].play();
				$("#audioIntro"+audioGetss)[0].play();
			});
		});
	</script>
</head>
<body>	
	<div id="fullVideoWrap">
		<!-- <canvas id="canvas"></canvas>	
		<canvas id="canvas1" style="z-index: 9999999999999; background:none;"></canvas>
		<canvas id="canvas2" style="z-index: 9999999999999; background:none;"></canvas>
		<canvas id="canvas3" style="z-index: 9999999999999; background:none;"></canvas> -->

		<div class="demo-content timeline-controls-demo">
			<div class="line controls">
				
			<div id="playVideoBtn" style="width: 100vw; cursor: pointer; height: 100vh; position: absolute; left: 0%; top: 0; background: hsla(100,0%,0%,0.7);"><button style="background: url('assets/objects/playIconMain.png') no-repeat scroll center center / 100%; width: 20vh; cursor: pointer; padding: 20vh 0%; border-radius:100000px;margin-left: 45%; margin-top: 12.5%;"></button></div>
		
			<button class="play" style="background: #fff url('assets/objects/play.png') no-repeat scroll center center / 50%;"></button>
			<button class="pause" style="background: #fff url('assets/objects/pause.png') no-repeat scroll center center / 50%;"></button>
			
			<!-- <button class="mins" id="minsVid" style="width: 4vw; height: 2.33vw; position: fixed; right: 2.5vw; bottom: 0; border: medium none; border-radius: 0; background: #fff;">1:00</button> -->
			
			<button class="restart" style="background: #fff url('assets/objects/replay.png') no-repeat scroll center center / 50%;"></button>
			<button class="fullScreen" style="background: #fff url('assets/objects/fullscreen.png') no-repeat scroll center center / 50%;"></button>

			<input class="progress" step=".001" type="range" min="0" max="100" value="0" style="cursor:pointer;">
			</div>
		</div>
		
		<div class="fadeText screen2" style="display: fixed; top:0; left:0; z-index:2;" id="bg3Icon">
			<div style="width:100%; height:100vh; background: hsla(100,0%,0%,0.7);">
				<div class="contentText">
					<img src="assets/images/teacher1r.gif" id="teacherRight" style="position: absolute;right: -12vw;bottom: -7vw;" width="40%">
					<img src="assets/images/teacher1l.gif" id="teacherLeft" style="position: absolute;left: -12vw;bottom: -7vw;" width="40%">
					<h2 class="frame-1" style="line-height:30px;">Are You Excited to Learn with Fun?</h2>
					<h2 class="frame-2" style="line-height:30px;">Let's Start!!!</h2>
					<h2 class="frame-3" style="line-height:30px;">Do you know how to write Digit 1?</h2>
					<h2 class="frame-4" style="line-height:30px;" id="digitFirstFrame"><span style="float: left; width: 50%; text-align: left; font-size: 25px; animation-play-state: paused;margin-left: -18px;" id="placeValue">H T O</span><span style="float: left; width: 50%; text-align: left; font-size: 25px; animation-play-state: paused;" id="placeValue2">H T O</span></h2>
					<h2 class="frame-5" id="digitLastFrame1"></h2>
					<h2 class="frame-6" style="line-height: 30px; color: rgb(0, 0, 0); margin: -3% 20% 0%; width: 60%; text-align: left; animation-play-state: paused; display: none;" id="digitLastFrame2"><span style='width: 100%; text-align: center; display: block; float: left; margin: 30px 0;' id='getRepeatText'>Let's Repeat One More Time with more difference in Digits!<span><span style="float: left; width: 50%; text-align: left; font-size: 25px; animation-play-state: paused;margin-left: -18px;" id="placeValue">H T O</span><span style="float: left; width: 50%; text-align: left; font-size: 25px; animation-play-state: paused;" id="placeValue2">H T O</span></h2>
					<h2 class="frame-7" style="line-height: 30px; color: rgb(0, 0, 0); margin: -3% 20% 0%; width: 60%; text-align: left; animation-play-state: paused;  display: none;" id="digitLastFrame2"><span style='width: 100%; text-align: center; display: block; float: left; margin: 30px 0;' id='getRepeatText'>Let's Repeat One More Time with more difference in Digits!<span><span style="float: left; width: 50%; text-align: left; font-size: 25px; animation-play-state: paused;margin-left: -18px;" id="placeValue">H T O</span><span style="float: left; width: 50%; text-align: left; font-size: 25px; animation-play-state: paused;" id="placeValue2">H T O</span></h2>
					<h2 class="frame-8" style="line-height: 30px; color: rgb(0, 0, 0); margin: -3% 20% 0%; width: 60%; text-align: left; animation-play-state: paused;  display: none;" id="digitLastFrame2"><span style='width: 100%; text-align: center; display: block; float: left; margin: 30px 0;' id='getRepeatText'>Let's Repeat One More Time with more difference in Digits!<span><span style="float: left; width: 50%; text-align: left; font-size: 25px; animation-play-state: paused;margin-left: -18px;" id="placeValue">H T O</span><span style="float: left; width: 50%; text-align: left; font-size: 25px; animation-play-state: paused;" id="placeValue2">H T O</span></h2>
				</div> 
			</div>
		</div>

	<!-- <div class="loaderText screen2" style="display: fixed; top:0; left:0; z-index:3;" id="bg2Icon">
	<div class="letters"><span class="fall--1"><span class="bfall--1"><span class="plonge--1"><span class="tremble">1</span></span></span></span><span class="fall--2"><span class="bfall--2"><span class="plonge--2"><span class="tremble">2</span></span></span></span><span class="fall--3"><span class="bfall--3"><span class="plonge--3"><span class="tremble">3</span></span></span></span><span class="fall--4"><span class="bfall--4"><span class="plonge--4"><span class="tremble">4</span></span></span></span><span class="fall--5"><span class="bfall--5"><span class="plonge--5"><span class="tremble">5</span></span></span></span><span class="fall--6"><span class="bfall--6"><span class="plonge--6"><span class="tremble">6</span></span></span></span><span class="fall--7"><span class="bfall--7"><span class="plonge--7"><span class="tremble">7</span></span></span></span><span class="fall--8"><span class="bfall--8"><span class="plonge--8"><span class="tremble">8</span></span></span></span><span class="fall--9"><span class="bfall--9"><span class="plonge--9"><span class="tremble">9</span></span></span></span></div>
	<div class="objects">
		<div class="object circle"></div>
		<div class="object square"></div>
		<div class="object diamond"></div>
		<div class="object circle"></div>
		<div class="object square"></div>
		<div class="object diamond"></div>
		<div class="object circle"></div>
		<div class="object square"></div>
		<div class="object diamond"></div>
		<div class="object circle"></div>
		<div class="object square"></div>
		<div class="object diamond"></div>
		<div class="object circle"></div>
		<div class="object square"></div>
		<div class="object diamond"></div>
	</div>
	<div class="full-water">
		<div class="water">
			<div class="splash splash--1"></div>
			<div class="splash splash--2"></div>
			<div class="splash splash--3"></div>
			<div class="splash splash--4"></div>
			<div class="splash splash--5"></div>
			<div class="splash splash--6"></div>
			<div class="splash splash--7"></div>
			<div class="splash splash--8"></div>
			<div class="splash splash--9"></div><svg class="wobble" viewBox="0 0 841.9 73.5">
				<path id="trampoline" fill="#ED1C24" d="M851,79.5H-8V13.4c0,0,243,0,430,0s429,0,429,0V79.5z"></path>
				<animate xlink:href="#trampoline" attributeName="d" begin="5.2s" dur="1s" fill="freeze" keyTimes="0; 0.2; 0.5; 1" values="M851,79.5H-8V13.4c0,0,243,0,430,0s429,0,429,0V79.5z; M851,79.5H-8V13.4c0,0,243,10,430,10s429-10,429-10V79.5z; M851,79.5H-8V13.4c0,0,243-4,430-4s429,4,429,4V79.5z; M851,79.5H-8V13.4c0,0,243,0,430,0s429,0,429,0V79.5z;"></animate>
			</svg>
		</div>
	</div>
	<p id="replay"></p>

		</div>
		-->
		
	<div class="d-flex flex-column justify-content-center w-100 h-100 screen0">
		<div class="d-flex flex-column justify-content-center align-items-center">
			<h1 class="fw-light text-white m-0" style='line-height: 100vh;z-index:-1;'><img src="assets/images/wh-logo.svg" /></h1>
			
			<div class="btn-group my-5" style='margin-top:-40vh;'>
			<div class="flex social-btns">
			<a target="_blank" onclick="$('.pause').click()" class="app-btn blu flex vert" href="http:apple.com">
				<i class="fa fa-apple"></i>
				<p>Available on the <br/> <span class="big-txt">App Store</span></p>
			</a>
	
			<a target="_blank" onclick="$('.pause').click()" class="app-btn blu flex vert" href="http:google.com">
				<i class="fa fa-google"></i>
				<p>Get it on <br/> <span class="big-txt">Google Play</span></p>
			</a>
			</div>


			</div>
			<a target="_blank" onclick="$('.pause').click()" href="http://iparhai.com" style="color:#fff;text-decoration:none;">
				<h5 class="fw-light text-white m-0">— www.iParhai.com —</h5>
			</a>
		</div>
		</div>
	</div>


	<div class="d-flex flex-column justify-content-center w-100 h-100 screen00" style="z-index:-3;">
		<div class="d-flex flex-column justify-content-center align-items-center">
		
			<h1 class="fw-light text-white m-0 endHead">Thank You for Watching!</h1>
			
			<div class="btn-group my-5 btnDiv">
			<div class="flex social-btns">
			<a target="_blank" onclick="$('.pause').click()" class="app-btn blu flex vert" href="http:apple.com">
				<i class="fa fa-apple"></i>
				<p>Available on the <br/> <span class="big-txt">App Store</span></p>
			</a>
	
			<a target="_blank" onclick="$('.pause').click()" class="app-btn blu flex vert" href="http:google.com">
				<i class="fa fa-google"></i>
				<p>Get it on <br/> <span class="big-txt">Google Play</span></p>
			</a>
			</div>


			</div>
			<a target="_blank" onclick="$('.pause').click()" href="http://iparhai.com" style="color:#fff;text-decoration:none;">
				<h5 class="fw-light text-white m-0">— www.iParhai.com —</h5>
			</a>
		</div>
		</div>
	</div>

	<div class="welcome screen1" style=" z-index:4;">
	<span id="splash-overlay" class="splash"></span>
	<span id="welcome" class="z-depth-4"></span>
	
	<header class="navbar-fixed"> 
		<nav class="row deep-purple darken-3">
		
		</nav>
	</header>

	<main class="valign-wrapper">
		
		<div class = 'container projects' style="background: hsla(100,0%,0%,0.3); width:100%; height: 100vh; color:#fff;">
		<h1 style=" width:90%; margin-top:40%; padding: 5%; color:#fff; text-align:center;"><img id="helloIcon" src="assets/objects/hello.gif" width="200vw" alt="Hello Learner"></h1>
		<div class="overlay" id="bg1Icon"></div>
		</div>
	</main>

	<div class="fixed-action-btn">
		
	</div>

	<div id="message" class="modal modal-fixed-footer">
		
	</div> 

	<footer class="page-footer deep-purple darken-3">
		
	</footer>	
	</div>

	<div class="screen3" style="display: fixed; top:0; left:0; z-index:1;">
		<div class="landscape">

	<div class="mountain"></div>
	<div class="mountain mountain-2"></div>
	<div class="mountain mountain-3"></div>
	<div class="sun-container sun-container-1">
	</div>
	<div class="sun-container">
		<div class="sun"></div>
	</div>
	<div class="cloud"></div>
	<div class="cloud cloud-1"></div>
	<div class="sun-container sun-container-reflection">
		<div class="sun"></div>
	</div>
	<div class="light"></div>
	<div class="light light-1"></div>
	<div class="light light-2"></div>
	<div class="light light-3"></div>
	<div class="light light-4"></div>
	<div class="light light-5"></div>
	<div class="light light-6"></div>
	<div class="light light-7"></div>
	<div class="water"></div>
	<div class="splash"></div>
	<div class="splash delay-1"></div>
	<div class="splash delay-2"></div>
	<div class="splash splash-4 delay-2"></div>
	<div class="splash splash-4 delay-3"></div>
	<div class="splash splash-4 delay-4"></div>
	<div class="splash splash-stone delay-3"></div>
	<div class="splash splash-stone splash-4"></div>
	<div class="splash splash-stone splash-5"></div>
	<div class="lotus lotus-1"></div>
	<div class="lotus lotus-2"></div>
	<div class="lotus lotus-3"></div>
	<div class="front">
		<div class="stone"></div>
		<div class="grass"></div>
		<div class="grass grass-1"></div>
		<div class="grass grass-2"></div>
		<div class="reed"></div>
		<div class="reed reed-1"></div>
	</div>
	</div>
	</div>

	<div class="screen4" style="display: fixed; top:0; left:0; z-index:0;">
		<style>
			*{			
				transition-duration: 0.3s;
			}

			.screen4 div {
				position: absolute;
				width: 100vw;
				height: 100vh;
			}
			@-webkit-keyframes eye-focus {
				0% {
					-webkit-filter: blur(0);
				}
				100% {
					-webkit-filter: blur(10px);
				}
			}
			@-webkit-keyframes focus-shift {
				0% {
					transform: scale(1);
				}
				100% {
					transform: scale(1.01);
				}
			}
			.landscape2 {
				background: url(assets/background/10.svg);
				background-size: cover;
				background-position: center;
				filter: blur(1em);
				z-index:99999999;
				animation: eye-focus 3s ease-in infinite alternate, focus-shift 3s ease-in infinite alternate;
			}
			.glass2 {
				/* background: url(assets/objects/droplets.jpeg); */
				filter: blur(0);
				z-index:999999999;
				animation: eye-focus 3s ease-in infinite 3s alternate, focus-shift 2s ease-in infinite alternate;
				opacity: 0.5;
			}
			
		</style>
		<div class="landscape2"></div>
		<div class="glass2"></div>
	</div>

	<div class="screen5" style="display: fixed; top:0; left:0; z-index:-1;">
		<div class="moon"></div>

		<div class="skyline">
			<div class="building1-shadow"></div>
			<div class="building1">

				<div class="building-left-half"></div>
				<div class="building-right-half"></div>
			</div>
		</div>
		<div class="road">
			<div class="road-top-half"></div>
			<div class="road-bottom-half"></div>
		</div>

		<div class="car-container">
			<div class="car-top1">
				<div class="window1"></div>
				<div class="window2"></div>

			</div>
			<div class="car-top2">
				<div class="door">
					<div class="door-knob"></div>
				</div>
			</div>
			<div class="car-bottom">
				<div class="wheel1-top"></div>
				<div class="wheel1">
					<div class="wheel-dot1"></div>
					<div class="wheel-dot2"></div>
					<div class="wheel-dot3"></div>
					<div class="wheel-dot4"></div>

				</div>

				<div class="wheel2-top"></div>
				<div class="wheel2">
					<div class="wheel-dot1"></div>
					<div class="wheel-dot2"></div>
					<div class="wheel-dot3"></div>
					<div class="wheel-dot4"></div>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="audios">
    <!-- <audio controls autoplay loop hidden="" style="display: none;" id="audioBg">
        <source src="assets/audio/bg.mp3" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio> 
    <audio controls autoplay hidden="" style="display: none;" id="audioIntro">
        <source src="assets/audio/Audios-English/SubBlock_Welcome-to-eye-parr-huh-e.mp3" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio> 
    
    <audio controls hidden="" style="display: none;" id="audioIntro2">
        <source src="assets/audio/Audios-English/SubBlock_Hey-Do-you-like-to-learn-with.mp3" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio> 
    
    audio controls hidden="" style="display: none;" id="audioIntro3">
        <source src="assets/audio/Audios-Urdu/start learning.mp3" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio>
    
    <audio controls hidden="" style="display: none;" id="audioIntro3">
        <source src="assets/audio/Audios-English/SubBlock_Are-you-excited-to-explore-eye.mp3" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio> 
    
    <audio controls hidden="" style="display: none;" id="audioIntro4">
        <source src="assets/audio/Audios-English/SubBlock_Watch-the-video.mp3" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio> 
    
    <audio controls hidden="" style="display: none;" id="audioIntro5">
        <source src="assets/audio/Audios-English/SubBlock_Wow-look-at-all-the-fun-variet.mp3" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio> 
    
    <audio controls hidden="" style="display: none;" id="audioIntro6">
        <source src="assets/audio/Audios-English/SubBlock_What-did-you-learn-from-this-v.mp3" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio>  -->

	<audio controls autoplay loop hidden="" style="display: none;" id="audioBg">
        <source src="" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio>

    <audio controls autoplay hidden="" style="display: none;" id="audioIntro">
        <source src="" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio> 
    
    <audio controls hidden="" style="display: none;" id="audioIntro2">
        <source src="" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio>
    
    <audio controls hidden="" style="display: none;" id="audioIntro3">
        <source src="" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio> 
    
    <audio controls hidden="" style="display: none;" id="audioIntro4">
        <source src="" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio> 
    
    <audio controls hidden="" style="display: none;" id="audioIntro5">
        <source src="" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio> 
    
    <audio controls hidden="" style="display: none;" id="audioIntro6">
        <source src="" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio> 
    
    <audio controls hidden="" style="display: none;" id="audioIntro7">
        <source src="" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio> 
    
    <audio controls hidden="" style="display: none;" id="audioIntro8">
        <source src="" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio> 
    
    <audio controls hidden="" style="display: none;" id="audioIntro9">
        <source src="" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio> 
    
    <audio controls hidden="" style="display: none;" id="audioIntro10">
        <source src="" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio> 
    

	<script>
		//Global states Initialization...

		var maxDurat;
		var subDuration = 0;
		var subDuration2 = 0;
		var subDuration3 = 0;
		var subDuration4 = 0;
		var secondText = "";
		var thirdText = "";
		var type3 = "";
		var lastAudio6Chunk = "";

		//Ordinal to words gerenator
        function ordinal(i) {
            var n = ["one", "two", "three", "four", "five", "six", "seven", "eight", "nine", "ten", "eleven", "twelve", "thirteen", "fourteen", "fifteen", "sixteen", "seventeen", "eighteen", "nineteen"];
            var s = ["zeroth", "first", "second", "third", "fourth", "fifth", "sixth", "seventh", "eighth", "ninth", "tenth",
                "eleventh", "twelfth", "thirteenth", "fourteenth", "fifteenth", "sixteenth", "seventeenth", "eighteenth", "nineteenth"
            ];
            var p = ["twent", "thirt", "fourt", "fift", "sixt", "sevent", "eight", "ninet"];
            var c = ["hundred", "thousand", "million", "billion", "trillion", "quadrillion", "quintillion"];
            var b = Math.floor(Math.log10(i));

            if (i < 20) return s[i]; // Special case for sub-20
            if (b == 1) { // Between 21 and 99
                if (i % 10 === 0) return p[Math.floor(i / 10) - 2] + "ieth"; // On the tens, return p+"ieth"
                return p[Math.floor(i / 10) - 2] + "y-" + s[i % 10]; // Otherwise, return hyphenated
            }
            if (b == 2) { // Between 100 and 999
                var e = Math.floor(i / Math.pow(10, b)); // The first number
                return n[e - 1] + "-" + c[0] + " " + nth(i - (e * Math.pow(10, b)));
            }
            // Greater than 1000 we break into groups of 10^3 followed by a multiplier
            var m = b % 3 + 1; // Take the first m digits off
            var cm = Math.floor(b / 3);
            var x = Math.floor(i / Math.pow(10, b - m + 1));
            var numberToString = function(y) { // Converts a number less than 1000 to its string representation as a multiplier
                if (y < 20) return n[y - 1];
                if (y < 100) return p[Math.floor(y / 10) - 2] + "y-" + n[y % 10 - 1];
                return n[Math.floor(y / 100) - 1] + " " + c[0] + " " + numberToString(y - (Math.floor(y / 100) * 100));
            }
            return numberToString(x) + " " + c[cm] + " " + nth(i - (x * Math.pow(10, b - m + 1)));
        }

		// Number in words...
		function numberToEnglish( n ) {
        
        var string = n.toString(), units, tens, scales, start, end, chunks, chunksLen, chunk, ints, i, word, words, and = 'and';

        /* Remove spaces and commas */
        string = string.replace(/[, ]/g,"");

        /* Is number zero? */
        if( parseInt( string ) === 0 ) {
            return 'zero';
        }
        
        /* Array of units as words */
        units = [ '', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten', 'eleven', 'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen', 'seventeen', 'eighteen', 'nineteen' ];
        
        /* Array of tens as words */
        tens = [ '', '', 'twenty', 'thirty', 'forty', 'fifty', 'sixty', 'seventy', 'eighty', 'ninety' ];
        
        /* Array of scales as words */
        scales = [ '', 'thousand', 'million', 'billion', 'trillion', 'quadrillion', 'quintillion', 'sextillion', 'septillion', 'octillion', 'nonillion', 'decillion', 'undecillion', 'duodecillion', 'tredecillion', 'quatttuor-decillion', 'quindecillion', 'sexdecillion', 'septen-decillion', 'octodecillion', 'novemdecillion', 'vigintillion', 'centillion' ];
        
        /* Split user argument into 3 digit chunks from right to left */
        start = string.length;
        chunks = [];
        while( start > 0 ) {
            end = start;
            chunks.push( string.slice( ( start = Math.max( 0, start - 3 ) ), end ) );
        }
        
        /* Check if function has enough scale words to be able to stringify the user argument */
        chunksLen = chunks.length;
        if( chunksLen > scales.length ) {
            return '';
        }
        
        /* Stringify each integer in each chunk */
        words = [];
        for( i = 0; i < chunksLen; i++ ) {
            
            chunk = parseInt( chunks[i] );
            
            if( chunk ) {
                
                /* Split chunk into array of individual integers */
                ints = chunks[i].split( '' ).reverse().map( parseFloat );
            
                /* If tens integer is 1, i.e. 10, then add 10 to units integer */
                if( ints[1] === 1 ) {
                    ints[0] += 10;
                }
                
                /* Add scale word if chunk is not zero and array item exists */
                if( ( word = scales[i] ) ) {
                    words.push( word );
                }
                
                /* Add unit word if array item exists */
                if( ( word = units[ ints[0] ] ) ) {
                    words.push( word );
                }
                
                /* Add tens word if array item exists */
                if( ( word = tens[ ints[1] ] ) ) {
                    words.push( word );
                }
                
                /* Add 'and' string after units or tens integer if: */
                if( ints[0] || ints[1] ) {
                    
                    /* Chunk has a hundreds integer or chunk is the first of multiple chunks */
                    if( ints[2] || (i + 1) < chunksLen ) {
                        words.push( and );
                    }
                
                }
                
                /* Add hundreds word if array item exists */
                if( ( word = units[ ints[2] ] ) ) {
                    words.push( word + ' hundred' );
                }
                
            }
            
        }
        
        return words.reverse().join( ' ' );
        
    }


		// - - - - - Tests - - - - - -
		function test(v) {
		var sep = ('string'==typeof v)?'"':'';
			$(".frame-5").html("<span>"+numberToEnglish(v)+"</span>");
		}
		// Number in words...

		// dynamic assets arrays...

		var bgAudio = ['0.mp3','1.mp3', '2.mp3', '3.mp3', '4.mp3', '5.mp3', '6.mp3', '7.mp3'];

		$("#audioBg source").attr("src","assets/audio/background/" + bgAudio[parseInt(Math.random() * bgAudio.length)]+"?i=1");
		$("#audioBg")[0].duration=2;
		$("#audioBg")[0].play;

		var helloObjs = ["hello.gif", "hello2.gif", "hello3.gif", "hello4.gif", "hello5.gif", "hello6.gif", "hello7.gif", "hello8.gif"];
		var byeObjs = ["bye.gif", "bye2.gif", "bye3.gif"];
		var introObjs = ["", "", ""];

		// background svgs		
		var bgObjs = ["0.svg", "1.gif", "2.svg","3.gif","4.svg","5.svg","6.svg","7.svg","8.svg","9.svg","10.svg","11.svg","12.svg","13.svg","14.svg","15.svg"];
		//var bgObjs = ["1.gif", "2.jpg","3.gif"];
		
		// dynamic digits arrays...
		var digitObjs = ["0", "1", "2","3","4","5","6","7","8","9"];
		var digitAudio = ['0.mp3', '1.mp3', '2.mp3', '3.mp3', '4.mp3', '5.mp3', '6.mp3', '7.mp3', '8.mp3', '9.mp3', '10.mp3', '11.mp3', '12.mp3', '13.mp3', '14.mp3', '15.mp3', '16.mp3', '17.mp3', '18.mp3', '19.mp3', '20.mp3', '21.mp3', '22.mp3', '23.mp3', '24.mp3', '25.mp3', '26.mp3', '27.mp3', '28.mp3', '29.mp3', '30.mp3', '31.mp3', '32.mp3', '33.mp3', '34.mp3', '35.mp3', '36.mp3', '37.mp3', '38.mp3', '39.mp3', '40.mp3', '41.mp3', '42.mp3', '43.mp3', '44.mp3', '45.mp3', '46.mp3', '47.mp3', '48.mp3', '49.mp3', '50.mp3', '51.mp3', '52.mp3', '53.mp3', '54.mp3', '55.mp3', '56.mp3', '57.mp3', '58.mp3', '59.mp3', '60.mp3', '61.mp3', '62.mp3', '63.mp3', '64.mp3', '65.mp3', '66.mp3', '67.mp3', '68.mp3', '69.mp3', '70.mp3', '71.mp3', '72.mp3', '73.mp3', '74.mp3', '75.mp3', '76.mp3', '77.mp3', '78.mp3', '79.mp3', '80.mp3', '81.mp3', '82.mp3', '83.mp3', '84.mp3', '85.mp3', '86.mp3', '87.mp3', '88.mp3', '89.mp3', '90.mp3', '91.mp3', '92.mp3', '93.mp3', '94.mp3', '95.mp3', '96.mp3', '97.mp3', '98.mp3', '99.mp3','100.mp3','1000.mp3']
		var digitInWordsAudio = ['zero', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten', 'eleven', 'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen', 'seventeen', 'eighteen', 'nineteen', 'twenty', 'twenty-one', 'twenty-two', 'twenty-three', 'twenty-four', 'twenty-five', 'twenty-six', 'twenty-seven', 'twenty-eight', 'twenty-nine', 'thirty', 'thirty-one', 'thirty-two', 'thirty-three', 'thirty-four', 'thirty-five', 'thirty-six', 'thirty-seven', 'thirty-eight', 'thirty-nine', 'forty', 'forty-one', 'forty-two', 'forty-three', 'forty-four', 'forty-five', 'forty-six', 'forty-seven', 'forty-eight', 'forty-nine', 'fifty', 'fifty-one', 'fifty-two', 'fifty-three', 'fifty-four', 'fifty-five', 'fifty-six', 'fifty-seven', 'fifty-eight', 'fifty-nine', 'sixty', 'sixty-one', 'sixty-two', 'sixty-three', 'sixty-four', 'sixty-five', 'sixty-six', 'sixty-seven', 'sixty-eight', 'sixty-nine', 'seventy', 'seventy-one', 'seventy-two', 'seventy-three', 'seventy-four', 'seventy-five', 'seventy-six', 'seventy-seven', 'seventy-eight', 'seventy-nine', 'eighty', 'eighty-one', 'eighty-two', 'eighty-three', 'eighty-four', 'eighty-five', 'eighty-six', 'eighty-seven', 'eighty-eight', 'eighty-nine', 'ninety', 'ninety-one', 'ninety-two', 'ninety-three', 'ninety-four', 'ninety-five', 'ninety-six', 'ninety-seven', 'ninety-eight', 'ninety-nine', 'hundred'];

		var boardRandom = [["0","white"], ["1", "black"], ["2", "white"], ["3", "black"], ["4", "black"], ["5", "black"]];

		var teachers = ["l", "r"];
		var teachersObjects = ["teacher1"];

		var objectRandom = ["0.svg", "1.svg", "2.svg","3.svg","4.svg","5.svg","6.svg","7.svg","8.svg","9.svg","10.svg","11.svg"];

		// var greetings = ["Hello","Hey","Hi","Good Day","Greetings","Welcome","Howdy"];
		// var greetingsSound = ["Hello","Hey","Hi","Good Day","Greetings","Welcome","Howdy"];
		var greetings = ["Hello","Hey","Hi","Welcome"];
		var greetingsSound = ["Hello","Hey","Hi","Welcome"];

		var greetings2ndPart = ["Learner","Candidate","Student","Kid"];

		var gettingStarted = ["Are You Excited To Learn with Fun?","Are You Excited?"];
		var gettingStarted2ndPart = ["Let's Start!","Shall We Start?","Let's Start Learning!","Let's Start Learning with Fun!","Let's Learn!"];

		var learningStringsQuestioningFirstPart = ["Can You","How Do You","Today, We will learn How to","Do You Know how to"];
		var learningStringsQuestioningLastPart = ["Write","Count","Read","Add","Multiply","Substract","Divide"];
	
		var repeatArray = ["Let's Repeat One More Time with more Difference in Digits this Time!","Let's Repeat Again with Difference!","Let's Repeat once Again!","Repeat After Me, One More Time!","Let's Do this Again One More Time with more Difference this Time!","Let's Do this Again One More Time!"];
		var repeatText = repeatArray[parseInt(Math.random() * repeatArray.length)];
		var firstText = "";
		
		var byeText = ["Thank You for watching","Thanks For Watching the video","Thank You and Good Bye","Good Bye","Thank You and Take Care","See You Again the Next time","Thanks and Bye Bye"];


		//fruits mapping
		var fruitsNames = ["apple","orange"];

		var digitColors = ["white"];
		var digitColorsAlt = ["black"];

		// dynamic folders arrays...

		var helloFolder = "assets/objects/";
		var fruitsSvgs = "assets/objects/fruits/";
		var byeFolder = "assets/objects/";
		var bgFolder = "assets/background/";
		var objectsRandom = "assets/objects/objectsRandom/";
		var introFolder = "assets/objects/";
		var teacherFolder = "assets/images/";
		
		var digitsFolder = "assets/digits/";

		var ext = "";
		var fruitsSvgsExt = ".svg";
		var teacherExt = ".gif";
		var gifSetterUrl = "AUNL.gif";
		var gifSetterUrl2 = "AUNL.gif";
		var gifSetterUrl3 = "AUNL.gif";

		var getBoard = boardRandom[parseInt(Math.random() * boardRandom.length)];

		var digitColor = "";
		var deadLock = 0;

		var finalFrameSet = 1000000000;
		var finalFrameSet2 = 1000000000;
		var finalFrameSet3 = 1000000000;

		var subDurationMin = 0;

		// jQuery...
		$(document).ready(function(){			
			$("#helloIcon").attr("src",helloFolder+helloObjs[parseInt(Math.random() * helloObjs.length)]+ext);
			$("#byeIcon").attr("src",byeFolder+byeObjs[parseInt(Math.random() * byeObjs.length)]+ext);
			$("#bg1Icon").css("background","url('"+bgFolder+bgObjs[parseInt(Math.random() * bgObjs.length)]+ext+"')");
			$("#bg2Icon").css("background","url('"+bgFolder+bgObjs[parseInt(Math.random() * bgObjs.length)]+ext+"')");
			$("#bg3Icon").css("background","url('"+bgFolder+bgObjs[parseInt(Math.random() * bgObjs.length)]+ext+"')");
			$("#bg1Icon,#bg2Icon,#bg3Icon").css("background-size","100% 100%");
			$("#bg1Icon,#bg2Icon,#bg3Icon").css("background-repeat","no-repeat");
			$("#bg1Icon,#bg2Icon,#bg3Icon").css("background-position","top left");
			$(".contentText").css("background","url('assets/objects/boards/"+getBoard[0]+".png')");
			
			$(".timeline-controls-demo .pause").click(function(){
				$("*").css("animation-play-state","paused");
			});

			$(".timeline-controls-demo .play").click(function(){
				$("*").css("animation-play-state","running");
			});
		})
		
		// JS...		
		function generateVideo(dgt,sign,type)
		{		
			type = type;
			var type2 = type;
			
			// Set Parameters - First Step...
			
			if(type.toLowerCase().includes("compare") && type.toLowerCase().includes("order"))
			{			
				type2 = "cgf3";
				type = "read and understand ordering numbers (greater than and less than)";
				subDuration3 = 7000;
				subDuration2 += 15000;
				subDuration4 = -7000;
				deadLock = 1;

				gifSetterUrl = "GTLT1.webp";
				gifSetterUrl2 = "GTLT2.webp";
				gifSetterUrl3 = "GTLT3.webp";

				subDurationMin = 42000;

				finalFrameSet = 10000;
				finalFrameSet2 = 23000;
			}

			else if(type.toLowerCase().includes("picture") && type.toLowerCase().includes("graph"))
			{			
				type2 = "cgf3";
				type = "read and understand picture graph";
				subDuration3 = 7000;
				subDuration2 += 15000;
				subDuration4 = -7000;
				deadLock = 1;

				gifSetterUrl = "picGraph1.webp";
				gifSetterUrl2 = "picGraph2.webp";
				gifSetterUrl3 = "picGraph3.webp";

				subDurationMin = 42000;

				finalFrameSet = 10000;
				finalFrameSet2 = 23000;
			}

			else if(type.toLowerCase().includes("geometry") && type.toLowerCase().includes("perimeter"))
			{			
				type2 = "cgf2";
				type = "read and understand perimeter";
				subDuration3 = 7000;
				subDuration2 += 15000;
				subDuration4 = -7000;
				deadLock = 1;

				gifSetterUrl = "perSq.webp";
				gifSetterUrl2 = "perRec.webp";

				subDurationMin = 32000;

				finalFrameSet = 11000;
			}

			else if(type.toLowerCase().includes("geometry") && type.toLowerCase().includes("diameter"))
			{			
				type2 = "cgf3";
				type = "read and understand radius and diameter of a circle";
				subDuration3 = 7000;
				subDuration2 += 15000;
				subDuration4 = -7000;
				deadLock = 1;

				gifSetterUrl = "radDia.webp";
				gifSetterUrl2 = "radDia2.webp";
				gifSetterUrl3 = "radDia3.webp";

				subDurationMin = 42000;

				finalFrameSet = 10000;
				finalFrameSet2 = 23000;
			}

			else if(type.toLowerCase().includes("geometry") && type.toLowerCase().includes("radius"))
			{			
				type2 = "cgf3";
				type = "read and understand radius and diameter of a circle";
				subDuration3 = 7000;
				subDuration2 += 15000;
				subDuration4 = -7000;
				deadLock = 1;

				gifSetterUrl = "radDia.webp";
				gifSetterUrl2 = "radDia2.webp";
				gifSetterUrl3 = "radDia3.webp";

				subDurationMin = 42000;

				finalFrameSet = 10000;
				finalFrameSet2 = 23000;
			}

			else if(type.toLowerCase().includes("geometry") && type.toLowerCase().includes("line") && type.toLowerCase().includes("shapes"))
			{			
				type2 = "cgf3";
				type = "read and understand geometrical lines and shapes";
				subDuration3 = 7000;
				subDuration2 += 15000;
				subDuration4 = -7000;
				deadLock = 1;

				gifSetterUrl = "lineSegment.webp";
				gifSetterUrl2 = "shapes.webp";
				gifSetterUrl3 = "halfShapes.webp";

				subDurationMin = 42000;

				finalFrameSet = 10000;
				finalFrameSet2 = 23000;
			}

			else if(type.toLowerCase().includes("time"))
			{			
				type2 = "cgf3";
				type = "read and understand time from";
				subDuration3 = 7000;
				subDuration2 += 15000;
				subDuration4 = -7000;
				deadLock = 1;

				gifSetterUrl = "QPT.webp";
				gifSetterUrl2 = "amTime.webp";
				gifSetterUrl3 = "wpTime.webp";

				subDurationMin = 42000;

				finalFrameSet = 10000;
				finalFrameSet2 = 23000;
			}

			else if(type.toLowerCase().includes("volume") && type.toLowerCase().includes("capacity"))
			{			
				type2 = "cgf3";
				type = "read and understand volume from";
				subDuration3 = 7000;
				subDuration2 += 15000;
				subDuration4 = -7000;
				deadLock = 1;

				gifSetterUrl = "vc1.webp";
				gifSetterUrl2 = "vc2.webp";
				gifSetterUrl3 = "vc3.webp";

				subDurationMin = 42000;

				finalFrameSet = 10000;
				finalFrameSet2 = 23000;
			}

			else if(type.toLowerCase().includes("weight") && type.toLowerCase().includes("mass"))
			{			
				type2 = "cgf2";
				type = "read and understand weight and mass from";
				subDuration3 = 7000;
				subDuration2 += 15000;
				subDuration4 = -7000;
				deadLock = 1;

				gifSetterUrl = "mw1.webp";
				gifSetterUrl2 = "mw2.webp";

				subDurationMin = 32000;

				finalFrameSet = 11000;
			}

			else if(type.toLowerCase().includes("length") && type.toLowerCase().includes("meter"))
			{			
				type2 = "cgf3";
				type = "read and understand length (kilometers, meters, centimeters) from";
				subDuration3 = 7000;
				subDuration2 += 15000;
				subDuration4 = -7000;
				deadLock = 1;

				gifSetterUrl = "cenLen.webp";
				gifSetterUrl2 = "len1.webp";
				gifSetterUrl3 = "len2.webp";

				subDurationMin = 42000;

				finalFrameSet = 10000;
				finalFrameSet2 = 23000;
			}

			else if(type.toLowerCase().includes("subtraction") && type.toLowerCase().includes("fraction"))
			{			
				type2 = "cgf1";
				type = "read and understand substraction of fractions from";
				subDuration3 = 7000;
				subDuration2 += 15000;
				subDuration4 = -7000;
				$(".frame-8").remove();
				deadLock = 1;

				subDurationMin = 32000;

				finalFrameSet = 11000;

				gifSetterUrl = "subUFrac.webp";
				gifSetterUrl2 = "subLFrac.webp";
			}

			else if(type.toLowerCase().includes("addition") && type.toLowerCase().includes("fraction"))
			{			
				type2 = "cgf1";
				type = "read and understand addition of fractions from";
				subDuration3 = 7000;
				subDuration2 += 15000;
				subDuration4 = -7000;
				$(".frame-7,.frame-8").remove();
				deadLock = 1;

				subDurationMin = 6000;

				gifSetterUrl = "addUFrac.webp";
			}

			else if(type.toLowerCase().includes("compare") && type.toLowerCase().includes("fraction"))
			{			
				type2 = "cgf2";
				type = "read and understand comparision of fractions from";
				subDuration3 = 7000;
				subDuration2 += 15000;
				subDuration4 = -7000;
				$(".frame-8").remove();
				deadLock = 1;

				gifSetterUrl = "comFrac.webp";
				gifSetterUrl2 = "comFrac2.webp";
				
				subDurationMin = 24000;

				finalFrameSet = 10000;
			}

			else if(type.toLowerCase().includes("proper") && type.toLowerCase().includes("improper") && type.toLowerCase().includes("fraction"))
			{			
				type2 = "cgf3";
				type = "read and understand proper and improper Fraction from";
				subDuration3 = 7000;
				subDuration2 += 15000;
				subDuration4 = -7000;
				deadLock = 1;

				gifSetterUrl = "prFrac.webp";
				gifSetterUrl2 = "ipFrac.webp";
				gifSetterUrl3 = "comFrac.webp";
				
				subDurationMin = 42000;

				finalFrameSet = 10000;
				finalFrameSet2 = 23000;
			}

			else if(type.toLowerCase().includes("equivalent") && type.toLowerCase().includes("fraction"))
			{			
				type2 = "cgf3";
				type = "read and understand Equivalent Fraction from";
				subDuration3 = 7000;
				subDuration2 += 15000;
				subDuration4 = -7000;
				deadLock = 1;

				gifSetterUrl = "eqFrac.webp";
				gifSetterUrl2 = "comFrac.webp";
				gifSetterUrl3 = "comFrac2.webp";
				
				subDurationMin = 42000;

				finalFrameSet = 6000;
				finalFrameSet2 = 23000;
			}

			else if(type.toLowerCase().includes("division") && type.toLowerCase().includes("remainder"))
			{			
				type2 = "cgf3";
				type = "read and divide digits from";
				subDuration3 = 7000;
				subDuration2 += 15000;
				subDuration4 = -7000;
				deadLock = 1;

				gifSetterUrl = "bDivide.webp";
				gifSetterUrl2 = "aDivide.webp";
				gifSetterUrl3 = "wpDivide.webp";
				
				subDurationMin = 40000;

				finalFrameSet = 4000;
				finalFrameSet2 = 20000;
			}

			else if(type.toLowerCase().includes("product") && type.toLowerCase().includes("multiplication"))
			{			
				type2 = "cgf3";
				type = "read and multiply digits from";
				subDuration3 = 7000;
				subDuration2 += 15000;
				subDuration4 = -7000;
				deadLock = 1;

				gifSetterUrl = "mMul.webp";
				gifSetterUrl2 = "11Mul.webp";
				gifSetterUrl3 = "wpMul.webp";
				
				subDurationMin = 40000;

				finalFrameSet = 4000;
				finalFrameSet2 = 20000;
			}

			else if(type.toLowerCase().includes("borrow") && type.toLowerCase().includes("subtraction") || type.toLowerCase().includes("substraction"))
			{	
				type2 = "cgf3";
				type = "read and substract digits using borrow from";
				subDuration3 = 7000;
				subDuration2 += 15000;
				subDuration4 = -7000;
				deadLock = 1;

				gifSetterUrl = "subBorrow.webp";
				gifSetterUrl2 = "subBorrow2.webp";
				gifSetterUrl3 = "wpSub.webp";
				
				subDurationMin = 38000;

				finalFrameSet = 3500;
				finalFrameSet2 = 23000;
			}

			else if(type.toLowerCase().includes("addition") && type.toLowerCase().includes("carry"))
			{		
				type2 = "cgf3";
				type = "read and add digits using carry from";
				subDuration3 = 7000;
				subDuration2 += 15000;
				subDuration4 = -7000;
				deadLock = 1;

				gifSetterUrl = "addCarry.webp";
				gifSetterUrl2 = "addCarry3.webp";
				gifSetterUrl3 = "wpAdd.webp";
				
				subDurationMin = 1000;

				finalFrameSet = 16500;
				finalFrameSet2 = 8000;
			}

			else if(type.toLowerCase().includes("number") && type.toLowerCase().includes("line") && type.toLowerCase().includes("addition"))
			{		
				type2 = "aunl";
				type = "count and add numbers using number line from";
				subDuration3 = 7000;
				subDuration2 += 15000;
				subDuration4 = -7000;
				$(".frame-7,.frame-8").remove();
				deadLock = 1;
			}

			else if(type.toLowerCase().includes("number") && type.toLowerCase().includes("line") && !type.toLowerCase().includes("addition"))
			{		
				type2 = "aunl";
				type = "read and count numbers using number line from";
				subDuration3 = 7000;
				subDuration2 += 15000;
				subDuration4 = -7000;
				$(".frame-7,.frame-8").remove();
				deadLock = 1;
			}

			else if(type.toLowerCase().includes("place") && type.toLowerCase().includes("value") && type.toLowerCase().includes("hundred"))
			{		
				type2 = "cgf1";
				type = "read and count numbers using place values (hundreds, tens, ones) from";
				subDuration3 = 7000;
				subDuration2 += 15000;
				subDuration4 = -7000;
				$(".frame-7,.frame-8").remove();
				deadLock = 1;
				gifSetterUrl = "placeValuestHundreds2.webp";
			}

			else if(type.toLowerCase().includes("place") && type.toLowerCase().includes("value") && type.toLowerCase().includes("ten"))
			{		
				type2 = "cgf1";
				type = "read and count numbers using place values (tens, ones) from";
				subDuration3 = 7000;
				subDuration2 += 15000;
				subDuration4 = -7000;
				$(".frame-7,.frame-8").remove();
				deadLock = 1;

				gifSetterUrl = "placeValuestTens.webp";
			}
			
			else if(type.toLowerCase().includes("number") && type.toLowerCase().includes("roman"))
			{		
				type2 = "rnum1to100";
				type = "read and count roman numbers from";
				subDuration3 = 7000;
				subDuration2 += 25000;
				subDuration4 = -7000;
				$(".frame-7,.frame-8").remove();
				finalFrameSet = 16500;
				finalFrameSet2 = 8000;
				deadLock = 1;
			}

			else if(type.toLowerCase().includes("desc"))
			{		
				type2 = "Desc";
				type = "write and count numbers in Descending order from";
				$(".frame-7,.frame-8").remove();
			}
			
			else if(type.toLowerCase().includes("asc"))
			{				
				type2 = "Asc";
				type = "write and count numbers in Ascending order from";
				$(".frame-7,.frame-8").remove();
			}

			else if(type.toLowerCase().includes("increase"))
			{				
				type2 = "Asc";
				type = "write and count numbers in Increasing order from";
				$(".frame-7,.frame-8").remove();
			}
			
			else if(type.toLowerCase().includes("decrease"))
			{				
				type2 = "Desc";
				type = "write and count numbers in Decreasing order from";
				$(".frame-7,.frame-8").remove();
			}	
			
			else if(type.toLowerCase().includes("match"))
			{		
				var additionalScript;
				if(type.toLowerCase().includes("object"))
				{
					additionalScript = " with objects ";
				}
				if(type.toLowerCase().includes("name"))
				{
					additionalScript = " with name in words ";
				}
				subDuration3 = 7000;
				type2 = "Count";	
				type = "count and match the numbers"+additionalScript+"from";
				$(".frame-7,.frame-8").remove();
			}			
			
			else if(type.toLowerCase().includes("odd"))
			{			
				type2 = "odd";	
				type = "Read and Count Odd Numbers from";
				firstText = "Always Remember! Odd numbers are not divisible by Number 2 and can have remainders! ";
				$(".frame-7,.frame-8").remove();
			}

			else if(type.toLowerCase().includes("even"))
			{			
				type2 = "even";	
				type = "Read and Count Even Numbers from";
				firstText = "Always Remember! Even numbers are divisible by Number 2 without remainders!";
				$(".frame-7,.frame-8").remove();
			}

			else if(type.toLowerCase().includes("forward"))
			{		
				type2 = "asc";
				type = "write and count numbers in Forward from";
			}

			else if(type.toLowerCase().includes("backward") || type.toLowerCase().includes("back"))
			{		
				type2 = "desc";
				type = "write and count numbers in Backwards from";
			}

			else if(type.toLowerCase().includes("place") && type.toLowerCase().includes("value"))
			{			
				type2 = "count";	
				type = "Read and Understand Place Values of Numbers from";
				subDuration += 0;
				subDuration2 += 17000;
				firstText = "Place value can be defined as the value represented by a digit in a number on the basis of its position in the number.";
				//secondText = " In '157', 1 is in Hundreds place and its place value is 100. 5 is in Tens place and its place value is 50, 7 is in Ones place and its place value is 7.";
				secondText = "Here place values! H means Hundreds! T means tens! O means Ones. Lets Count and Understand Place Value now! ";
				$(".frame-7,.frame-8").remove();
			}

			else if(type.toLowerCase().includes("count") && type.toLowerCase().includes("object"))
			{		
				type2 = "addition counting objects";
				type = "learn addition using counting objects from";
				$(".frame-7,.frame-8").remove();
			}

			else if(type.toLowerCase().includes('card') && type.toLowerCase().includes('ord'))
			{
				type3 = "cardinal and ordinal";			
				type2 = "Count";	
				type = "Read and learn Cardinal and ordinal numbers from";
				$(".frame-7,.frame-8").remove();
				subDuration += 5000;
				subDuration2 += 19000;
				subDuration3 = 7000;
			}

			else if(type.toLowerCase().includes('between') && type.toLowerCase().includes('after') && type.toLowerCase().includes('before'))
			{
				type3 = "before, between and after";			
				type2 = "ascend";	
				type = "read and understand before, between and after numbers (in digits) from";
				$(".frame-7,.frame-8").remove();
				subDuration += 3000;
				subDuration2 += 19000;
				subDuration4 = -7000;
			}
				
			else if(type.toLowerCase().includes('bigger') && type.toLowerCase().includes('smaller') && type.toLowerCase().includes('less') && type.toLowerCase().includes('more'))
			{
				type3 = "bigger, smaller, less than and more than";			
				type2 = "ascend";	
				type = "read and understand bigger, smaller, less than and more than in numbers from";
				$(".frame-7,.frame-8").remove();
				subDuration += 3000;
				subDuration2 += 22000;
				subDuration4 = -7000;
			}	

            else if (sign.toLowerCase().includes("add") || sign.toLowerCase().includes("plus")) {				
				subDuration3 = 7000;
				subDuration2 += 15000;
				subDuration4 = -7000;
				type2 = "Count";	
				type3 = "add";
				type = "Count and Add numbers from";
				$(".frame-7,.frame-8").remove();
            }

			else if (sign.toLowerCase().includes("sub") || sign.toLowerCase().includes("minus")) {				
				subDuration3 = 7000;
				subDuration2 += 15000;
				subDuration4 = -7000;
				type2 = "Count";	
				type = "Count and Substract numbers from";
				$(".frame-7,.frame-8").remove();
			}
			
			else if(type.toLowerCase().includes("count"))
			{			
				subDuration3 = 7000;
				type2 = "Count";	
				type = "Read and count numbers from";
				$(".frame-7,.frame-8").remove();
			}	
			
			else
			{			
				subDuration3 = 7000;
				type2 = "Count";	
				type = "Read and count numbers from";
				$(".frame-7,.frame-8").remove();
			}	
			
			// if(type.includes('card') || type.includes('Card'))
			// {
			// 	type3 = "cardinal ";			
			// 	type2 = "Count";	
			// 	type = "Read and learn Cardinal numbers from";
			// 	//$(".frame-6").remove;
			// 	subDuration += 5000;
			// 	subDuration2 += 10000;
			// 	subDuration3 = 7000;
			// 	$(".frame-6").remove();
			// }	
			
			// if(type.includes('ord')|| type.includes('ord'))
			// {
			// 	type3 = "ordinal ";			
			// 	type2 = "Count";	
			// 	type = "Read and learn ordinal numbers from";
			// 	//$(".frame-6").remove;
			// 	subDuration += 5000;
			// 	subDuration2 += 10000;
			// 	subDuration3 = 7000;
			// 	$(".frame-6").remove();
			// }	
			// else
			// {
			// 	type2 = "Count";
			// 	type = type2 + " and Learn Digits from";
			// }
			
			$(document).ready(function(){	

				$(".contentText").css("background","url('assets/objects/boards/"+getBoard[0]+".png') top left");
				$(".contentText").css("background-attachment","scroll");
				$(".contentText").css("background-repeat","no-repeat");
				$(".contentText").css("background-size","100% 100%");

				if(teachers[parseInt(Math.random() * teachers.length)]=='l')
				{
					$("#teacherLeft").attr("src",teacherFolder+teachersObjects[parseInt(Math.random() * teachersObjects.length)]+"l"+teacherExt);
					$("#teacherRight").hide();
					$("#teacherRight").remove();
				}
				else
				{					
					$("#teacherRight").attr("src",teacherFolder+teachersObjects[parseInt(Math.random() * teachersObjects.length)]+"r"+teacherExt);
					$("#teacherLeft").hide();
					$("#teacherLeft").remove();
				}
				
				var greet1 = greetings[parseInt(Math.random() * greetings.length)];
				var greet2 = greetings2ndPart[parseInt(Math.random() * greetings2ndPart.length)];
				var getting1 = gettingStarted[parseInt(Math.random() * gettingStarted.length)];
				var getting2 = gettingStarted2ndPart[parseInt(Math.random() * gettingStarted2ndPart.length)];
				var learn1 = learningStringsQuestioningFirstPart[parseInt(Math.random() * learningStringsQuestioningFirstPart.length)];
				var fruitLasts = fruitsNames[parseInt(Math.random() * fruitsNames.length)];
				var fruitLast = fruitsSvgs+fruitLasts;
			
				$("#audioIntro,#audioIntro source").attr("src","http://translate.google.com/translate_tts?ie=UTF-8&q="+"Welcome to iParhai!"+"&tl=en&total=1&idx=0&prev=input&client=tw-ob");

				$("#audioIntro2,#audioIntro2 source").attr("src","http://translate.google.com/translate_tts?ie=UTF-8&q="+"Watch The Video!"+"&tl=en&total=1&idx=0&prev=input&client=tw-ob");

				$("#audioIntro3,#audioIntro3 source").attr("src","http://translate.google.com/translate_tts?ie=UTF-8&q="+greet1+" "+greet2 + "!!! " + getting1 +"&tl=en&total=1&idx=0&prev=input&client=tw-ob");

				$(".frame-1").html(greet1+" "+greet2+"!<br>"+getting1);
				
				$(".frame-2").html(getting2+"<br>");
				
				$("#audioIntro4,#audioIntro4 source").attr("src","http://translate.google.com/translate_tts?ie=UTF-8&q="+getting2+"&tl=en&total=1&idx=0&prev=input&client=tw-ob");

				$("#audioIntro5,#audioIntro5 source").attr("src","http://translate.google.com/translate_tts?ie=UTF-8&q="+learn1+" "+type+" "+dgt+"?"+"&tl=en&total=1&idx=0&prev=input&client=tw-ob");

				$("#audioIntro6,#audioIntro6 source").attr("src","http://translate.google.com/translate_tts?ie=UTF-8&q="+dgt+"! is equals to "+dgt+" "+fruitLasts+"?"+"&tl=en&total=1&idx=0&prev=input&client=tw-ob");

				$("#audioIntro7,#audioIntro7 source").attr("src","http://translate.google.com/translate_tts?ie=UTF-8&q="+"What Did You Learn from this video?"+"&tl=en&total=1&idx=0&prev=input&client=tw-ob");

				$("#audioIntro8,#audioIntro8 source").attr("src","http://translate.google.com/translate_tts?ie=UTF-8&q="+"You Learned How To"+type+" "+dgt+"!&tl=en&total=1&idx=0&prev=input&client=tw-ob");
				
				$("#audioIntro9,#audioIntro9 source").attr("src","http://translate.google.com/translate_tts?ie=UTF-8&q="+"Hope You Understand the lesson!"+"!&tl=en&total=1&idx=0&prev=input&client=tw-ob");
				
				$("#audioIntro10,#audioIntro10 source").attr("src","http://translate.google.com/translate_tts?ie=UTF-8&q="+byeText[parseInt(Math.random() * byeText.length)]+" "+greet2+"!&tl=en&total=1&idx=0&prev=input&client=tw-ob");

				$(".frame-3").html(learn1+" "+type+" "+dgt+"?");

				var fgt = dgt.toString();
				var dgtLength = fgt.length;
				var arrayOfFgt = "";

				var concatDgt="";
				var concatDgts="";
				var allDigits=[];
				var allDigits2=[];
				var allDigitsWords=[];
				var allDigitsWords2=[];

				if(dgt>2)
				{
					$("#placeValue").css("margin-left","2px");
					$("#placeValue2").css("margin-left","0px");
					$("#placeValue2").css("width","48.5%");
				}

				if(fgt.includes("-"))
				{		
					arrayOfFgt = fgt.split("-");
					concatDgts += "<img src='"+digitsFolder+digitObjs[arrayOfFgt[0]]+digitColor+".svg' width='30%' height='30%' />";
					concatDgts += "<br><span style='font-size: 24px;'> To </span><br>";
					concatDgts += "<img src='"+digitsFolder+digitObjs[arrayOfFgt[1]]+digitColor+".svg' width='30%' height='30%' />";

					if(arrayOfFgt[0].length>2)
					{
						$("#placeValue").css("margin-left","2px");
						$("#placeValue2").css("margin-left","0px");
						$("#placeValue2").css("width","48.5%");
					}

					$("#digitFirstFrame").css("margin","0% 20%");
					$("#digitFirstFrame").css("margin-top","-3%");
					$("#digitFirstFrame").css("width","60%");
					$("#digitFirstFrame").css("text-align","left");

					var counterLoop = 1;
					var counterLoop2 = 1;
                    
					if (type2=="descending" || type2=="Descending" || type2=="Descend" || type2=="Descends" || type2=="descend" || type2=="descends" || type2=="Desc" || type2=="desc" || type2=="Des" || type2=="des")
					{                  
						for(var fh = arrayOfFgt[0]; fh > arrayOfFgt[1]; fh--)
						{
							allDigits.push(fh+"!");
							if(counterLoop < 5)
							{
								allDigitsWords.push(numberToEnglish(fh).split('').join('! ')+" "+fh+" ");
							}
							
							maxDurat = 700 * arrayOfFgt[1];
							concatDgt = "";
							//concatDgt = "<img src='"+digitsFolder+digitObjs[fh]+digitColor+".svg' width='25%' height='25%' />";
							for(var f = 0; f < (fh.toString()).length; f++)
							{
								//alert(digitsFolder+digitObjs[fh.toString()[f]]+digitColor);
								if(f>0)
									concatDgt += "<img src='"+digitsFolder+digitObjs[fh.toString()[f]]+digitColor+".svg' width='12.5%' height='12.5%' style='margin-left:-10px;' />";
								else
									concatDgt += "<img src='"+digitsFolder+digitObjs[fh.toString()[f]]+digitColor+".svg' width='12.5%' height='12.5%' />";
							}
							if(fh>0)
								$("#digitFirstFrame").html($("#digitFirstFrame").html()+"<span style='text-transform:capitalize; font-size: 14px; line-height:10%; width:50%; float:left; display:block;'><span class='animate'>"+concatDgt+"</span>"+"<span class='animates1 negateMargins1'><img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+fh+fruitsSvgsExt+"' width='30%' height='30%' /></span> "+numberToEnglish(fh)+" </span>");
							else
								$("#digitFirstFrame").html("<span style='text-transform:capitalize;font-size: 14px; line-height:10%; width:50%; float:left; display:block;' class='animate negateMargin'>"+concatDgt+"<span class='animates1 negateMargins1'><img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+fh+fruitsSvgsExt+"' width='30%' height='30%' /></span> "+numberToEnglish(fh)+" </span>");
							counterLoop++;
						}
						            
						var randomVal = parseInt(Math.random() * 3);

						if(randomVal<=1)
						{
							randomVal = 2;
						}
						for(var fh = parseInt(arrayOfFgt[0]); fh > parseInt(arrayOfFgt[1]); fh-=randomVal)
						{
							allDigits2.push(fh+"!");
							if(counterLoop2 < 5)
							{
								allDigitsWords2.push(numberToEnglish(fh).split('').join('! ')+" "+fh+" ");
							}
							
							maxDurat = 700 * arrayOfFgt[1];
							concatDgt2 = "";
							//concatDgt = "<img src='"+digitsFolder+digitObjs[fh]+digitColor+".svg' width='25%' height='25%' />";
							for(var f = 0; f < (fh.toString()).length; f++)
							{
								//alert(digitsFolder+digitObjs[fh.toString()[f]]+digitColor);
								if(f>0)
									concatDgt2 += "<img src='"+digitsFolder+digitObjs[fh.toString()[f]]+digitColor+".svg' width='12.5%' height='12.5%' style='margin-left:-10px;' />";
								else
									concatDgt2 += "<img src='"+digitsFolder+digitObjs[fh.toString()[f]]+digitColor+".svg' width='12.5%' height='12.5%' />";
							}
							if(fh>0)
								$(".frame-6").html($(".frame-6").html()+"<span style='text-transform:capitalize; font-size: 14px; line-height:10%; width:50%; float:left; display:block;'><span class='animate'>"+concatDgt2+"</span>"+"<span class='animates1 negateMargins1'><img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+fh+fruitsSvgsExt+"' width='30%' height='30%' /></span> "+numberToEnglish(fh)+" </span>");
							else
								$(".frame-6").html("<span style='text-transform:capitalize;font-size: 14px; line-height:10%; width:50%; float:left; display:block;' class='animate negateMargin'>"+concatDgt2+"<span class='animates1 negateMargins1'><img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+fh+fruitsSvgsExt+"' width='30%' height='30%' /></span> "+numberToEnglish(fh)+" </span>");
							counterLoop2++;
						}
					}
					
					if(type2=="ascending" || type2=="Ascending" || type2=="Ascend" || type2=="Ascends" || type2=="ascend" || type2=="ascends" || type2=="Asc" || type2=="asc")
					{       
						if(type3.toLowerCase()=="before, between and after")
						{
							repeatText = "You learned how to read digits. Now, lets remember once again and see what come before, between and after the each digit.";
						}
						
						if(type3.toLowerCase()=="bigger, smaller, less than and more than")
						{
							repeatText = "You learned how to read digits. Now, lets remember once again and see which digit is bigger, smaller, less than and more than the other digit.";
						}        
						for(var fh = arrayOfFgt[0]; fh <= arrayOfFgt[1]; fh++)
						{
							allDigits.push(fh+"!");
							if(counterLoop < 5)
							{
								allDigitsWords.push(numberToEnglish(fh).split('').join('! ')+" "+fh+" ");
							}
							
							maxDurat = 700 * arrayOfFgt[1];
							concatDgt = "";
							//concatDgt = "<img src='"+digitsFolder+digitObjs[fh]+digitColor+".svg' width='25%' height='25%' />";
							for(var f = 0; f < (fh.toString()).length; f++)
							{
								//alert(digitsFolder+digitObjs[fh.toString()[f]]+digitColor);
								if(f>0)
									concatDgt += "<img src='"+digitsFolder+digitObjs[fh.toString()[f]]+digitColor+".svg' width='12.5%' height='12.5%' style='margin-left:-10px;' />";
								else
									concatDgt += "<img src='"+digitsFolder+digitObjs[fh.toString()[f]]+digitColor+".svg' width='12.5%' height='12.5%' />";
							}
							if(fh>0)
								$("#digitFirstFrame").html($("#digitFirstFrame").html()+"<span style='text-transform:capitalize; font-size: 14px; line-height:10%; width:50%; float:left; display:block;'><span class='animate'>"+concatDgt+"</span>"+"<span class='animates1 negateMargins1'><img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+fh+fruitsSvgsExt+"' width='30%' height='30%' /></span> "+numberToEnglish(fh)+" </span>");
							else
								$("#digitFirstFrame").html("<span style='text-transform:capitalize;font-size: 14px; line-height:10%; width:50%; float:left; display:block;' class='animate negateMargin'>"+concatDgt+"<span class='animates1 negateMargins1'><img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+fh+fruitsSvgsExt+"' width='30%' height='30%' /></span> "+numberToEnglish(fh)+" </span>");
							counterLoop++;
						}   
						            
						var randomVal = parseInt(Math.random() * 3);

						if(randomVal<=1)
						{
							randomVal = 2;
						}
						
						var counterLoop2 = 1;
						var lastVal = "";

						for(var fh = parseInt(arrayOfFgt[0]); fh <= parseInt(arrayOfFgt[1]); fh+=randomVal)
						{							
							if(type3.toLowerCase()=="before, between and after")
							{
								if(counterLoop2 == 1)
								{
									allDigits2.push(fh+' Comes before '+" "+(parseInt(fh)+randomVal)+" ");
								}
								if(counterLoop2 == 2)
								{
									allDigits2.push(fh+' Comes between '+" "+(parseInt(fh)-randomVal)+" and "+(parseInt(fh)+randomVal)+" ");
								}
								if(counterLoop2 == 3)
								{									
									allDigits2.push(fh+' Comes after '+" "+(parseInt(fh)-randomVal)+"! ");
								}
							}
							if(type3.toLowerCase()=="bigger, smaller, less than and more than")
							{
								if(counterLoop2 == 1)
								{
									allDigits2.push(fh+' is smaller and less than '+" "+(parseInt(fh)+randomVal)+" ");
								}
								if(counterLoop2 == 2)
								{
									allDigits2.push(fh+' is bigger and more than '+" "+(parseInt(fh)-randomVal)+" and less than "+(parseInt(fh)+randomVal)+" ");
								}
								if(counterLoop2 == 3)
								{									
									allDigits2.push(fh+' is more than '+" "+(parseInt(fh)-randomVal)+"! ");
								}
							}
							else
							{
								allDigits2.push(fh+"!");
								if(counterLoop2 < 5)
								{
									allDigitsWords2.push(numberToEnglish(fh).split('').join('! ')+" "+fh+" ");
								}
							}
							
							maxDurat = 700 * arrayOfFgt[1];
							concatDgt2 = "";
							//concatDgt = "<img src='"+digitsFolder+digitObjs[fh]+digitColor+".svg' width='25%' height='25%' />";
							for(var f = 0; f < (fh.toString()).length; f++)
							{
								//alert(digitsFolder+digitObjs[fh.toString()[f]]+digitColor);
								if(f>0)
									{concatDgt2 += "<img src='"+digitsFolder+digitObjs[fh.toString()[f]]+digitColor+".svg' width='12.5%' height='12.5%' style='margin-left:-10px;' />";}
								else
									{concatDgt2 += "<img src='"+digitsFolder+digitObjs[fh.toString()[f]]+digitColor+".svg' width='12.5%' height='12.5%' />";}
							}
							if(fh>0)
								{$(".frame-6").html($(".frame-6").html()+"<span style='text-transform:capitalize; font-size: 14px; line-height:10%; width:50%; float:left; display:block;'><span class='animate'>"+concatDgt2+"</span>"+"<span class='animates1 negateMargins1'><img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+fh+fruitsSvgsExt+"' width='30%' height='30%' /></span> "+numberToEnglish(fh)+" </span>");}
							else
								{$(".frame-6").html("<span style='text-transform:capitalize;font-size: 14px; line-height:10%; width:50%; float:left; display:block;' class='animate negateMargin'>"+concatDgt2+"<span class='animates1 negateMargins1'><img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+fh+fruitsSvgsExt+"' width='30%' height='30%' /></span> "+numberToEnglish(fh)+" </span>");}
							counterLoop2++;
						}
					}

					if(type2.toLowerCase()=="count")
					{		
						if(type3.toLowerCase().includes("cardinal") || type3.toLowerCase().includes("cardinals") || type3.toLowerCase().includes("cardin") || type3.toLowerCase().includes("card"))
						{
							lastAudio6Chunk = ". Lets Start with Cardinal Numbers.";
							$("#digitFirstFrame").html("<span style='width: 100%; font-size: 20px; text-align: center; float:left; display: inline-block;'>Cardinal Numbers:</span>");
						}
						if(type3.includes("ordinal") || type3.includes("ordinals") || type3.includes("ordin") || type3.includes("ord"))
						{
							repeatText = "Now, The Ordinal Numbers. ";
							$(".frame-6").html("<span style='width: 100%; font-size: 20px; text-align: center; float:left; display: inline-block;'>Ordinal Numbers!!!</span>");
						}
						else
						{		
							repeatText = "";					
						}
						
						subDuration += 10000;		            
						for(var fh = arrayOfFgt[0]; fh <= arrayOfFgt[1]; fh++)
						{
							allDigits.push(fh+"!");
							if(counterLoop < 5)
							{
								allDigitsWords.push(numberToEnglish(fh).split('').join('! ')+" "+fh+" ");
							}
							
							maxDurat = 500 * arrayOfFgt[1];
							concatDgt = "";
							//concatDgt = "<img src='"+digitsFolder+digitObjs[fh]+digitColor+".svg' width='25%' height='25%' />";
							for(var f = 0; f < (fh.toString()).length; f++)
							{
								//alert(digitsFolder+digitObjs[fh.toString()[f]]+digitColor);
								if(f>0)
									{
										concatDgt += "<img src='"+digitsFolder+digitObjs[fh.toString()[f]]+digitColor+".svg' width='12.5%' height='12.5%' style='margin-left:-10px;' />";}
								else
									{
										concatDgt += "<img src='"+digitsFolder+digitObjs[fh.toString()[f]]+digitColor+".svg' width='12.5%' height='12.5%' />";}
							}
							//for ordinal
							if(type3.includes("cardinal") || type3.includes("cardinals") || type3.includes("cardin") || type3.includes("card"))
								{$("#digitFirstFrame").html($("#digitFirstFrame").html()+"<span style='text-transform:capitalize; font-size: 14px; line-height:10%; width:50%; float:left; display:block;'><span class='animate'>"+concatDgt+"</span>"+"<span class='animates1 negateMargins1'><img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+fh+fruitsSvgsExt+"' width='30%' height='30%' /></span> "+numberToEnglish(fh)+" </span>");}
							if(type3.includes("ordinal") || type3.includes("ordinals") || type3.includes("ordin") || type3.includes("ord"))
								{allDigits2.push(ordinal(fh)+"! ");$(".frame-6").html($(".frame-6").html()+"<span style='text-transform:capitalize; font-size: 14px; line-height:10%; width:50%; float:left; display:block;'><span class='animate'>"+concatDgt+"</span>"+"<span class='animates1 negateMargins1'><img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+fh+fruitsSvgsExt+"' width='30%' height='30%' /></span> "+ordinal(fh)+" </span>");}
							else{
								if(fh>0)
									{$("#digitFirstFrame,.frame-6").html($("#digitFirstFrame").html()+"<span style='text-transform:capitalize; font-size: 14px; line-height:10%; width:50%; float:left; display:block;'><span class='animate'>"+concatDgt+"</span>"+"<span class='animates1 negateMargins1'><img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+fh+fruitsSvgsExt+"' width='30%' height='30%' /></span> "+numberToEnglish(fh)+" </span>");}
								else
									{$("#digitFirstFrame,.frame-6").html("<span style='text-transform:capitalize;font-size: 14px; line-height:10%; width:50%; float:left; display:block;' class='animate negateMargin'>"+concatDgt+"<span class='animates1 negateMargins1'><img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+fh+fruitsSvgsExt+"' width='30%' height='30%' /></span> "+numberToEnglish(fh)+" </span>");}
							
							}
							counterLoop++;
						}

						if(type3.toLowerCase().includes("cardinal") || type3.toLowerCase().includes("cardinals") || type3.toLowerCase().includes("cardin") || type3.toLowerCase().includes("card"))
						{
							lastAudio6Chunk = ". Lets Start with Cardinal Numbers. "+allDigits;
							allDigits="";
						}
					}
					
					// Addition Using Number Line - AUNL
					
					if(type2.toLowerCase()=="aunl")
					{	
						subDuration += 10000;
						allDigits2 = "";	
						repeatText = "";
						var finalInit = "";

						if(arrayOfFgt[0] % 2 == 0)
						{
							finalInit = parseInt(arrayOfFgt[0])+parseInt(1);
						}	
						else
						{
							finalInit = parseInt(arrayOfFgt[0]);
						}	    

						for(var fh = finalInit; fh <= arrayOfFgt[1]; fh+=2)
						{
							allDigits.push(fh+"!");
							if(counterLoop < 5)
							{
								allDigitsWords.push(numberToEnglish(fh).split('').join('! ')+" "+fh+" ");
							}
							
							maxDurat = 500 * arrayOfFgt[1];
							concatDgt = "";
							//concatDgt = "<img src='"+digitsFolder+digitObjs[fh]+digitColor+".svg' width='25%' height='25%' />";
							for(var f = 0; f < (fh.toString()).length; f++)
							{
								//alert(digitsFolder+digitObjs[fh.toString()[f]]+digitColor);
								if(f>0)
									concatDgt += "<img src='"+digitsFolder+digitObjs[fh.toString()[f]]+digitColor+".svg' width='12.5%' height='12.5%' style='margin-left:-10px;' />";
								else
									concatDgt += "<img src='"+digitsFolder+digitObjs[fh.toString()[f]]+digitColor+".svg' width='12.5%' height='12.5%' />";
							}
							if(fh>0)
								$("#digitFirstFrame,.frame-6").html($("#digitFirstFrame").html()+"<span style='text-transform:capitalize; font-size: 14px; line-height:10%; width:50%; float:left; display:block;'><span class='animate'>"+concatDgt+"</span>"+"<span class='animates1 negateMargins1'><img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+fh+fruitsSvgsExt+"' width='30%' height='30%' /></span> "+numberToEnglish(fh)+" </span>");
							else
								$("#digitFirstFrame,.frame-6").html("<span style='text-transform:capitalize;font-size: 14px; line-height:10%; width:50%; float:left; display:block;' class='animate negateMargin'>"+concatDgt+"<span class='animates1 negateMargins1'><img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+fh+fruitsSvgsExt+"' width='30%' height='30%' /></span> "+numberToEnglish(fh)+" </span>");
							counterLoop++;
						}
						$("#digitFirstFrame,.frame-6").html("<img src='assets/gifs/AUNL.gif' width='100%' height='100%' style='margin-top:3%; padding: 5px;background: #fff;''>"); 
						$("#digitLastFrame2").attr('style="line-height: 30px; color: rgb(255, 255, 255); margin: -3% 7.5% 0%; width: 85%; text-align: left; animation-play-state: paused; display: block;"');
					}

					// Specified function for gif changing
					
					if(type2.toLowerCase()=="cgf1")
					{	
						subDuration += 8000 - (subDurationMin);
						allDigits2 = "";	
						repeatText = "";
						var finalInit = "";

						if(arrayOfFgt[0] % 2 == 0)
						{
							finalInit = parseInt(arrayOfFgt[0])+parseInt(1);
						}	
						else
						{
							finalInit = parseInt(arrayOfFgt[0]);
						}	    

						for(var fh = finalInit; fh <= arrayOfFgt[1]; fh+=2)
						{
							allDigits.push(fh+"!");
							if(counterLoop < 5)
							{
								allDigitsWords.push(numberToEnglish(fh).split('').join('! ')+" "+fh+" ");
							}
							
							maxDurat = 500 * arrayOfFgt[1];
							concatDgt = "";
							//concatDgt = "<img src='"+digitsFolder+digitObjs[fh]+digitColor+".svg' width='25%' height='25%' />";
							for(var f = 0; f < (fh.toString()).length; f++)
							{
								//alert(digitsFolder+digitObjs[fh.toString()[f]]+digitColor);
								if(f>0)
									concatDgt += "<img src='"+digitsFolder+digitObjs[fh.toString()[f]]+digitColor+".svg' width='12.5%' height='12.5%' style='margin-left:-10px;' />";
								else
									concatDgt += "<img src='"+digitsFolder+digitObjs[fh.toString()[f]]+digitColor+".svg' width='12.5%' height='12.5%' />";
							}
							if(fh>0)
								$("#digitFirstFrame,.frame-6").html($("#digitFirstFrame").html()+"<span style='text-transform:capitalize; font-size: 14px; line-height:10%; width:50%; float:left; display:block;'><span class='animate'>"+concatDgt+"</span>"+"<span class='animates1 negateMargins1'><img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+fh+fruitsSvgsExt+"' width='30%' height='30%' /></span> "+numberToEnglish(fh)+" </span>");
							else
								$("#digitFirstFrame,.frame-6").html("<span style='text-transform:capitalize;font-size: 14px; line-height:10%; width:50%; float:left; display:block;' class='animate negateMargin'>"+concatDgt+"<span class='animates1 negateMargins1'><img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+fh+fruitsSvgsExt+"' width='30%' height='30%' /></span> "+numberToEnglish(fh)+" </span>");
							counterLoop++;
						}
						$("#digitFirstFrame,.frame-6").html("<img src='assets/gifs/"+gifSetterUrl+"' width='100%' height='100%' style='margin-top:3%; padding: 5px;background: #fff;''>"); 
						$("#digitLastFrame2").attr('style="line-height: 30px; color: rgb(255, 255, 255); margin: -3% 7.5% 0%; width: 85%; text-align: left; animation-play-state: paused; display: block;"');
					}

					// Specified function for gif 2 changing
					
					if(type2.toLowerCase()=="cgf2")
					{	
						subDuration += 8000 - (subDurationMin);
						allDigits2 = "";	
						repeatText = "";
						var finalInit = "";

						if(arrayOfFgt[0] % 2 == 0)
						{
							finalInit = parseInt(arrayOfFgt[0])+parseInt(1);
						}	
						else
						{
							finalInit = parseInt(arrayOfFgt[0]);
						}	    

						for(var fh = finalInit; fh <= arrayOfFgt[1]; fh+=2)
						{
							allDigits.push(fh+"!");
							if(counterLoop < 5)
							{
								allDigitsWords.push(numberToEnglish(fh).split('').join('! ')+" "+fh+" ");
							}
							
							maxDurat = 500 * arrayOfFgt[1];
							concatDgt = "";
							//concatDgt = "<img src='"+digitsFolder+digitObjs[fh]+digitColor+".svg' width='25%' height='25%' />";
							for(var f = 0; f < (fh.toString()).length; f++)
							{
								//alert(digitsFolder+digitObjs[fh.toString()[f]]+digitColor);
								if(f>0)
									concatDgt += "<img src='"+digitsFolder+digitObjs[fh.toString()[f]]+digitColor+".svg' width='12.5%' height='12.5%' style='margin-left:-10px;' />";
								else
									concatDgt += "<img src='"+digitsFolder+digitObjs[fh.toString()[f]]+digitColor+".svg' width='12.5%' height='12.5%' />";
							}
							if(fh>0)
								$("#digitFirstFrame,.frame-6").html($("#digitFirstFrame").html()+"<span style='text-transform:capitalize; font-size: 14px; line-height:10%; width:50%; float:left; display:block;'><span class='animate'>"+concatDgt+"</span>"+"<span class='animates1 negateMargins1'><img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+fh+fruitsSvgsExt+"' width='30%' height='30%' /></span> "+numberToEnglish(fh)+" </span>");
							else
								$("#digitFirstFrame,.frame-6").html("<span style='text-transform:capitalize;font-size: 14px; line-height:10%; width:50%; float:left; display:block;' class='animate negateMargin'>"+concatDgt+"<span class='animates1 negateMargins1'><img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+fh+fruitsSvgsExt+"' width='30%' height='30%' /></span> "+numberToEnglish(fh)+" </span>");
							counterLoop++;
						}
						$("#digitFirstFrame,.frame-6").html("<img src='assets/gifs/"+gifSetterUrl+"' width='100%' height='100%' style='margin-top:3%; padding: 5px;background: #fff;''>"); 
						$(".frame-7").html("<img src='assets/gifs/"+gifSetterUrl2+"' width='100%' height='100%' style='margin-top:3%; padding: 5px;background: #fff;''>"); 
						$("#digitLastFrame2").attr('style="line-height: 30px; color: rgb(255, 255, 255); margin: -3% 7.5% 0%; width: 85%; text-align: left; display: block;"');
					}
					

					// Specified function for gif 3 changing
					
					if(type2.toLowerCase()=="cgf3")
					{	
						subDuration += 8000 - (subDurationMin);
						allDigits2 = "";	
						repeatText = "";
						var finalInit = "";

						if(arrayOfFgt[0] % 2 == 0)
						{
							finalInit = parseInt(arrayOfFgt[0])+parseInt(1);
						}	
						else
						{
							finalInit = parseInt(arrayOfFgt[0]);
						}	    

						for(var fh = finalInit; fh <= arrayOfFgt[1]; fh+=2)
						{
							allDigits.push(fh+"!");
							if(counterLoop < 5)
							{
								allDigitsWords.push(numberToEnglish(fh).split('').join('! ')+" "+fh+" ");
							}
							
							maxDurat = 500 * arrayOfFgt[1];
							concatDgt = "";
							//concatDgt = "<img src='"+digitsFolder+digitObjs[fh]+digitColor+".svg' width='25%' height='25%' />";
							for(var f = 0; f < (fh.toString()).length; f++)
							{
								//alert(digitsFolder+digitObjs[fh.toString()[f]]+digitColor);
								if(f>0)
									concatDgt += "<img src='"+digitsFolder+digitObjs[fh.toString()[f]]+digitColor+".svg' width='12.5%' height='12.5%' style='margin-left:-10px;' />";
								else
									concatDgt += "<img src='"+digitsFolder+digitObjs[fh.toString()[f]]+digitColor+".svg' width='12.5%' height='12.5%' />";
							}
							if(fh>0)
								$("#digitFirstFrame,.frame-6").html($("#digitFirstFrame").html()+"<span style='text-transform:capitalize; font-size: 14px; line-height:10%; width:50%; float:left; display:block;'><span class='animate'>"+concatDgt+"</span>"+"<span class='animates1 negateMargins1'><img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+fh+fruitsSvgsExt+"' width='30%' height='30%' /></span> "+numberToEnglish(fh)+" </span>");
							else
								$("#digitFirstFrame,.frame-6").html("<span style='text-transform:capitalize;font-size: 14px; line-height:10%; width:50%; float:left; display:block;' class='animate negateMargin'>"+concatDgt+"<span class='animates1 negateMargins1'><img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+fh+fruitsSvgsExt+"' width='30%' height='30%' /></span> "+numberToEnglish(fh)+" </span>");
							counterLoop++;
						}
						$("#digitFirstFrame,.frame-6").html("<img src='assets/gifs/"+gifSetterUrl+"' width='100%' height='100%' style='margin-top:3%; padding: 5px;background: #fff;''>"); 
						$(".frame-7").html("<img src='assets/gifs/"+gifSetterUrl2+"' width='100%' height='100%' style='margin-top:3%; padding: 5px;background: #fff;''>"); 
						$(".frame-8").html("<img src='assets/gifs/"+gifSetterUrl3+"' width='100%' height='100%' style='margin-top:3%; padding: 5px;background: #fff;''>"); 
						$("#digitLastFrame2").attr('style="line-height: 30px; color: rgb(255, 255, 255); margin: -3% 7.5% 0%; width: 85%; text-align: left; display: block;"');
					}

					// Roman Numbers - rnum1to100
					
					if(type2.toLowerCase()=="rnum1to100")
					{	
						subDuration += -7000;
						allDigits2 = "";	
						repeatText = "";
						var finalInit = "";

						if(arrayOfFgt[0] % 2 == 0)
						{
							finalInit = parseInt(arrayOfFgt[0])+parseInt(1);
						}	
						else
						{
							finalInit = parseInt(arrayOfFgt[0]);
						}	    

						for(var fh = finalInit; fh <= arrayOfFgt[1]; fh+=2)
						{
							allDigits.push(fh+"!");
							if(counterLoop < 5)
							{
								allDigitsWords.push(numberToEnglish(fh).split('').join('! ')+" "+fh+" ");
							}
							
							maxDurat = 500 * arrayOfFgt[1];
							concatDgt = "";
							//concatDgt = "<img src='"+digitsFolder+digitObjs[fh]+digitColor+".svg' width='25%' height='25%' />";
							for(var f = 0; f < (fh.toString()).length; f++)
							{
								//alert(digitsFolder+digitObjs[fh.toString()[f]]+digitColor);
								if(f>0)
									concatDgt += "<img src='"+digitsFolder+digitObjs[fh.toString()[f]]+digitColor+".svg' width='12.5%' height='12.5%' style='margin-left:-10px;' />";
								else
									concatDgt += "<img src='"+digitsFolder+digitObjs[fh.toString()[f]]+digitColor+".svg' width='12.5%' height='12.5%' />";
							}
							if(fh>0)
								$("#digitFirstFrame,.frame-6").html($("#digitFirstFrame").html()+"<span style='text-transform:capitalize; font-size: 14px; line-height:10%; width:50%; float:left; display:block;'><span class='animate'>"+concatDgt+"</span>"+"<span class='animates1 negateMargins1'><img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+fh+fruitsSvgsExt+"' width='30%' height='30%' /></span> "+numberToEnglish(fh)+" </span>");
							else
								$("#digitFirstFrame,.frame-6").html("<span style='text-transform:capitalize;font-size: 14px; line-height:10%; width:50%; float:left; display:block;' class='animate negateMargin'>"+concatDgt+"<span class='animates1 negateMargins1'><img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+fh+fruitsSvgsExt+"' width='30%' height='30%' /></span> "+numberToEnglish(fh)+" </span>");
							counterLoop++;
						}
						$("#digitFirstFrame,.frame-6").html("<img src='assets/gifs/BR1TO100.gif' width='100%' height='100%' style='margin-top:3%; padding: 5px;background: #fff;''>"); 
						$(".frame-7").html("<img src='assets/gifs/M1TO5.gif' width='100%' height='100%' style='margin-top:3%; padding: 5px;background: #fff;''>"); 
						$(".frame-8").html("<img src='assets/gifs/AR1TO30.gif' width='100%' height='100%' style='margin-top:3%; padding: 5px;background: #fff;''>"); 
						$("#digitLastFrame2").attr('style="line-height: 30px; color: rgb(255, 255, 255); margin: -3% 7.5% 0%; width: 85%; text-align: left; display: block;"');
					}

					//middle body of counting objects addition
					if(type3.toLowerCase().includes("counting object") || type3.toLowerCase().includes("addition using counting object") || type3.toLowerCase().includes("addition counting object") || type3.toLowerCase().includes("add"))
					{	
						var counterLoop = 0;
						var allDigits = [];
						// if(type3.includes("cardinal") || type3.includes("cardinals") || type3.includes("cardin") || type3.includes("card"))
						// 	{
						// 		lastAudio6Chunk = ". Lets Start with Cardinal Numbers.";
						// 		$("#digitFirstFrame").html("<span style='width: 100%; font-size: 20px; text-align: center; float:left; display: inline-block;'>Cardinal Numbers:</span>");
						// 	}
						// if(type3.includes("ordinal") || type3.includes("ordinals") || type3.includes("ordin") || type3.includes("ord"))
						// 	{
						// 		repeatText = "Now, The Ordinal Numbers. ";
						// 		$(".frame-6").html("<span style='width: 100%; font-size: 20px; text-align: center; float:left; display: inline-block;'>Ordinal Numbers!!!</span>");
						// 	}
						// else
						// {		
						// 	repeatText = "";					
						// }
						subDuration += 7000;
						subDuration2 += 10000;
						$("#digitFirstFrame").html("");	            
						for(var fh = arrayOfFgt[0]; fh < parseInt(arrayOfFgt[0])+20; fh++)
						{
							if(counterLoop < 3)
							{
								allDigits.push(fh+" plus "+fh+" is equals to "+(parseInt(fh)+parseInt(fh))+"! ");
								allDigitsWords.push(numberToEnglish(fh).split('').join('! ')+" "+fh+" ");
							
								maxDurat = 500 * arrayOfFgt[1];
								concatDgt = "";
								concatDgt2 = "";
								//concatDgt = "<img src='"+digitsFolder+digitObjs[fh]+digitColor+".svg' width='25%' height='25%' />";
								for(var f = 0; f < (fh.toString()).length; f++)
								{
									//alert(digitsFolder+digitObjs[fh.toString()[f]]+digitColor);
									if(f>0)
									{
										concatDgt += "<img src='"+digitsFolder+digitObjs[fh.toString()[f]]+digitColor+".svg' width='7.5%' height='7.5%' style='margin-left:-10px;' />";
										concatDgt2 += "<img src='"+digitsFolder+digitObjs[(parseInt(fh)+(parseInt(fh))).toString()[f]]+digitColor+".svg' width='7.5%' height='7.5%' style='margin-left:-10px;' />";
									}
									else
									{
										concatDgt += "<img src='"+digitsFolder+digitObjs[fh.toString()[f]]+digitColor+".svg' width='7.5%' height='7.5%' />";
										concatDgt2 += "<img src='"+digitsFolder+digitObjs[(parseInt(fh)+(parseInt(fh))).toString()[f]]+digitColor+".svg' width='7.5%' height='7.5%' />";
									}
								}
								
								$("#digitFirstFrame").html($("#digitFirstFrame").html()+"<span style='text-transform:capitalize; font-size: 14px; line-height:10%; width:50%; text-align:center; float:left; display:block;'><spanstyle='width:100%; float:left; display: inline-block; text-align: center; line-height: 75px'><span class='animate'>"+concatDgt+"</span>"+" + <span class='animate'>"+concatDgt+"</span> = "+concatDgt2+"</span>"+"<span style='width:50%; float:left; display: inline-block; text-align: center; font-size: 14px; text-transform: capitalize;' class='animates1 negateMargins1'><img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+fh+fruitsSvgsExt+"' width='10%' height='10%' /> + <img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+fh+fruitsSvgsExt+"' width='10%' height='10%' /> = "+"<img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+(parseInt(fh)+parseInt(fh))+fruitsSvgsExt+"' width='10%' height='10%' />"+" <span style='font-size: 14px; text-transform: capitalize;'>"+numberToEnglish(fh)+"</span></span> </span>");
									
								counterLoop++;
							}
							else
							{
								if(counterLoop == 10)
								{
									var randomValue = 10;
								
									for(var f = 0; f < (randomValue.toString()).length; f++)
									{
										//alert(digitsFolder+digitObjs[fh.toString()[f]]+digitColor);
										if(f>0)
										{
											concatDgt += "<img src='"+digitsFolder+digitObjs[fh.toString()[f]]+digitColor+".svg' width='7.5%' height='7.5%' style='margin-left:-10px;' />";
											concatDgt2 += "<img src='"+digitsFolder+digitObjs[(parseInt(fh)+(parseInt(fh))).toString()[f]]+digitColor+".svg' width='7.5%' height='7.5%' style='margin-left:-10px;' />";
										}
										else
										{
											concatDgt += "<img src='"+digitsFolder+digitObjs[fh.toString()[f]]+digitColor+".svg' width='7.5%' height='7.5%' />";
											concatDgt2 += "<img src='"+digitsFolder+digitObjs[(parseInt(fh)+(parseInt(fh))).toString()[f]]+digitColor+".svg' width='7.5%' height='7.5%' />";
										}
									}

									$("#digitFirstFrame").html($("#digitFirstFrame").html()+"<span style='text-transform:capitalize; font-size: 14px; line-height:10%; width:50%; text-align:center; float:left; display:block;'><spanstyle='width:100%; float:left; display: inline-block; text-align: center; line-height: 75px'><span class='animate'>"+concatDgt+"</span>"+" + <span class='animate'>"+concatDgt+"</span> = "+concatDgt2+"</span>"+"<span style='width:50%; float:left; display: inline-block; text-align: center; font-size: 14px; text-transform: capitalize;' class='animates1 negateMargins1'><img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+fh+fruitsSvgsExt+"' width='10%' height='10%' /> + <img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+fh+fruitsSvgsExt+"' width='10%' height='10%' /> = "+"<img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+(parseInt(fh)+parseInt(fh))+fruitsSvgsExt+"' width='10%' height='10%' />"+" <span style='font-size: 14px; text-transform: capitalize;'>"+numberToEnglish(fh)+"</span></span> </span>");		
								}
								counterLoop++;
							}
						}	
						if(type3.includes("cardinal") || type3.includes("cardinals") || type3.includes("cardin") || type3.includes("card"))
						{
							lastAudio6Chunk = ". Lets Start with Cardinal Numbers. "+allDigits;
							allDigits="";
						}
					}					

					if(type2=="odd" || type2=="odd Number" || type2=="odd Numbers" || type2=="odd number" || type2=="odd numbers" || type2=="Odd" || type2=="Odd Number" || type2=="Odd number" || type2=="Odd Numbers" || type2=="Odd numbers")
					{	
						subDuration += 10000;
						allDigits2 = "";	
						repeatText = "";
						var finalInit = "";

						if(arrayOfFgt[0] % 2 == 0)
						{
							finalInit = parseInt(arrayOfFgt[0])+parseInt(1);
						}	
						else
						{
							finalInit = parseInt(arrayOfFgt[0]);
						}	    

						for(var fh = finalInit; fh <= arrayOfFgt[1]; fh+=2)
						{
							allDigits.push(fh+"!");
							if(counterLoop < 5)
							{
								allDigitsWords.push(numberToEnglish(fh).split('').join('! ')+" "+fh+" ");
							}
							
							maxDurat = 500 * arrayOfFgt[1];
							concatDgt = "";
							//concatDgt = "<img src='"+digitsFolder+digitObjs[fh]+digitColor+".svg' width='25%' height='25%' />";
							for(var f = 0; f < (fh.toString()).length; f++)
							{
								//alert(digitsFolder+digitObjs[fh.toString()[f]]+digitColor);
								if(f>0)
									concatDgt += "<img src='"+digitsFolder+digitObjs[fh.toString()[f]]+digitColor+".svg' width='12.5%' height='12.5%' style='margin-left:-10px;' />";
								else
									concatDgt += "<img src='"+digitsFolder+digitObjs[fh.toString()[f]]+digitColor+".svg' width='12.5%' height='12.5%' />";
							}
							if(fh>0)
								$("#digitFirstFrame,.frame-6").html($("#digitFirstFrame").html()+"<span style='text-transform:capitalize; font-size: 14px; line-height:10%; width:50%; float:left; display:block;'><span class='animate'>"+concatDgt+"</span>"+"<span class='animates1 negateMargins1'><img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+fh+fruitsSvgsExt+"' width='30%' height='30%' /></span> "+numberToEnglish(fh)+" </span>");
							else
								$("#digitFirstFrame,.frame-6").html("<span style='text-transform:capitalize;font-size: 14px; line-height:10%; width:50%; float:left; display:block;' class='animate negateMargin'>"+concatDgt+"<span class='animates1 negateMargins1'><img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+fh+fruitsSvgsExt+"' width='30%' height='30%' /></span> "+numberToEnglish(fh)+" </span>");
							counterLoop++;
						} 
					}								

					if(type2=="even" || type2=="even Number" || type2=="even Numbers" || type2=="even number" || type2=="even numbers" || type2=="Even" || type2=="Even Number" || type2=="Even number" || type2=="Even Numbers" || type2=="Even numbers")
					{
						subDuration += 10000;
						allDigits2 = "";	
						repeatText = "";
						var finalInit = "";

						if(arrayOfFgt[0] % 2 == 0)
						{
							finalInit = parseInt(arrayOfFgt[0]);
						}	
						else
						{							
							finalInit = parseInt(arrayOfFgt[0])+parseInt(1);
						}	    

						for(var fh = finalInit; fh <= arrayOfFgt[1]; fh+=2)
						{
							allDigits.push(fh+"!");
							if(counterLoop < 5)
							{
								allDigitsWords.push(numberToEnglish(fh).split('').join('! ')+" "+fh+" ");
							}
							
							maxDurat = 500 * arrayOfFgt[1];
							concatDgt = "";
							//concatDgt = "<img src='"+digitsFolder+digitObjs[fh]+digitColor+".svg' width='25%' height='25%' />";
							for(var f = 0; f < (fh.toString()).length; f++)
							{
								//alert(digitsFolder+digitObjs[fh.toString()[f]]+digitColor);
								if(f>0)
									concatDgt += "<img src='"+digitsFolder+digitObjs[fh.toString()[f]]+digitColor+".svg' width='12.5%' height='12.5%' style='margin-left:-10px;' />";
								else
									concatDgt += "<img src='"+digitsFolder+digitObjs[fh.toString()[f]]+digitColor+".svg' width='12.5%' height='12.5%' />";
							}
							if(fh>0)
								$("#digitFirstFrame,.frame-6").html($("#digitFirstFrame").html()+"<span style='text-transform:capitalize; font-size: 14px; line-height:10%; width:50%; float:left; display:block;'><span class='animate'>"+concatDgt+"</span>"+"<span class='animates1 negateMargins1'><img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+fh+fruitsSvgsExt+"' width='30%' height='30%' /></span> "+numberToEnglish(fh)+" </span>");
							else
								$("#digitFirstFrame,.frame-6").html("<span style='text-transform:capitalize;font-size: 14px; line-height:10%; width:50%; float:left; display:block;' class='animate negateMargin'>"+concatDgt+"<span class='animates1 negateMargins1'><img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+fh+fruitsSvgsExt+"' width='30%' height='30%' /></span> "+numberToEnglish(fh)+" </span>");
							counterLoop++;
						} 
					}
					
					if(arrayOfFgt[0].toString().length>1)
					{
						concatDgts = "";
						for(var io = 0; io < arrayOfFgt[0].toString().length; io++)
						{
							if(f>0)
							{
								concatDgts += "<img src='"+digitsFolder+digitObjs[arrayOfFgt[0].toString()[io]]+digitColor+".svg' width='15%' height='15%' style='margin-left:-10px;' />";
							}
							else
							{
								concatDgts += "<img src='"+digitsFolder+digitObjs[arrayOfFgt[0].toString()[io]]+digitColor+".svg' width='15%' height='15%' />";
							}
						}	

						concatDgts += "<br><span style='font-size: 24px;'> To </span><br>";
						
						for(var io = 0; io < arrayOfFgt[1].toString().length; io++)
						{
							if(f>0)
							{
								concatDgts += "<img src='"+digitsFolder+digitObjs[arrayOfFgt[1].toString()[io]]+digitColor+".svg' width='15%' height='15%' style='margin-left:-10px;' />";
							}
							else
							{
								concatDgts += "<img src='"+digitsFolder+digitObjs[arrayOfFgt[1].toString()[io]]+digitColor+".svg' width='15%' height='15%' />";
							}
						}	
					}

					if(arrayOfFgt[1].toString().length>1)
					{
						concatDgts = "";
						for(var io = 0; io < arrayOfFgt[0].toString().length; io++)
						{
							if(f>0)
							{
								concatDgts += "<img src='"+digitsFolder+digitObjs[arrayOfFgt[0].toString()[io]]+digitColor+".svg' width='15%' height='15%' style='margin-left:-10px;' />";
							}
							else
							{
								concatDgts += "<img src='"+digitsFolder+digitObjs[arrayOfFgt[0].toString()[io]]+digitColor+".svg' width='15%' height='15%' />";
							}
						}	

						concatDgts += "<br><span style='font-size: 24px;'> To </span><br>";
						
						for(var io = 0; io < arrayOfFgt[1].toString().length; io++)
						{
							if(f>0)
							{
								concatDgts += "<img src='"+digitsFolder+digitObjs[arrayOfFgt[1].toString()[io]]+digitColor+".svg' width='15%' height='15%' style='margin-left:-10px;' />";
							}
							else
							{
								concatDgts += "<img src='"+digitsFolder+digitObjs[arrayOfFgt[1].toString()[io]]+digitColor+".svg' width='15%' height='15%' />";
							}
						}	
					}				
					$(".frame-5").html("<span style='text-transform:capitalize; line-height:3vw;'>"+firstText+"<br><br>Let`s "+type+" "+numberToEnglish(arrayOfFgt[0])+"</span>" + "<span> to "+numberToEnglish(arrayOfFgt[1])+" ("+dgt+")</span>");
				
					$("#audioIntro6,#audioIntro6 source").attr("src","http://translate.google.com/translate_tts?ie=UTF-8&q="+firstText+" Let's "+type+arrayOfFgt[0]+" to "+arrayOfFgt[1]+lastAudio6Chunk+"!"+"&tl=en&total=1&idx=0&prev=input&client=tw-ob");	
					
					if(type3.toLowerCase()=="before, between and after" || type3.toLowerCase()=="bigger, smaller, less than and more than")
					{
						$("#audioIntro7,#audioIntro7 source").attr("src","http://translate.google.com/translate_tts?ie=UTF-8&q="+secondText+allDigits+" "+repeatText+" "+"&tl=en&total=1&idx=0&prev=input&client=tw-ob");
						$("#audioIntro8,#audioIntro8 source").attr("src","http://translate.google.com/translate_tts?ie=UTF-8&q="+allDigits2+" You Learned How To"+type+" "+dgt+"!&tl=en&total=1&idx=0&prev=input&client=tw-ob");
					}
					else
					{
						$("#audioIntro7,#audioIntro7 source").attr("src","http://translate.google.com/translate_tts?ie=UTF-8&q="+secondText+allDigits+" "+repeatText+" "+allDigits2+"&tl=en&total=1&idx=0&prev=input&client=tw-ob");
						$("#audioIntro8,#audioIntro8 source").attr("src","http://translate.google.com/translate_tts?ie=UTF-8&q="+"You Learned How To "+type+" "+dgt+"!&tl=en&total=1&idx=0&prev=input&client=tw-ob");
					}
					$("#getRepeatText").html(repeatText);
					//$("#audioIntro,#audioIntro source")[0].playbackRate=0.7;

				}
				else
				{
					for(var f = 0; f < dgtLength; f++)
					{
						if(f>0)
						{
							concatDgt += "<img src='"+digitsFolder+digitObjs[fgt[f]]+digitColor+".svg' width='40%' height='40%' style='margin-left:-2vw;' />";
						}
						else
						{
							concatDgt += "<img src='"+digitsFolder+digitObjs[fgt[f]]+digitColor+".svg' width='40%' height='40%' />";
						}
					}
					$("#digitFirstFrame").html("<span>"+concatDgt+"</span>");
				}
				
				if(type2.toLowerCase()=="count")
				{		
					if(fgt.includes("-"))			
					{		
						// limit changes here		
						if(sign.toLowerCase().includes("add") || sign.toLowerCase().includes("plus"))
						{
							allDigits = [];
							var counterLoop = 0;
							$("#digitFirstFrame").html("");
							var concatDgt = "";
							var concatDgt2 = "";
							for(var fh = arrayOfFgt[0]; fh <= parseInt(arrayOfFgt[1])+100; fh++)
							{
								if(counterLoop < 3)
								{
									//allDigits.push(fh+"!");
									allDigits.push(fh+" plus "+fh+" is equals to "+(parseInt(fh)+parseInt(fh))+"! ");
									if(counterLoop < 5)
									{
										allDigitsWords.push(numberToEnglish(fh).split('').join('! ')+" "+fh+" ");
									}
									
									maxDurat = 900 * arrayOfFgt[1];
									concatDgt = "";
									//concatDgt = "<img src='"+digitsFolder+digitObjs[fh]+digitColor+".svg' width='25%' height='25%' />";
									for(var f = 0; f < (fh.toString()).length; f++)
									{
										//alert(digitsFolder+digitObjs[fh.toString()[f]]+digitColor);
										if(f>0)
											concatDgt += "<img src='"+digitsFolder+digitObjs[fh.toString()[f]]+digitColor+".svg' width='12.5%' height='12.5%' style='margin-left:-10px;' />";
										else
											concatDgt += "<img src='"+digitsFolder+digitObjs[fh.toString()[f]]+digitColor+".svg' width='12.5%' height='12.5%' />";
									}
									if(fh>0)
										$("#digitFirstFrame").html($("#digitFirstFrame").html()+"<span style='text-transform:capitalize; font-size: 24px; line-height:70px; width:100%; float:left; display:inline;'><span>"+concatDgt+" + "+concatDgt+" = <span style='font-size: 50px; font-weight: bold;'>"+(parseInt(fh)+parseInt(fh))+"</span>"+"</span>"+"<span style='text-transform:capitalize; font-size: 24px; line-height:70px; width:50%; float:left; display:flex;'><img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+fh+fruitsSvgsExt+"' width='25%' height='25%' /> + <img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+fh+fruitsSvgsExt+"' width='25%' height='25%' /> = <img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+(parseInt(fh)+parseInt(fh))+fruitsSvgsExt+"' width='25%' height='25%' /></span></span>");
									else
										$("#digitFirstFrame").html("<span style='text-transform:capitalize;font-size: 24px; line-height:70px; width:100%; float:left; display:inline;'>"+concatDgt+" + "+concatDgt+" = <span style='font-size: 24px;'>"+(parseInt(fh)+parseInt(fh))+"</span><span style='text-transform:capitalize; font-size: 24px; line-height:70px; width:50%; float:left; display:flex;'><img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+fh+fruitsSvgsExt+"' width='25%' height='25%' /> + <img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+fh+fruitsSvgsExt+"' width='25%' height='25%' /> = <img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+(parseInt(fh)+parseInt(fh))+fruitsSvgsExt+"' width='25%' height='25%' /></span></span>");
								}
								if(counterLoop == 4)
								{
									var randomValue = 10;
									allDigits.push("Now! Lets add with tens! " + fh+" plus "+randomValue+" is equals to "+(parseInt(fh)+parseInt(randomValue))+"! ");
									concatDgt = "";
									concatDgt2 = "";
									//concatDgt = "<img src='"+digitsFolder+digitObjs[fh]+digitColor+".svg' width='25%' height='25%' />";
									for(var f = 0; f < (randomValue.toString()).length; f++)
									{
										//alert(digitsFolder+digitObjs[fh.toString()[f]]+digitColor);
										if(f>0)
											concatDgt += "<img src='"+digitsFolder+digitObjs[randomValue.toString()[f]]+digitColor+".svg' width='9.5%' height='9.5%' style='margin-left:-10px;' />";
										else
											concatDgt += "<img src='"+digitsFolder+digitObjs[randomValue.toString()[f]]+digitColor+".svg' width='9.5%' height='9.5%' />";
									}
									
									for(var f = 0; f < (fh.toString()).length; f++)
									{
										//alert(digitsFolder+digitObjs[fh.toString()[f]]+digitColor);
										if(f>0)
											concatDgt2 += "<img src='"+digitsFolder+digitObjs[fh.toString()[f]]+digitColor+".svg' width='9.5%' height='9.5%' style='margin-left:-10px;' />";
										else
											concatDgt2 += "<img src='"+digitsFolder+digitObjs[fh.toString()[f]]+digitColor+".svg' width='9.5%' height='9.5%' />";
									}

									if(fh>0)
										$("#digitFirstFrame").html($("#digitFirstFrame").html()+"<span style='text-transform:capitalize; font-size: 24px; line-height:70px; width:100%; float:left; display:inline;'><span>"+concatDgt2+" + "+concatDgt+" = <span style='font-size: 50px; font-weight: bold;'>"+(parseInt(fh)+parseInt(randomValue))+"</span>"+"</span>"+"<span style='text-transform:capitalize; font-size: 24px; line-height:70px; width:50%; float:left; display:flex;'><img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+fh+fruitsSvgsExt+"' width='25%' height='25%' /> + <img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+randomValue+fruitsSvgsExt+"' width='25%' height='25%' /> = <img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+(parseInt(fh)+parseInt(randomValue))+fruitsSvgsExt+"' width='25%' height='25%' /></span></span>");
									else
										$("#digitFirstFrame").html("<span style='text-transform:capitalize;font-size: 24px; line-height:70px; width:100%; float:left; display:inline;'>"+concatDgt2+" + "+concatDgt+" = <span style='font-size: 24px;'>"+(parseInt(fh)+parseInt(randomValue))+"</span><span style='text-transform:capitalize; font-size: 24px; line-height:70px; width:50%; float:left; display:flex;'><img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+fh+fruitsSvgsExt+"' width='25%' height='25%' /> + <img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+randomValue+fruitsSvgsExt+"' width='25%' height='25%' /> = <img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+(parseInt(fh)+parseInt(randomValue))+fruitsSvgsExt+"' width='25%' height='25%' /></span></span>");
								}
								if(counterLoop == 5)
								{
									var randomValue = 20;
									allDigits.push("Lets add with another tens! " + fh+" plus "+randomValue+" is equals to "+(parseInt(fh)+parseInt(randomValue))+"! ");
									concatDgt = "";
									concatDgt2 = "";
									//concatDgt = "<img src='"+digitsFolder+digitObjs[fh]+digitColor+".svg' width='25%' height='25%' />";
									for(var f = 0; f < (randomValue.toString()).length; f++)
									{
										//alert(digitsFolder+digitObjs[fh.toString()[f]]+digitColor);
										if(f>0)
											concatDgt += "<img src='"+digitsFolder+digitObjs[randomValue.toString()[f]]+digitColor+".svg' width='9.5%' height='9.5%' style='margin-left:-10px;' />";
										else
											concatDgt += "<img src='"+digitsFolder+digitObjs[randomValue.toString()[f]]+digitColor+".svg' width='9.5%' height='9.5%' />";
									}
									
									for(var f = 0; f < (fh.toString()).length; f++)
									{
										//alert(digitsFolder+digitObjs[fh.toString()[f]]+digitColor);
										if(f>0)
											concatDgt2 += "<img src='"+digitsFolder+digitObjs[fh.toString()[f]]+digitColor+".svg' width='9.5%' height='9.5%' style='margin-left:-10px;' />";
										else
											concatDgt2 += "<img src='"+digitsFolder+digitObjs[fh.toString()[f]]+digitColor+".svg' width='9.5%' height='9.5%' />";
									}

									if(fh>0)
										$("#digitFirstFrame").html($("#digitFirstFrame").html()+"<span style='text-transform:capitalize; font-size: 24px; line-height:70px; width:100%; float:left; display:inline;'><span>"+concatDgt2+" + "+concatDgt+" = <span style='font-size: 50px; font-weight: bold;'>"+(parseInt(fh)+parseInt(randomValue))+"</span>"+"</span>"+"<span style='text-transform:capitalize; font-size: 24px; line-height:70px; width:50%; float:left; display:flex;'><img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+fh+fruitsSvgsExt+"' width='25%' height='25%' /> + <img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+randomValue+fruitsSvgsExt+"' width='25%' height='25%' /> = <img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+(parseInt(fh)+parseInt(randomValue))+fruitsSvgsExt+"' width='25%' height='25%' /></span></span>");
									else
										$("#digitFirstFrame").html("<span style='text-transform:capitalize;font-size: 24px; line-height:70px; width:100%; float:left; display:inline;'>"+concatDgt2+" + "+concatDgt+" = <span style='font-size: 24px;'>"+(parseInt(fh)+parseInt(randomValue))+"</span><span style='text-transform:capitalize; font-size: 24px; line-height:70px; width:50%; float:left; display:flex;'><img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+fh+fruitsSvgsExt+"' width='25%' height='25%' /> + <img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+randomValue+fruitsSvgsExt+"' width='25%' height='25%' /> = <img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+(parseInt(fh)+parseInt(randomValue))+fruitsSvgsExt+"' width='25%' height='25%' /></span></span>");
								}
								$(".frame-6").html($("#digitFirstFrame").html());
								counterLoop++;
							}
						}
						if(sign.toLowerCase().includes("sub") || sign.toLowerCase().includes("minus"))
						{
							allDigits = [];
							var counterLoop = 0;
							$("#digitFirstFrame").html("");
							var concatDgt = "";
							var concatDgt2 = "";
							for(var fh = arrayOfFgt[0]; fh <= parseInt(arrayOfFgt[1])+100; fh++)
							{
								if(counterLoop < 3)
								{
									var randomValue2 = Math.floor(Math.random()*3);
									if(randomValue2 == fh || randomValue2 == 0)
									{
										randomValue2=(randomValue2*2);
									}
									else{
										randomValue2 = (randomValue2*2);
									}
									randomValue2 = (parseInt((parseInt(randomValue2)+parseInt(fh)))+1);
									//allDigits.push(fh+"!");
									allDigits.push(randomValue2+" minus "+fh+" is equals to "+(randomValue2-parseInt(fh))+"! ");
									if(counterLoop < 5)
									{
										allDigitsWords.push(numberToEnglish(fh).split('').join('! ')+" "+fh+" ");
									}
									
									maxDurat = 900 * arrayOfFgt[1];
									concatDgt = "";
									concatDgt2 = "";
									//concatDgt = "<img src='"+digitsFolder+digitObjs[fh]+digitColor+".svg' width='25%' height='25%' />";
									for(var f = 0; f < (fh.toString()).length; f++)
									{
										//alert(digitsFolder+digitObjs[fh.toString()[f]]+digitColor);
										if(f>0)
											{concatDgt2 += "<img src='"+digitsFolder+digitObjs[fh.toString()[f]]+digitColor+".svg' width='9.5%' height='9.5%' style='margin-left:-10px;' />";}
										else
											{concatDgt2 += "<img src='"+digitsFolder+digitObjs[fh.toString()[f]]+digitColor+".svg' width='9.5%' height='9.5%' />";}
									}
									for(var f = 0; f < (randomValue2.toString()).length; f++)
									{
										//alert(digitsFolder+digitObjs[fh.toString()[f]]+digitColor);
										if(f>0)
											{concatDgt += "<img src='"+digitsFolder+digitObjs[randomValue2.toString()[f]]+digitColor+".svg' width='9.5%' height='9.5%' style='margin-left:-10px;' />";}
										else
											{concatDgt += "<img src='"+digitsFolder+digitObjs[randomValue2.toString()[f]]+digitColor+".svg' width='9.5%' height='9.5%' />";}
									}
									if(fh>0)
										{$("#digitFirstFrame").html($("#digitFirstFrame").html()+"<span style='text-transform:capitalize; font-size: 24px; line-height:70px; width:100%; float:left; display:inline;'><span>"+concatDgt+" - "+concatDgt2+" = <span style='font-size: 50px; font-weight: bold;'>"+(randomValue2-parseInt(fh))+"</span>"+"</span>"+"<span style='text-transform:capitalize; font-size: 24px; line-height:70px; width:50%; float:left; display:flex;'><img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+randomValue2+fruitsSvgsExt+"' width='25%' height='25%' /> - <img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+fh+fruitsSvgsExt+"' width='25%' height='25%' /> = <img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+(randomValue2-parseInt(fh))+fruitsSvgsExt+"' width='25%' height='25%' /></span></span>");}
									else
										{$("#digitFirstFrame").html("<span style='text-transform:capitalize;font-size: 24px; line-height:70px; width:100%; float:left; display:inline;'>"+concatDgt+" - "+concatDgt2+" = <span style='font-size: 24px;'>"+(randomValue2-parseInt(fh))+"</span><span style='text-transform:capitalize; font-size: 24px; line-height:70px; width:50%; float:left; display:flex;'><img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+randomValue2+fruitsSvgsExt+"' width='25%' height='25%' /> - <img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+fh+fruitsSvgsExt+"' width='25%' height='25%' /> = <img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+(randomValue2-parseInt(fh))+fruitsSvgsExt+"' width='25%' height='25%' /></span></span>");}
								}
								if(counterLoop == 4)
								{
									var randomValue = 10;
									allDigits.push("Now! Lets minus with tens! " + randomValue + " minus " + fh + " is equals to " + (parseInt(randomValue)-parseInt(fh)) + "! ");
									concatDgt = "";
									concatDgt2 = "";
									//concatDgt = "<img src='"+digitsFolder+digitObjs[fh]+digitColor+".svg' width='25%' height='25%' />";
									for(var f = 0; f < (randomValue.toString()).length; f++)
									{
										//alert(digitsFolder+digitObjs[fh.toString()[f]]+digitColor);
										if(f>0)
											concatDgt += "<img src='"+digitsFolder+digitObjs[randomValue.toString()[f]]+digitColor+".svg' width='9.5%' height='9.5%' style='margin-left:-10px;' />";
										else
											concatDgt += "<img src='"+digitsFolder+digitObjs[randomValue.toString()[f]]+digitColor+".svg' width='9.5%' height='9.5%' />";
									}
									
									for(var f = 0; f < (fh.toString()).length; f++)
									{
										//alert(digitsFolder+digitObjs[fh.toString()[f]]+digitColor);
										if(f>0)
											concatDgt2 += "<img src='"+digitsFolder+digitObjs[fh.toString()[f]]+digitColor+".svg' width='9.5%' height='9.5%' style='margin-left:-10px;' />";
										else
											concatDgt2 += "<img src='"+digitsFolder+digitObjs[fh.toString()[f]]+digitColor+".svg' width='9.5%' height='9.5%' />";
									}

									if(fh>0)
										$("#digitFirstFrame").html($("#digitFirstFrame").html()+"<span style='text-transform:capitalize; font-size: 24px; line-height:70px; width:100%; float:left; display:inline;'><span>"+concatDgt+" - "+concatDgt2+" = <span style='font-size: 50px; font-weight: bold;'>"+(parseInt(randomValue)-parseInt(fh))+"</span>"+"</span>"+"<span style='text-transform:capitalize; font-size: 24px; line-height:70px; width:50%; float:left; display:flex;'><img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+randomValue+fruitsSvgsExt+"' width='25%' height='25%' /> - <img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+fh+fruitsSvgsExt+"' width='25%' height='25%' /> = <img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+(parseInt(randomValue)-parseInt(fh))+fruitsSvgsExt+"' width='25%' height='25%' /></span></span>");
									else
										$("#digitFirstFrame").html("<span style='text-transform:capitalize;font-size: 24px; line-height:70px; width:100%; float:left; display:inline;'>"+concatDgt+" - "+concatDgt2+" = <span style='font-size: 24px;'>"+(parseInt(randomValue)-parseInt(fh))+"</span><span style='text-transform:capitalize; font-size: 24px; line-height:70px; width:50%; float:left; display:flex;'><img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+randomValue+fruitsSvgsExt+"' width='25%' height='25%' /> - <img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+fh+fruitsSvgsExt+"' width='25%' height='25%' /> = <img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+(parseInt(randomValue)-parseInt(fh))+fruitsSvgsExt+"' width='25%' height='25%' /></span></span>");
								}
								if(counterLoop == 5)
								{
									var randomValue = 20;
									allDigits.push("Lets minus with another tens! " + randomValue + " minus " + fh + " is equals to " + (parseInt(randomValue)-parseInt(fh)) + "! ");
									concatDgt = "";
									concatDgt2 = "";
									//concatDgt = "<img src='"+digitsFolder+digitObjs[fh]+digitColor+".svg' width='25%' height='25%' />";
									for(var f = 0; f < (randomValue.toString()).length; f++)
									{
										//alert(digitsFolder+digitObjs[fh.toString()[f]]+digitColor);
										if(f>0)
											concatDgt += "<img src='"+digitsFolder+digitObjs[randomValue.toString()[f]]+digitColor+".svg' width='9.5%' height='9.5%' style='margin-left:-10px;' />";
										else
											concatDgt += "<img src='"+digitsFolder+digitObjs[randomValue.toString()[f]]+digitColor+".svg' width='9.5%' height='9.5%' />";
									}
									
									for(var f = 0; f < (fh.toString()).length; f++)
									{
										//alert(digitsFolder+digitObjs[fh.toString()[f]]+digitColor);
										if(f>0)
											concatDgt2 += "<img src='"+digitsFolder+digitObjs[fh.toString()[f]]+digitColor+".svg' width='9.5%' height='9.5%' style='margin-left:-10px;' />";
										else
											concatDgt2 += "<img src='"+digitsFolder+digitObjs[fh.toString()[f]]+digitColor+".svg' width='9.5%' height='9.5%' />";
									}

									if(fh>0)
										$("#digitFirstFrame").html($("#digitFirstFrame").html()+"<span style='text-transform:capitalize; font-size: 24px; line-height:70px; width:100%; float:left; display:inline;'><span>"+concatDgt+" - "+concatDgt2+" = <span style='font-size: 50px; font-weight: bold;'>"+(parseInt(randomValue)-parseInt(fh))+"</span>"+"</span>"+"<span style='text-transform:capitalize; font-size: 24px; line-height:70px; width:50%; float:left; display:flex;'><img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+randomValue+fruitsSvgsExt+"' width='25%' height='25%' /> - <img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+fh+fruitsSvgsExt+"' width='25%' height='25%' /> = <img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+(parseInt(randomValue)-parseInt(fh))+fruitsSvgsExt+"' width='25%' height='25%' /></span></span>");
									else
										$("#digitFirstFrame").html("<span style='text-transform:capitalize;font-size: 24px; line-height:70px; width:100%; float:left; display:inline;'>"+concatDgt+" - "+concatDgt2+" = <span style='font-size: 24px;'>"+(parseInt(randomValue)-parseInt(fh))+"</span><span style='text-transform:capitalize; font-size: 24px; line-height:70px; width:50%; float:left; display:flex;'><img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+randomValue+fruitsSvgsExt+"' width='25%' height='25%' /> - <img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+fh+fruitsSvgsExt+"' width='25%' height='25%' /> = <img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+(parseInt(randomValue)-parseInt(fh))+fruitsSvgsExt+"' width='25%' height='25%' /></span></span>");
								}
								$(".frame-6").html($("#digitFirstFrame").html());
								counterLoop++;
							}
						}
						$(".frame-3").html($(".frame-3").html()+"<p style='text-align:center; width:100%;'><span class='animates negateMargins'>"+concatDgts+"</span></p>");
					
						$("#audioIntro7,#audioIntro7 source").attr("src","http://translate.google.com/translate_tts?ie=UTF-8&q="+secondText+allDigits+" "+repeatText+" "+allDigits2+"&tl=en&total=1&idx=0&prev=input&client=tw-ob");
						$("#audioIntro8,#audioIntro8 source").attr("src","http://translate.google.com/translate_tts?ie=UTF-8&q="+"You Learned How To "+type+" "+dgt+"!&tl=en&total=1&idx=0&prev=input&client=tw-ob");
					}
					else
					{
						$(".frame-3").html($(".frame-3").html()+"<p style='text-align:center; width:100%;'><span class='animates negateMargins'>"+concatDgt+"</span></p>");
					}
					var para = "<p style='text-align:center; width:100%;'>";
					var paraEnd = "</p>";
					if(dgt<=5)
					//if(1==1)
					{
						for(var k=1;k<=dgt;k++)
						{	
							if(k==1)
							{			
								$(".frame-5").html($(".frame-5").html()+para+"<p><span><img src='"+digitsFolder+digitObjs[dgt]+digitColor+".svg' width='20%' height='20%' /></span></p><span id='fadeEffect-svgs"+k+"' style='float:left; width:33.30%;'><img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+k+fruitsSvgsExt+"' width='100%' /><br><span>"+k+"</span></span>");
							}
							if(k==dgt)
							{			
								$(".frame-5").html($(".frame-5").html()+"<span style='float:left; width:33.30%;' id='fadeEffect-svgs"+k+"'><img src='"+fruitLast+k+fruitsSvgsExt+"' width='100%' /><br><span>"+k+"</span>"+paraEnd);
							}	
							if(k!=dgt && k!=1)
							{
								$(".frame-5").html($(".frame-5").html()+"<span id='fadeEffect-svgs"+k+"' style='float:left; width:33.30%;'><img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+k+fruitsSvgsExt+"' width='100%' /><br><span>"+k+"</span>");
							}
						}
					}
					else
					{	
						var fgt = dgt.toString();
						var dgtLength = fgt.length;
						var arrayOfFgt = "";

						var concatDgt="";
						var concatDgt2="";

						if(fgt.includes("-"))
						{		
							arrayOfFgt = fgt.split("-");
							//$(".frame-5").html($(".frame-5").html()+para+"<p><span class='animates negateMargins'>"+concatDgt+"</span></p><span class='animates1 negateMargins1'><img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+arrayOfFgt[0]+fruitsSvgsExt+"' width='70%' height='70%' /></span>"+paraEnd);
						}
						else
						{
							for(var f = 0; f < dgtLength; f++)
							{
								if(f>0)
									concatDgt += "<img src='"+digitsFolder+digitObjs[fgt[f]]+digitColor+".svg' width='20%' height='20%' style='margin-left:-2vw;' />";
								else
									concatDgt += "<img src='"+digitsFolder+digitObjs[fgt[f]]+digitColor+".svg' width='20%' height='20%' />";
							}

							$(".frame-5").html($(".frame-5").html()+para+"<p><span class='animates negateMargins'>"+concatDgt+"</span></p><span class='animates1 negateMargins1'><img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+dgt+fruitsSvgsExt+"' width='70%' height='70%' /></span>"+paraEnd);
						}	
					}				
				}

				if(type2=="descending" || type2=="Descending" || type2=="Descend" || type2=="Descends" || type2=="descend" || type2=="descends" || type2=="Desc" || type2=="desc" || type2=="Des" || type2=="des")
				{		
					if(fgt.includes("-"))			
						$(".frame-3").html($(".frame-3").html()+"<p style='text-align:center; width:100%;'><span class='animates negateMargins'>"+concatDgts+"</span></p>");
					else
						$(".frame-3").html($(".frame-3").html()+"<p style='text-align:center; width:100%;'><span class='animates negateMargins'>"+concatDgt+"</span></p>");
					
					var para = "<p style='text-align:center; width:100%;'>";
					var paraEnd = "</p>";
				
					var fgt = dgt.toString();
					var dgtLength = fgt.length;
					var arrayOfFgt = "";
					subDuration += 7000;
					subDuration2 += 10000;
					subDuration3 += 5000;
					subDuration4 -= 10000;

					var concatDgt="";

					if(fgt.includes("-"))
					{		
						arrayOfFgt = fgt.split("-");
						//$(".frame-5").html($(".frame-5").html()+para+"<p><span class='animates negateMargins'>"+concatDgt+"</span></p><span class='animates1 negateMargins1'><img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+arrayOfFgt[0]+fruitsSvgsExt+"' width='70%' height='70%' /></span>"+paraEnd);
					}
					else
					{
						//Setting Frame 5...
						for(var f = 0; f <= dgtLength; f++)
						{
							scriptTag="<script>$(document).ready(function(){$('#faders"+f+"').hide();$('#faders"+f+"').fadeIn(1000, function(){$('#faders"+(parseInt(f)+1)+"').hide();$('#faders"+(parseInt(f)+1)+"').fadeIn(1000);});});</";
							if(f>0)
								concatDgt += "<img id='faders"+f+"' src='"+digitsFolder+digitObjs[fgt[f]]+digitColor+".svg' width='20%' height='20%' style='margin-left:-2vw;' />"+scriptTag+"script>";
							else
								concatDgt += "<img src='"+digitsFolder+digitObjs[fgt[f]]+digitColor+".svg' width='20%' height='20%' />"+scriptTag+"script>";
						}

						$(".frame-5").html($(".frame-5").html()+para+"<p><span class='animates negateMargins'>"+concatDgt+"</span></p><span class='animates1 negateMargins1'><img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+dgt+fruitsSvgsExt+"' width='70%' height='70%' /></span>"+paraEnd);
						
						concatDgt = "";
						//Setting Frame 6...
						for(var f = 0; f <= dgtLength; f+=parseInt(Math.random() * 3))
						{
							scriptTag="<script>$(document).ready(function(){$('#faders"+f+"').hide();$('#faders"+f+"').fadeIn(1000, function(){$('#faders"+(parseInt(f)+1)+"').hide();$('#faders"+(parseInt(f)+1)+"').fadeIn(1000);});});</";
							if(f>0)
								concatDgt += "<img id='faders"+f+"' src='"+digitsFolder+digitObjs[fgt[f]]+digitColor+".svg' width='20%' height='20%' style='margin-left:-2vw;' />"+scriptTag+"script>";
							else
								concatDgt += "<img src='"+digitsFolder+digitObjs[fgt[f]]+digitColor+".svg' width='20%' height='20%' />"+scriptTag+"script>";
						}
						$(".frame-6").html($(".frame-6").html()+para+"<p><span class='animates negateMargins'>"+concatDgt+"</span></p><span class='animates1 negateMargins1'><img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+dgt+fruitsSvgsExt+"' width='70%' height='70%' /></span>"+paraEnd);
					}
				}
				if(type2=="ascending" || type2=="Ascending" || type2=="Ascend" || type2=="Ascends" || type2=="ascend" || type2=="ascends" || type2=="Asc" || type2=="asc")
				{		
					if(fgt.includes("-"))			
						$(".frame-3").html($(".frame-3").html()+"<p style='text-align:center; width:100%;'><span class='animates negateMargins'>"+concatDgts+"</span></p>");
					else
						$(".frame-3").html($(".frame-3").html()+"<p style='text-align:center; width:100%;'><span class='animates negateMargins'>"+concatDgt+"</span></p>");
					
					var para = "<p style='text-align:center; width:100%;'>";
					var paraEnd = "</p>";
				
					var fgt = dgt.toString();
					var dgtLength = fgt.length;
					var arrayOfFgt = "";

					var concatDgt="";

					if(fgt.includes("-"))
					{		
						arrayOfFgt = fgt.split("-");
						//$(".frame-5").html($(".frame-5").html()+para+"<p><span class='animates negateMargins'>"+concatDgt+"</span></p><span class='animates1 negateMargins1'><img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+arrayOfFgt[0]+fruitsSvgsExt+"' width='70%' height='70%' /></span>"+paraEnd);
					}
					else
					{
						//Setting Frame 5...
						for(var f = dgtLength; f <= 0; f--)
						{
							scriptTag="<script>$(document).ready(function(){$('#faders"+f+"').hide();$('#faders"+f+"').fadeIn(1000, function(){$('#faders"+(parseInt(f)+1)+"').hide();$('#faders"+(parseInt(f)+1)+"').fadeIn(1000);});});</";
							if(f>0)
								concatDgt += "<img id='faders"+f+"' src='"+digitsFolder+digitObjs[fgt[f]]+digitColor+".svg' width='20%' height='20%' style='margin-left:-2vw;' />"+scriptTag+"script>";
							else
								concatDgt += "<img src='"+digitsFolder+digitObjs[fgt[f]]+digitColor+".svg' width='20%' height='20%' />"+scriptTag+"script>";
						}

						$(".frame-5").html($(".frame-5").html()+para+"<p><span class='animates negateMargins'>"+concatDgt+"</span></p><span class='animates1 negateMargins1'><img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+dgt+fruitsSvgsExt+"' width='70%' height='70%' /></span>"+paraEnd);
					
						concatDgt = "";
						//Setting Frame 6...
						for(var f = dgtLength; f <= 0; f-=parseInt(Math.random() * 3))
						{
							scriptTag="<script>$(document).ready(function(){$('#faders"+f+"').hide();$('#faders"+f+"').fadeIn(1000, function(){$('#faders"+(parseInt(f)+1)+"').hide();$('#faders"+(parseInt(f)+1)+"').fadeIn(1000);});});</";
							if(f>0)
								concatDgt += "<img id='faders"+f+"' src='"+digitsFolder+digitObjs[fgt[f]]+digitColor+".svg' width='20%' height='20%' style='margin-left:-2vw;' />"+scriptTag+"script>";
							else
								concatDgt += "<img src='"+digitsFolder+digitObjs[fgt[f]]+digitColor+".svg' width='20%' height='20%' />"+scriptTag+"script>";
						}
						$(".frame-6").html($(".frame-6").html()+para+"<p><span class='animates negateMargins'>"+concatDgt+"</span></p><span class='animates1 negateMargins1'><img src='"+fruitsSvgs+fruitsNames[parseInt(Math.random() * fruitsNames.length)]+dgt+fruitsSvgsExt+"' width='70%' height='70%' /></span>"+paraEnd);
					}
				}
			});
			
			if(getBoard[1]=="white")
			{
				digitColor = digitColorsAlt[parseInt(Math.random() * digitColorsAlt.length)];
				$(".fadeText h2").css("color","#000");
			}
			else if(getBoard[1]=="black")
			{
				digitColor = digitColors[parseInt(Math.random() * digitColors.length)];
				$(".fadeText h2").css("color","#fff");
			}
			
			if(sign=="mul" || sign=="multiply" || sign=="Mul" || sign=="Multiply" || sign=="Multiplication" || sign=="multiplication")
			{
				$("#digitLastFrame1").html("<span><img src='"+digitsFolder+digitObjs[dgt]+digitColor+".svg' width='30%' height='50%' /></span>" + "<span>+</span>" + "<span><img src='"+digitsFolder+digitObjs[dgt]+"' width='200vw' /></span>" + "<span> = </span>" + "<span><img src='"+digitsFolder+digitObjs[(+dgt)*(+dgt)]+"' width='200vw' /></span>");
			}
			if(sign=="divide" || sign=="Divide" || sign=="Division" || sign=="division" || sign=="div" || sign=="Div")
			{
				$("#digitLastFrame1").html("<span><img src='"+digitsFolder+digitObjs[dgt]+digitColor+".svg' width='30%' height='50%' /></span>" + "<span>+</span>" + "<span><img src='"+digitsFolder+digitObjs[dgt]+"' width='200vw' /></span>" + "<span> = </span>" + "<span><img src='"+digitsFolder+digitObjs[(+dgt)/(+dgt)]+"' width='200vw' /></span>");
			}
		}
		function findGetParameter(parameterName) {
			var result = null,
				tmp = [];
			location.search
				.substr(1)
				.split("&")
				.forEach(function (item) {
				tmp = item.split("=");
				if (tmp[0] === parameterName) result = decodeURIComponent(tmp[1]);
				});
			return result;
		}

		var genVideoName = "counting";
		var genVideoRange = "1-10";
		var genVideoOperator = "";

		if(findGetParameter("name") == null || findGetParameter("name") == "" || findGetParameter("name") == " ")
		{
			
		}
		else
		{
			genVideoName = findGetParameter("name");
			genVideoName = genVideoName.replace("%20"," ");
		}
	
		if(findGetParameter("range") == null || findGetParameter("range") == "" || findGetParameter("range") == " ")
		{
			
		}
		else
		{
			genVideoRange = findGetParameter("range");
		}

		if(findGetParameter("operator") == null || findGetParameter("operator") == "" || findGetParameter("operator") == " ")
		{
			
		}
		else
		{
			genVideoOperator = findGetParameter("operator");
		}		

		generateVideo(genVideoRange,genVideoOperator,genVideoName);
	</script>

	<script>
		// dead script...
		$(document).ready(function(){
			if(deadLock==1)
			{
				$(".contentText").css("background","url('assets/objects/boards/0.png') top left");
				$(".contentText").css("background-attachment","scroll");
				$(".contentText").css("background-repeat","no-repeat");
				$(".contentText").css("background-size","100% 100%");
				$(".fadeText h2").css("color","#000");
			}
		});	
	</script>

	<script>
		$(document).ready(function(){
			var dynamicTime=40000;

			$("audio").each(function(){
				this.pause();
				this.duration = 0;
			});
			
			$("#audioBg")[0].play();
			
			$(".screen1,.screen2,.screen3,.screen4,.screen5,.screen6,.screen00").hide();

			$("#playVideoBtn").click(function(){
				$("#playVideoBtn").fadeOut(1000);
					var startVideo = setTimeout(function(){
					dynamicTime+=parseInt(maxDurat);
					dynamicTime-=subDuration;
					dynamicTime+=parseInt(subDuration2);
					dynamicTime+=parseInt(subDuration4);
					//alert(subDuration2);
					// Anime.js Code
					var controlsProgressEl = document.querySelector('.timeline-controls-demo .progress');

					var tl = anime.timeline({
					direction: 'alternate',
					loop: false,
					duration: 5000,
					easing: 'easeInOutSine',
					update: function(anim) {
						controlsProgressEl.value = tl.progress;
						$("#minsVid").html(Math.round(tl.progress));
					}
					});

					tl
					.add({
					targets: '.screen0',
					//duration: 10000,
					begin: function() {
						$(".screen1,.screen2,.screen3,.screen4,.screen5,.screen6,.screen00").hide();
						$(".screen0").fadeIn(1000);
					}
					})
					.add({
					targets: '.screen1',
					begin: function() {
						$(".screen0,.screen2,.screen3,.screen4,.screen5,.screen6,.screen00").hide();
						$(".screen1").fadeIn(1000);
					}
					})
					.add({
					targets: '.screen2',
					duration: dynamicTime,
					begin: function() {
						var sFrameTime=2000;
						var sFrameTime2=2000;
						$(".screen0,.screen1,.screen3,.screen4,.screen5,.screen6,.screen00").hide();
						$(".screen2").fadeIn(1000);
						$(".frame-1,.frame-2,.frame-3,.frame-4,.frame-5,.frame-6").hide();
						$(".frame-1").fadeIn(sFrameTime2,function(){
							$(".frame-1").fadeOut(sFrameTime,function(){
								$(".frame-2").fadeIn(sFrameTime2,function(){	
									$(".frame-2").fadeOut(sFrameTime,function(){			
										$(".frame-3").fadeIn(sFrameTime2,function(){
											setTimeout(function(){
												$(".frame-3").fadeOut(sFrameTime,function(){
													$(".frame-5").fadeIn(sFrameTime2,function(){
														setTimeout(function(){
															$(".frame-5").fadeOut(sFrameTime,function(){
																$(".frame-4").fadeIn(sFrameTime2, function(){
																	setTimeout(function(){
																			$(".frame-4").fadeOut(sFrameTime, function(){
																				$(".frame-6").fadeIn(sFrameTime2);
																				setTimeout(function(){
																					$(".frame-7").fadeIn(sFrameTime2);
																					setTimeout(function(){
																						$(".frame-8").fadeIn(sFrameTime2);
																					},finalFrameSet2);
																				},finalFrameSet);
																			});
																		},maxDurat-(parseInt(subDuration4)/2.5));
																	});
																});
														},parseInt((sFrameTime2+(parseInt(subDuration)/2)))-subDuration3);
													});
												});
											},sFrameTime2);
										});
									});
								});
							});
						});
					}
					}, '-=100')
					// .add({
					// targets: '.screen3',
					// begin: function() {
					// 	$(".screen0,.screen1,.screen2,.screen4,.screen5,.screen6,.screen00").hide();
					// 	$(".screen3").fadeIn(1000);
					// }
					// }, '-=100')
					// .add({
					// targets: '.screen4',
					// begin: function() {
					// 	$(".screen0,.screen1,.screen2,.screen3,.screen5,.screen6,.screen00").hide();
					// 	$(".screen4").fadeIn(1000);
					// }
					// }, '-=100')
					.add({
					targets: '.screen5',
					duration: 6000,
					begin: function() {
						$(".screen0,.screen1,.screen2,.screen3,.screen4,.screen6,.screen00").hide();
						$(".screen5").fadeIn(1000);
					}
					}, '-=100')	
					.add({
					targets: '.screen00',
					duration: 6000,
					begin: function() {
						$(".screen0,.screen1,.screen2,.screen3,.screen4,.screen5,.screen6").hide();
						$(".screen00").fadeIn(1000);
					}
					});

					document.querySelector('.timeline-controls-demo .play').onclick = tl.play;
					document.querySelector('.timeline-controls-demo .pause').onclick = tl.pause;
					document.querySelector('.timeline-controls-demo .restart').onclick = tl.restart;

					controlsProgressEl.addEventListener('input', function() {
						tl.seek(tl.duration * (controlsProgressEl.value / 100));
						
						//var gfsx = Math.round(document.getElementById('audioIntro5').duration);
						var getDurationAudio1 = Math.round(document.getElementById('audioIntro').duration);
						var getDurationAudio2 = Math.round(document.getElementById('audioIntro2').duration);
						var getDurationAudio3 = Math.round(document.getElementById('audioIntro3').duration);
						var getDurationAudio4 = Math.round(document.getElementById('audioIntro4').duration);
						var getDurationAudio5 = Math.round(document.getElementById('audioIntro5').duration);
						var getDurationAudio6 = Math.round(document.getElementById('audioIntro6').duration);
						var getDurationAudio7 = Math.round(document.getElementById('audioIntro7').duration);
						var getDurationAudio8 = Math.round(document.getElementById('audioIntro8').duration);
						var getDurationAudio9 = Math.round(document.getElementById('audioIntro9').duration);			
						var getDurationAudio10 = Math.round(document.getElementById('audioIntro10').duration);
						
						var getAudio1 = document.getElementById('audioIntro');
						var getAudio2 = document.getElementById('audioIntro2');
						var getAudio3 = document.getElementById('audioIntro3');
						var getAudio4 = document.getElementById('audioIntro4');
						var getAudio5 = document.getElementById('audioIntro5');
						var getAudio6 = document.getElementById('audioIntro6');
						var getAudio7 = document.getElementById('audioIntro7');
						var getAudio8 = document.getElementById('audioIntro8');
						var getAudio9 = document.getElementById('audioIntro9');
						var getAudio10 = document.getElementById('audioIntro10');

						var totalDuration = parseInt(getDurationAudio1)+1+parseInt(getDurationAudio2)+4+parseInt(getDurationAudio3)+1+parseInt(getDurationAudio4)+1+parseInt(getDurationAudio5)+1+parseInt(getDurationAudio6)+4+parseInt(getDurationAudio7)+0+parseInt(getDurationAudio8)+4+parseInt(getDurationAudio9)+3+parseInt(getDurationAudio10)+4;
						//audio1 0 - audio2 4000 - audio3 1000 - audio4 1000 - audio5 1000 - audio6 4000 - audio7 0 - audio8 4000 - audio9 3000 - audio10 4000
						
						//alert(Math.round(Math.round(tl.progress)*100/totalDuration));

						var cxz = Math.round(controlsProgressEl.value);
					
						if(cxz<4)
						{
							$("audio").each(function(){
								this.pause();
								this.currentTime=0;
							});

							getAudio1.currentTime=(parseInt(getDurationAudio1)*(cxz*10/100));
							getAudio1.play();
						}
						if(cxz<10 && cxz>4)
						{
							$("audio").each(function(){
								this.pause();
								this.currentTime=0;
							});

							getAudio2.currentTime=(parseInt(getDurationAudio2)*(cxz*10/100));
							getAudio2.play();
						}
						if(cxz<30 && cxz>20)
						{
							$("audio").each(function(){
								this.pause();
								this.currentTime=0;
							});

							//alert((parseInt(getDurationAudio3)*(cxz*10/300)));
							getAudio3.currentTime=(parseInt(getDurationAudio3)*(cxz*10/200));
							getAudio3.play();
						}
					});
					$("#audioIntro")[0].play();
				},1000);
			});
		});
	</script>
</body>
</html>