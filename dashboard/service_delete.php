<?php
    require_once('../db_connect.php');
    $id = $_GET['id'];
    $service_select_query = "SELECT * FROM `services` WHERE id = $id";
    $service_select_db = mysqli_query($db_connect, $service_select_query);
    $service_select_fetch = mysqli_fetch_assoc($service_select_db);
    $image_name = $service_select_fetch['service_image'];
    $file_path = "./upload/service_pic/" . $image_name;
    unlink($file_path);
    
    $service_delete_query = "DELETE FROM services WHERE id=$id";
    $service_delete_db = mysqli_query($db_connect, $service_delete_query);

   
    header('location:./service_list.php');
?>