<?php
   	$host 	= "localhost";
	$user 	= "intercpseoul";
	$passwd = "1040";
	
	$connect = mysql_connect($host, $user, $passwd) or die ("mysql Server Connection Error");
	mysql_select_db('apm_db',$connect) or die ("DB Connection Error");
?>