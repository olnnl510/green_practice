<?php

print __FILE__ . "<br>"; // 파일 위치
print __LINE__ . "<br>"; // 라인 위치
print __LINE__ . "<br>";
print "PHP CERSION : " . PHP_VERSION . "<br>";
print "OS : " . PHP_OS . "<br>";

$GLOBALS["foo"] = 10; // 어느파일에서든지 사용가능
$GLOBALS["foo"] = 11;

print "--글로벌 상수 -- <br>";
foreach($GLOBALS as $key => $var)
{
    print $key . " : ";
    print_r($var);
    print "<br>";
}


?>