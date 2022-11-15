<?php
include("koneksi.php");
if(isset($_POST['submit'])){
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $jenis_vaksin=$_POST['jenis_vaksin'];

    $sql = "INSERT INTO tb_tabel(nama,alamat,jenis_vaksin) VALUES ('$nama', '$alamat', '$jenis_vaksin')";
    $query = mysqli_query($db, $sql);
}
?>