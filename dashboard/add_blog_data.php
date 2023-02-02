<?php
require_once('../db_connect.php');
session_start();
$id = $_SESSION['auth_id'];
$image = $_FILES['blog_image'];
$blog_title = htmlspecialchars(trim($_POST['blog_title']));
$blog_description = htmlspecialchars(trim($_POST['blog_description']));


if ($image['name'] && $blog_title && $blog_description ) {
    $old_image_name = $image['name'];
    $explode_image = explode('.', $old_image_name);
    $extension = end($explode_image);
    if ($extension === 'png' ||  $extension === 'jpg') {
        if ($image['size'] <= '1000000') {
            $new_image_name = $id . '_' . time() . '.' . $extension;
            $tmp_location = $image['tmp_name'];
            $file_location = "./upload/blog_pic/" . $new_image_name;
            move_uploaded_file($tmp_location, $file_location);
            $blog_query = "INSERT INTO `blogs`(`blog_title`, `blog_description`, `blog_image`) VALUES ('$blog_title','$blog_description','$new_image_name')";
            $blog_db = mysqli_query($db_connect, $blog_query);
            header('location:./add_blog.php');
            $_SESSION['success'] = 'Your Data Successfully Inserted';
        } else {
            header('location:./add_blog.php');
            $_SESSION['size_error'] = 'Your image size must be under 10MB';
        }
    } else {
        header('location:./add_blog.php');
        $_SESSION['ext_error'] = 'Your Image must be jpg or png format';
    }
} else {
    header('location:./add_blog.php');
    $_SESSION['image_error'] = 'All Field Required*';
}
