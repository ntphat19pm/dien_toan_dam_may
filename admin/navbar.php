<div class="sidebar pe-4 pb-3">
	<nav class="navbar bg-light navbar-light">
		<a href="index.php" class="navbar-brand mx-4 mb-3">
			<h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>BANDO</h3>
		</a>
		
		<?php
			session_start();
			if(!isset($_SESSION['uid']))
			{
		?>	
			<a href="index.php" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
			<a href="dangnhap.php" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Đăng nhập</a>
		<?php
			}
			else
			{
		?>
			<div class="d-flex align-items-center ms-4 mb-4">
				<div class="ms-3">
					<h6 class="mb-0"><?php echo $_SESSION['email']?></h6>
					<span>Admin</span>
				</div>
			</div>
			<div class="navbar-nav w-100">
				<hr>
				<a href="index.php" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
				<a href="bando.php" class="nav-item nav-link"><i class="fa fa-map"></i>Bản đồ</a>
				<a href="diadiem.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Địa điểm</a>
				<a href="thoitiet.php" class="nav-item nav-link"><i class="fa fa-cloud"></i>Thời tiết</a>
				<a href="dangky.php" class="nav-item nav-link"><i class="fa fa-user"></i>Thêm user</a>
				<a href="dangxuat.php" class="nav-item nav-link"><i class="fa fa-lock"></i>Đăng xuất</a>
				<hr>
				<a href="../index.php" class="nav-item nav-link"><i class="fa fa-desktop"></i>Trang chủ</a>
				<a href="../bando.php" class="nav-item nav-link"><i class="fa fa-desktop"></i>Bản đồ</a>
				<a href="../thoitiet.php" class="nav-item nav-link"><i class="fa fa-desktop"></i>Thời tiết</a>
			</div>
		<?php
			}
		?>
		
	</nav>
</div>