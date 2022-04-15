<?php

    $seoul = getdate(); // 함수호출. 리턴한값 복사하여 왼쪽에 준다. 배열을 주는구나.

    print "현재시간 : " .
        $seoul["year"] . "년 " . // [배열]
        $seoul["mon"] . "월 " .
        $seoul["mday"] . "일 " .
        $seoul["hours"] . "시 " .
        $seoul["minutes"] . "분 " .
        $seoul["seconds"] . "초" ;

    print "<br>----------<br>";

        $year = gmdate("Y");
        $mon = gmdate("m");
        $day = gmdate("d");
        $hour = gmdate("G");
        $min = gmdate("i");
        $sec = gmdate("s");

        print "현재시간 ${year}년 ${mon}월 ${day}일 ${hour}:${min}:${sec} <br>" ;

        print rand(1, 10);

        

?>