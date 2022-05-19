
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
                        <h6 class="mb-0">Recent Salse</h6>
                        
						
                    </div>
                    <div class="">
						<form action="loaidiadiem_them_xuly.php" method="post">
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label for="maloai">Mã loại địa điểm</label>
										<input type="text" class="form-control" id="maloai" name="maloai" required />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label for="tenloai">Tên loại địa điểm</label>
										<input type="text" class="form-control" id="tenloai" name="tenloai" required />
									</div>
								</div>

                                <div class="form-group invalid">
                                    <label for="avatar" class="form-label">Ảnh đại diện</label>
                                    <input type="file" class="form-control" name="avatar" id="avatar" required >
                                </div>
							</div>							
							<button type="submit" class="btn btn-square btn-outline-primary m-2"><i class="fa fa-plus"></i></button>
						</form>
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