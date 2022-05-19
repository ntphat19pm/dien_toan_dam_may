
<!DOCTYPE html>
<html lang="en">

<?php include "header.php"; ?>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <?php include "navbar.php"; ?>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
			<nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form>
            	<?php include "slider.php"; ?>
			</nav>
            <!-- Navbar End -->

            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Tra cứu thời tiết</h6>
                    </div>
                    <div class="table-responsive">
						<div class="card-body">
							<div class="container">
							<header class="header">
								<div class="form-group">
									<label for="TenDiaDiem">Tên tỉnh thành</label>
									<input type="text" class="form-control" placeholder="Nhập tên tỉnh thành" id="search-txt" name="search-txt" required />
								</div>
								<button type="submit" id="search-btn" class="btn btn-primary"></i> Kiểm tra</button>
								
							</header>
							<main id="main">
								<div  class="city-icon">
								<div class="city-icon-holder">
								<div id="city-name">
								</div>
								<img src="" alt="" id="icon">
									</div>
								</div>
								<div  class="temperature">
								<div id="temp"></div>
								</div>
								<div  class="humidity">
								<div id="humidity-div"></div>
								</div>
							</main>
						</div>
						<script type="text/javascript" src ="../js/scripts.js"> </script>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->

            <!-- Footer Start -->
			<?php include "footer.php"; ?>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

		<?php include "javascript.php"; ?>
</body>

</html>