<?php
    include_once "db.php";

    function ins_board($param){
        $i_user = $param["i_user"];
        $title = $param["title"];
        $ctnt = $param["ctnt"];

        $sql =
        "   INSERT INTO t_board(i_user, title, ctnt)
            VALUES ($i_user, '$title', '$ctnt')
        ";
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }

    function sel_board_list(){
        $sql =
        "   SELECT A.i_board, A.title, A.created_at, B.nm, B.i_user
            FROM t_board A
            INNER JOIN t_user B
            ON A.i_user = B.i_user
            ORDER BY i_board
            DESC
        ";

        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }
?>