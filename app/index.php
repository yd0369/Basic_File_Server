<?php

    include "init.php";
    $db = Database::instance();
    $db->prepare("select * from 'users'");
    
?>
