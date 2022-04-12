<?php

    print "---------- break ---------- <br>";
    for($i=0; $i<20; $i++)
    {
        if($i == 12) { break; } // 빠져나옴
        print $i . "<br>";
    }


    print "---------- continue ---------- <br>";
    for($i=0; $i<20; $i++)
    {
        if($i == 12) { continue; } // skip
        print $i . "<br>";
    }
?>

<!--
20번 도는 for문

index 값 12

1: break
반복문 안에서 break 만나면 반복문 박살냄. 바로 빠져나옴 (print 못찍고)
중간에 for문 끝까지 돌지 않고 멈추고 싶을때 씀

2: continue
continue 만나면 print 안찍고 skip하고 증감식으로 간다 (밑에꺼 1번 실행 안시킨다)

-->