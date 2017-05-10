<html>
  <head>
    <meta charset="UTF-8">
    <title>Login form</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
	<form action="check_login.php" method="post">
	<table class="login_table">
	<tr>
	<td><font size="6">로그인</td>
	</tr>
	<tr>
	<td>&nbsp ID <span>*</span></td>
	<td><input type="text" name="l_name" id="l_name" placeholder="ID or email"></td>
	</tr>
	<tr>
	<td>&nbsp Password <span>*</span></td>
	<td><input type="password" name="l_password" id="l_password" placeholder="password"></td>
	</tr>
	<tr>
	<td> <small>Keep Me</small><input type="checkbox" name="keep" value="true"></td>
	<td><input type="submit" value="로그인"> &nbsp <input type="submit" value="회원가입" onclick="location.href='../join-form/join.php'"></td>
	</tr>
	</table>
	</form>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>
  </body>
</html>