<?php
    for($i=1; $i<=9; $i++)
    {
        for($z=2; $z<=9; $z++)
        {
        $result = $z * $i ;
        print " $z x $i = $result" ; // 바뀌는 숫자 $z를 앞으로 자리바꿈
        }
        print " <br> "; // 한줄이 끝난 후 br
    }
?>

<!--
    2x1=2 3x1=3 4x1=4 ... 9x1=9
    2x2=4 3x2=6 4x2=8 ... 9x2=18
    ...
    2x9=18 ...

    가로줄 변화되는값이 첫 for문으로!

- 기존 구구단
    for($i=2; $i<=9; $i++)
    {
        for($z=1; $z<=9; $z++)
        {
            $result = $i * $z ;
            print " $i x $z = $result <br> " ;
        }
    }
-->