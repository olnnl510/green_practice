<?php
include_once "db/db_board.php";

session_start();
$title = $_POST["title"];
$ctnt = $_POST["ctnt"];

$login_user = $_SESSION["login_user"]; // 로그인 pk값
$i_user = $login_user["i_user"]; // 글쓴이 pk값

$param = [
    "i_user" => $i_user,
    "title" => $title,
    "ctnt" => $ctnt,
];

$result = ins_board($param); // 배열로 묶어서 보내줌. 결과는 1넘어옴(true)
if($result) { // 1 넘어왔으니(true) 주소값이동
    Header("Location: list.php");
}
//t_board에 insert 완료 후 list.php로 이동.