<?php // 안에 for문을 먼저 생각!





    $star = rand(2, 10);

    print "star : $star <br>";

    for ($z = 0; $z < $star; $z++) // 바깥 for문 : 줄담당 , star 값만큼 반복 셋팅
    {
        for($i = 0; $i < $star; $i++) // 안쪽 for문 : 칸담당 (개행)
        {
            print "*" ;
        }
    print "<br>";
    }

?>



<!--

2중 for문

줄담당
칸담당


-->