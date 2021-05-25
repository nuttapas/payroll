<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>อนุมัติวันลา</title>
    <link href="../css/bootstrap/bootstrap.css" rel="stylesheet">
    <link href="../fontawesome-free-5.15.3-web/css/fontawesome.css" rel="stylesheet">
    <link href="../fontawesome-free-5.15.3-web/css/brands.css" rel="stylesheet">
    <link href="../fontawesome-free-5.15.3-web/css/solid.css" rel="stylesheet">
    <link href="../css/index.css" rel="stylesheet">
</head>

<body>
    <?php
    include('../component/nevbar.php')
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2">
                <?php include('../component/sidebar.php') ?>
            </div>

            <main role="main" class="col-md-10 ml-sm-auto col-lg-10 px-md-4 mt-3">
                <h3>อนุมัติลางาน</h3>
                <div class="card">
                    <div class="col-auto mt-2">
                        <div class="card">
                            <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="card card-stats">
                                                <div class="card-header bg-warning">
                                                    <div class="card-icon"><i class="bi bi-calendar-x-fill"> คำขอลาหยุด</i></div>
                                                    <h3 class="card-title">9999</h3>
                                                </div>
                                                <div class="card-footer ">
                                                    <div class="stats"><a href="#">ตรวจสอบ</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="card card-stats">
                                                <div class="card-header card-header-success card-header-icon">
                                                    <div class="card-icon"><i class="fas fa-camera size :9x"> store</i></div>
                                                    <p class="card-category">Revenue</p>
                                                    <h3 class="card-title">$34,245</h3>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="stats"><i class="material-icons">date_range</i> Last 24 Hours </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="card card-stats">
                                                <div class="card-header card-header-danger card-header-icon">
                                                    <div class="card-icon"><i class="material-icons">info_outline</i></div>
                                                    <p class="card-category">Fixed Issues</p>
                                                    <h3 class="card-title">75</h3>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="stats"><i class="material-icons">local_offer</i> Tracked from Github </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="card card-stats">
                                                <div _ngcontent-dif-c5="" class="card-header card-header-info card-header-icon">
                                                    <div class="card-icon"><i class="fa fa-twitter"></i></div>
                                                    <p class="card-category">Followers</p>
                                                    <h3 class="card-title">+245</h3>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="stats"><i class="material-icons">update</i> Just Updated </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <script src="../css/js/bootstrap.js"></script>
    <script src="../css/js/popper.js"></script>
    <script src="../css/js/slim.js"></script>
</body>

</html>