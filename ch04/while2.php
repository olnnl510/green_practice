<?php

print " -- 시작 -- <br>";
while(true){ // 무한루프 줌
    $r_val = rand(1, 10);
    if($r_val == 10) { break; } // 브레이크로 빠져나옴
    print "r_val : $r_val <br>" ;

}

print " -- 끝 -- <br>";

?>