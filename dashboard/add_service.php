<?php
require_once('./includes/header.php');

?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="page-description">
                <h1>SERVICES</h1>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-2"></div>

        <div class="col-xl-8">
            <div class="card widget widget-list">
                <div class="card-header">
                    <h5 class="card-title">Add Service</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="./add_service_data.php" enctype="multipart/form-data">

                        <!-- change name field  -->
                        <h5 class="text-center bg-info text-white p-2">Add new service</h5>
                        <div class="row mb-3">
                            <label for="title" class="col-form-label">Service Title</label>
                            <div>
                                <input type="text" class="form-control" name="service_title" id="" placeholder="Enter Your Service Title Here">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="image" class="col-form-label">Service Image <p class="text-warning">(Your Image must be jag/png format and size under 1 mb)</p></label>
                            <div>
                                <input type="file" class="form-control" id="image" name="service_image" value="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary" name="add_service">Add Service</button>
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