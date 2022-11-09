<?php				
			include 'koneksi.php'; //menghubungkan ke file koneksi untuk ke database
			$id = $_GET['id']; //menampung id

			//query hapus
			$data = mysqli_query($conn, "delete from pemesanan where id ='$id'") or die(mysqli_error($conn));

			//alert dan redirect ke index.php
			echo "<script>alert('data berhasil dihapus.');window.location='pemesanan.php';</script>";
	?>