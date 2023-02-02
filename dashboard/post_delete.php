<?php
    require_once('../db_connect.php');
    $id = $_GET['id'];
    $post_select_query = "SELECT * FROM `posts` WHERE id = $id";
    $post_select_db = mysqli_query($db_connect, $post_select_query);
    $post_select_fetch = mysqli_fetch_assoc($post_select_db);
    $image_name = $post_select_fetch['post_thumbnil'];
    $file_path = "./upload/post_pic/" . $image_name;
    unlink($file_path);

    $post_delete_query = "DELETE FROM posts WHERE id=$id";
    $post_delete_db = mysqli_query($db_connect, $post_delete_query);

    header('location:./post_list.php');
?>