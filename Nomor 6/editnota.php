<?php  
include_once('header.php');
include "fungsi/koneksi.php";
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$query = mysqli_query($koneksi, "SELECT * FROM product WHERE id_product = $id ");
		if (mysqli_num_rows($query)) {
			$row2=mysqli_fetch_assoc($query);
        }
    }
?>

<section class="content">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2 col-xs-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="text-center">Edit Data Pembelian</h3>
                </div>
                <form method="post"  action="edit_proses.php" class="form-horizontal">
                    <div class="box-body">
                    	<input type="hidden" name="id_product" value="<?= $row2['id_product']; ?>">
                            <div>
                                <label>Product</label>
                                <input class="form-control" value="<?= $row2['name_product']; ?>" name="name_product" />
                            </div>

                            <div class="form-group">
                                    <br><label>Kategori</label>
                                    <select class="form-control" name="id_category">
                                    <option value="">---Pilih Kategori---</option>
                                    
                                    <?php  
                                    include "../fungsi/koneksi.php";
                                    $queryJenis = mysqli_query($koneksi, "select * from category");
                                    if (mysqli_num_rows($queryJenis)) {
                                        while($row=mysqli_fetch_assoc($queryJenis)):
                                    ?>                                        
                                    <option <?php if($row2['id_category']==$row['id_category']) echo "selected"; ?>  value="<?= $row['id_category']; ?>"><?= $row['name_category']; ?></option>

                                   <?php endwhile; } ?>
                                   </select>
                                   </div>

                        <div>
                            <label>Price</label>
                            <input class="form-control" value="<?= $row2['price']; ?>" name="price" />
                        </div>


                        <div class="form-group">
                                    <br><label>Cashier</label>
                                    <select class="form-control" name="id_cashier">
                                    <option value="">---Pilih Cashier---</option>
                                    
                                    <?php  
                                    include "../fungsi/koneksi.php";
                                    $queryJenis = mysqli_query($koneksi, "select * from cashier");
                                    if (mysqli_num_rows($queryJenis)) {
                                        while($row=mysqli_fetch_assoc($queryJenis)):
                                    ?>                                        
                                    <option <?php if($row2['id_cashier']==$row['id_cashier']) echo "selected"; ?>  value="<?= $row['id_cashier']; ?>"><?= $row['name']; ?></option>

                                   <?php endwhile; } ?>
                                   </select>
                                   </div>
                         
                        <div class="form-group">
                            <input type="submit" name="update" class="btn btn-primary col-sm-offset-4 " value="Update" > 
                            &nbsp;		
                            <a href="data-notadinas.php" class="btn btn-danger">Batal</a>		                                                                              
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
