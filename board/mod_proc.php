<?php
    include_once "db.php";

    $i_board = $_POST["i_board"];
    $title = $_POST["title"];
    $ctnt = $_POST["ctnt"];

    $sql = "UPDATE t_board SET title = '$title', ctnt = '$ctnt', mod_at = now() WHERE i_board = $i_board";

    $conn = get_conn();
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    header("Location: detail.php?i_board=${i_board}"); 
?>
<!--
db.php 포함

변수 : i_board값 post방식으로 받아옴
변수 : 제목 post방식으로 받아옴
변수 : 내용 post방식으로 받아옴

변수 : 쿼리문(수정)

변수 : get_conn 함수(db랑연결)
변수 : 결과=커넥정보/실행시킬쿼리문 (영향줄수)
커넥닫음
리다이렉트
-->
<!--
-쿼리스트링
url / ? 쿼리스트링
? key = value & key = value & key = value &

- header
// 수정 완료 후 detail.php 로 이동
-->