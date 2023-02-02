<?php
require_once('../db_connect.php');
session_start();
$number = htmlspecialchars(trim($_POST['number']));
$email = htmlspecialchars(trim($_POST['email']));
$facebook = htmlspecialchars(trim($_POST['facebook_link']));
$instagram = htmlspecialchars(trim($_POST['instagram_link']));
$twitter = htmlspecialchars(trim($_POST['twitter_link']));
$youtube = htmlspecialchars(trim($_POST['youtube_link']));

if ($facebook && $twitter && $instagram && $youtube) {
    $social_update_query = "UPDATE social SET number = '$number', email='$email', facebook='$facebook',instagram='$instagram', twitter='$twitter',youtube='$youtube' WHERE id = '1'";
    $social_update_db = mysqli_query($db_connect, $social_update_query);
    header('location:./social.php');
    $_SESSION['link_success'] = 'Your Social Linkes Updated Successfully !';
} else {
    header('location:./social.php');
    $_SESSION['link_error'] = 'You must be input Your links !';
}
