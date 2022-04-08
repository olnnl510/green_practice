<?php // 배열 []
  $week = array("일", "월", "화", "수", "목", "금", "토"); // 0 1 2 3 4 5 6

  print $week[0] . "<br>" ; // [] 사이에 원하는 값(index값). 읽기 0번방 값 가져와. = 안들어가면 읽기. = 들어가면 쓰기.
  print $week[3] . "<br>" ;

  $week[3] = "Wed"; // 쓰기 : 주소로 접근. 3번방 값 wed =  오른쪽 값 복사하여 왼쪽에 준다.
  print $week[3] . "<br>";

  $week[7] = "응?"; // 7번방 없었는데 값을 매기면, 7번방이 생김
  print $week[7] . "<br>";

  $week[9] = "ㅁㅁ"; // 중간에 8을 비우고
  print $week[8] . "<br>"; // 에러 안터지고 빈칸처리! (8번 할당한 적 없으므로)
  print $week[9] . "<br>";
  print $week[11] . "<br>";
  print "test <br>";
  print "count(week) : " . count($week) . "<br>"; // 비어있는 거 빼고 카운트

  print "<br>";
  print "<br>";
  print "----------------<br>";


  $test = array("A", "B"); // 2개짜리 배열 한개 더 만듦. 변수에 값(배열한테 접근할 수 있는 주소값)이 저장 된다. "0" "1"
  print count($test) . "<br>"; // count함수: 배열 몇개. test 에는 변수에 접근하는 주소값이 저장되어 있음.

  // $test[10] = "C"; 이런식으로 추가No. 실수할수 있음
  array_push($test, "C", "D"); // ☆배열에 값을 추가할 때!!!!! 중간에 비는경우 안생김.☆ 배열 넣고자하는 변수 / 넣고싶은 값 , 순차적으로 "2" "3"

  print "count(\$test) : " . count($test) . "<br>"; // 2개 추가한뒤 count 4개. $test 변수로 처리되니까 앞에 | 역슬러시. $기능 무력화.

  print "test[2] : " . $test[2] . "<br>";
  print "test[3] : " . $test[3] . "<br>";

  print "---------------<br>";
  $test2 = array(1, 3.44, "안녕"); // 이렇게 쓰기NoNo 타입 무조건 맞춰서 쓰자!
  print $test2[0];
  print $test2[1];
  print $test2[2];
?>



<!--

변수는 값 하나만 저장할수 있다.
모든 변수는 값 "하나밖에" 저장이 안된다.

값 저장하려면 변수하나에 값 하나씩 할당해야함
여러개의 값을 한곳에다 담고 싶을 때 "배열"

변수 = 주택
배열 = 아파트 (다방)
값 = 호실번호 (0번부터 시작)


배열 : 여러개 값을 한곳에 몰아서(묶어서) 쓰고싶어서 쓰는것.
☆배열 & for문 : 같이 쓰는 시너지 효과 good! 5만개도 3줄컷 가능.☆
배열 만들면 번호 할당! 0부터~ 0 1 2 3 4 5 번방

읽기 : $week 값 하나가 저장. array 한테 접근할 수 있는 값.
쓰기 : 


- 객체지향의 시작점 (매커니즘 이해하자!)
$week : 배열에 접근할수 있는 주소값 저장!
array 배열에 접근하면 : 일 월 화 수 목 금 토 다 쓸수 있음!



= 은 오른쪽 값을 복사하여 왼쪽에 준다!
=이 있어야 변수를 바꿀수 있다!

-->