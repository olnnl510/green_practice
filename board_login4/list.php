<?php
    include_once "db/db_board.php";

    session_start();
    $login_user = $_SESSION["login_user"];
    $nm = "";

    $i_board = $_GET["i_board"];
    
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
    <header>
        <a href="list.php">리스트</a>
        <a href="write.php">글쓰기</a>
        <a href="logout.php">로그아웃</a>
        <a href="login.php">로그인</a>
    </header>
    <body>
        <h1>리스트</h1>
        <table>
            <thead>
                <tr>
                    <th>글번호</th>
                    <th>제목</th>
                    <th>글쓴이</th>
                    <th>등록일시</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php foreach($list as $item) { ?>
                    <td><?=$i_board?></td>
                    <td><?=$item["i_board"]?></td>
                    <td><?=$item["i_board"]?></td>
                    <td><?=$item["i_board"]?></td>
                    <?php } ?>
                </tr>
            </tbody>
        </table>
    </body>
</body>
</html>