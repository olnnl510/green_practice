<?php
    $scores = array( // 국, 영, 수 점수 index 0번부터
        array(100, 100, 100), // 영수
        array(90, 80, 70), // 순자
        array(55, 65, 75), // 영철
    );

    $names = array("영수", "순자", "영철"); // 새로운 변수 선언. 배열처리 이름 맥임
    $each_sum = array(0, 0, 0); // 새로운 변수 선언. 영수총점수 순자총점수 영철총점수

    for($i=0; $i<count($scores); $i++) //2차원 : 중첩for문 줄선택 / 컬럼 컬럼 컬럼
    {                   //3
        for($z=0; $z<count($scores[$i]); $z++) // i0 = array0 count:3 , i1 = array1 count:3
        {
            $each_sum[$i] += $scores[$i][$z];
        }
    }
    for($i=0; $i<count($names); $i++)
    {
        print $names[$i] . " : " . $each_sum[$i] . "<br>"; // ex) names변수 1번째 배열(영수)는 = 총합
    }

    $names = array("영수", "순자", "영철");
    $each_scores = array(0, 0, 0);

    for($i=0; $i<count($scores); $i++) // i를 score변수의 배열 개수 array 3개 (3) 까지 반복
    {
        for($z=0; $z<count($scores[$i]); $z++) // z를 score변수의 n번째 배열 개수 (3) 까지 반복
        {
            $each_scores[$i] += $scores[$i][$z]; // ex) each_scores 변수[n번째] = score변수 n번째 배열 + n번째 배열
        }
    }
    for($i=0; $i<count($names); $i++)
    {
        print $names[$i] . " : " . $each_scores[$i] . "<br>";

    }

    






















?>

<!-- 각 과목별 합계점수, 평균점수

[김재훈2대] [오후 2:51] scores 배열의 첫번째 배열의 개수인거에요
[김재훈2대] [오후 2:51] i 값이 하나씩 늘어나니까
[김재훈2대] [오후 2:51] 0번째 배열의 개수
[김재훈2대] [오후 2:51] 1번째 배열의개수
[김재훈2대] [오후 2:51] 2번째 배열의개수
[김재훈2대] [오후 2:51] 이렇게 반복문 돌리는거에요

[김재훈2대] [오후 2:55] 네네 그렇죠
[김재훈2대] [오후 2:56] 배열의 개수가 바뀌면 
count로 배열의 개수 세주는거니까
맞춰서 바뀌겠죠

알트 누르고 커서 : 동시에 클릭 가능. 해제:esc


-->