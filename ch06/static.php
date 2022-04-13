<?php

    function inc()
    {
        static $i = 1; // 최초 딱 1번만 실행
        print $i . "<br>";
        $i += 1;
    }

    $z = 1;
    function inc2()
    {
        global $z; // 전역변수라 다른곳에서도 접근 가능
        print $z . "<br>";
        $z += 1;
    }

    for($i=0; $i<10; $i++)
    {
        inc2();
    }
    
?>

<!--
static 메모리 영역 따로 있음.
-->