<?php
    include_once "db/db.php";
    
    $uid = $_POST["uid"];
    $upw = $_POST["upw"];

    print "uid : $uid <br>";
    print "upw : $upw <br>";

    $param = [
        "uid" => $uid
    ]

    $result = sel_user($param);
?>