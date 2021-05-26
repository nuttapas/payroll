<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/bootstrap/bootstrap.css" rel="stylesheet">
    <link href="../fontawesome-free-5.15.3-web/css/fontawesome.css" rel="stylesheet">
    <link href="../fontawesome-free-5.15.3-web/css/brands.css" rel="stylesheet">
    <link href="../fontawesome-free-5.15.3-web/css/solid.css" rel="stylesheet">
    <link href="../css/index.css" rel="stylesheet">
    <link href="../node_modules/bootstrap-icons/bootstrap-icons.svg">
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
                <div class="card">
                    <div class="col-auto mt-2">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="mb-5 mt-3">dashboard HR</h3>
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="card card-stats">
                                            <div class="card-header bg-info">
                                                <div class="card-icon"><i class="bi bi-arrow-down-circle-fill"> คำขอลาหยุด</i></div>
                                                <h3 class="card-title">9999 !!</h3>
                                            </div>
                                            <div class="card-footer ">
                                                <div class="stats"><a href="#">ตรวจสอบ</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="card card-stats">
                                            <div class="card-header bg-info">
                                                <div class="card-icon"><i class="bi bi-arrow-down-circle-fill"> รายการตั้งเบิก</i></div>
                                                <h3 class="card-title">55555 !!</h3>
                                            </div>
                                            <div class="card-footer ">
                                                <div class="stats"><a href="#">ตรวจสอบ</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="card card-stats">
                                            <div class="card-header bg-info">
                                                <div class="card-icon"><i class="material-icons">คำขอประกันสุขภาพ</i></div>
                                                <h3 class="card-title">75< !!</h3>
                                            </div>
                                            <div class="card-footer">
                                                <div class="stats"><a href="#">ตรวจสอบ</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="card card-stats">
                                            <div class="card-header bg-info">
                                                <div class="card-icon"><i class="material-icons">คำขอประกันสุขภาพ</i></div>
                                                <h3 class="card-title">80000 !!</h3>
                                            </div>
                                            <div class="card-footer">
                                                <div class="stats"><a href="#">ตรวจสอบ</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 mt-3">
                                        <div class="card card-stats">
                                            <div class="card-header bg-info">
                                                <div class="card-icon"><i class="material-icons">รายงาน</i></div>
                                                <h3 class="card-title">36 !!</h3>
                                            </div>
                                            <div class="card-footer">
                                                <div class="stats"><a href="#">ตรวจสอบ</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 mt-3">
                                        <div class="card card-stats">
                                            <div class="card-header bg-info">
                                                <div class="card-icon"><i class="material-icons">การเบิกพัสดุ</i></div>
                                                <h3 class="card-title">66 !!</h3>
                                            </div>
                                            <div class="card-footer">
                                                <div class="stats"><a href="#">ตรวจสอบ</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div> <!-- this card-body close -->
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