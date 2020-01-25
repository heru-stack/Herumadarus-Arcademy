
<?php  

    include "fungsi/koneksi.php";

    if(isset($_POST['add'])) {

        $name_product = $_POST['name_product'];
        $price = $_POST['price'];
        $id_category = $_POST['id_category'];
        $id_cashier = $_POST['id_cashier'];     
    

        $query = "INSERT into product (name_product, price, id_category, id_cashier ) VALUES 
                                        ('$name_product', '$price', '$id_category', '$id_cashier')

            ";
        $hasil = mysqli_query($koneksi, $query);
        if ($hasil) {
            header("location:data-notadinas.php");
        } else {
            die("ada kesalahan : " . mysqli_error($koneksi));
        }
    }
?>