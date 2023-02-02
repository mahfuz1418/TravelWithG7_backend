<?php
require_once('../db_connect.php');
session_start();
$id_auth = $_SESSION['auth_id'];
$id = $_POST['id'];
$image = $_FILES['blog_image'];
$blog_title = htmlspecialchars(trim($_POST['blog_title']));
$blog_description = htmlspecialchars(trim($_POST['blog_description']));




if ($image['name'] && $blog_title && $blog_description) {
    $old_image_name = $image['name'];
    $explode_image = explode('.', $old_image_name);
    $extension = end($explode_image);
    if ($extension === 'png' ||  $extension === 'jpg') {
        if ($image['size'] <= '1000000') {
            $new_image_name = $id_auth . '_' . time() . '.' . $extension;
            $tmp_location = $image['tmp_name'];
            $file_location = "./upload/blog_pic/" . $new_image_name;
            move_uploaded_file($tmp_location, $file_location);

            // post image unlink query 
            $blogs_select_query = "SELECT * FROM `blogs` WHERE id = $id";
            $blogs_select_db = mysqli_query($db_connect, $blogs_select_query);
            $blogs_select_fetch = mysqli_fetch_assoc($blogs_select_db);
            $image_name = $blogs_select_fetch['blog_image'];
            $file_path = "./upload/blog_pic/" . $image_name;
            unlink($file_path);

            // post update query 
            $blog_query = "UPDATE `blogs` SET `blog_title`='$blog_title',`blog_description`='$blog_description',`blog_image`='$new_image_name' WHERE id='$id'";
            $blog_db = mysqli_query($db_connect, $blog_query);
            header('location:./blog_list.php');
            // $_SESSION['success'] = 'Your Blog Data Successfully Updated';
        } else {
            header('location:./blog_edit.php');
            $_SESSION['size_error'] = 'Your image size must be under 10MB';
        }
    } else {
        header('location:./blog_edit.php');
        $_SESSION['ext_error'] = 'Your Image must be jpg or png format';
    }
} else {
    header('location:./blog_list.php');
    $_SESSION['image_error'] = 'All Field Required*';
}
