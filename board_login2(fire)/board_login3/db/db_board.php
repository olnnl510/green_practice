<?php
include_once "db.php";

function ins_board($param) {
    $title = $param["title"];
    $ctnt = $param["ctnt"];

    $sql = "INSERT INTO t_board(title, ctnt)
            VALUES ('$title', '$ctnt')
            ";

    $conn = get_conn();
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}

?>