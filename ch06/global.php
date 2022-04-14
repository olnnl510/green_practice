<?php

    function counts()
    {
        global $i;
        $i++;
    }

    $i = 0;
    while($i < 10) // while은 종료되는 조건! 종료되는 조건이 없으므로 0 무한루프
    {
        counts(); // 전역변수 $i값을 1씩 증가 시키는 함수
        print $i . "<br>";
    }

?>

<!--
1
2
3
...
10
개행
-->