<div class="navbar-nav align-items-center ms-auto">
    <?php
        if(!isset($_SESSION['uid']))
        {
    ?>
        <div class="nav-item dropdown">
            <a href="#" class="nav-link" data-bs-toggle="">
                <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                <span class="d-none d-lg-inline-flex">CHƯA ĐĂNG NHẬP</span>
            </a>
            
        </div>
    <?php
        }
        else
        {
    ?>
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <img class="rounded-circle me-lg-2" src="dashmin/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                <span class="d-none d-lg-inline-flex"><?php echo $_SESSION['email']?></span>
            </a>
            <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                <a href="#" class="dropdown-item">My Profile</a>
                <a href="#" class="dropdown-item">Settings</a>
                <a href="dangxuat.php" class="dropdown-item">Log Out</a>
            </div>
        </div>
    <?php
        }
    ?>
        
</div>
