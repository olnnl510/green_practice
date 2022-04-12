<?php
/*
    rand(1,10) 실행을 시킬건데 10이 나올때까지 반복한다.
    10이 아니면 숫자를 찍는다.
    10이 나오면 반복을 멈추고 "끝" 출력!
*/
    print " -- 시작 -- <br>";
    $r_val = rand(1,10);

    while($r_val != 10)
    {
        $r_val = rand(1,10);
        print "r_val : $r_val <br>";
    }
    print " -- 끝 -- <br>";
?>


<!--
    $i= 0; // 초기화
    while($i < 10) // 조건식
    {
        print $i . "<br>"; // 내용
        $i++; // 증감식
    }

    print "r_val : $r_val <br>";

    while ($i < 10)
        {
            print "r_val : $i <br>";

            if ($i = 10)
            {
                $r_val = rand(1,10);
                print " -- 끝 -- " ;
                break;
        
        }
-->