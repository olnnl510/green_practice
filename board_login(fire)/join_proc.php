<?php
    include_once "db/db_user.php";

    $uid = $_POST["uid"];
    $upw = $_POST["upw"];
    $confirm_upw = $_POST["confirm_upw"];
    $nm = $_POST["nm"];
    $gender = $_POST["gender"];

    $param = [
        "uid" => $uid,
        "upw" => $upw,
        "confirm_upw" => $confirm_upw,
        "nm" => $nm,
        "gender" => $gender
    ];

    $result = ins_user($param);
    
    echo "uid : " , $result , "<br>";
    echo "uid : " , $upw , "<br>";
    echo "uid : " , $confirm_upw , "<br>";
    echo "uid : " , $nm , "<br>";
    echo "uid : " , $gender , "<br>";
    
?>