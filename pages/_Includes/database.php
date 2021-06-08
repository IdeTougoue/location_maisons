<?php
    define("HOST", "localhost");
    define("DBNAME", "gestionarchive");
    define("USER", "root");
    define("PASS", "");
    try{
        $db = new PDO("mysql:host = ". HOST ."; dbname = ". DBNAME, USER, PASS);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "connexion oki";
    }catch(PDOException $e){
        echo $e;
    }
?>