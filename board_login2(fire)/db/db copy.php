<?php
    define("URL", "localhost");
    define("USERNAME", "root");
    define("PASSWORD", "greendg506@");
    define("DB_NAME", "board_login");
    define("PORT", "3306");

    function get_conn()
    {
        return mysqli_query(URL, USERNAME, PASSWORD, DB_NAME, PORT);
    }
?>