<?php
    include_once "db.php";

    function ins_board($param){
        $i_user = $param["i_user"];
        $title = $param["title"];
        $ctnt = $param["ctnt"];

        $sql =
        "   INSERT INTO t_board(i_user, title, ctnt)
            VALUES ($i_user, '${title}', '${ctnt}')
        ";
        
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }

    function sel_board_list($param){
        $sql =
        "   SELECT A.i_board, A.title, A.created_at, B.nm, B.i_user
            FROM t_board A
            INNER JOIN t_USER B
            ON A.i_user = B.i_user
            ORDER BY i_board
            DESC
        ";

        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }

    function sel_board($param) {
        $i_board = $param["i_board"];
        $title = $param["title"];
        $nm = $param["nm"];
        $ctnt = $param["ctnt"];
        $creatd_at = $param["created_at"];

        $sql =
        "   SELECT A.title, A.ctnt, A.created_at, B.nm, B.i_user
            FROM t_board A
            INNER JOIN t_user B
            ON A.i_user = B.i_user
            WHERE A.i_board=${i_board}
        ";

        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return mysqli_fetch_assoc($result);
    }

    function upd_board($param) {
        $i_board = $param["i_board"];
        $i_user = $param["i_user"];
        $title = $param["title"];
        $ctnt = $param["ctnt"];

        $sql =
        "   UPDATE t_board
            SET title = '$title', ctnt = '$ctnt', updated_at=now()
            WHERE i_board = $i_board
            AND i_user = $i_user
        ";

        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;   
    }

    function del_board($param) {
        $i_board = $param["i_board"];
        $i_user = $param["i_user"];

        $sql =
        "   DELETE FROM t_board
            WHERE i_board = $i_board
            AND i_user = $i_user
        ";
        
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }