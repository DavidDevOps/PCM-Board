<!--?
    $userid = $_REQUEST['userid'];
    $passwd = $_REQUEST['passwd'];

    $db = mysqli_connect('localhost','root','gmldnjs0010','board');

    if(!$db){
        echo "데이터베이스 접속 오류";
        exit(1);
    }

    $sql = "select * from user where userid='{$userid}'
        and passwd=password('{$passwd}');";
    $res = mysqli_query($sql);

    if(mysqli_num_rows($res) < 1){
        echo "<script>alert('아이디 또는 비밀번호가 올바르지 않습니다.');";
        echo "history.go(-1);</script>";
        exit(1);
    }

    $row = mysqli_fetch_array($res);

?--!>

<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<script>
    document.location.href="../board/index.php"
</script>
</body>
</html>
