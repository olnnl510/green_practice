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

[김재훈] [오후 11:37] 보통은 변수를 사용하여 모든 값들을 처리하지만 값이 변경되면 안되는 특별한 고정값을 사용하고 싶을 때 상수로 지정하여 사용하게 됩니다.
자주쓰이는 상수설정 값들은 도메인, 파일위치, 디렉터리 경로, PATH 등 고유값으로 지정되어야 할 값들이 있습니다.
[김재훈] [오후 11:40] 우리가 사용하는 $변수명 은 언제든 값을 변경할 수 있는데
[김재훈] [오후 11:41] define함수로 설정하면 함부로 값을 변경할 수 없어서
[김재훈] [오후 11:41] 값이 변경되지 말아야 하는곳에 쓰는거에요

-->