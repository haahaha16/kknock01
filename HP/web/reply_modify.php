<?php
	include "./db.php";
   
	$bno = $_GET['idx'];
	$sql = mq("select * from reply where idx='$bno';");
	$reply = $sql->fetch_array();
 ?>
<!-- 댓글 수정 폼 dialog -->
<!doctype html>
<head>
<meta charset="UTF-8">
<title>게시판</title>
<link rel="stylesheet" href="../css/style.css" />
</head>
<body>
<div id="board_write">

            <div id="write_area">
                <form action="modify_ok.php?idx=<?php echo $bno; ?>" method="post">
                    <div class="wi_line"></div>
                    <div id="in_name">
                    <div style="margin-top:10px; ">
			        	<textarea name="content" class="reply_content" id="re_content" ><?php echo $reply['content']; ?></textarea>
				        <button id="rep_bt" class="re_bt">댓글</button>
			        </div>
                    <div id="in_pw">
                        <input type="password" name="pw" id="upw"  placeholder="비밀번호" required />  
                    </div>
                    <div class="bt_se">
                        <button type="submit">수정</button>
                    </div>
                </form>
            </div>
        </div>
</html>
