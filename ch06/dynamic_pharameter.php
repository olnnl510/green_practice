<?php // 가변 인자(가변 파라미터) 함수

    function print_sum(...$vals) // 배열로 만들어서 넣어줌
    {
        print "sum : " . array_sum($vals) . "<br>";
    }

    print_sum(1, 2); // sum: 3
    print_sum(1, 2, 3); // sum: 6
    print_sum(1, 2, 3, 4); // sum : 10


?>



<!--

인자 총합

-
    function print_sum(...$vals)
    {
        $sum = 0;
        for($i=0; $i<count($vals); $i++)
        {
            $val = $vals[$i];
            $sum += $val;
        }
        print "sum : $sum <br>";
    }

    print_sum(1, 2); // sum: 3
    print_sum(1, 2, 3); // sum: 6
    print_sum(1, 2, 3, 4); // sum : 10



-
    function print_sum(...$vals)
    {
        $sum = 0;
        foreach($vals as $val)
        {
            $sum += $val;
        }
        print "sum : $sum <br>";
    }

    print_sum(1, 2); // sum: 3
    print_sum(1, 2, 3); // sum: 6
    print_sum(1, 2, 3, 4); // sum : 10

-->