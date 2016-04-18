<?php
header("content-type:text/html;charset=utf-8");
include 'mysql.php';
$sinfo=$_REQUEST["sinfo"];
$sid=$_REQUEST["sid"];
$pagenow=$_REQUEST["pagenow"];
getListByCondition($sinfo, $sid, $pagenow);