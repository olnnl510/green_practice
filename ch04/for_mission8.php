<?php // 안에 for문을 먼저 생각!
    $star = rand(2, 10);

    print "star : $star <br>";

    for ($i = 0; $i < $star; $i++)
    {
        for($z = 0; $z < $star; $z++) // $z = 0 으로 하려면 $z < $star
        {
            print "*" ;
        }
    print "<br>";
    }

?>



<!--


-->