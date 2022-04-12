<?php // 다차원 배열 array 안에 array

    $matrix = array(
        array(1, 2, 3, 0), // index 0 1 2
        array(4, 5, 6, 0, 1),
        array(7, 8, 9, 0),
    );

    print_r($matrix);
    print "<br><br>";

    print $matrix[1][1] . "<br>"; // index 값 0부터니까 1. (2번째지만!)

    $child = $matrix[1]; // 접근할 수 있는 주소값이 저장됨
    print $child[1] . "<br>";

    print "matrix count : " . count($matrix) . "<br>"; // 자식값
    print "matrix count : " . count($matrix[0]) . "<br>";
    print "matrix count : " . count($matrix[1]) . "<br>";
    print "matrix count : " . count($matrix[2]) . "<br>";

?>

<!--
    - 자식과 부모관계 매커니즘
    첫번째 array 자식 3개

    첫번째 자식 선택한다.

    배열 이니까 []



    shallow copy 얕은복사 : 주소값 복사
    deep copy 깊은복사 : 똑같은 애 하나 더 만들어줌(똑같은게 2개가 생김)

-->