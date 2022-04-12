<?php
    $arr = [10, 33, 12, 8, 1, 89, 11];

    for($i=count($arr)-1; $i>0; $i--) // 'arr 배열 수 -1' 부터 0까지 감소하며 반복 : 6부터~
    {
        for($z=0; $z<$i; $z++) // 0부터 i('arr 배열 수 -1')전까지 증가하며 반복 : 0부터~
        {
            if($arr[$z] > $arr[$z+1]) {
                $temp = $arr[$z]; // 임시저장소에 z값 저장
                $arr[$z] = $arr[$z+1]; // z값에다가 = z+1값 복사
                $arr[$z+1] = $temp; // 임시저장소 줍줍
            }                       // 결론 : 자리바꾸기
        }

        print_r($arr);
        print "<br>";
    }

    print "<br>";
    print "<br>";
    print_r($arr);

?>