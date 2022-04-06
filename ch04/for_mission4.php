<?php
/*
지금까지 배운 것 모두 활용하여
출력 : [1, 2, 3, 4, 5, 6, 7]
*/
    $end_val = 7;
    echo "[";
    for($i=1; $i<=$end_val; $i++)
    {
        print $i;
        if($i < $end_val) { print ", "; }
    }
    echo "]";
    echo "<br>";
    echo "[";
    for($i=1; $i<=$end_val; $i++)
    {
        if($i > 1) { print ", "; }
        print $i;
    }
    echo "]";
?>

<!--
    echo "[";
    for($i = 1; $i <= 7; $i++)
    {
        echo $i ;
        if($i <= 6)
        {
            echo "," ;
        }
    }
    echo "]";

    if($i=1)
    {
        echo "[" . $i . "," ;
    }

    switch($i)
    {case 1:
        echo "[" . $i . "," ;
        break;
    case 2: 3: 4: 5: 6:
        echo "$i," ;
        break;
    case 7:
        echo "$i]" ;
        break;
    }
-->