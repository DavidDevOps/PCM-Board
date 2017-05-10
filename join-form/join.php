<html>
<head>
<meta charset="UTF-8">
<script>
 function check()
 {
	var frm = document.register;
	
	if(!frm.l_name.value){
		alert("이름을 입력하세요.");
		frm.l_name.focus();
		return false;
	}
	
	if(!frm.l_password.value){
		alert("패스워드를 입력하세요.");
		frm.l_password.focus();
		return false;
	}
	
	if(!frm.l_email.value){
		alert("이메일을 입력하세요.");
		frm.l_email.focus();
		return false;
	}
	return true;
 }
</script>
<title>Login form</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
 <form action="join_update.php" method="post"
	name=register onsubmit="return check();">
  <table class="login_table">
   <tr>
	<td><font size="6">회원가입</td>
   </tr>
   <tr>
	<td>&nbsp Name <span>*</span></td>
	<td><input type="text" name="l_name" id="l_name" placeholder="username"></td>
   </tr>
   <tr>
	<td>&nbsp ID <span>*</span></td>
	<td><input type="text" name="l_id" id="l_id" placeholder="ID"></td>
   </tr>
   <tr>
	<td>&nbsp Password <span>*</span></td>
	<td><input type="password" name="l_password" id="l_password" placeholder="password"></td>
   </tr>
   <tr>
	<td>&nbsp Email <span>*</span></td>
	<td><input type="text" name="l_email" id="l_email" placeholder="Email"></td>
   </tr>
   <tr>
	<td></td>
	<td><input type="submit" value="Join"> &nbsp <input type="reset" value="reset"></td>
   </tr>
  </table>
 </form>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>
</body>
</html>
