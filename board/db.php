<?php
    define("URL", "localhost"); // 키값이니까 (키값 보통 문자열이니까 쌍따옴표 "" 안붙이면 변수 혹은 명령어로 인식할수 있기 때문)
    define("USERNAME", "root");
    define("PASSWORD", "506greendg@");
    define("DB_NAME", "board1");
    define("PORT", "3306");

    function get_conn()
    {
        return mysqli_connect(URL, USERNAME, PASSWORD, DB_NAME, PORT);
    }
?>
<!--
DB_NAME : board1
table : t_board
pk값 : i_board

- mysqli_connect : mysqli_connect는 MySQL server 또는 MariaDB Server에 연결하는 함수입니다.

    stream
PHP ==========> MYSQL (Maria)
연결할 때 쓰는것.
driver

stream (스트리밍~ 할때. 빨때를 꽂는다.)
        return mysqli_connect(URL, USERNAME, PASSWORD, DB_NAME, 포트번호(다를때) );

php : 연산능력
데이터베이스 : 기억능력 (php를 데이터베이스 이용해서 저장)
바뀌면 안되니까.상수가 속도가 더 빠름.

- 구조적 이해(CRUD)
php~my sql 연결 : db.php
Create 쓰기 : write.php write_proc.php
Read 읽기 : list.php detail.php
Update 수정 : mod.php mod_proc.php
Delete 삭제 : del_proc.php

 - 순서
 db > write > write_proc > list.php > detail > del_proc > mod > mod_proc

- 쿼리문

<Create>
- write_proc.php
$sql = "INSERT INTO t_board (title, ctnt) VALUES ('${title}', '${ctnt}')";

<Read>
- list.php
$sql = "SELECT i_board, title, create_at FROM t_board ORDER BY i_board DESC";

- detail.php
$sql = "SELECT * FROM t_board WHERE i_board = $i_board";

<Update>
- mod.php
$sql = "SELECT title, ctnt FROM t_board WHERE i_board = $i_board";

- mod_proc.php
$sql = "UPDATE t_board SET title = '$title', ctnt = '$ctnt', mod_at = now() WHERE i_board = $i_board";

<Delete>
- del_proc.php
$sql = "DELETE FROM t_board WHERE i_board = $i_board";
-->