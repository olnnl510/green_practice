<?php
    session_start();
    session_destroy(); // 여기(이창)까지는 세션변수가 살아있음 (새로고침, 이동 하면 세션 없는상태!)
    echo $_SESSION['var1'], "<br>";
    echo $_SESSION['var2'], "<br>";
?>
<a href="confirm.php">확인</a>

<!--
- unset, destroy 차이

unset : 주자마자 바로 죽음
destroy : destroy 하는 창에서는 유지 (최초때는 살려둠)
-->