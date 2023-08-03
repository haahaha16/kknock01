<?php

include "./db.php";

$bno = $_GET['con_num'];
$sql1 = mq("select * from reply where con_num='".$bno."'"); //reply테이블에서 idx가 rno변수에 저장된 값을 찾음
$reply = $sql1->fetch_array();

$rno = $_GET['idx']; 
$sql = mq("select * from reply where idx='".$rno."'"); //reply테이블에서 idx가 rno변수에 저장된 값을 찾음
$reply = $sql->fetch_array();

$sql = mq("delete from reply where idx='".$rno."'");
?>

<script type="text/javascript">alert("삭제되었습니다.");</script>
<meta http-equiv="refresh" content="0 url=./read.php?index=<?php echo $bno; ?>" />
