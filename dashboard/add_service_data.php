<?php
require_once('../db_connect.php');
session_start();
$id = $_SESSION['auth_id'];
$image = $_FILES['service_image'];
$service_tile = htmlspecialchars(trim($_POST['service_title']));


if ($image['name'] && $service_tile ) {
    $old_image_name = $image['name'];
    $explode_image = explode('.', $old_image_name);
    $extension = end($explode_image);
    print_r($extension);
    if ($extension === 'png' ||  $extension === 'jpg') {
        if ($image['size'] <= '1000000') {
            $new_image_name = $id . '_' . time() . '.' . $extension;
            $tmp_location = $image['tmp_name'];
            $file_location = "./upload/service_pic/" . $new_image_name;
            move_uploaded_file($tmp_location, $file_location);
            $service_query = "INSERT INTO services( service_title, service_image) VALUES ('$service_tile','$new_image_name')";
            $service_db = mysqli_query($db_connect, $service_query);
            header('location:./add_service.php');
            $_SESSION['success'] = 'Your Data Successfully Inserted';
        } else {
            header('location:./add_service.php');
            $_SESSION['size_error'] = 'Your image size must be under 1MB';
        }
    } else {
        header('location:./add_service.php');
        $_SESSION['ext_error'] = 'Your Image must be jpg or png format';
    }
} else {
    header('location:./add_service.php');
    $_SESSION['image_error'] = 'All Field Required*';
}
