<?php
include("koneksi.php");

if(isset($_POST['submit'])){
$kode = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jenis_vaksin = $_POST['jenis_vaksin'];

$sql = "UPDATE tb_tabel SET nama='$nama', alamat='$alamat', jenis_vaksin='$jenis_vaksin' WHERE id=$kode";
$query= mysqli_query($db,$sql);

if($query){
    header('Location:tampil.php');
}
else {
    die ('gagal mengedit');
}
}
?>
