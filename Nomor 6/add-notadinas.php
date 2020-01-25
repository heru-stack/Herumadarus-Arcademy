<?php 
    include "fungsi/koneksi.php";
    include "fungsi/fungsi.php";
	include_once('header.php');
?>

	<div class="box">
					<br><br><br>
			
			<div class="pull-right">
				<a href="data-notadinas.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i> Kembali</a>
			</div>
			<div class="row">
				<div class="col-lg-6 col-lg-offset-3">
					<form action="add_proses.php" method="post">
						<div class="form-group">
							<label for="name_product">Produk</label>
							<input type="text" name="name_product" id="name_product" class="form-control" required>
							
						</div>

						<div class="form-group">
                                    <label>Kategori</label>
                                    <select class="form-control" name="id_category">
                                    <option value="">---Pilih Kategori---</option>
                                    
                                    <?php  
                                    include "fungsi/koneksi.php";
                                    $queryJenis = mysqli_query($koneksi, "select * from category");
                                    if (mysqli_num_rows($queryJenis)) {
                                        while($row=mysqli_fetch_assoc($queryJenis)):
                                    ?>                                        
                                    <option value="<?= $row['id_category']; ?>"><?= $row['name_category']; ?></option>
                                   <?php endwhile; } ?>
                                   </select>
                                   </div>

						<div class="form-group">
							<label for="price">Price</label>
							<input type="text" name="price" id="price" class="form-control" required>
							
						</div>
						
						<div class="form-group">
                                    <label>Cashier</label>
                                    <select class="form-control" name="id_cashier">
                                    <option value="">---Pilih Cashier---</option>
                                    
                                    <?php  
                                    include "fungsi/koneksi.php";
                                    $queryJenis = mysqli_query($koneksi, "select * from cashier");
                                    if (mysqli_num_rows($queryJenis)) {
                                        while($row=mysqli_fetch_assoc($queryJenis)):
                                    ?>                                        
                                    <option value="<?= $row['id_cashier']; ?>"><?= $row['name']; ?></option>
                                   <?php endwhile; } ?>
                                   </select>
                                   </div>

						<div class="text"><center>
							<input type="submit" name="add" value="Simpan" class="btn btn-success">
							<a href="data-notadinas.php"><input type="submit" name="detail" value="Detail" class="btn btn-primary"> 
						</center></div>
						
						
					</form>
					
				</div>
				
			</div>
	</div>
