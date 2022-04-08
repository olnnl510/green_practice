<?php // 연상 배열

    $freshman = array(
        "David" => "Computer", // key값 => value 값
        "Alice" => "Math",
        "Elsa" => "Physics",
        "Bob" => "Music",
        "Chris" => "Electronics"
    );

    print_r($freshman);
    print "<br><br>";
    print $freshman["David"] . "<br>"; //읽기.
    print $freshman["Alice"] . "<br>";
    print $freshman["Elsa"] . "<br>";
    print $freshman["Bob"] . "<br>";
    print $freshman["Chris"] . "<br>";

    $freshman["Bob"] = "Dance"; // 쓰기. 매커니즘 같다. 정수에서 문자열로 바뀌었을 뿐
    print "<br><br>";
    print $freshman["Bob"] . "<br>";

    $freshman["Frank"] = "History";
    print $freshman["Frank"] . "<br>";

    $freshman[0] = "안녕";
    print "<br><br>";
    print_r($freshman);


    
    

?>


<!--
    
여러개 한곳에 담는것 통칭 : collection

순서와 전혀 상관없으므로 array_push 대신
그냥 키값을 이용해서 넣는것이 좋다.

시퀀스(순서)
-->