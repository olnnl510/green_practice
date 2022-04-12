<?php

    $score = array(1, 2, 3, 4);
    $score2 = $score; // 복사된 새로운 배열을 카르킴

    print_r($score);
    print "<br>";
    print_r($score2);
    print "<br>";

    $score2[0] = 100; // 둘은 별개기 때문에 다른값을 가짐

    print_r($score);
    print "<br>";
    print_r($score2);
    print "<br>";

?>

<!--
    php 배열 : 깊은복사 (1, 2, 3, 4)되어 새로운 배열이 하나 만들어짐. (=클론복사)
-->