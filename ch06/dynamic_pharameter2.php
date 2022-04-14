<?php // 가변 인자 함수

    function multi()
    {
        print " count : " . count(func_get_args()) . "<br>";
        print "[0] : " . func_get_args()[1] . "<br>";
    }
    multi(2);
    multi(5, 10);

/*
아규먼트, 인자
- 이것 자체가 배열. [] 사용. 사용방법 = vals
func_num_args() : 인자수 리턴 (몇개)
func_get_arg() : 인자값 가져올 때 사용
func_get_args() : 인자배열로 받음 (배열로 만들어서 리턴)

*/
    function print_sum()
    {
        print "func_num_args() : " . func_num_args() . "<br>";
        print "func_get_arg(0) : " . func_num_args(0) . "<br>";
        print "func_get_arg(1) : " . func_num_args(1) . "<br>";
        print "----------<br>";

    }

    // print_sum(10, 20);
    // print_sum(9, 11, 13);

    function sum()
    {
        print "count : " . count(func_get_args()) . "<br>";
        $sum = 0;
        foreach(func_get_args() as $val)
        {
            $sum += $val;
        }
        return $sum;
    }

    print "sum : " . sum(1, 2) . "<br>";
    print "썸 : " . sum(1, 2, 10, 11, 12, 13, 14) . "<br>";

    
?>



<!--
arguments

매개변수..?




-->