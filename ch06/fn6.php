<?php
    //print_star($star);
    //print_star_line($star);

    $star = rand(3, 10);

    print_star_triangle($star);
    
    function print_star_triangle($star)
    {
        print " $star : <br>";

        for($i=0; $i<$star; $i++)
        {
            print_star($i);
            print "<br>";
        }
    }

    function print_star_line($star)
    {
        for($i=0; $i<$star; $i++)
        {
            print_star($star);
            print "<br>";
        }
    }

    function print_star($star)
    {
        for($i=0; $i<$star; $i++)
        {
            print "*";
        }
    }
?>

<!--
    $star = rand(3, 10);

    print_star_line($star);

    function print_star_line($star)
    {
        print " $star : <br>";
        for($i=0; $i<$star; $i++)
        {
            for($z=0; $z<$star; $z++)
            {
                print "*";
            }
            print "<br>";
        }
    }

-->