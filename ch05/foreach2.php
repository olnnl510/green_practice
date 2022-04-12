<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table { border-collapse : collapse; }
        table, td, th { border: 1px solid #000;
                    text-align: center;}
        th, td { padding: 5px; }
    </style>
</head>
<body>
<table>

<?php

/*
    array에 담겨져있는 값과
    foreach 문 이용해서
    테이블로 나오도록
*/

    $array = array(
        "Hong" => 182.2,
        "Hwang" => 108.4,
        "Kim" => 176.3,
        "Park" => 174.1
    );

    print "<tr><th>이름</th><th>키</th></tr>";

    foreach($array as $key => $val)
    {
        print "<tr><td>" . $key . "</td><td>" . $val . "</td></tr>";
    }

?>
</table>
</body>
</html>

<!--

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

-->