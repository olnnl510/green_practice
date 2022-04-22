<?php
    setcookie("country", "Korea"); // 바로 쿠키함수 쓸수없음.. 다음페이지에서

    if(isset($_COOKIE['country']))
    {
        echo "Country : ", $_COOKIE['country'], "<br>";
    }
?>
<a href="cookie2.php">Next Page</a>