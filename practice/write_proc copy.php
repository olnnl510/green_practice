<?php
    include_once "db.php"; // 한번만 들고오기때문에 그냥 include보다 once 쓰는게 낫다!

    $title = $_POST["title"]; // post 방식, get 방식
    $ctnt = $_POST["ctnt"];

    print "title : $title<br>";
    print "ctnt : $ctnt <br>";

    $conn = get_conn(); // 데이터베이스와 커넥션
    $sql =
    "
    INSERT INTO t_board
    (title, ctnt)
    VALUES
    ('${title}', '${ctnt}')    
    ";

    $result = mysqli_query($nonn, $sql); //1 커넥션정보 / 실행시킬 쿼리문
    mysqli_close($conn); // 연결 닫는거 !!!
    print "result : $result <br>"; //2
    // header("Location: list.php"); // 3 
    


?>


<!--

고객이 무언가 작성한 창을 저장하는 역할


클라이언트가 서버한테 보낸 값을 받을때 쓰는것.

- 1. $result = mysqli_query($nonn, $sql);
커넥션 이용하여 쿼리문 실행. 0 넘어왔으면 insert 안된것
~행 에 대한 정보가 넘어옴. (~행에 영향을 미쳤다! 숫자가 넘어옴.(행 수)

-2. 뭐가 넘어왔는지 찍어봄 (ex 1 : 내가 영향미친 레코드 수)

-3. 주소값 이동. 슬러시 안넣으면 마지막 주소값만 바뀜.
앞에 슬러시 넣으면 다 붙여줘야함
리 다이렉트

CRUD 중 R(select) 빼고 정수값(int) 넘어옴

처리 proc
-->