<?php
	$com = $_GET["com"];
	$cno = $_GET["cno"];
	$url = "http://api.kuaidiwo.cn:88/api/?key=yevkZpP1VVTl&type=html&com=".$com."&cno=".$cno;
	
	$res = file_get_contents($url);
	echo $res;




?>