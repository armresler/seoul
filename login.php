<?php
include "session.php";
include "connect_db.php";

$sql = "select *from user_tbl where userid = '$fuserid' and passwd = '$fpasswd' ";
$res = mysql_query($sql, $connect);
$list = mysql_num_rows($res);

if($list)
{
$row = mysql_fetch_array($res);
$ses_userid = $row[userid];
$ses_pass = $row[passwd];
echo "로그인을 성공하였습니다. ";
}
else{
echo "비밀번호가 틀립니다.<br />";
echo "<script>
alert('[로그인 실패]\\r\\n 로그인 화면으로 이동할까요?');
location.replace('login_form.php');
</script>";
}
mysql_close($connect);
?>

<html>
<head>
<title>로그인 성공 메시지</title>
<form name="login_form_msg">
<?php echo $row[name] ?> 님께서 로그인 하셨습니다.<br />

아이디 <?php echo $ses_userid ?> 님의 성공적인 로그인을 축하 <br />

<input type="button" name="Button" value="logout" onclick="location.replace('logout.php')">
</form>
</body>
</html>