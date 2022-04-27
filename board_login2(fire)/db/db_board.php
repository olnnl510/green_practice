<?php
    include_once "db.php";

    function upd_board(&$param){
        $i_board = $param["i_board"];
        $i_user = $param["i_user"];
        $title = $param["title"];
        $ctnt = $param["ctnt"];

        $sql = "UPDATE t_board
                SET title='$title', ctnt='$ctnt', updated_at=now()
                WHERE i_board = $i_board
                AND i_user = $i_user";

        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }
?>

<?php
    include_once "db.php";
    
    function upd_board2($param){
        $i_board = $param["i_board"];
        $title = $param["title"];
        $ctnt = $param["ctnt"];
        $i_user = $param["i_user"];

        $sql = "UPDATE t_board
                SET title='$title', ctnt='$ctnt', updated_at=now()
                WHERE i_board = $i_board
                AND i_user = $i_user";

        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }
?>

<?php
    $param = [];
    $result = upd_board($param);

?>