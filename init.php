<?php

        // include "Database.php";

        spl_autoload_register(function($class) {
                require $class.'.php';
        });

        define("DB_HOST", "mysql_db-server");
        define("DB_NAME", "arena_database");
        define("DB_USER", "root");
        define("DB_PASS", "R00T@AdMiN");
        define("BASE_URL", "http://localhost:8080/");

        $validate = new Validate;

?>