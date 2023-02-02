<?php
session_start();
require_once('../db_connect.php');



$name = htmlspecialchars(trim($_POST['name']));
$email = htmlspecialchars(trim($_POST['email']));
$password = htmlspecialchars($_POST['password']);
$confirm_password = htmlspecialchars($_POST['confirm_password']);
$role = htmlspecialchars($_POST['role']);
// email check query 

$email_check_query = "SELECT COUNT(*) AS 'result' FROM admins WHERE email = '$email'";
$email_check_db = mysqli_query($db_connect,$email_check_query);
$email_check_result = mysqli_fetch_assoc($email_check_db);

$flag = false;

// name condition 
if ($name) {
    $remove_space = str_replace(" ","",$name);
    if (ctype_alpha($remove_space)) {
        $_SESSION['old_name'] = $name;
    } else {
        $flag = true;
        $_SESSION['name_error'] = 'You can not use number';
    }
} else {
    $_SESSION['name_error'] = 'Plese Write user name';
}

// email condition 
if ($email) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if ($email_check_result['result']) {
            $flag = true;
            $_SESSION['email_exist'] = 'This email already in your database';
        } 
        $_SESSION['old_email'] = $email;
    }
} else {
    $flag = true;
    $_SESSION['email_error'] = 'Please type user email';
}

// password condition 
if ($password) {
    if (!preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/', $password)) {
        $flag = true;
        $_SESSION['pass_error'] = 'For stronger password you may use capital and small letter, number, and symbol';
    }
} else {
    $flag = true;
    $_SESSION['pass_error'] = 'Please Enter Your Password';
};

// confirm password condition 
if ($confirm_password) {
    if ($password === $confirm_password) {
    } else {
        $flag = true;
        $_SESSION['con_pass_error'] = 'Does not match password';
    }
} else {
    $flag = true;
    $_SESSION['con_pass_error'] = 'Please re type your password';
}



if ($flag) {
    header('location:./add_users.php');
} else {
    $password_encode = sha1($password);
    $users_query = "INSERT INTO admins( name,email, password,role) VALUES ('$name','$email','$password_encode','$role')";
    $users_query_db = mysqli_query($db_connect,$users_query);
    $_SESSION['acc_created'] = ' Your '.$role.' account succesfully created!';
    header('location:./add_users.php');
}





?>