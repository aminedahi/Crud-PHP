<?php
    try{
        $conn = new PDO("mysql:host=localhost;dbname=db_controle","root","");
    }catch (PDOException $e){
        $e->getMessage();
    }