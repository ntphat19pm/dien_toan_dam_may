
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
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Recent Salse</h6>
                        
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
                            <a href="diadiem_them.php" class="btn btn-outline-secondary mt-2"><i class="fas fa-plus-circle"></i> Thêm địa điểm</a> 
                        </div>
						<!-- <a href="" type="button" class="btn btn-square btn-outline-primary m-2"><i class="fa fa-plus"></i> Thêm địa điểm</a>
						<a href="diadiem_them.php" type="button" class="btn btn-square btn-outline-primary m-2"><i class="fa fa-file"></i></a> -->
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">
                                    <th width="5%">#</th>
									<th width="20%">Tên địa điểm</th>
									<th>Địa chỉ</th>
									<th width="15%">Vĩ độ</th>
									<th width="15%">Kinh độ</th>
									<th width="5%">Sửa</th>
									<th width="5%">Xóa</th>
                                </tr>
                            </thead>
                            <tbody id="HienThi">
                               
                            </tbody>
                        </table>
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
			db.collection('hotel').get().then((querySnapshot) => {
				var stt = 1;
				var output = '';
				querySnapshot.forEach((doc) => {
					output += '<tr>';
						output += '<td>'+stt+'</td>';
						output += '<td>'+doc.data().TenDiaDiem+'</td>';
						output += '<td>'+doc.data().DiaChi+'</td>';
						output += '<td>'+doc.data().ToaDo.latitude+'</td>';
						output += '<td>'+doc.data().ToaDo.longitude+'</td>';
						output+=' <td class="text-center"><a href="diadiem_sua.php?id='+doc.id+'"><i class="far fa-edit text-primary" ></i></a></td>';
						output += '<td align="center"><a href="diadiem_xoa.php?id='+doc.id+'" onclick="return confirm(\'Bạn có muốn xóa địa điểm không?\')"><i class="fas fa-trash-alt text-danger"></i></a></td>';
					output += '</tr>';
					stt++;
				});
				$('#HienThi').html(output);
			});
		</script>
    
</body>

</html>