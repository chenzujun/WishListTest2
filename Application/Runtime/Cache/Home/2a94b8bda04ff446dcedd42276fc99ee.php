<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport"
	content="initial-scale=1.0, width=device-width,minimum-scale=1.0,maximum-scale=1.0, user-scalable=no" />
<title>WishList 猜颜色小游戏</title>
<link rel="stylesheet" type="text/css"
	href="..//WishListTest2/Public/css/index.css">
</head>
<body class="bodyClass">

	<header class="headerDiv">
		<img class="titlePic" src="..//WishListTest2/Public/image/cut/title.png">
	</header>
	<section class="sectionDiv">
		<p>请选择男女:</p>
		<div class="box">
			<a class="girlButton" href="<?php echo U('Index/chooseSex','sex=1');?>"> 
				<img class="girlPic" src="..//WishListTest2/Public/image/girl/1.png" />
			</a> 
			<a class="boyButton" href="<?php echo U('Index/chooseSex','sex=2');?>"> 
			<img class="boyPic" src="..//WishListTest2/Public/image/boy/1.png" />
			</a>

		</div>
	</section>
	<footer class="footerClass">
		<a class="ruleButton" href="#"> 
		<img class="rulePic" src="..//WishListTest2/Public/image/cut/rule.png" />
		</a>
	</footer>

</body>
</html>