<?php

    $dsn = "mysql:host=localhost;dbname=testdb";
    $dbusername = "root";
    $dbpassword = "";

 try{
    $pdo  = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_);
    } catch (PDOException $e) { 
        echo "Connection Error" . $e->getMessage();
    }
?>