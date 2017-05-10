<?
	$l_name = $_REQUEST['l_name'];
	$l_id = $_REQUEST['l_id'];
	$l_password = $_REQUEST['l_password'];
	$l_email = $_REQUEST['l_email'];
	
	$db = mysqli_connect('localhost','root','gmldnjs0010','board');
	
	if(!$db){
		echo "데이터베이스 접속 오류";
		exit(1);
	}
	
	mysqli_query("set names utf8");
	
	$sql = "select * from user where userid='{$l_id}'";
	$res = mysqli_query($sql);
	
	if(mysql_num_rows($res)>0){
		echo "<script>alert('이미 사용중인 아이디 입니다.');";
		echo "history.go(-1);</script>";
		exit(1);
	}
	
	$sql = "insert into user values('{$l_id}', l_password('{$l_password}'),'{$l_name}','{$l_email}');";
	$res = mysqli_query($sql);

	if(!$res){
		echo "<script>alert('DB입력 오류.');";
		echo "history.go(-1);</script>";
		exit(1);
	}
?>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<?=$name?>님, 가입되었습니다.<br><br>
<a href="../login-form/login.php">로그인 페이지로 이동</a><br>
</body>
</html>