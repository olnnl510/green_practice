<?php
    session_start();
    $_SESSION['var1'] = "v1"; // 세션 변수 할당. 변수에 특정 키값을 저장.
    $_SESSION['var2'] = "v2";
    //unset($_SEESION['var2']);
    echo $_SESSION['var1'], "<br>"; // 세션 변수 출력
    echo $_SESSION['var2'], "<br>";
?>
<a href="session_destroy.php">destroy</a>

<!--
세션 스타트!!!!! 항상 주는걸로~
-->