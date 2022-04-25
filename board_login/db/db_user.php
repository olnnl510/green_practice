<?php
 include_once "db.php"; // 파일기준

 function ins_user($param) { //만든함수, 파라미터
    $uid = $param["uid"];
    $upw = $param["upw"];
    $nm = $param["nm"];
    $gender = $param["gender"];

    $conn = get_conn(); //만든함수, VALUES 문자열이기 때문에 홑따옴표 넣어줘야함
    $sql = 
    "   INSERT INTO t_user 
        (uid, upw, nm, gender)
        VALUES
        ('$uid', '$upw', '$nm', $gender)
    ";
    $result = mysqli_query($conn, $sql); // 쿼리를 실행시켜줌. 커넥션정보,실행할쿼리 2개 필요함
    mysqli_close($conn);
    return $result; // 넘어온값 return
 }

 function sel_user($param) {
    $uid = $param["uid"]; // 비번 안데려옴
    $sql = 
    "   SELECT i_user, uid, upw, nm, gender
        FROM t_user
        WHERE uid = '$uid'
    ";
    $conn = get_conn();
    $result = mysqli_query($conn, $sql); // select의 결과값이 result에 담김
    mysqli_close($conn);
    return mysqli_fetch_assoc($result); // result에 담긴값 return assoc배열을 result값에 하나씩 넣어줌
 } // 1줄만 가져오니 1번만 호출 (여러줄 : while문으로 반복)

//  컨펌 : 확인용~ 이미 통과했을때 옴

//  s : select의 결과값이 넘어옴
//  !s : 쿼리문 날리는것이 빈칸(false실패) or 1(ture성공). 결과x날리는것o