<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>小火慢炖</title>
		<link rel="shortcut icon" href="img/boy.ico" />
		<link rel="stylesheet" type="text/css" href="css/common.css" />
		<link rel="stylesheet" type="text/css" href="css/information.css" />
		<script>
			function mydetail() {
				window.location.href = "introduction.php";
			}
		</script>
		<?php 
		header("content-type:text/html;charset=utf8");
		include 'mysql.php';
		$id=$_REQUEST["id"];
		$val=getNewsByID($id);
		?>
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
				<div class="eason">
					<p>我藏起来的秘密</p>
					<p>在每一天清晨里</p>
					<p>暖成咖啡 安静的拿给你</p>
					<p>愿意 用一支黑色的铅笔</p>
					<p>画一出沉默舞台剧</p>
					<p>灯光再亮 也抱住你</p>
					<p>愿意 在角落唱沙哑的歌</p>
					<p>再大声也都是给你</p>
					<p>请用心听 不要说话</p>
					<p2>----陈奕迅</p2>
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
				<div id="title"><?php  echo $val["title"]?></div>
				<div id="info">
					发布人:<?php  echo $val["pubname"]?>&nbsp;&nbsp;&nbsp;&nbsp;时间:<?php  echo $val["pubtime"]?>
				</div>
				<div id="article">
					<p>&nbsp;</p>
					<?php  echo $val["content"]?>
				</div>
				<div id="others">
					阅读量:<?php  echo $val["total"]?>&nbsp;&nbsp;&nbsp;&nbsp;来源:<?php  echo $val["source"]?>
				</div>
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