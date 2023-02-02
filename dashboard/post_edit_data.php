<?php
require_once('../db_connect.php');
session_start();
$id_auth = $_SESSION['auth_id'];
$id = $_POST['id'];
$image = $_FILES['post_thumbnil'];
$post_title = htmlspecialchars(trim($_POST['post_title']));
$post_description = htmlspecialchars(trim($_POST['post_description']));




if ($post_title || $post_description) {
    if ($image['name']) {
        $old_image_name = $image['name'];
        $explode_image = explode('.', $old_image_name);
        $extension = end($explode_image);
        if ($extension === 'png' ||  $extension === 'jpg') {
            if ($image['size'] <= '1000000') {
                $new_image_name = $id_auth . '_' . time() . '.' . $extension;
                $tmp_location = $image['tmp_name'];
                $file_location = "./upload/post_pic/" . $new_image_name;
                move_uploaded_file($tmp_location, $file_location);

                // post image unlink query 
                $post_select_query = "SELECT * FROM `posts` WHERE id = $id";
                $post_select_db = mysqli_query($db_connect, $post_select_query);
                $post_select_fetch = mysqli_fetch_assoc($post_select_db);
                $image_name = $post_select_fetch['post_thumbnil'];
                $file_path = "./upload/post_pic/" . $image_name;
                unlink($file_path);

                // post update query 
                $post_query = "UPDATE `posts` SET `post_title`='$post_title',`post_description`='$post_description',`post_thumbnil`='$new_image_name' WHERE id= $id";
                $post_db = mysqli_query($db_connect, $post_query);
                header('location:./post_list.php');
                $_SESSION['success'] = 'Your Post Data Successfully Updated';
            } else {
                header('location:./post_add.php');
                $_SESSION['size_error'] = 'Your image size must be under 10MB';
            }
        } else {
            header('location:./post_add.php');
            $_SESSION['ext_error'] = 'Your Image must be jpg or png format';
        } # code...
    }
    $post_query = "UPDATE `posts` SET `post_title`='$post_title',`post_description`='$post_description' WHERE id= $id";
    $post_db = mysqli_query($db_connect, $post_query);
    header('location:./post_list.php');
    $_SESSION['success'] = 'Your Post Data Successfully Updated';
} else {
    header('location:./post_add.php');
    $_SESSION['image_error'] = 'All Field Required*';
}
