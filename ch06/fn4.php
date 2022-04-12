<?php

    print_gugudan_from_to(2, 6);
        
    function print_gugudan_from_to($sdan, $edan)
    {
        for($dan=$sdan; $dan<=$edan; $dan++) // 앞자리
        {
            print_gugudan($dan); // 재활용성 높게 함수 만들기
            print "--------------------<br>";

        }
        
    }
    print "--------------------2시작<br>";

    $dan = rand(2, 9);
    print_gugudan($dan);

    function print_gugudan($dan) // 앞자리
    {
        for($i=1; $i<=9; $i++) // 뒷자리
        {
            print "$dan x $i = " . ($dan*$i) . "<br>";

        }
    }
    print "--------------------2끝<br>";

?>

<!--

 - print_gugudan($dan); //호출


        for($i=1; $i<=9; $i++) // 뒷자리
        {
            print "$dan x $i = " . ($dan*$i) . "<br>";

        }

-->