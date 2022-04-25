<?php
    include_once "db.php";

    function user_join($param) { // 파라미터
        $uid = $param["uid"];
        $upw = $param["upw"];
        $nm = $param["nm"];
        $gender = $param["gender"];

        $conn = get_conn();
        $sql =
        "   INSERT INTO t_user
            (uid, upw, nm, gender)
            VALUES
            ('$uid', '$upw', '$nm', '$gender')
        "; // 문자열이기 때문에 홑따옴표 넣어줘야함
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }
    
// 컴펌 : 확인용~ 이미 통과했을때 옴!

/*
user_join 함수 파람 연결~

db연결
쿼리문(insert)
결과값
db닫기
리턴
*/