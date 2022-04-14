<?php
    $star = rand(1, 10);
    print "star : $star <br>";

    for ($i=0; $i <= $star; $i++)
    {
        print "*" ;
    }
?>





<?php // 2중 for문 : 안에 for문을 먼저 생각!

    $star = rand(2, 10);

    print "<br> star : $star <br>";

    for ($z = 0; $z < $star; $z++) // 바깥 for문 : 줄담당 , star 값만큼 반복 셋팅
    {
        for($i = 0; $i < $star; $i++) // 안쪽 for문 : 칸담당 (개행)
        {
            print "*" ;
        }
    print "<br>";
    }

?>




<?php //패턴을 찾아라!

    $star = rand(3,10);
    print "<br> star : $star <br>";

    for ($i=0; $i<$star; $i++) // z줄의갯수
    {
        for ($z=0; $z<=$i; $z++) // i별의갯수 가 줄의갯수보다 같거나 작다면 *찍어낸다
        {
            print "*";
        }
        print "<br>";
    }
?>


