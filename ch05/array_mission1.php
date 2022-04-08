<?php

/*
합계: ?
평균: ?
*/

  $score_arr = array(100, 90, 33, 87, 65);

  $sum = 0;
  $len = count($score_arr); // 배열 갯수 5
  for($i=0; $i<$len; $i++)
  {
    $sum += $score_arr[$i]; // ??????????
  }
  $avg = $sum / $len ;
  print "합계: $sum <br>";
  print "평균: $avg <br>";

?>



<!--

  null 안쓰는 것이 트렌드

  초기화 하는 습관 들이자!


  for($i=0; $i<= count($score_arr); $i++)
  {
    print "합계: " $sum = $sum+$i ;
  }




  
  print "합계: " . $score_arr[0] + $score_arr[1] + $score_arr[2] + $score_arr[3] + $score_arr[4] . "<br>";
  
  $sum = ($score_arr[0] + $score_arr[1] + $score_arr[2] + $score_arr[3] + $score_arr[4]);

  print "평균: " . $sum/5;


-->