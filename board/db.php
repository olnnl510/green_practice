<?php
    function get_conn() {
        define("URL", "localhost");
        define("USERNAME", "root");
        define("PASSWORD", "506greendg@");
        define("DB_NAME", "board1");
        return mysqli_connect(URL, USERNAME, PASSWORD, DB_NAME); // 통로 역할
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









-->