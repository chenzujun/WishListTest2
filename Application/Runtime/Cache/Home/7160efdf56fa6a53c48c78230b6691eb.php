<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta charset="utf-8">
<meta name="viewport"
	content="initial-scale=1.0, width=device-width, height=device-height,minimum-scale=1.0,maximum-scale=1.0, user-scalable=no" />
<title>Wish List礼品兑换</title>
<link rel="stylesheet" type="text/css" href="/WishListTest2/Public/css/getPresentInfoPage.css">
<script>
	
	window.onload = function() {
    var PreBtn = document.getElementById("getPreBtn");
    
    PreBtn.ontouchstart = function() {
      
        this.style.backgroundColor = "#ff8200";
    };
    
    PreBtn.ontouchend = function() {
        
        this.style.backgroundColor = "#ff9c00";
    };
	};
	</script>
</head>
<header class="headerDiv">
	<a class="backButton" href="javascript:history.go(-1);">&lt;</a> <span class="title">换购礼品</span>
</header>
<section class="sectionDiv">
	<div class="box">
		<div class="pic-box">
			<img src="/WishListTest2/Public/image/cut/coin.png" class="pic" />
			<div class="pic-info">
				<p class="tit">iphone5S手机壳一个</p>
				<p class="tip">[包邮]&nbsp;iphone5S手机壳一个</p>
				<div class="btn-box">
					<span class="score">10金币</span> 
					<input type="button"  onclick="" value="立即换购" id="getPreBtn" class="getPreBtn"/>
				</div>
			</div>
		</div>
		<div class="text-box">
			<span class="num">库存8个</span> <span class="time">有效期至：2015-06-08</span>
		</div>
	</div>


	<div class="box">
		<div class="pic-box">
			<img src="/WishListTest2/Public/image/cut/gChoosed.png" class="pic" />
			<div class="pic-info">
				<p class="tit">iphone5S手机壳一个</p>
				<p class="tip">[包邮]&nbsp;iphone5S手机壳一个</p>
				<div class="btn-box">
					<span class="score">10金币</span> <input type="button"  onclick="" value="立即换购" id="getPreBtn" class="getPreBtn"/>
				</div>
			</div>
		</div>
		<div class="text-box">
			<span class="num">库存8个</span> <span class="time">有效期至：2015-06-08</span>
		</div>
	</div>
	<div class="box">
		<div class="pic-box">
			<img src="/WishListTest2/Public/image/cut/coin.png" class="pic" />
			<div class="pic-info">
				<p class="tit">iphone5S手机壳一个</p>
				<p class="tip">[包邮]&nbsp;iphone5S手机壳一个</p>
				<div class="btn-box">
					<span class="score">10金币</span> <input type="button"  onclick="" value="立即换购" id="getPreBtn" class="getPreBtn"/>
				</div>
			</div>
		</div>
		<div class="text-box">
			<span class="num">库存8个</span> <span class="time">有效期至：2015-06-08</span>
		</div>
	</div>
</section>
<body>
</body>
</html>