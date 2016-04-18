<!DOCTYPE html>
<html>
<?php
	header("content-type:text/html;charset=utf-8");
	include 'mysql.php';
?>
	<head>
		<meta charset="utf-8" />
		<link rel="shortcut icon" href="img/boy.ico" />
		<link rel="stylesheet" type="text/css" href="css/common.css" />
		<link rel="stylesheet" type="text/css" href="css/index.css" />
		<title>玩泥巴的男孩的个人主页</title>
		<script>
			if (top.location != location) {
				top.location.href = location.href;
			}

			function mydetail() {
				window.location.href = "introduction.php";
			}
		</script>
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
				<div class="music">
					<div class="mmusic">
						<iframe frameborder="no" border="0" marginwidth="0" marginheight="0" width=280 height=320 src="http://music.163.com/outchain/player?type=0&id=100840618&auto=1&height=430"></iframe>
					</div>
				</div>
				<div class="contact">
					<!--<p style="font-size:15px;text-align: center;">_联系方式_</p>-->
					<div class="mcontact">
						<i class="wechat"></i>
						<span class="info">liesun1994</span>
					</div>
				</div>
				<div class="share">
					<div class="bdsharebuttonbox">
						<a href="#" class="bds_more" data-cmd="more"></a>
						<a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
						<a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
						<a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
						<a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a>
						<a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
					</div>
					<script>
						window._bd_share_config = {
							"common": {
								"bdSnsKey": {},
								"bdText": "",
								"bdMini": "1",
								"bdMiniList": ["mshare", "qzone", "tsina", "weixin", "renren", "tqq", "bdxc", "tieba", "douban", "sqq", "youdao", "people", "xinhua", "mail", "isohu", "wealink", "ty", "fbook", "twi", "linkedin", "h163", "evernotecn", "copy", "print"],
								"bdPic": "",
								"bdStyle": "1",
								"bdSize": "32"
							},
							"share": {},
							"image": {
								"viewList": ["qzone", "tsina", "tqq", "renren", "weixin"],
								"viewText": "分享到：",
								"viewSize": "16"
							},
							"selectShare": {
								"bdContainerClass": null,
								"bdSelectMiniList": ["qzone", "tsina", "tqq", "renren", "weixin"]
							}
						};
						with(document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~(-new Date() / 36e5)];
					</script>
				</div>
			</div>
			<div class="content">
				<div class="welcome">
					<p1>欢迎来到我的小站</p1>
				</div>
				<?php 
				getFourNews();
				?>
			</div>
			<div class="right">
				<div class="mmanager">
					<ul>
						<li class="minfo"><a href="reply.php">留言中心</a></li>
						<li>|</li>
						<li class="minfo"><a href="manager.php">个人管理</a></li>
					</ul>
				</div>
				<div class="search">
					<form action="list.php" method="get">
						<p>请输入搜索信息:</p>
						<input type="text" placeholder="请输入搜索信息" id="searchInfo" name="sinfo" />
						<input type="hidden"  name="sid" value="2">
						<input type="submit"  style="width:40px;height: 28px;" id="ssubmit" />
					</form>
				</div>
				<?php 
				getHotNews();
				?>
				<?php 
				getRecentNews();
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