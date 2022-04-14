<?php
    include_once "db.php";
    $conn = get_conn();
    $sql = "SELECT i_board, title, create_at FROM t_board ORDER BY i_board DESC";
    $result = mysqli_query($conn, $sql); // mysqli_query 기능: 쿼리문 실행! // 커넥션 사용 이미 끝남
    mysqli_close($conn); // 커넥션 사용 닫음
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
            while($row = mysqli_fetch_assoc($result)) // 1.계속 실행 .. 계속 읽기
            {
                $i_board = $row['i_board']; // 2.
                $title = $row['title']; // 3.
                $create_at = $row['create_at'];
                print "<tr>";
                print "<td>${i_board}</td>";
                print "<td><a href='detail.php?i_board=${i_board}'>${title}</td>";
                print "<td>${create_at}</td>";
                print "</tr>";
            }
            //mysqli_close($conn); 위에서 닫아도됨
        ?>
    </table>
</body>
</html>

<!--
1. 첫번째 줄 정보가 row 에 배열로 담김
2. 키값 들어감 (1 복사하여 왼쪽에 줌) (변수명은 이름 달라도 상관없음)
3. 타이틀값 복사하여 왼쪽에 들어감

while문 매커니즘 : 한줄 선택한다 가져온다 찍는다 (반복)



-->