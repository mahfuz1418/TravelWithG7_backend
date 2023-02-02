<?php
require_once('./includes/header.php');

?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="page-description">
                <h1>POSTS</h1>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-2"></div>

        <div class="col-xl-8">
            <div class="card widget widget-list">
                <div class="card-header">
                    <h5 class="card-title">Edit Post</h5>
                </div>
                <div class="card-body">
                    <?php
                    $id = $_GET['id'];
                    $post_query = "SELECT * FROM posts WHERE id = $id";
                    $post_db = mysqli_query($db_connect, $post_query);
                    $post_arr = mysqli_fetch_assoc($post_db);
                    ?>
                    <form method="POST" action="./post_edit_data.php" enctype="multipart/form-data">
                        <!-- change name field  -->
                        <h5 class="text-center bg-info text-white p-2">Edit Your Post</h5>
                        <input hidden type="number" name="id" id="" value="<?=$post_arr['id']?>">
                        <div class="row mb-3">
                            <label for="title" class="col-form-label">Post Title</label>
                            <div>
                                <input type="text" class="form-control" name="post_title" id="" placeholder="Enter Post Title" value="<?=$post_arr['post_title']?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="des" class="col-form-label">Post Description</label>
                            <div>
                                <textarea class="form-control" name="post_description" id="" cols="30" rows="5" placeholder="Enter Post Description Here"><?=$post_arr['post_description']?></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="image" class="col-form-label">Post Thumbnil<p class="text-warning">(Your Image must be jag/png format and size under 10 mb)</p></label>
                            <div>
                                <input type="file" class="form-control" id="image" name="post_thumbnil" value="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary" name="add_guide">Edit Post</button>
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