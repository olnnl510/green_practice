<?php



$star = rand(3,10);
print "star : $star <br>";

for ($i=1; $i<=$star; $i++) // z줄의갯수
{
    for ($z=1; $z<=$i; $z++) // i별의갯수 가 줄의갯수보다 같거나 작다면 *찍어낸다
    {
        print "*";
    }
    print "<br>";
}

?>