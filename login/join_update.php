<?
	$name = $_REQUEST['name'];
	$userid = $_REQUEST['userid'];
	$passwd = $_REQUEST['passwd'];
	$email = $_REQUEST['email'];
	error_log("dsadas");
	$db = mysqli_connect('localhost','root','gmldnjs0010','board');

	if(!$db){
		echo "데이터베이스 접속 오류";
		exit(1);
	}
	
	$sql = "select * from user where userid='{$userid}'";
	$res = mysqli_query($sql);
	
	if(mysqli_num_rows($res)>0){
		echo "<script>alert('이미 사용중인 아이디 입니다.');";
		echo "history.go(-1);</script>";
		exit(1);
	}
	
	$sql = "insert into user values('{$userid}', password('{$passwd}'),'{$name}','{$email}');";
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
<a href="login.html">로그인 페이지로 이동</a><br>
</body>
</html>