<?php



$scores = array( // 국, 영, 수 점수 index 0번부터
    array(100, 100, 100), // 영수
    array(90, 80, 70), // 순자
    array(55, 65, 75), // 영철
);

$names = array("영수", "순자", "영철");
$each_sum = array(0, 0, 0);

for($i=0; $i<count($scores); $i++) // score 의 배열수만큼 반복 3

{
    for($z=0; $z<count($scores[$i]); $z++) // score 의 배열의 칸수 만큼 반복?????
    {
        $each_sum[$i] += $scores[$i][$z];
    }
}
    for($i=0; $i<count($names); $i++)
    {
        print $names[$i] . " : " . $each_sum[$i] . "<br>";
    }
?>



<!--


과목명 넣을 때랑 합계/평균 계산할 때랑 for문을 따로 쓰는 이유가 있나요?

for문을 나눠쓰는 이유: 합계만 계산 하고싶을때, 인쇄용/ 작업용 등 함수관련..!


-->