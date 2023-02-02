<?php
session_start();
if (!isset($_SESSION['auth_id'])) {
    header('location:dashboard/../opps.php');
}
require_once('../db_connect.php');
//page name
$explode = explode('/', $_SERVER['PHP_SELF']);
$page_name = end($explode);

//role name
$pre_name = $_SESSION['auth_name'];
$admin_check_query = "SELECT * FROM `admins` WHERE name = '$pre_name' ";
$admin_db = mysqli_query($db_connect, $admin_check_query);
$admin = mysqli_fetch_assoc($admin_db);

// profile pic name 

$id = $_SESSION['auth_id'];
$demo_pic_query = "SELECT profile_pic FROM admins WHERE id=$id ";
$demo_pic_connect_db = mysqli_query($db_connect, $demo_pic_query);
$demo_pic_name = mysqli_fetch_assoc($demo_pic_connect_db)['profile_pic'];



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Neptune - Responsive Admin Dashboard Template</title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link href="./assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
    <link href="./assets/plugins/pace/pace.css" rel="stylesheet">


    <!-- Theme Styles -->
    <link href="./assets/css/main.min.css" rel="stylesheet">
    <link href="./assets/css/custom.css" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/neptune.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/neptune.png" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="app align-content-stretch d-flex flex-wrap">
        <div class="app-sidebar">
            <div class="logo">
                <a href="index.html" class="logo-icon"><span class="logo-text">Neptune</span></a>
                <div class="sidebar-user-switcher user-activity-online">
                    <a href="#">
                        <img src="./upload/profile_pic/<?=$demo_pic_name?>" alt="">
                        <span class="activity-indicator"></span>
                        <span class="user-info-text"><?= $_SESSION['auth_name'] ?><br><span class="user-state-info">On a call</span></span>
                    </a>
                </div>
            </div>
            <div class="app-menu">
                <ul class="accordion-menu">
                    <li class="sidebar-title">
                        Apps
                    </li>
                    <li class="<?= ($page_name == 'home.php') ? 'active-page' : '' ?>">
                        <a href="./home.php" class="active"><i class="material-icons-two-tone">dashboard</i>Dashboard</a>
                    </li>
                    <li <?= ($admin['role'] == 'admin') ? '' : 'hidden' ?> class="<?= ($page_name == 'add_users.php'  ) ? 'active-page' : '' ?>">
                        <a href=""><i class="material-icons-two-tone">person_add</i>Users<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            <li >
                                <a href="./add_users.php">Add Users </a>
                            </li>
                            <li>
                                <a href="./user_list.php">User List</a>
                            </li>
                        </ul>
                    </li>
                    <li class="<?= ($page_name == 'profile.php' ) ? 'active-page' : '' ?>">
                        <a href="./profile.php" class="active"><i class="material-icons-two-tone">face</i>Profile</a>
                    </li>
                    <li class="<?= ($page_name == 'add_service.php' ) || ($page_name == 'service_list.php' ) ? 'active-page' : '' ?>">
                        <a href=""><i class="material-icons-two-tone">star</i>Services<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a class="<?= ($page_name == 'add_service.php') ? 'active' : '' ?>" href="./add_service.php">Add Service</a>
                            </li>
                            <li>
                                <a class="<?= ($page_name == 'service_list.php') ? 'active' : '' ?>" href="./service_list.php">Service List</a>
                            </li>
                        </ul>
                    </li>
                    <li class="<?= ($page_name == 'add_blog.php' ) || ($page_name == 'blog_list.php' ) ? 'active-page' : '' ?>">
                        <a href=""><i class="material-icons-two-tone">dataset</i>Blogs<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a class="<?= ($page_name == 'add_blog.php') ? 'active' : '' ?>" href="./add_blog.php">Add Blog</a>
                            </li>
                            <li>
                                <a class="<?= ($page_name == 'blog_list.php') ? 'active' : '' ?>" href="./blog_list.php">Blog List</a>
                            </li>
                        </ul>
                    </li>
                    <li class="<?= ($page_name == 'guide_add.php' ) || ($page_name == 'guide_list.php' )  ? 'active-page' : '' ?>">
                        <a href=""><i class="material-icons-two-tone">person</i>Guide<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a class="<?= ($page_name == 'guide_add.php') ? 'active' : '' ?>" href="./guide_add.php">Add Guide</a>
                            </li>
                            <li>
                                <a class="<?= ($page_name == 'guide_list.php') ? 'active' : '' ?>" href="./guide_list.php">Guide List</a>
                            </li>
                        </ul>
                    </li>
                    <li class="<?= ($page_name == 'post_add.php' ) || ($page_name == 'post_list.php' ) ? 'active-page' : '' ?>">
                        <a href=""><i class="material-icons-two-tone">add</i>post<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a class="<?= ($page_name == 'post_add.php') ? 'active' : '' ?>" href="./post_add.php">Add Post</a>
                            </li>
                            <li>
                                <a class="<?= ($page_name == 'post_list.php') ? 'active' : '' ?>" href="./post_list.php">Post List</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li class="<?= ($page_name == 'social.php') ? 'active-page' : '' ?>">
                        <a href="./social.php" class="active"><i class="material-icons-two-tone">link</i>Social Link</a>
                    </li>
                    <li class="<?= ($page_name == 'contact_list.php') ? 'active-page' : '' ?>">
                        <a href="./contact_list.php" class="active"><i class="material-icons-two-tone">message</i>Message</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="app-container">
            <div class="search">
                <form>
                    <input class="form-control" type="text" placeholder="Type here..." aria-label="Search">
                </form>
                <a href="#" class="toggle-search"><i class="material-icons">close</i></a>
            </div>
            <div class="app-header">
                <nav class="navbar navbar-light navbar-expand-lg">
                    <div class="container-fluid">
                        <div class="navbar-nav" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link hide-sidebar-toggle-button" href="#"><i class="material-icons">first_page</i></a>
                                </li>
                                <li class="nav-item dropdown hidden-on-mobile">
                                    <a class="nav-link dropdown-toggle" href="#" id="addDropdownLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-icons">add</i>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="addDropdownLink">
                                        <li><a class="dropdown-item" href="#">New Workspace</a></li>
                                        <li><a class="dropdown-item" href="#">New Board</a></li>
                                        <li><a class="dropdown-item" href="#">Create Project</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown hidden-on-mobile">
                                    <a class="nav-link dropdown-toggle" href="#" id="exploreDropdownLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-icons-outlined">explore</i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-lg large-items-menu" aria-labelledby="exploreDropdownLink">
                                        <li>
                                            <h6 class="dropdown-header">Repositories</h6>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <h5 class="dropdown-item-title">
                                                    Neptune iOS
                                                    <span class="badge badge-warning">1.0.2</span>
                                                    <span class="hidden-helper-text">switch<i class="material-icons">keyboard_arrow_right</i></span>
                                                </h5>
                                                <span class="dropdown-item-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <h5 class="dropdown-item-title">
                                                    Neptune Android
                                                    <span class="badge badge-info">dev</span>
                                                    <span class="hidden-helper-text">switch<i class="material-icons">keyboard_arrow_right</i></span>
                                                </h5>
                                                <span class="dropdown-item-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                                            </a>
                                        </li>
                                        <li class="dropdown-btn-item d-grid">
                                            <button class="btn btn-primary">Create new repository</button>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                        </div>
                        <div class="d-flex">
                            <ul class="navbar-nav">
                                <li class="nav-item hidden-on-mobile">
                                    <a class="nav-link btn btn-primary text-light" target="_blank" href="../frontend/index.php">Visit Site</a>
                                </li>
                                <li class="nav-item hidden-on-mobile">
                                    <a class="nav-link btn btn-danger text-light" href="./auth/signin.php">Log Out</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="app-content">
                <div class="content-wrapper">