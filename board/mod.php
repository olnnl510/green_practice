<?php
    include_once "db.php";

    $i_board = $_GET['i_board'];
    $sql = "SELECT title, ctnt FROM t_board WHERE i_board = $i_board";

    $conn = get_conn();
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);

    if($row = mysqli_fetch_assoc($result))
    {
        $title = $row['title'];
        $ctnt = $row['ctnt'];
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>글수정</title>
</head>
<body>
    <h1>글수정</h1>
    <a href="detail.php?i_board=<?=$i_board?>"><button>글로 이동</button></a>
    <form action="mod_proc.php" method="post">
        <input type="hidden" name="i_board" value="<?=$i_board?>">
        <div><input type="text" name="title" placeholder="제목" value="<?=$title?>"></div>
        <div><textarea name="ctnt" placeholder="내용"><?=$ctnt?></textarea></div>
        <div>
            <input type="submit" value="글수정">
            <input type="reset" value="초기화">
        </div>
    </form>
</body>
</html>

<!--
db.php 포함

변수 : i_board값 get으로 받아옴
변수 : 쿼리문(선택)

변수 : get_conn 함수(db랑연결)
변수 : 결과=커넥정보/실행시킬쿼리문 (영향줄수)
커넥닫음

만약에~줄~1개씩 리턴한다면
{
    변수 : 줄~제목
    변수 : 줄~내용
}
-->
<!--
    mod : write detail 합쳐놓은것같다 

[최우원] [오전 11:15] detail, 수정, 삭제, 리스트는 무조건 pk가 필요하다
[이승재] [오전 11:17] 그때 수업하실 때 보통 pk값은 수정을 잘 안하니깐 이렇게 숨겨도 된다 그러시면서 히든 설정 하셨던 것 같은뎁..!
[김재훈] [오전 11:21] 수정할때 굳이 i_board 값이 보일필요 없긴하고 post방식으로 i_board값을 보내줘야 mod_proc에서 몇번째 번호(i_board)의 제목이나 내용을 수정해야하는지 알기위해 필요한 것 같은데요
[김재훈] [오전 11:24] form에 담아서 액션으로 보내줄때 mod_proc.php?i_board=$i_borad 이렇게 url에 보드값을 보내주는 것이 아니라서 mod_proc 에서는 get 방식으로 i_board값을 알지 못해요

mysqli_connect는 MySQL server 또는 MariaDB Server에 연결하는 함수입니다.

mysqli_query 함수는 mysqli_connect 를 통해 연결된 객체를 이용하여 MySQL 쿼리를 실행시키는 함수입니다.

mysqli_fetch_assoc 함수는 mysqli_query 를 통해 얻은 리절트 셋(result set)에서 레코드를 1개씩 리턴해주는 함수


출처: https://solbel.tistory.com/1038 [개발자의 끄적끄적]
-->

<!--
수정할 창을 불러오는 것이므로 select
get방식으로 i_board를 불러옴
-->