<?
    $userid = $_REQUEST['userid'];
    $passwd = $_REQUEST['passwd'];

    $db = mysqli_connect('localhost','root','gmldnjs0010','board');

    if(!$db){
        echo "데이터베이스 접속 오류";
        exit(1);
    }

    if($cmd == 1){
        $sql = "delete from user where userid='{$userid}'";
        mysqli_query($sql);
        echo "<script>document.location.href='manage.php';</script>";
    }

    else if($cmd == 2){
        $sql = "select * from user where userid='{$userid}'";
        mysqli_query($sql);
        $row = mysqli_fetch_array($res);
?>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h3>회원 정보 수정</h3>
    <form name="update" method="post" action="manage_update.php">
    <input type="hidden" name="cmd" value="3">
    <input type="hidden" name="userid" value="<?=$row['userid']?>">
    <table border="0">
        <tr>
            <td>아이디</td>
            <td><?=$row['userid']?></td>
        </tr>
        <tr>
            <td>이름</td>
            <td><input type="text" name="name" size="10"
                       style="width:150px;" value="<?=$row['name']?>"></td>
        </tr>
        <tr>
            <td>이메일</td>
            <td><input type="text" name="email" size="50"
                       style="width:300px;" value="<?=$row['email']?>"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="변경"> </td>
        </tr>
    </table>
    </form>
</body>
</html>
<?
    }

    else if($cmd == 3){
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];

        $sql = "update user set name='{$name}',email='{$email}'
            where userid='{$userid}'";
        mysqli_query($sql);

        echo "<script>document.location.href='manage.php';</script>";
    }
?>
