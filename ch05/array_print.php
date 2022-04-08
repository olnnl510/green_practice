<?php

    $numbers = array(10, 20, 30, 40, 50);

    print $numbers . "<br>";
    print_r($numbers); // 함수호출 이므로 print_r 뒤에 빈칸 안주는것이 좋음
    print "<br>";

    array_push($numbers, 60, 100, 200);
    print_r($numbers);
    print "<br>";

?>