<?php
    include_once "db.php";

    $sql = "SELECT i_board, title, create_at FROM t_board ORDER BY i_board DESC";
    $conn = get_conn();
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>리스트</title>
</head>
<body>
    <h1>리스트</h1>
    <a href="write.php"><button>글쓰기</button></a>
    <table>
        <tr>
            <th>번호</th>
            <th>제목</th>
            <th>작성일시</th>
        </tr>
        <?php 
            while($row = mysqli_fetch_assoc($result))
            {
                $i_board = $row["i_board"];
                $title = $row["title"];
                $create_at = $row["create_at"];
                print "<tr>";
                print "<td>${i_board}</td>";
                print "<td><a href='detail.php?i_board=${i_board}'>${title}</a></td>";
                print "<td>${create_at}</td>";
                print "</tr>";
            }
        ?>
    </table>
</body>
</html>
<!--
db.php 파일을 포함함.

변수 : get_conn 함수(db랑연결)
변수 : 쿼리문 (선택)
변수 : 결과=커넥정보/실행시킬쿼리문 (영향줄수)
커넥 닫음

반복: (줄~(결과1개씩 리턴))
{변수 : 줄~pk값
변수 : 줄~제목
변수 : 줄~작성일시
프린트 tr
프린트 글번호
프린트 pk값 (연결) > 제목
프린트 작성일시
프린트 tr}
-->
<!--
mysqli_connect는 MySQL server 또는 MariaDB Server에 연결하는 함수입니다.

mysqli_query 함수는 mysqli_connect 를 통해 연결된 객체를 이용하여 MySQL 쿼리를 실행시키는 함수입니다.

mysqli_fetch_assoc 함수는 mysqli_query 를 통해 얻은 리절트 셋(result set)에서 레코드를 1개씩 리턴해주는 함수


출처: https://solbel.tistory.com/1038 [개발자의 끄적끄적]

-->
<!-- list.php 주소 보면 i_board 값 GET으로 안가져와도 되는것을 알 수 있다.-->