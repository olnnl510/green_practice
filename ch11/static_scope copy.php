<?php

function A()
{
    print $n . "<br>"; // 함수안에 global 없으면 지역변수. 지역변수는 전역변수와 상관x
}

function B()
{
    A();
    $n = "B";
}

$n = "M"; // 전역변수
A();
B();

?>

<!--
아무것도 안찍힘
-->