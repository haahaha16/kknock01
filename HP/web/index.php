<?php include  "C:APM/Apache24/htdocs/HP/web/db.php"; ?>
<!doctype html>
<head>
<meta charset="UTF-8">
<title>게시판</title>
<link rel="stylesheet" type="text/css" href="../css/style.css" />
</head>
<body>

<div id="board_area"> 
  </br><h3><a href="../index.php">메인 페이지</a></h3></br>
  <h1>게시판</h1>
  <h4>글 목록</h4>
 
    
  <div id="search_box">
    <form action="./search_result.php" method="get">
      <select name="catgo">
        <option value="title">제목</option>
        <option value="name">글쓴이</option>
        <option value="content">내용</option>
      </select>
      <input type="text" name="search" size="40" required="required" /> <button>검색</button>
    </form>
    </div>
    <table class="list-table">
      <thead>
          <tr>
              <th width="70">번호</th>
                <th width="500">제목</th>
                <th width="120">글쓴이</th>
                <th width="100">작성일</th>
                <th width="100">조회수</th>
            </tr>
        </thead>
        <?php
        // board테이블에서 idx를 기준으로 내림차순해서 5개까지 표시
          $sql = mq("select * from board order by idx desc limit 0,5"); 
            while($board = $sql->fetch_array())
            {
              //title변수에 DB에서 가져온 title을 선택
              $title=$board["title"]; 
              if(strlen($title)>30)
              { 
                //title이 30을 넘어서면 ...표시
                $title=str_replace($board["title"],mb_substr($board["title"],0,30,"utf-8")."...",$board["title"]);
              }
              //댓글 수 카운트
              $sql2 = mq("select * from reply where con_num='".$board['idx']."'"); //reply테이블에서 con_num이 board의 idx와 같은 것을 선택
              $rep_count = mysqli_num_rows($sql2); //num_rows로 정수형태로 출력
        ?>
      <tbody>
    <tr>
      <td width="70"><?php echo $board['idx']; ?></td>
      <td width="500"><?php 
        $lockimg = "<img src='.../img/lock.png' alt='lock' title='lock' with='20' height='20' />";
        if($board['lock_post']=="1")
        { ?><a href='./ck_read.php?idx=<?php echo $board["idx"];?>'><?php echo $title, $lockimg;
        }else{  ?>
        <a href='./read.php?idx=<?php echo $board["idx"]; ?>'><?php echo $title; }?><span class="re_ct">[<?php echo $rep_count; ?>]</span></a>
      <td width="120"><?php echo $board['name']?></td>
      <td width="100"><?php echo $board['date']?></td>
      <td width="100"><?php echo $board['hit']; ?></td>
    </tr>
  </tbody>
      <?php } ?>
    </table>
    <div id="write_btn">
      <a href="./writer.php"><button>글쓰기</button></a>
    </div>
  </div>
</body>
</html>