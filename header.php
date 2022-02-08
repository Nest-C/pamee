<?php 
    $modal = ["login", "register", "category", "product", "forget_password"];
    if (isset($_GET['modal']) && in_array($_GET['modal'], $modal)) {
    ?>
        <div class="dimm">
            <div class="modal">
                <?php include "modal_" . $_GET['modal'] . ".php"; ?>
            </div>
        </div>
    <?php
    }
    // if (!isset($_SESSION['username'])) {
    //     $_SESSION['msg'] = "You must log in first";
    //     header('location: login.php');
    // }
    

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: index.php');
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div id="LOGO"></div>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
         
                <!-- Left links -->
                <?php if (!isset($_SESSION['username'])) : ?>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">หน้าแรก</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="product.php">สินค้า</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about_me.php">เกี่ยวกับเรา</a>
                        </li>
                    </ul>
                <?php endif ?>
                <?php if (isset($_SESSION['username'])) : ?>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">หน้าแรก</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="admin_product.php">สินค้า</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="admin_category.php">ประเภทสินค้า</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="admin_member.php">พนักงาน</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="order.php">ออเดอร์</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="report.php">รายงาน</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"> </a>
                        </li>
                    </ul>
                <?php endif ?>
                <!-- Left links -->
            </div>
            </div>
            <!-- Right elements -->
            <div class="d-flex align-items-center">
                <?php if (isset($_SESSION['username'])) : ?>
                    <div class="dropdown">
                        <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#"
                            id="navbarDropdownMenuAvatar" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user me-2"></i>
                            <strong>
                                <?php echo $_SESSION['username']; ?>
                            </strong>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                            <li>
                                <a class="dropdown-item" href="#">My profile</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="index.php?logout='1'">Logout</a>
                            </li>
                        </ul>
                    </div>
                <?php endif ?>
                <?php if (!isset($_SESSION['username'])) : ?>
                    <a href="login.php"  class="btn btn-outline-success btn-rounded" data-mdb-ripple-color="dark">Login</a>
                <?php endif ?>
            </div>
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
    

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js"></script>

</body>

</html>