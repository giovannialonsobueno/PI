<?php

    include_once(__DIR__.'/../config/dbconfig.php');

    class DB extends PDO {
        
        function __construct(){
            $dsn = 'mysql:dbname='.DB_NAME.';host='.DB_HOST.';port='.DB_PORT;
            parent::__construct($dsn, DB_USER, DB_PASS);
        }

    }