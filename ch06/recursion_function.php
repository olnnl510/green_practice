<?php // 재귀함수 : 내가 함수라면 내가 나를 호출하는 것. factorial 만들때 많이 씀.

$num = 3;
$result = factorial($num); // 3 x 2 x 1
print "${num}! = $result <br>";


function factorial($num)
{
    $result = 1;
    for($i=2; $i<=$num; $i++) // 1*1 어차피 1이니까 1부터 시작해도 똑같음
    {
        $result *= $i;
    }
    return $result;
}



function factorial2($num)
{    
    $result = 1;
    for($i=$num; $i>0; $i--)
    {
        $result *= $i;
    }
    return $result;
}


function factorial_rec($num) // for문과 같은 효과. 함수 안에서 또 호출
{
    if($num ===1) { return 1; } // 끝
    return $num * factorial_rec($num - 1);
}
?>


<!--

function factorial($num)
{
    $fac = 1;
    for($i=$num; $i>0; $i--)
    {
        $fac *= $i;
    }
    return $fac;
}

-->