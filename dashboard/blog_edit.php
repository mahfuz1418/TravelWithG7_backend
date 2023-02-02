<?php
require_once('./includes/header.php');

?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="page-description">
                <h1>BLOGS</h1>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-2"></div>

        <div class="col-xl-8">
            <div class="card widget widget-list">
                <div class="card-header">
                    <h5 class="card-title">Edit Blog</h5>
                </div>
                <div class="card-body">
                    <?php
                    $id = $_GET['id'];
                    $blog_query = "SELECT * FROM blogs WHERE id = $id";
                    $blog_db = mysqli_query($db_connect, $blog_query);
                    $blog_arr = mysqli_fetch_assoc($blog_db);
                    ?>
                    <form method="POST" action="./blog_edit_data.php" enctype="multipart/form-data">
                        <!-- change name field  -->
                        <h5 class="text-center bg-info text-white p-2">Edit Blog</h5>
                        <input hidden type="number" name="id" id="" value="<?=$blog_arr['id']?>">
                        <div class="row mb-3">
                            <label for="title" class="col-form-label">Blog Title</label>
                            <div>
                                <input type="text" class="form-control" name="blog_title" id="" placeholder="Enter Post Title" value="<?=$blog_arr['blog_title']?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="des" class="col-form-label">Blog Description</label>
                            <div>
                                <textarea class="form-control" name="blog_description" id="" cols="30" rows="5" placeholder="Enter Post Description Here"><?=$blog_arr['blog_description']?></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="image" class="col-form-label">Blog Image<p class="text-warning">(Your Image must be jag/png format and size under 10 mb)</p></label>
                            <div>
                                <input type="file" class="form-control" id="image" name="blog_image" value="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary" name="edit_blog">Edit Post</button>
                            </div>
                            <div class="col-2"></div>
                            <div class="col-6">
                                <?php
                                if (isset($_SESSION['size_error'])) { ?>
                                    <p class="text-danger"><?= $_SESSION['size_error'] ?></p>
                                <?php
                                }
                                unset($_SESSION['size_error']);
                                ?>
                                <?php
                                if (isset($_SESSION['ext_error'])) { ?>
                                    <p class="text-danger"><?= $_SESSION['ext_error'] ?></p>
                                <?php
                                }
                                unset($_SESSION['ext_error']);
                                ?>
                                <?php
                                if (isset($_SESSION['image_error'])) { ?>
                                    <p class="text-danger"><?= $_SESSION['image_error'] ?></p>
                                <?php
                                }
                                unset($_SESSION['image_error']);
                                ?>
                                <?php
                                if (isset($_SESSION['success'])) { ?>
                                    <h5 class="text-dark mt-3"><?= $_SESSION['success'] ?></h5>
                                <?php
                                }
                                unset($_SESSION['success']);
                                ?>
                            </div>
                        </div>
                        <hr>

                    </form>
                </div>
            </div>
        </div>


    </div>

    <?php
    require_once('./includes/footer.php');

    ?>