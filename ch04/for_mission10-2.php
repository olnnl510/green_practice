<?php
    $val = rand(3, 10) ;
    print " val : $val <br>";

    for($i=1; $i<=$val; $i++)
    {
        for($z=1; $z<=$val; $z++)
        {
            print
            "
            <style>
            tr, td { border: 1px solid #000 };
            </style>

            <table>
                <tr>
                    <td> $z
                    </td>
                </tr>
            </table>
            ";
        }
    }
?>