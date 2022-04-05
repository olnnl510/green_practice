<?php // 변수

//single-line comment

/*
multi-line comment
*/
    $age = 21; // 프로그래밍언어 = 대입연산자 (오른쪽 값을 복사하여 왼쪽에 준다)
    print "<div>" . $age . "</div>"; // . 을 만나면 모두 문자열로 바뀐다

    $name; // 변수 선언 후 나중에 작성 가능
    print "<div>" . $name . "</div>";
    print "<div>" . $name . "</div>";
    print "<div>" . $name . "</div>";
    print "<div>" . $name . "</div>";
    print "<div>" . $name . "</div>";


    $name = "홍길동"; // 첫번째 주는값:초기화, 그뒤로는:대입
    print "<div>" . $name . "</div>";

    $name = "장보고";
    print "<div>" . $name . "</div>";

    $name = 10;
    print "<div>" . $name . "</div>";

    /*
    변수명 네이밍 규칙
    1. 대소문자 영어(대소문자), 숫자, 특수기호 _(언더바) 로 이루어져야 함.
    2. 숫자가 맨 앞에 오면x
    3. 문자 사이에 빈칸x (주고싶으면 _ 언더바 주기)
    */

    $a1b = 12;
    print $a1b;

    $_124 = "ㅁㅁㅁㅁ";
    print $_124;


?>

<!-- 바깥에서의 주석-->

<!--
    tab을 줘서 구조적으로 작성
    print : html 태그로 만들자
    $ : 변수 (변할수가 있어서)
    쓰기
    읽기

    html 에서는 정수개념x 전부 문자열로 바뀜
    php 안에서는 타입 중요하지만, 결국 문자열로 바뀔것이다
    = 을 줘야만 변수값이 바뀜 ☆ 매커니즘 잘 이해
    
-->

<!-- 
    print "<div>" . $age . "</div>";
    print "<div>" . 21 . "</div>";

    print "<div>" . "21" . "</div>";
    print "<div>21" . "</div>";
    print "<div>21</div>";

    . 을 만나면 문자열로 바뀜
-->