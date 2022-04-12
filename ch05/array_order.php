<?php

    $arr_age = array (

        "peter" => 35,
        "Ben" => 37,
        "Joe" => 43,
        "Jhon" => 24,
    );

    // 값 정렬 : sort(오름차순), rsort (내림차순) : 키값은 날아감

    $copy_arr_1 = $arr_age;
    print "copy : ";
    print_r($copy_arr_1);
    print "<br>";

    print "origin : ";
    print_r($arr_age);
    print "<br>";

    rsort($copy_arr_1);
    print "copy : ";
    print_r($copy_arr_1);
    print "<br>"; // copy와 origin은 별개였다

    print "origin : ";
    print_r($arr_age);
    print "<br>";
    print "<br>--------------------<br>";

    // 키 정렬 : ksort(오름차순), krsort(내림차순)

    $copy_arr_2 = $arr_age;
    print "copy2 : ";
    print_r($copy_arr_2);
    print "<br>";

    krsort($copy_arr_2);

    print "copy2 : ";
    print_r($copy_arr_2);
    print "<br>";

?>

<!--
    
- 값 정렬
sort(오름차순), rsort (내림차순)

- 키 정렬
ksort(오름차순), krsort(내림차순)

선택정렬, 더블정렬 구현

-->