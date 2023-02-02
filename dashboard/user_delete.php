<?php
    require_once('../db_connect.php');
    $id = $_GET['id'];
    $admin_delete_query = "DELETE FROM admins WHERE id=$id";
    $admin_delete_db = mysqli_query($db_connect, $admin_delete_query);
    header('location:./user_list.php');
?>