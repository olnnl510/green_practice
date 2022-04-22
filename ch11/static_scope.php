<?php

function A()
{
    global $n;
    print $n . "<br>";
}

function B()
{
    A();
    $n = "B";
}

$n = "M";
A();
B();

?>

<!--
M
M
-->