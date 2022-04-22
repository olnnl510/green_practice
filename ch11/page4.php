<?php
    session_start();
    print $_SESSION['g'];
    $a = 10;

    echo $_SESSION['g'] ,  ', ' , $a; // echo 에 ,콤마로 문자열 합치기 기능o

// 이재민님이 모두에게 11:31 AM
// https://www.joinc.co.kr/w/man/12/php/PSR
// 여기의 4.2.2 항목 보시면 알겠지만, php코드만 담은 파일에는 \?\>를 붙이지 않는 게 표준이라네요


// 로그인
// 인증: 너 우리회원 맞네
// 권한: (로그인 된사람 중) 넌 어디까지 접근할수있어