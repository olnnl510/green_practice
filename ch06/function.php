<?php

// 함수 호출(사용) (정의한 함수를 호출한다. call)
    $result = sum(10, 11); //호출하고 싶은 함수명

    print "썸 : $result <br>";
    print "sum : " . sum(30, 40) . "<br>";

// 함수 정의(구현)

    minus(35, 12);
    minus(10, 2);

    function sum($n1, $n2) // 더 유연함
    {
        return $n1 + $n2;
    }


    function minus($n1, $n2) // 2차 가공이 어렵다
    {
        print " minus : " . ($n1 - $n2) . "<br>"; // return이 있고 없고 차이
    }

?>

<!--
객체 안에 함수 : method(메소드)
객체 안이 아니라면 : function(함수)

둘이 같은데 위치에따라 부르는명칭이 달라짐

- 함수의 4가지 경우
return 있고 없고
인자가 있고 없고

- function 함수명 (매개변수) // 매개변수(=파라미터)

모든 함수는 return 이 있음.
만나야 종료됨
생략하더라도 자동으로 들어감
-->