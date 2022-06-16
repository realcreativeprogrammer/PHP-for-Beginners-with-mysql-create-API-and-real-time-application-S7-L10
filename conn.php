<?php
try{
    $pdo=new PDO("mysql:host=localhost;dbname=images",'root','');
    // echo 'you are connected';
    }catch(PDOException $e){
        echo 'you hace error'.$e->getMessage();
    }

?>