<?php //패턴을 찾아라!

    $star = rand(3,10);
    print "star : $star <br>";

    for ($i=0; $i<$star; $i++) // z줄의갯수
    {
        for ($z=0; $z<=$i; $z++) // i별의갯수 가 줄의갯수보다 같거나 작다면 *찍어낸다
        {
            print "*";
        }
        print "<br>";
    }




    $star = rand(3,10);
    print "star : $star <br>";

    for ($i=0; $i<$star; $i++) // z줄의갯수
    {
        for ($z=0; $z<=$i; $z++) // i별의갯수 가 줄의갯수보다 같거나 작다면 *찍어낸다
        {
            print "*";
        }
        print "<br>";
    }
?>





<!--

star값 3이면
*
**
***

star값 6이면
*
**
***
****
*****
******

패턴 : 인덱스 값 만큼만 안쪽의 for문이 돌면 원하는 만큼 별 찍을 수 있음

-->