<?php 
    include_once "db/db_user.php";
    //login.php 에서 넘어오는 값을 적절한 변수에 담는다.
    //변수의 값을 출력.
    $uid = $_POST["uid"];
    $upw = $_POST["upw"]; // 내가 보낸 비밀번호 (_POST로 가져온 정보는 숫자더라도 '문자열'로 받아옴!)

    echo "uid : ", $uid, "<br>";
    echo "upw : ", $upw, "<br>";

    $param = [
        "uid" => $uid
    ];

    $result = sel_user($param);
    if(empty($result)) {
        echo "해당하는 아이디 없음";
        die; // 만나면 종료되기 때문에 밑에부분 실행 안됨 (die, exit)
    }

    echo "i_user : " , $result["i_user"], "<br>";
    echo "pw : " , $result["upw"], "<br>"; //데이터베이스에서 가져온 비밀번호 
    
    //(만약에=if) 비밀번호가 맞으면 "list.php로 주소 이동"
    //(만약에) 비밀번호가 다르면 "login.php로 주소 이동"

    if($upw == $result["upw"]){ // 로그인 성공!!
        session_start();
        $_SESSION["login_user"] = $result; // 세션에 값을 박아줘야함. 값o=로그인o 값x=로그인x
        header("Location: list.php");
    }
    else {
        header("Location: login.php");
    }

?>