<?php // for문 활용하셔서 1~100을 더한 값을 구하시오. 5050

    $sum = 0;
    for($i=1; $i <= 100; $i++)
    {
        // $sum 여기서 선언하면 계속 선언 -> 계속 0으로 초기화
        $sum = $sum + $i ;
    }
    echo $sum ;

echo "<br>" ;

    $sum= 0;
    for($i=1; $i <= 100; $i++)
    {
        $sum += $i ;
    }
    echo $sum ;

?>

<!--

    단순한 숫자나열 x 다 더한값

    $number += $i ; : 축약형




-->