<?php
    require_once('../db_connect.php');
    $id = $_GET['id'];
    $guide_select_query = "SELECT * FROM `guids` WHERE id = $id";
    $guide_select_db = mysqli_query($db_connect, $guide_select_query);
    $guide_select_fetch = mysqli_fetch_assoc($guide_select_db);
    $image_name = $guide_select_fetch['guide_image'];
    $file_path = "./upload/guide_pic/" . $image_name;
    unlink($file_path);
    
    $guide_delete_query = "DELETE FROM guids WHERE id=$id";
    $guide_delete_db = mysqli_query($db_connect, $guide_delete_query);

    header('location:./guide_list.php');
?>