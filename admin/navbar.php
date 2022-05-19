<div class="sidebar pe-4 pb-3">
	<nav class="navbar bg-light navbar-light">
		<a href="index.html" class="navbar-brand mx-4 mb-3">
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
				<a href="index.php" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
				<a href="bando.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Bản đồ</a>
				<a href="diadiem.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Địa điểm</a>
				<a href="table.html" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tables</a>
				<a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a>
				<a href="dangxuat.php" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Đăng xuất</a>
			</div>
		<?php
			}
		?>
		
	</nav>
</div>