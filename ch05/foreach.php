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