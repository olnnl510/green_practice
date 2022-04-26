<?php
    include_once "db.php";

    function ins_board($param){
        $i_user = $param["i_user"];
        $title = $param["title"];
        $ctnt = $param["ctnt"];

        $sql = "INSERT INTO t_board (i_user, title, ctnt) VALUES ('${i_user}', '${title}', '${ctnt}')";
        
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }

    function sel_board_list(){ // 다 뿌릴꺼니까 파라미터 필요없음
        $sql = "SELECT A.i_board, A.title, B.nm, B.i_user, A.created_at
                FROM t_board A
                INNER JOIN t_user B
                ON A.i_user=B.i_user
                ORDER BY i_board
                DESC";

        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }

    function sel_board($param){
        $i_board = $param["i_board"];

        $title = $param["title"];
        $nm = $param["nm"];
        $created_at = $param["created_at"];
        $ctnt = $param["ctnt"];

        $sql = "SELECT A.title, B.nm, A.created_at, A.ctnt
        FROM t_board A
        INNER JOIN t_user B
        ON A.i_user=B.i_user
        WHERE A.i_board=${i_board}";

        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return mysqli_fetch_assoc($result);
    }
?>