<!DOCTYPE html>
<html>
<?php
	header("content-type:text/html;charset=utf-8");
	include 'mysql.php';
?>
	<head>
		<meta charset="UTF-8">
		<title>玩泥巴男孩的回复</title>
		<link rel="shortcut icon" href="img/boy.ico" />
		<link rel="stylesheet" type="text/css" href="css/common.css" />
		<link rel="stylesheet" type="text/css" href="css/reply.css" />
		<script src="js/reply.js"></script>
	</head>

	<body>
		<div id="back">
			<div id="head">
				<div id="hleft">
					<ul>
						<li class="rnav"><a href="index.php">首页</a></li>
						<li class="rstep">|</li>
						<li class="rnav"><a href="reply.php">留言中心</a></li>
					</ul>
				</div>
				<div id="hright">
					<div>登录</div>
					<div>欢迎你,***</div>
					<div>登出</div>
				</div>
			</div>
			<div id="left">
				<div id="rcontent">
					<textarea id="rtextarea"  name="replyinfo"  maxlength="140"  placeholder="请输入140字以内的评论..."/>
					<br>
					<input type="submit" value="发表评论" id="rsubmit" />
					<input type="hidden" value="1" name="userid" />
				</div>
				<div id="rreply">
				</div>
				<?php 
					getReplyPage();
				?>
			</div>
			<div id="right">
				<p1>一棵花开的树</p1>
				<p>如何让你遇见我</p>
				<p>在我最美丽的时刻 为这</p>
				<p>我已在佛前求了五百年</p>
				<p>求佛让我们结一段尘缘</p>
				<p>佛于是把我化作一棵树</p>
				<p>长在你必经的路旁</p>
				<p>阳光下慎重地开满了花</p>
				<p>朵朵都是我前世的盼望</p>
				<p>当你走近 请你细听</p>
				<p>那颤抖的叶是我等待的热情</p>
				<p>而当你终于无视地走过</p>
				<p>在你身后落了一地的</p>
				<p>朋友啊 那不是花瓣</p>
				<p>是我凋零的心</p>
				<p2>----席慕蓉</p2>
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