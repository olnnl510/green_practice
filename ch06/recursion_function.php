<?php // 재귀함수 : 내가 함수라면 내가 나를 호출하는 것. factorial 만들때 많이 씀.

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

//절대값 만들기

function my_abs($val)
{
    /*
    if($val < 0){
        return $val * (-1); // = return -$val;
    }
    return $val;
    */
    return $val < 0 ? -$val : $val;
}
print "my_abs(-3) : " . my_abs(-3) . "<br>"; // 3이 출력되는지 확인
print "my_abs(3) : " . my_abs(3) . "<br>"; // 3이 출력되는지 확인

$num = abs(-3);
$result = factorial_rec($num); // 3! > 3 x 2 x 1
print "${num}! = $result <br>";
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