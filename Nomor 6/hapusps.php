<?php  

	include "fungsi/koneksi.php";
	
	if(isset($_GET['id'])) {
		$id = $_GET['id'];
		$query = mysqli_query($koneksi, "DELETE FROM product WHERE id_product='$id' ");

		if($query) {
			header("Location:data-notadinas.php");
		}
	}


?>