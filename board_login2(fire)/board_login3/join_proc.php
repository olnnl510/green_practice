<?php
    include_once "db/db_user.php";

    $uid = $_POST["uid"];
    $upw = $_POST["upw"];
    $confirm = $_POST["confirm"]; // Q비번 같은지 확인 어디서?ㅠㅠ
    $nm = $_POST["nm"];
    $gender = $_POST["gender"];

    $param = [
        "uid" => $uid,
        "upw" => $upw,
        "nm" => $nm,
        "gender" => $gender
    ];
    
    $result = ins_user($param);

    echo "result : " , $result , "<br>";
    echo "uid : " , $uid , "<br>";
    echo "upw : " , $upw , "<br>";
    echo "nm : " , $nm , "<br>";
    echo "gender : " , $gender , "<br>";

    header("Location: list.php");
?>