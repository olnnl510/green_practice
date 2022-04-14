<?php

$arr = [10, 20, 30, 40, 50];
plus_array($arr, 1);
print_r($arr);


    function plus_array(&$arr, $val)
    {
        foreach($arr as $k => $v)
        {
            $arr[$k] = $v + $val;
        }
    }



?>


<!-- 값을 10씩 올리자-->