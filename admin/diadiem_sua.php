
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
						<form action="diadiem_sua_xuly.php" method="post">
							<input type="text" class="form-control" id="id" name="id" hidden />
							<div class="row">
								<div class="col-lg-12">
									<div class="form-group">
										<label for="TenDiaDiem">Tên địa điểm</label>
										<input type="text" class="form-control" id="TenDiaDiem" name="TenDiaDiem" required />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label for="ViDo">Vĩ độ</label>
										<input type="text" class="form-control" id="ViDo" name="ViDo" required />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label for="KinhDo">Kinh độ</label>
										<input type="text" class="form-control" id="KinhDo" name="KinhDo" required />
									</div>
								</div>
								<div class="form-group">
									<label for="DiaChi">Địa chỉ</label>
									<input type="text" class="form-control" id="DiaChi" name="DiaChi" required />
								</div>
							
							
							
							<button type="submit" class="btn btn-primary"><i class="fal fa-edit"></i> Cập nhật</button>
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

		<script>
			var docRef = db.collection("hotel").doc("<?php echo $_GET['id'];?>");

				docRef.get().then((doc) => {
					if (doc.exists) {
						$('#id').val(doc.id);
						$('#TenDiaDiem').val(doc.data().TenDiaDiem);
						$('#DiaChi').val(doc.data().DiaChi);
						$('#ViDo').val(doc.data().ToaDo.latitude);
						$('#KinhDo').val(doc.data().ToaDo.longitude);
					} else {
						// doc.data() will be undefined in this case
						console.log("No such document!");
						
					}
				}).catch((error) => {
					console.log("Error getting document:", error);
				});
		</script>
    
</body>

</html>