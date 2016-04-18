<!DOCTYPE html>
<html>
<?php
	header("content-type:text/html;charset=utf-8");
	include 'mysql.php';
?>
	<head>
		<meta charset="UTF-8">
		<title>信息列表</title>
		<link rel="shortcut icon" href="img/boy.ico" />
		<link rel="stylesheet" type="text/css" href="css/common.css" />
		<link rel="stylesheet" type="text/css" href="css/list.css" />
		<script src="js/list.js"></script>
	</head>

	<body>
		<div class="back">
			<div class="left">
				<div class="icon">
					<div id="mhead" onclick="mydetail()">
						<!--<a href="introduction.html"><img src="img/my.png" alt="welcome" id="wimg" /></a>-->
						<!--<img src="img/my.png" alt="welcome" id="wimg" />-->
					</div>
					<div id="mint">
						<i>玩泥巴的男孩</i>
					</div>
				</div>
				<div class="mtype">
					<ul id="ltype">
						<li class="ntype"><a href="list.php?sinfo=doctype1&sid=1">小憩一会</a></li>
						<li class="nstep">|</li>
						<li class="ntype"><a href="list.php?sinfo=doctype2&sid=1">走走停停</a></li>
						<li class="nstep">|</li>
						<li class="ntype"><a href="list.php?sinfo=doctype3&sid=1">知识小记</a></li>
					</ul>
				</div>
				<div class="xuwei">
					<p>何必管一片海</p>
					<p>有多澎湃</p>
					<p>何必管那山岗</p>
					<p>它高在什么地方</p>
					<p>只愿这颗跳动不停的心</p>
					<p>永远有慈爱</p>
					<p>好让这世间冰冷的胸膛</p>
					<p>如盛开的暖阳</p>
					<p>旅人等在那里</p>
					<p>虔诚仰望着云开</p>
					<p>咏唱回荡那里</p>
					<p>伴着寂寞的旅程</p>
					<p>心中这一只鹰</p>
					<p>在哪里翱翔</p>
					<p>心中这一朵花</p>
					<p>它开在那片草原</p>
					<p2>----许巍</p2>
			</div>
				<div class="contact">
					<!--<p style="font-size:15px;text-align: center;">_联系方式_</p>-->
					<div class="mcontact">
						<i class="wechat"></i>
						<span class="info">liesun1994</span>
					</div>
				</div>
			</div>
			<div class="right">
				<div id="menu">
					<ul>
						<li id="mtitle">标题</li>
						<li>|</li>
						<li id="mtype">发布人</li>
						<li>|</li>
						<li id="mtime">时间</li>
					</ul>
				</div>
				<div id="listinfo">
				
				</div>
				
				<?php 
					$condition=$_REQUEST["sinfo"];
					$sid=$_REQUEST["sid"];
					getListPage($condition, $sid);
				?>
				
			</div>
			<div class="foot">
				<footer>
					<section class="copyright">
						Copyright &copy; 2015 - 2025 Liesun1994. All Rights Reserved.
						<br> 玩泥巴的男孩 &nbsp;所有
					</section>
				</footer>
			</div>
		</div>
	</body>

</html>