<?php
    include_once "db.php";

    $title = $_POST["title"];
    $ctnt = $_POST["ctnt"];

    print "title : $title <br>";
    print "ctnt : $ctnt <br>";
    
    $conn = get_conn(); // 데이터베이스와 커넥션
    $sql = 
    " 
        INSERT INTO t_board 
        (title, ctnt)
        VALUES
        ('${title}', '${ctnt}')
    ";
   
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn); // 연결 닫는거 !!!
    print "result : $result <br>";
    header("Location: list.php"); // 리다이렉트
?>

<!--
고객이 무언가 작성한 창을 저장하는 역할
클라이언트가 서버한테 보낸 값을 받을때 쓰는것.

- $result = mysqli_query($nonn, $sql);
커넥션 정보 / 실행시킬 쿼리문
커넥션 이용하여 쿼리문 실행. 0 넘어왔으면 insert 안된것.
~행에 대한 정보가 넘어옴. (~행에 영향을 미쳤다! 숫자(행 수)가 넘어옴.)

- print "result : $result <br>";
뭐가 넘어왔는지 찍어봄 (ex 1 : 내가 영향미친 레코드 수)

- header("Location: list.php");
리다이렉트
주소값 이동. 슬러시 안넣으면 마지막 주소값만 바뀜.
앞에 슬러시 넣으면 다 붙여줘야함.

CRUD 중 R(select) 빼고 정수값(int) 넘어옴
처리 proc

-->