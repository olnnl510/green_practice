<?php // for문 바꾸지 않고, continue 활용하여 홀수만 출력

    for($i=1; $i<=100; $i++)
    {
        if($i %2 == 0) { continue; }
        print $i . "<br>";
    }
?>