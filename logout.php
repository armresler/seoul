<?php

include "session.php"; 
unset($_SESSION['ses_userid']); 
unset($_SESSION['ses_pass']); 
echo "로그아웃 되었습니다.<br />"; 
echo "<script> alert('[logout] \\r\\n 로그인 창으로 이동할까요?'); location.replace('login_form.php'); </script>"; 

?>