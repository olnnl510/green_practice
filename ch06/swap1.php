<?php

    function swap_val($n1, $n2)
    {
        $temp = $n1; // 스와핑
        $n1 = $n2; // n1 30
        $n2 = $temp; // n2 10 함수호출이 끝나면 소멸되게 된다!

    }

    function swap_ref(&$n1, &$n2) // ref : reference
    {
        $temp = $n1;
        $n1 = $n2;
        $n2 = $temp;
    }

    $a = 10;
    $b = 30;

    print "a: $a, b: $b <br>"; // 비유 이해: 선풍기를 들고있는 사람
    swap_val($a, $b); // call by value
    print "a: $a, b: $b <br>";
    print "-----<br>";
    print "a: $a, b: $b <br>";
    swap_ref($a, $b); // call by reference
    print "a: $a, b: $b <br>";

?>

<!--
    $n1 $n2
    a b
    별개의 공간!

    // reference 참조값(메모리의 주소값)의 이해 필요!

    call by value : 내 공간은 알려주지 않고 갖고 있는 값만 복사해서 준것
    call by reference : 내 공간에 접근할수 있는 메모리 주소값(권한)을 준것

    안쪽에서 global 선언하지 않고 외부에 있는 값 변경할수있는 유일한 방법
    : call by reference(&)

    call by value 메모리 낭비 심함
    call by reference 효율성 좋음

-->