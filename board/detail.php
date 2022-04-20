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
db.php 포함
변수 : 키값 get으로 받아옴
변수 : 쿼리문(선택)

변수 : get_conn 함수(db랑연결)
변수 : 결과=커넥정보/실행시킬쿼리문 (영향줄수)
커넥닫음

만약에~줄~1개씩 리턴한다면
    변수:제목~줄(제목)
    변수:내용~줄(내용)
    변수:작성일시~줄(작성일시)

a태그: list.php 리스트버튼
a태그: del_proc.php?i_board값 삭제버튼
a태그: mod.php?i_board값 수정버튼

<div>제목~
<div>작성일시~
<div>내용~

-->
<!--
mysqli_connect는 MySQL server 또는 MariaDB Server에 연결하는 함수입니다.

mysqli_query 함수는 mysqli_connect 를 통해 연결된 객체를 이용하여 MySQL 쿼리를 실행시키는 함수입니다.

mysqli_fetch_assoc 함수는 mysqli_query 를 통해 얻은 리절트 셋(result set)에서 레코드를 1개씩 리턴해주는 함수


출처: https://solbel.tistory.com/1038 [개발자의 끄적끄적]
-->

<!--
    -원본
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
-->

<!--
GET 방식 : URL로 불러온값
POST 방식 : form으로 불러온값
-->

<!--
select 전체 다 불러와도됨 (i_board 하나만 불러오는거니까!)
if문
php축약문
-->