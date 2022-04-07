<?php //패턴 승재님 아이디어 GOOD!!
    $star = rand(3,10);
    print "star : $star <br>";

    $sum = " ";
    for ($z=1; $z<=$star; $z++)
    {
        $sum = $sum."*";
        print "{$sum}<br>";
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

    for ($z=0; $z<$star; $z++) // 줄의갯수
    {
        for ($i=0; $i<$star; $i++) //별의갯수
        {
            if ($z >= $i) // i별의갯수가 z줄의갯수보다 같거나 적으면 0 0 = 별1개
                            // z,i 0>=0 = *찍고 0<=1 0<=2 0<=3 0<=4 ... * 안찍고
                            // z,i 1>=0 = 
            {
                print "*";
            }
        }
        print "<br>";
    }






-->