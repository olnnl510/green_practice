<?php
    include_once "db/db_board.php";
    $i_board = $_GET["i_board"];
    $param = [
        "i_board" => $i_board
    ];
    $item = sel_board($param); // Q detail 에서 쓴 함수 또씀
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
    <form action="mod_proc.php" method="post">
        <input type="hidden" name="i_board" value="<?=$i_board?>" readolny>
        <div><input type="text" name="title" placeholder="제목" value="<?=$item["title"]?>"></div>
        <div><textarea name="ctnt" placeholder="내용"><?=$item["ctnt"]?></textarea></div>
        <div>
            <input type="submit" values="글수정">
            <input type="reset" values="초기화">
        </div>
    </form>
</body>
</html>