<?php
    define("URL", "localhost");
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
- mysqli_connect

    stream
PHP ==========> MYSQL (Maria)
연결할 때 쓰는것.
driver

stream (스트리밍~ 할때. 빨때를 꽂는다.)
        return mysqli_connect(URL, USERNAME, PASSWORD, DB_NAME, 포트번호(다를때) );



php : 연산능력
데이터베이스 : 기억능력 (php를 데이터베이스 이용해서 저장)


        define("URL", "localhost");
        define("USERNAME", "root");
        define("PASSWORD", "506greendg@");
        define("DB_NAME", "board1");

바뀌면 안되니까.
상수가 속도가 더 빠름.
-->

<!--
- 구조적 이해(CRUD)
php~my sql 연결 : db.php
Create 쓰기 : write.php write_proc.php
Read 읽기 : list.php detail.php
Update 수정 : mod.php mod_proc.php
Delete 삭제 : del_proc.php
-->