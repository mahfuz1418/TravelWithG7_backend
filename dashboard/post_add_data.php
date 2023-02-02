<?php
require_once('../db_connect.php');
session_start();
$id = $_SESSION['auth_id'];
$image = $_FILES['post_thumbnil'];
$post_title = htmlspecialchars(trim($_POST['post_title']));
$post_description = htmlspecialchars(trim($_POST['post_description']));


if ($image['name'] && $post_title && $post_description ) {
    $old_image_name = $image['name'];
    $explode_image = explode('.', $old_image_name);
    $extension = end($explode_image);
    if ($extension === 'png' ||  $extension === 'jpg') {
        if ($image['size'] <= '1000000') {
            $new_image_name = $id . '_' . time() . '.' . $extension;
            $tmp_location = $image['tmp_name'];
            $file_location = "./upload/post_pic/" . $new_image_name;
            move_uploaded_file($tmp_location, $file_location);
            $guide_query = "INSERT INTO `posts`(`post_title`, `post_description`, `post_thumbnil`) VALUES ('$post_title','$post_description','$new_image_name')";
            $guide_db = mysqli_query($db_connect, $guide_query);
            header('location:./post_add.php');
            $_SESSION['success'] = 'Your Post Data Successfully Inserted';
        } else {
            header('location:./post_add.php');
            $_SESSION['size_error'] = 'Your image size must be under 10MB';
        }
    } else {
        header('location:./post_add.php');
        $_SESSION['ext_error'] = 'Your Image must be jpg or png format';
    }
} else {
    header('location:./post_add.php');
    $_SESSION['image_error'] = 'All Field Required*';
}
