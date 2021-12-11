<?php

<<<<<<< HEAD
        // include "Database.php";

        spl_autoload_register(function($class) {
                require $class.'.php';
        });
=======
        include "Database.php";
>>>>>>> d4980eb3cbec3ad4968e6772582f09a9aa618750

        define("DB_HOST", "mysql_db-server");
        define("DB_NAME", "arena_database");
        define("DB_USER", "root");
        define("DB_PASS", "R00T@AdMiN");
        define("BASE_URL", "http://localhost:8080/");

<<<<<<< HEAD
        $validate = new Validate;

=======
>>>>>>> d4980eb3cbec3ad4968e6772582f09a9aa618750
?>