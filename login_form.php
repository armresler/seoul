<?php
include "session.php";

if($ses_userid != "")
{
echo "<script>
location.replace(login.php);
</script>";
die;
}
?>

<html>
<head>
<title> Login </title>

<script>
function chk_logform(){
	if(login_form.fuserid.value==""){
		alert('Input ID');
		login_form.fuserid.focus();
		return false;
	}
	else if(login_form.fpasswd.value==""){
		alert('Input Password');
		login_form.fpasswd.focus();
		return false;
	}
	else{
		return true;
	}
}
</script>
</head>


<body>

<form name="login_form" action="login.php" method="post" onsubmit="return chk_logform();">
ID<input type="text" name="fuserid" id="fuserid" size="19"><br />
PW<input type="password" name="fpasswd" id="fpasswd" size="20"><br />
<input type="submit" name="submit" value="login">
<input type="reset" name="reset" value="Reset"><br />
</form>
</body>
</html>