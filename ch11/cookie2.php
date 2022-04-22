<?php
    setcookie("country", "한국");
    echo "Country : ", $_COOKIE['country'], "<br>";

    $_COOKIE['country'] = "UK"; // 내 컴퓨터에서 쿠키값이 바뀌(게 하려면 setcookie)는것은 아님. 서버쪽에서 실행
    echo "Country : ", $_COOKIE['country'], "<br>";

    /*
    unset($_COOKIE['country']);
    setcookie("country"); // 요로케 주면 지워짐
    */

    echo "Country : ", $_COOKIE['country'], "<br>";
?>