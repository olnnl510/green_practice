<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table { border-collapse : collapse; }
        table, td { border: 1px solid #000; }
    </style>
</head>
<body>
    <table>
        <?php
            $val = rand(3, 10);
            print "val : $val";

            $num = 1;
            for($i=0; $i<$val; $i++)
            {
                print "<tr>"; // 랜덤 수까지 줄 반복
                for($z=0; $z<$val; $z++)
                {
                    print "<td>" . $num++ . "</td>"; // 랜덤 수까지 칸 반복
                }
                print "</tr>";
            }
        ?>
</body>
</html>