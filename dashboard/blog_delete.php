<?php
    require_once('../db_connect.php');
    $id = $_GET['id'];
    $service_delete_query = "DELETE FROM blogs WHERE id=$id";
    $service_delete_db = mysqli_query($db_connect, $service_delete_query);

    header('location:./service_list.php');
?>