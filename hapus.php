<?php
include("koneksi.php");
isset($_GET['id']);
$kode = $_GET['id'];
$sql = "DELETE FROM tb_tabel where id=$kode";
$query = mysqli_query($db, $sql);

?>