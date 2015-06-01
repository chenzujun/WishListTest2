<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<meta name="viewport"
	content="initial-scale=1.0, width=device-width,minimum-scale=1.0,maximum-scale=1.0, user-scalable=no" />
<title>Wish List猜颜色小游戏</title>
<link rel="stylesheet" type="text/css" href="/WishListTest2/Public/css/gameTest.css">
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
							document.getElementById("sumbitButton").style.background = "#ff9c00";
							document.getElementById("sumbitButton").disabled=false;
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

<body>
	<header class="headerDiv">
		<label>您目前有&nbsp;</label><label id="goldCount">5</label><label>&nbsp;个金币</label>
	</header>
	<section class="SectionDiv">
		<div class="bodyHeader">
			<p class="levelNum" align="center">第一关</p>
			<p class="quesNum">第一题</p>
		</div>
		<div>
			<div class="girlImgDiv" id="girlImgDiv" >
				 <img src="/WishListTest2/Public/image/boy/1.png" id="girlImg" class="girlImg" />
				 <canvas id="myCanvas" class="mycanvas" ></canvas> 
				<img class="boyAnswerClass" id="answerCanvas" width="137.76" height="72.96"
					src="/WishListTest2/Public/image/cut/bright.png" />
				<div class="coinDiv" id="coinDiv" style="background-color: white" >
					<div>
						<img class="coinClass" id="coinClass" width="34" height="34"
							src="/WishListTest2/Public/image/cut/coin.png" />
					</div>
					<div id="coinMes" class="coinMes">获得2个金币</div>
					<div>
						<a  href=""><img class="getCoinButton" id="getCoinButton" alt="" src="/WishListTest2/Public/image/cut/getPresent.png"></a>
					</div>
				</div>
				<script>
					var myCanvas = document.getElementById('myCanvas');
					var gray = myCanvas.getContext('2d');
					//var girlImg = document.getElementById('girlImg');
					//var girlImgDiv = document.getElementById('girlImgDiv');
					//var w1 = (document.documentElement.clientWidth)*45%;
					//var h1 = w1*(590/300);
					//girlImgDiv.style.width = w1;
					//girlImgDiv.style.height = h1;
					
					var w = 144,
						h = 283;
						
						//girlImgDiv.width = w;
					//girlImgDiv.height = h;
					
					myCanvas.width = w;
					myCanvas.height = h;
					
					var msg1 = "亲！";
					var msg2 = "选择好颜色点确定！";
					gray.beginPath();
					gray.fillStyle = "#e3e9e9";
					gray.fillRect(2, 202, 140, 80);

					gray.font = ".875rem 黑体";
					gray.fillStyle = "#00dcf0";
					gray.fillText(msg1, 10, 232);
					gray.fillText(msg2, 20, 262);

					
					
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
						coinDiv.style.display="inline-block";
						coinDiv.style.width="150px";
						coinDiv.style.height="130px";
						coinDiv.style.margin="40% 0 10% -3.5%";
						
					}

					//myCanvas.addEventListener('touchstart', function (e) {
					//myCanvas.addEventListener('touchmove', function(e){
					function getColor(){
					
					var footerDiv = document.getElementById('footerDiv');
					footerDiv.style.display = "none";
					
					msg1 = "亲！";
					msg2 = "来刮我啊！";
					gray.fillStyle = "#e3e9e9";
					gray.fillRect(2,202, 140, 80);
					gray.font = ".875rem 黑体";
					gray.fillStyle ="#00dcf0";
					gray.fillText(msg1, 10, 232);
					gray.fillText(msg2, 20, 262);
					gray.closePath();
					gray.globalCompositeOperation = "destination-out";
					myCanvas.addEventListener(
									'touchmove',
									function(e) {
										//gray.clearRect(e.targetTouches[0].clientX, e.targetTouches[0].clientY, 30, 30);
										e.preventDefault();
										var offsetX = myCanvas.offsetLeft + 2, offsetY = myCanvas.offsetTop + 80;
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
						var datas = gray.getImageData(2, 202, 140, 80);
						for ( var i = 0; i < datas.data.length; i++) {
							if (datas.data[i] == 0) {
								num++;
							}
							;
						}
						;
						if (num >= datas.data.length * 0.4) {
							gray.fillRect(2, 202, 140, 80);
							myCanvas.height = 0;
							myCanvas.width = 0;
							var canvas = document
									.getElementById('answerCanvas');
							canvas.style.display = "inline-block";
							window.setTimeout("showResult()", 1000);
						}
						;
					});}
				</script>
			</div>
		</div>
		
	</section>
	
	<footer class="footerDiv" id="footerDiv">
	<div class="wrapper">
			<?php if(is_array($colorList)): foreach($colorList as $key=>$colorItem): ?><label class="label">
			<span class="mockradio"></span>
				<input class="radiobox" name="color" type="radio" value="<?php echo ($colorItem['value']); ?>"/>
			<span class="txt"><?php echo ($colorItem['color']); ?></span>
			</label><?php endforeach; endif; ?>

		</div>
		<div class="sumbitDiv">
			<input type="button" disabled="disabled" onclick="getColor()" value="确定" id="sumbitButton" class="sumbitButton"/>	
		</div>
		<a  href="<?php echo U('Index/showPresentInfo');?>" >
				<img class="duiHuanButton" alt="" src="/WishListTest2/Public/image/cut/cpresent.png">
		</a>
	</footer>
</body>
</html>