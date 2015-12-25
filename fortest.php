<?php
include "connect_db.php";


 //* 데이터 베이스에 존재하는 테이블 검색 */
		$tb_name = mysql_list_tables("apm_db");
		$tb_count = mysql_num_rows($tb_name);
		//echo mysql_tablename($tb_name,0);
		
		echo $tb_count;
	echo mysql_fetch_array($tb_name);		
?>