<?php
    $num = rand(1, 10);

    print_odd_even($num);

    // 숫자 10(는)은 짝수입니다.
    // 숫자 1(는)은 홀수입니다.

    function print_odd_even($n) // 위에 $num이 복사되어 들어감
    {
       $result = $num % 2 === 0 ? "짝" : "홀";
       print "숫자 ${n}(는)은 ${result}수입니다.";
    }

?>