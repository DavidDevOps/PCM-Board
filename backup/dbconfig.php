<?
	$db = new mysqli('localhost', 'root', 'gmldnjs0010', 'board');
	
	if($db->connect_error){
		die('데이터베이스 연결에 문제가 있습니다.\n문의 바랍니다.');
	}
	
	$db->set_charset('utf-8');
?>