<?php 
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
    <div class="bg-dark p-2 text-dark bg-opacity-10" >
            <div
            class="bg-image"
            style="
                background-image: url('./img/pamee.png');
                Width: 25%;
                height:250px;
                top: 20%;
                left: 50%;
                -ms-transform: translate(-50%, -50%);
                transform: translate(-50%, -5%);
                "
        >
        </div>
    </div>  
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
