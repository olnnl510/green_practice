<?php

/*
국어
합계: ?점, 평균:?점

영어
합계: ?점, 평균:?점

수학
합계: ?점, 평균:?점
*/

$scores = array( // 국, 영, 수 점수 index 0번부터
    array(100, 100, 100), // 영수 줄:i 칸:z      0
    array(90, 80, 70), // 순자                   1
    array(55, 65, 75), // 영철                   2
);

$names = array("국어", "영어", "수학");
$sum_score = array(0, 0, 0); // 총 합계 z-i 0-0 1-0 2-0 / 0-1 1-1 2-1 / 0-2 1-2 2-2
$avg_score = array(0, 0, 0);

for($i=0; $i<count($scores); $i++) // i를 scores의 배열갯수(3)까지 반복
{
    
    for($z=0; $z<count($scores); $z++) // z를 score 배열갯수(3) 만큼 반복
    {
        $sum_score[$i] += $scores[$z][$i]; ////////////////
    }
    $avg_score[$i] = $sum_score[$i] / count($scores);

}

for($i=0; $i<count($names); $i++)
{

    print $names[$i] . " 합계: " . $sum_score[$i] . "<br>";
    print $names[$i] . " 평균: " . $avg_score[$i] . "<br>-----<br>";

}



?>