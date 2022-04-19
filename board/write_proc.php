<?php
    include_once "db.php";

    $title = $_POST["title"];
    $ctnt = $_POST["ctnt"];

    print "title : $title <br>";
    print "ctnt : $ctnt <br>";
    
    $conn = get_conn(); // 데이터베이스와 커넥션
    $sql = "INSERT INTO t_board (title, ctnt) VALUES ('${title}', '${ctnt}')";
    $result = mysqli_query($conn, $sql);

    mysqli_close($conn); // 연결 닫는거 !!!
    print "result : $result <br>";
    header("Location: list.php"); // 리다이렉트
?>
<!--
db.php 포함

변수 : title값 POST로 받아옴
변수 : ctnt값 POST로 받아옴
프린트title
프린트ctnt

변수 : get_conn 함수(db랑연결)
변수 : 쿼리문 (쓰기);
변수 : 결과=커넥정보/실행시킬쿼리문 (영향줄수)

커넥닫음
프린트 결과(영향줄수)
리다이렉트(list로)
-->
<!--
고객이 무언가 작성한 창을 저장하는 역할
클라이언트가 서버한테 보낸 값을 받을때 쓰는것.

- $conn = get_conn(); // 데이터베이스와 커넥션

- $result = mysqli_query($conn, $sql);
커넥션 정보 / 실행시킬 쿼리문
커넥션 이용하여 쿼리문 실행. 0 넘어왔으면 insert 안된것.
~행에 대한 정보가 넘어옴. (~행에 영향을 미쳤다! 숫자(행 수)가 넘어옴.)

- mysqli_close($conn); // 연결 닫는거 !!!

- print "result : $result <br>";
뭐가 넘어왔는지 찍어봄 (ex 1 : 내가 영향미친 레코드 수)

- header("Location: list.php");
리다이렉트
주소값 이동. 슬러시 안넣으면 마지막 주소값만 바뀜.
앞에 슬러시 넣으면 다 붙여줘야함.

CRUD 중 R(select) 빼고 정수값(int) 넘어옴
처리 proc

-->

<!--
mysqli_query 함수는 mysqli_connect 를 통해 연결된 객체를 이용하여 MySQL 쿼리를 실행시키는 함수입니다.

mysqli_fetch_assoc 함수는 mysqli_query 를 통해 얻은 리절트 셋(result set)에서 레코드를 1개씩 리턴해주는 함수

출처: https://solbel.tistory.com/1038 [개발자의 끄적끄적]

-->