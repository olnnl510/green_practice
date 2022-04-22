<?php
    session_start();
    echo "Session ID : ", session_id();

// 브라우저마다 할당. 브라우저 껐다가 키면 새 브라우저가 된다.
// 세션 : 배열과 사용방법 같음. 스코프가 다를뿐