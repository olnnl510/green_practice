<?php

    function sum_from_to($snum, $enum) // 매개변수(=파라미터) 함수 정의시 외부에서 주입받는 값
    {
        $result = 0;
        for($i=$snum; $i<=$end_num; $i++)
        {
            $result += $i;
        }
        return $result;
    }


    $start_num = 1;
    $end_num = 100;

    $result = sum_from_to($snum, $enum); // arguments : 함수 호출할 때 실제로 보내는 값

    print "${start_num} ~ ${end_num} 을(를) 모두 더한 값은 $result <br>";



?>


