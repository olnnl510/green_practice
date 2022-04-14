<style>
    table { border-collapse : collapse; }
    table, td { border: 1px solid #000; }
    td { padding : 10px; text-align: center;}
</style>
<?php
    function print_table($val) // 함수 : 호출 당해야만 의미가 있다
    {
        $num = 1; // 지역변수 할당
        print "<table>"; // table 태그 찍음
        print "val : $val";

        for($i=0; $i<$val; $i++) // 반복문 0에서부터 2 : 0,1 2번만 돔
        {
            print "<tr>";
            for($z=0; $z<$val; $z++)
            {
                print "<td>";
                print $num++;
                print "</td>";
            }
            print "</tr>";
        }
        print "</table>";
    }

    $val = rand(2, 5);
    print_table($val); // 함수 호출
?>