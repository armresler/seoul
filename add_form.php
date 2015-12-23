<html>
	<head>
		<title>회원가입 페이지 </title>
	<script>
		
	function chk_input() {
		if(user_form.fuserid.value=="")
			{
			alert("Input your ID");
			user_form.fuserid.focus();
			return false;
		}
		else if(user_form.fname.value==""){
			alert("Input your Name");
			user_form.fname.focus();
			return false;
		}
		else if(user_form.fpasswd.value==""){
			alert("Input Password");
			user_form.fpasswd.focus();
			return false;
		}
		else if(user_form.fpasswd_re.value==""){
			alert("Input Password one more");
			user_form.fpasswd_re.focus();
			return false;
		}
		else if(user_form.fpasswd.value != user_form.fpasswd_re.value){
			alert("[Password] not match, please rewrite your PW");
			user_form.fpasswd.value="";
			user_form.fpasswd_re.value="";
			user_form.fpasswd.focus();
			return false;
		}
			
		else
			{
			return true;
			}
	}

	</script>
	</head>

<body>

<form name="user_form" action="add_db.php" method="post" onsubmit="return chk_input()">

ID <input type="text" name="fuserid" id="fuserid" size="12" maxlength="12" 
	onblur="if(fuserid.value!='') chk_id();">

<input type="button" name="button" value="ID check" onclick="chk_id();">

<script>

	function chk_id()
	{
	if(user_form.fuserid.value==''){
		alert('Input ID');
		user_form.fuserid.focus();
		}
	else{
		window.open('id_chk.php?fuserid='+user_form.fuserid.value,'IDwin','width=400,height=200');
		}
	}
</script>

<br />
Name <input type="text" name="fname" id="fname" size="12" maxlength="10"> <br /><br />

Password <input type="password" name="fpasswd" id="fpasswd" size="12" maxlength="10"> <br />

Confirming Password <input type="password" name="fpasswd_re" id="fpasswd_re" size="12" maxlength="10" onblur="chk_passwd()"> <br />

Sex <input type="radio" name="fsex" value="m" checked> Man 
<input type="radio" name="fsex" value="w"> Woman <br />
E-mail <input type="text" name="femail" size="30" maxlength="30"> <br />
<input type="submit" name="smt" value="가입하기"> 
<input type="reset" name="rst" value="다시작성">
</body>
</html>
