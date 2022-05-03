<?php
    include_once "db/db_board.php";

    session_start();
    if(isset($_SESSION["login_user"])) {
        $login_user = $_SESSION["login_user"];
    }
    $i_board = $_GET["i_board"];
    $param = [
        "i_board" => $_GET["i_board"]
    ];
    $item = sel_board($param);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$item["title"]?></title>
</head>
<body>
    <a href="list.php"><button>리스트</button></a>
    <a href="mod.php?i_board=<?=$i_board?>"><button>수정</button></a>
    <a href="del.php?i_board=<?=$i_board?>"><button>삭제</button></a>
    <div>제목 : <?=$item["title"]?></div>
    <div>글쓴이 : <?=$item["nm"]?></div>
    <div>등록일시 : <?=$item["created_at"]?></div>
    <div> <?=$item["ctnt"]?> </div>
</body>
</html>