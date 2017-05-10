<?
    $userid = $_REQUEST['userid'];
    $passwd = $_REQUEST['passwd'];

    $db = mysqli_connect('localhost','root','gmldnjs0010','board');

    if(!$db){
        echo "데이터베이스 접속 오류";
        exit(1);
    }

    $sql = "select * from user order by userid";
    $res = mysqli_query($sql);
    $total = mysql_num_rows($res);
?>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h3>회원 관리</h3>
    <table bordercolor="#000000" width="600" border="1" cellspacing="0" cellpadding="5">
        <tr>
            <th width="60">번호</th>
            <th width="90">아이디</th>
            <th width="90">이름</th>
            <th>이메일</th>
            <th width="60">관리</th>
        </tr>
        <?
            for($i=0;$i<$total;$i++){
                $row = mysqli_fetch_array($res);
        ?>
        <tr>
            <td><?=($i+1)?></td>
            <td><?=$row['userid']?></td>
            <td><?=$row['name']?></td>
            <td><?=$row['email']?></td>
            <td>
                <a href="manage_update.php?cmd=1&userid=<?=$row['userid']?>">삭제</a>
                <a href="manage_update.php?cmd=2&userid=<?=$row['userid']?>">수정</a>
            </td>
        </tr>
        <? } ?>
    </table>
</body>
</html>
