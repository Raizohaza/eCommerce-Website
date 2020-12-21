<?php
    session_start();

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    
    //connect db
    //
    try{
        
        $option = parse_url(getenv('DATABASE_URL'));
        if($option["path"]=="")
            $db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
        else
        {
            //$option = parse_url(getenv('DATABASE_URL'));
            //var_dump($option);
            $db = new PDO("pgsql:"
            . "host=".$option['host']
            . ";dbname=".ltrim($option['path'],'/')
            . ";user=".$option['user']
            . ";port=".$option['port']
            . ";sslmode=require;"
            . "password=".$option['pass']);
        }

        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo "! Connection failed !" . $e->getMessage();
    }  

    require_once 'functions.php';
    $currentUser = getCurrentUser();
    ?>