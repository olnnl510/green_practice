<?php

        print " -- 시작 -- <br>";
        
        do {
            $r_val = rand(1,10);
            print "r_val : $r_val <br>";
        }
        while($r_val != 10);
        print " -- 끝 -- <br>";

?>

<!--
while 조건식 먼저 체크, 진입할지 말지 결정
do while 내용 먼저 읽고, 조건식 체크
-->