<?php
    $snum = 4;
    $enum = 10;
    print_num_from_to($snum, $enum);

    // [4, 5, 6, 7, 8, 9, 10] 이렇게 출력하게 해주세요.
    // 만약 enum값이 더 작으면 "종료값이 더 작을 수 없습니다."가 출력되게 해주세요.

    function print_num_from_to($snum, $enum)
    {
        if($enum < $snum) // 에러 먼저 잡음
        {
            print "종료값이 더 작을 수 없습니다.";
            return; // 종료 함수 실행 안됨 else 안들어감
        }

        print "[";
        for ($i=$snum; $i<=$enum; $i++)
        {
            if($i > $snum)
            {
                print ", ";
            }
            print $i;
        }
        print "]";

    }

?>

<!--

    function print_num_from_to($snum, $enum)
    {
        print "[";
        if($snum<=$enum)
        {
            for($i=$snum; $i<=$enum; $i++)
            {
                if($i<$enum)
                {
                    print " $i, ";
                }
                else
                {
                    print $i;
                }
            }
        }
        else
        {
            print "종료값이 더 작을 수 없습니다.";
        }
        print "]";
    }

-->