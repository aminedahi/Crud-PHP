<?php
    include 'connection.php';
    $id=$_GET['id'];
    
    $stm=$conn->prepare("DELETE FROM `patients` WHERE `patients`.`id` = ?");
    $stm->execute(array($id));
        header('location:liste-patients.php');



?>>