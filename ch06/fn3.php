<?php
    $start_num = 1;
    $end_num = 100;


    $result = sum_from_to($start_num, $end_num);

    function sum_from_to($start_num, $end_num)
    {
        for($i=$start_num; $i<=$end_num; $i++)
        {
            $result += $i;
        }

        print "${start_num} ~ ${end_num} 을(를) 모두 더한 값은 $result <br>";

    }

?>