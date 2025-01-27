<?php 
    require("helpers/Database.php");
    require("helpers/functions.php");

    $config = require("config.gitignore");
    $db = new DATABASE($config["database"]);

    require("router.php");
?>