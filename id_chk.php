<?php
	$fuserid=$_GET['fuserid'];
	include "connect_db.php";
	
	$sql = "select count(*) from usr_tbl where userid='$fuserid' ";
	$res = mysql_query($sql, $connect);
	$rs = mysql_fetch_array($res);
	$num = $rs[0];
	mysql_close();
?>

<html>
	<head>
	<title> 아이디 중복검사 </title>
	</head>

<body>
	<form name="chkid_form">
	<table width="350" border="1" bordercolor="red" align="center" cellpadding="5">
	
	<tr bgcolor="#3300cc">
		<td><font color="#fff"> 아이디 중복 검사 </font>
		</td>
	</tr>
	
	<tr height="120">
	<td align="center">
	
	<?php if($num>0) { ?>
	[ <?php echo $fuserid; ?> ] 는 사용중인 아이디입니다. <br />
								다른 아이디를 선택하세요. <br><br>
	<?php } else {?>
	[ <?php echo $fuserid; ?> ] 는 사용할 수 있는 아이디 입니다. <br><br>

	<?php } ?>

<input type="button" name="button" value="close" onclick="self.close();"></td>
</tr>
</table>
</form>
</body>
</html>