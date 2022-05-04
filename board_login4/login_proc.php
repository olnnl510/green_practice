<?php
    inc
    session_start();

    if() {
    $login_user = $_SESSION["login_user"];
    $i_user = $login_user["i_user"];
    }

    $result = sel_user();

    if(empty($result)) {
        echo "해당하는 아이디 없음";
        die;
    }

?>