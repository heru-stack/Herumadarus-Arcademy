<?php  

include "/fungsi/koneksi.php";

if(isset($_POST['update'])) {
        $name_product = $_POST['name_product'];
        $price = $_POST['price'];
        $id_category = $_POST['id_category'];
        $id_cashier = $_POST['id_cashier']; 

        $query = mysqli_query($koneksi, "UPDATE product SET name_product='$name_product', price='$price', id_category='$id_category', id_cashier='$id_cashier' WHERE id_product ='$id_product' ");
        if ($query) {
                echo "
                                <script>
                                alert('Data Berhasil Diubah');
                                document.location.href = 'data-notadinas.php';
                                </script>";
                
        } else {
                echo 'error' . mysqli_error($koneksi);
        }

}



?>