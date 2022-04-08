<?php // while문 미션

/*
val변수에 있는 숫자 까지 모두 더해주세요. 100 = 5050
그리고 결과값을 출력해 주세요. 
*/


$val = rand(50, 100);
print "val : $val <br>";

$sum = 0;
$i = 0;
while($i <= $val)
{
   $sum += $i++ //  $sum = $sum + $i ;
   $i++ ;
}

print "sum : $sum <br>";


?>



<!--


    $i= 0; // 초기화
    while($i < 10) // 조건식
    {
        print $i . "<br>"; // 내용
        $i++; // 증감식
    }


-->