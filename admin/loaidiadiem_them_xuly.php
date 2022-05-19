<!DOCTYPE html>
<html lang="en">
	<?php include "header.php"; ?>
	
	<body>
		<div class="container">
			<?php include "navbar.php"; ?>
			
			<div class="card mt-3">
				<h5 class="card-header">Xử lý thêm địa điểm</h5>
				<div class="card-body">
					
				</div>
			</div>
			
			<?php include "footer.php"; ?>
		</div>
		
		<?php include "javascript.php"; ?>
		<script>
		
			db.collection("loai").add({
					maloai: "<?php echo $_POST ['maloai'];?>",
					tenloai: "<?php echo $_POST ['tenloai'];?>",
					avatar: "<?php echo $_POST ['avatar'];?>",					
				})
				.then((docRef) => {
					//console.log("Document written with ID: ", docRef.id);
					location.href="loaidiadiem.php"
				})
				.catch((error) => {
					console.error("Error adding document: ", error);
				});
		</script>
	</body>
</html>