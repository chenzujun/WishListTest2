<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<meta name="viewport" content="initial-scale=1.0, width=device-width,minimum-scale=1.0,maximum-scale=1.0, user-scalable=no" />
<title>Wish List猜颜色小游戏</title>
<link rel="stylesheet" type="text/css" href="/WishListTest2/Public/css/game.css">
<script type="text/javascript" src="/WishListTest2/Public/js/game.js"></script>
<script src="http://code.jquery.com/jquery-2.0.0.min.js"
	type="text/javascript"></script>

<script>
	$(function() {
		eventHandler();
		function eventHandler() {
			var label = $('.label');
			label.on('click',
					function(e) {
						var $this = $(this);
						console.log($this);
						if ($this.hasClass('checked')) {
							return;
						} else {
							$this.addClass('checked').siblings().removeClass(
									'checked');
						}
					});
		}
	});
</script>
</head>

<body class="bodyClass">
	<header class="headerBody">
		<label>您目前有&nbsp;</label><label id="goldCount"><?php echo ($cointCount); ?></label><label>&nbsp;个金币</label>
	</header>
	<section class="body">
		<div class="bodyHeader">
			<h1 align="center">第一关</h1>
			<h3 align="center">第一题</h3>
		</div>
		<div>
			<div class="boyImg">
				<canvas id="myCanvas" class="mycanvas" width="300" height="590"></canvas>
				<img class="boyAnswerClass" id="answerCanvas" width="287" height="152"
					src="/WishListTest2/Public/image/cut/bright.png" />
					<div class="coinDiv" id="coinDiv" style="background-color: white">
					<div>
						<img class="coinClass" id="coinClass" width="68" height="68"
							src="/WishListTest2/Public/image/cut/coin.png" />
					</div>
					<div id="coinMes" class="coinMes">获得2个金币</div>
					<div>
						<a class="getCoinButton" id="getCoinButton" href=""></a>
					</div>
				<script>
					var myCanvas = document.getElementById('myCanvas');
					var gray = myCanvas.getContext('2d');
					var msg1 = "亲！";
					var msg2 = "选择好了来刮我呀！";
					gray.beginPath();
					gray.fillStyle = "#e3e9e9";
					gray.fillRect(3, 400, 294, 188);

					gray.font = "24px 黑体";
					gray.fillStyle = "#00dcf0";
					gray.fillText(msg1, 30, 480);
					gray.fillText(msg2, 50, 520);

					//var imageObj = new Image();

					//imageObj.onload = function() {
					// gray.drawImage(imageObj, 3, 138,294,188);
					// };
					//  imageObj.src = '2.png';
					gray.closePath();
					gray.globalCompositeOperation = "destination-out";
					
					function showResult() {
						var canvas = document.getElementById('answerCanvas');
						var coinImg = document.getElementById('coinClass');
						var coinMes = document.getElementById('coinMes');
						var getCoinButton = document.getElementById('getCoinButton');
						var coinDiv = document.getElementById('coinDiv');	
						
						canvas.style.display = "none";
						coinImg.style.display="inline-block";
						coinMes.style.display="inline-block";
						getCoinButton.style.display="inline-block";
						coinDiv.style.margin="260px 0px 0px";
					}


					//myCanvas.addEventListener('touchstart', function (e) {
					//myCanvas.addEventListener('touchmove', function(e){
					myCanvas
							.addEventListener(
									'touchmove',
									function(e) {
										//gray.clearRect(e.targetTouches[0].clientX, e.targetTouches[0].clientY, 30, 30);
										e.preventDefault();
										var offsetX = myCanvas.offsetLeft+3, offsetY = myCanvas.offsetTop+150;
										var x = (e.targetTouches[0].clientX
												+ document.body.scrollLeft || e.pageX)
												- offsetX || 0, y = (e.targetTouches[0].clientY
												+ document.body.scrollTop || e.pageY)
												- offsetY || 0;
										gray.beginPath();
										gray.fillStyle = "#f00";
										//gray.arc(e.targetTouches[0].clientX, e.targetTouches[0].clientY, 20, 0, Math.PI*2);
										gray.arc(x, y, 20, 0, Math.PI * 2);
										gray.fill();
										gray.closePath();
										//});
									})

					myCanvas.addEventListener('touchend', function(e) {
						e.preventDefault();
						var num = 0;
						var datas = gray.getImageData(3, 400, 294, 188);
						for ( var i = 0; i < datas.data.length; i++) {
							if (datas.data[i] == 0) {
								num++;
							}
							;
						}
						;
						if (num >= datas.data.length * 0.4) {
							gray.fillRect(3, 138, 294, 188);
							myCanvas.height = 0;
							myCanvas.width = 0;
							var canvas = document.getElementById('answerCanvas');
							canvas.style.display = "inline-block";
							//window.setTimeout("showResult()", 1000);
							
								
							
							
							//var context = canvas.getContext('2d');
							//var imageObj = new Image();

							//imageObj.onload = function() {
							// context.drawImage(imageObj, 3, 138,287,152);
							// };
							//imageObj.src = '3.png';

						}
						;
					});
				</script>
			</div>
		</div>
		<div class="wrapper">
			<label class="label"> <span class="mockradio"></span> 
			<input class="radiobox" name="color" type="radio" value="0" /> 
			<span class="txt">白色</span>
			</label> 
			<label class="label"> <span class="mockradio"></span> 
			<input class="radiobox" name="color" type="radio" value="1" /> 
			<span class="txt">红色</span>
			</label> 
			<label class="label"> <span class="mockradio"></span> 
			<input class="radiobox" name="color" type="radio" value="2" /> 
			<span class="txt">红色</span>
			</label> 
			<label class="label"> <span class="mockradio"></span> 
			<input class="radiobox" name="color" type="radio" value="3" /> 
			<span class="txt">红色</span>
			</label> 
			<label class="label"> <span class="mockradio"></span> 
			<input class="radiobox" name="color" type="radio" value="4" /> 
			<span class="txt">红色</span>
			</label> 
		</div>
		<div>
			<a class="sumbitButton" href=""></a>
		</div>
	</section>
	<footer>
		<a class="duiHuanButton" href=""></a>
	</footer>
</body>
</html>