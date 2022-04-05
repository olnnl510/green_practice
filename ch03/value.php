<?php
    $value = 999_999_999_999_999_997; // 언더바 정수에서 무시당함
    print $value;

    print "<br>";

    $value2 = 9900000000000000001;
    print $value2;

    print "<br>";

    $value3 = "9900000000000000001"; // 문자열로 뿌리면 됨
    print $value3;
?>