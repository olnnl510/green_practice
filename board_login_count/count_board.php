<?php
    include_once "db.php";
    //DB와 커넥션 시도하여 connection 객체 얻어오기
    $connection = get_conn();

    $YY = date('Y'); //년
    $MM = date('m'); //월
    $DD = date('d'); //일
    $dat = $YY."-".$MM."-".$DD; //2014-06-15 , 오늘 날짜 정보를 DB에서 조회함
    $sql =
    "   SELECT * FROM count_db
        WHERE redate = '$dat'
    "; // 쿼리 전송
    $result = mysqli_query($connection, $sql); // 결과 집합을 받아옴 (성공=true 받아옴) 쿼리 쏴준다
    $list = mysqli_num_rows($result);

    if(!$list) { // 아무도 들어온 적이 없어서 date정보가 없을 경우
        $count= 0;
    } else { // 누군가가 들어온 적이 있어서 date정보가 존재할 경우
        $row = mysqli_fetch_assoc($result);
        $count = $row['count']; // 현재날짜의 count값을 가져온다
    }

    if($count === 0) {
        $count++;
        $sql = "INSERT INTO count_db VALUES ('$count', '$dat')"; //오늘날짜로 새로운 count값을 추가한다
    } else {
        $count++;
        $sql = "UPDATE count_db SET count = $count WHERE redate = '$dat'"; //오늘날짜의 기존 count값을 변경시킨다
    }

    mysqli_query($connection, $sql);

    $totalQurey = "SELECT SUM(count) FROM count_db"; // Total 조회수 - 모든 count값을 sum
    // $totalCount = mysqli_query($connection, $total_qurey);
    $totalCount = mysqli_fetch_array(mysqli_query($connection, $totalQurey))[0];
    mysqli_close($connection);
    

    echo "<br><center><h2> 방문자 수 통계입니다 </h2><hr>";
    echo "[ Today : <font color = red>";
    echo $count; // db에서 조회해서 가져옴
    echo "</font>] <br>";

    echo "[ Total : <font color = blue>";
    echo $totalCount;
    echo "</font>] <br>";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>방문자수 통계</title>
</head>
<body>
    
</body>
</html>