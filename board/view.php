<?
	require_once("dbconfig.php");
	$bNo = $_GET['bno'];

	if(!empty($bNo) && empty($_COOKIE['board_free_' . $bNo])) {
		$sql = 'update board_free set b_hit = b_hit + 1 where b_no = ' . $bNo;
		$result = $db->query($sql); 
		if(empty($result)) {
			?>
			<script>
				alert('오류가 발생했습니다.');
				history.back();
			</script>
			<?php 
		} //else {
			//setcookie('board_free_' . $bNo, TRUE, time() + (60 * 60 * 24), '/');
		//}
	}
	
	$sql = 'select b_title, b_content, b_date, b_hit, b_id from board_free where b_no = ' . $bNo;
	$result = $db->query($sql);
	$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>게시판</title>
	<link rel="stylesheet" href="normalize.css" />
	<link rel="stylesheet" href="board.css" />
	<script src="jquery-2.1.3.min.js"></script>
</head>
<center>
<body>
<font size="5">글 보기</font><br>
	<table border="1" width="50%">
	<tr>
	<td>
	<article class="boardArticle">
		<div id="boardView">
			<div id="boardInfo">
			<tr>
				<td width="10%" align="center"><span id="boardID">작성자</td>
				<td width="20%" align="center"><?php echo $row['b_id']?><br></td>
				<td width="10%" align="center"><span id="boardDate">작성일</td>
				<td width="20%" align="center"><?php echo $row['b_date']?></span><br></td>
				<td width="10%" align="center"><span id="boardHit">조회</span></td><br>
				<td width="10%" align="center"><?php echo $row['b_hit']?></td>
			</tr>
			<tr>
				<td width="10%" align="center"><id="boardTitle">제목<font size="3"></td>
				<td colspan="5">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['b_title']?></td>
			</tr>
			<tr>
				<td height="500" align="center">내용</td>
				<td colspan="5" valign="top">&nbsp;<div id="boardContent"><?php echo $row['b_content']?></div></td>
			</tr>
			<br>


		</div>
		</div>
		<div class="btnSet">
			<a href="write.php?bno=<?php echo $bNo?>">수정</a>
			<a href="delete.php?bno=<?php echo $bNo?>">삭제</a>
			<a href="index.php">목록</a><br><br>
		</div>
		</article>
	</td>
	</tr>
	</table>
	<font size="5">댓글</font>
	<br>
	<table border="1">
		<tr>
			<td><div id="boardComment"><?php require_once('comment.php')?></div></td>
		</tr>
	</table>
</body>
</center>
</html>