<?php
    session_start();
    $_SESSION['g'] = "This is a Global variable"; // 배열. 브라우저 개인용으로 나온 세션..
?>
<a href="page4.php">Next Page</a>

<!--
session 은 개인용. session은 개인주의야!
session 변수 : 브라우저마다 새롭게 부여(발행, 할당)됨.
브라우저 킬때마다 특별한 id(로 부여된 세션변수)값이 부여된다고 생각. page4부터 들어가면 아무것도 안뜸.

같은 g라고 하는 세션변수이지만, 브라우저마다 '다른' 변수다

jwt = 자동로그인(세션을 안씀. 세션을 쓰면 서버에 부담을 줌(메모리 차지). 쿠키와 비슷. 보안빵빵. 고급기술)
-->