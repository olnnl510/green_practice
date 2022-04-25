<?php
    include_once "db/db.user.php";
    // login.php 에서 넘어오는 값을 적절한 변수에 담는다.
    // 변수의 값을 출력
    $uid = $_POST["uid"];
    $upw = $_POST["upw"]; // 내가 보낸 비밀번호 (_POST로 가져온 정보는 숫자더라도 '문자열'로 받아옴!)

    print "uid : $uid <br>";
    print "upw : $upw <br>";

    $param = [
        "uid" => $uid
    ];

    $result = sel_user($param);
    if(empty($result)) {
        echo "해당하는 아이디 없음";
        die; // 만나면 종료되기때문에 밑에부분 실행안됨 (die, exit)
    }

    echo " i_user : " , $result["i_user"] , "<br>";
    echo " pw : " , $result["upw"] , "<br>";

    // 비밀번호가 맞으면 "list.php"로 주소 이동
    // 비밀번호가 다르면 "login.php"로 주소 이동

    // if($upw == $result["upw"]){
    //     header("Location: list.php");
    // }
    // else {
    //     header("Location: login.php");
    // }
?>