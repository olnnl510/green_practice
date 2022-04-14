<?php
    include_once 'db.php';

    $i_board = $_GET['i_board'];
    $sql = " SELECT * FROM t_board WHERE i_board = $i_board ";

    $conn = get_conn();
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    if($row = mysqli_fetch_assoc($result))
    {
        $title = $row['title'];
        $ctnt = $row['ctnt'];
        $create_at = $row['create_at'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>
<body>
    <a href="list.php"><button>리스트</button></a>
    <div>제목 : <?= $title ?></div>
    <div>작성일시 : <?= $create_at ?></div>
    <div>내용 : <?= $ctnt ?></div>
</body>
</html>


<!--
    print "i_board : $i_board <br>";


긴글 적을땐 post. get 방식 길이제한있음.



이재민님이 모두에게 05:43 PM
list.php 33번째 줄의 ${i_board}에서 게시물 번호 읽어온 뒤 쿼리스트링으로 만들어 detail.php로 날리고,
detail.php에서는 쿼리스트링 안에 있는 i_board를 읽어 문서에 뿌리는 식인가 보네요

-->