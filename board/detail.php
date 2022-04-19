<?php
    include_once "db.php";

    $i_board = $_GET["i_board"];
    $sql = "SELECT * FROM t_board WHERE i_board = $i_board";

    $conn = get_conn();
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);

    if($row = mysqli_fetch_assoc($result))
    {
        $title = $row["title"];
        $ctnt = $row["ctnt"];
        $create_at = $row["create_at"];
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
    <a href="del_proc.php?i_board=<?=$i_board?>"><button>삭제</button></a>
    <a href="mod.php?i_board=<?=$i_board?>"><button>수정</button></a>
    <div>제목 : <?= $title ?></div>
    <div>작성일시 : <?= $create_at ?></div>
    <div>내용 : <?= $ctnt ?></div>
</body>
</html>

<!--
mysqli_connect는 MySQL server 또는 MariaDB Server에 연결하는 함수입니다.

mysqli_query 함수는 mysqli_connect 를 통해 연결된 객체를 이용하여 MySQL 쿼리를 실행시키는 함수입니다.

mysqli_fetch_assoc 함수는 mysqli_query 를 통해 얻은 리절트 셋(result set)에서 레코드를 1개씩 리턴해주는 함수


출처: https://solbel.tistory.com/1038 [개발자의 끄적끄적]
-->