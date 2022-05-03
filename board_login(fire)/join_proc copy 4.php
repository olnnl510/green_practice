<?php
    include_once "db/db.php";

    $uid = $_POST["uid"];
    $upw = $_POST["upw"];
    $confirm_upw = ["confirm_upw"];
    $nm = $_POST["nm"];
    $gender = $_POST["gender"];

    $param = [
        "uid" => $uid,
        "upw" => $upw,
        "nm" => $nm,
        "gender" = $gender
    ]

    $result = ins_user($param);

    print "result : $result <br>";
    print "uid : $uid <br>";
    print "upw : $upw <br>";
    print "nm : $nm <br>";
    print "gender : $gender <br>";

    ?>