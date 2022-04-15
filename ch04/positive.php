<?php
    $result = 10;
    if($result > 0)
    {
        $result *= 0.5;
        print "$result <br>";
        print "Positive <br>";
    }
    else
    {
        print "$result <br>";
        print "Negative <br>";
    }
?>

<!--

    - TODO : $result 값을 반으로 만드세요.

    $result2 = $result / 2;
    print "$result2; <br>";

    $result = $result /2;
    $result = $result * 0.5;
    $result *= 0.5;

    Q $result 값에 -1 넣으면 Negative 뜨는 이유?
    음수라서..? 왜?
    *0.5 먹히지 않아서?????
    반으로 쪼개지지 않아서?

-->