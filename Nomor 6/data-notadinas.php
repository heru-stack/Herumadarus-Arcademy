<?php 
    include_once('header.php');
    include "fungsi/koneksi.php";
    include "fungsi/fungsi.php";

 
?>

<!-- Main content -->
<section class="content">
<!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-sm-12">
             <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="text-center">Data Pembelian</h3>
                </div>                
                <div class="box-body">
                    <a href="add-notadinas.php" style="margin:10px 15px;" class="btn btn-success"><i class='fa fa-plus'> Create Pembelian</i></a>
                   <table class="table table-responsive" style="background: pink;" border="7">
                         <tr>
                            <th><center>cashier</th></center>
                            <th><center>product</th></center>
                            <th><center>category</th></center>
                            <th><center>price</th></center>
                            <th><center><i class="glyphicon glyphicon-cog"></i></center></th>
                        </tr>
                        <tr>
                        <?php 
                            $sekarang  = date("Y-m-d");
                            $queryTampil = mysqli_query($koneksi, "SELECT * FROM product JOIN category ON product.id_category = category.id_category JOIN cashier ON product.id_cashier = cashier.id_cashier ");

                            $no = 1;
                            if(mysqli_num_rows($queryTampil) > 0) {
                                while($row = mysqli_fetch_assoc($queryTampil)):
                            

                         ?>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['name_product']; ?> </td>
                            <td><?php echo $row['name_category']; ?> </td>
                            <td><?php echo $row['price'] ?></td>
                            
                            
                            <td><center><a href="hapusps.php?id=<?php echo $row['id_product']; ?>" class="btn btn-danger">Hapus</a>
                             <a href="editnota.php?id=<?php echo $row['id_product']; ?>" class="btn btn-primary">Edit</a>
                              
                        </tr>
                    <?php $no++; endwhile; } else { echo "<tr><td>Tidak ada permintaan barang hari ini</td></tr>"; } ?>
                    </table>    

            </div>

        