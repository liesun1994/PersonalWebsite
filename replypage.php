<?php
include 'mysql.php';
$pagenow=$_REQUEST["pagenow"];
getReplyByPage($pagenow);