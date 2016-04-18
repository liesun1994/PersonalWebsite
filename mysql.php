<?php
header("content-type:text/html;charset=utf-8");

function DBOpen(){
	$link = @mysql_connect("localhost:3306","root","sniper941010") or die("数据库连接错误".mysql_error());
	$res=@mysql_select_db("liesun",$link) or die("数据库连接错误2".mysql_error());
	mysql_query("set names utf-8");
}
function DBClose(){
	mysql_close();
}
function getNewsByID($id){
	DBOpen();
	$result=mysql_query("select * from news where id=".$id);
	$rs=mysql_fetch_array($result);
	return $rs;
}
function getHotNews(){
	DBOpen();
	$query="select id,title from news order by total desc  limit 0,5";
	$result=mysql_query($query);
	echo "<div class=\"hot\"><p class=\"rmenu\">最热文章</p><ul>";
	$i=1;
	while(($rs=mysql_fetch_array($result))){
		echo "<li><div class=\"iicon i".$i."\">".$i.".</div><a href=\"information.php?id=".$rs["id"]."\">".$rs["title"]."</a></li>";
		$i++;
	}
	echo "</ul></div>";
}
function  getRecentNews(){
	DBOpen();
	$query="select id,title from news order by pubtime desc  limit 0,5";
	$result=mysql_query($query);
	echo "<div class=\"recent\"><p class=\"rmenu\">最热文章</p><ul>";
	$i=1;
	while(($rs=mysql_fetch_array($result))){
		echo "<li><div class=\"iicon i".$i."\">".$i.".</div><a href=\"information.php?id=".$rs["id"]."\">".$rs["title"]."</a></li>";
		$i++;
	}
	echo "</ul></div>";
}
function getFourNews(){
	DBOpen();
	$query="select id,title,content,pubname,pubtime from news where checked=0 order by total desc limit 0,4";
	$result=mysql_query($query);
	$j=1;
	while(($rs=mysql_fetch_array($result))){
		echo "<div class=\"cshort\"><div class=\"cimg\"><img src=\"img/".$j.".jpg\" class=\"cimage\" /></div>";
		echo "<div class=\"cinfo\"><div class=\"ctitle\"><a href=\"information.php?id=".$rs["id"]."\">".$rs["title"]."</a></div>";
		echo "<div class=\"ccontent\">".$rs["content"]."</div><div class=\"cdetail\">".$rs["pubname"]."&nbsp;&nbsp;&nbsp;&nbsp;发布时间:".substr($rs["pubtime"],0,10)."&nbsp;&nbsp;&nbsp;&nbsp;";
		echo "</div></div></div>";
		$j++;
	}
}
function  getReplyByPage($pagenow){
	DBOpen();
	$query="call sp_page(".$pagenow.",4,'r.id,r.content,r.rtime,u.nickname,u.img','reply as r inner join users as u where r.rid=u.id','order by rtime desc')";
	$result=mysql_query($query);
	$j=1;
	while(($rs=mysql_fetch_array($result))){
		echo "<div class=\"reply\"><div class=\"rimage\">";
		echo "<img src=".$rs["img"]." class=\"mimage\"/></div><div class=\"info\">";
		echo "<div class=\"rname\">".$rs["nickname"]."</div><div class=\"rinfo\">".$rs["content"]."</div>";
		echo "<div class=\"rtime\">".$rs["rtime"]."</div></div></div>";
	}
	DBClose();
}
function getListByCondition($condition,$sid,$pagenow){
	DBOpen();
	$query="call sp_page(".$pagenow.",2,'id,title,pubname,pubtime','news where";
	if($sid==1){
		$query=$query." ntype=\'".$condition."\'','order by total desc')";
	}else if($sid==2){
		$query=$query." content like\'%".$condition."%\'','order by total desc')";
	}
	//echo $query;
	$result=mysql_query($query);
	while(($rs=mysql_fetch_array($result))){
		echo "<div class=\"mlist\"><ul><li class=\"ltitle\"><a href=\"information.php?id=".$rs["id"]."\">".$rs["title"]."</a></li>";
		echo "<li>|</li><li class=\"ltype\">".$rs["pubname"]."</li><li>|</li><li class=\"ltime\">".$rs["pubtime"]."</li></ul></div>";
	}
	DBClose();
}
function  getListPage($condition,$sid){
	DBOpen();
	$query="select count(*) as total from news";
	if($sid==1){ //sid为1,doctype类型
		$query=$query." where ntype='".$condition."'";
	}else if($sid==2){ //sid为2,search类型
		$query=$query." where content like '%".$condition."%'";
	}
// 	echo $query;
	$result=mysql_query($query);
	$total=0;
	while(($rs=mysql_fetch_array($result))){
		$total=$rs["total"];
	}
	// 	//if()
		// 	$page=(int)($total/11)+1;
	$page=0;
// 	if($total%11==0){
// 		$page=(int)($total/11);
// 	}else{
// 		$page=(int)($total/11)+1;
// 	}
	
	if($total%2==0){
		$page=(int)($total/2);
	}else{
		$page=(int)($total/2)+1;
	}
	echo "<div id=\"pageNum\">";
	for($i=1;$i<=$page;$i++){
		echo "<div class=\"page \p".$i."\"><a onclick=\"getFenye(this.text)\">".$i."</a></div>";
	}
	echo "</div>";
	DBClose();
}
function getReplyPage(){
		DBOpen();
		$query="select count(*) as total from reply";
		$result=mysql_query($query);
		$total=0;
		while(($rs=mysql_fetch_array($result))){
			$total=$rs["total"];
		}
$page=0;
	if($total%4==0){
		$page=(int)($total/4);
	}else{
		$page=(int)($total/4)+1;
	}
		echo "<div id=\"pageNum\">";
		for($i=1;$i<=$page;$i++){
			echo "<div class=\"page \p".$i."\"><a onclick=\"getFenye(this.text)\">".$i."</a></div>";
		}
		echo "</div>";
		DBClose();
}