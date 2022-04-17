<?php // foreach 문
$array = array(100, 200, 300, 400, 500);

foreach($array as $val) // 자동으로 제일 처음 값-> 다음값 다음값 순차적으로 넣어줌
{
    print $val . "<br>";
}

print " --------------------<br> ";

foreach($array as $key => $val) // 변수명 아무거나 해도됨
{
    print $key . " : " . $val . "<br>";
}

print " --------------------<br> ";

?>


<!--

두 가지 문법 중 첫 번째 문법은 배열의 원소만 가져오고, 두 번째 문법은 키(key)와 원소(value)를 가져 옵니다. 이 중 첫 번째 문법이 더 자주 사용됩니다.
https://www.habonyphp.com/2019/02/foreach.html

-->