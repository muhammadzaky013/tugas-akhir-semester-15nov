<?php

include("koneksi.php");


if( !isset($_GET['id']) ){
    header('Location: tampil.php');
}


$id = $_GET['id'];


$sql = "SELECT * FROM tb_tabel WHERE id=$id";
$query = mysqli_query($db, $sql);
$tb_tabel = mysqli_fetch_assoc($query);


if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>
<html>
   <head>
   </head>
   <body>
       <h1>Edit Pendataan Vaksin</h1> 
       <form action="proses-edit.php" method="POST"> 
       <form>
           <fieldset>
            <input type="hidden" name="id" value="<?php echo $tb_tabel['id']?>"/>
               <p>
                   <label for="nama">Nama :</label>
                   <input type="text" name="nama" value="<?php echo $tb_tabel['nama']?>"/>
               </p>
               <p>
                   <label for="alamat">Alamat :</label>
                   <input type="text" name="alamat" value="<?php echo $tb_tabel['alamat']?>"/>
               </p>
               <p>
                   <label for="jenis_vaksin">Jenis Vaksin :</label>
               </p>
               <p>
                    <label for=""> </label>
                    <label><input type="radio" name="jenis_vaksin" value="sinovac"> Sinovac</label>
</p>
               <p>
                    <label for=""> </label>
                    <label><input type="radio" name="jenis_vaksin" value="pfzier"> Pfizer</label>
</p>
                <p>
                    <label for=""> </label>
                    <label><input type="radio" name="jenis_vaksin" value="nusantara"> Nusantara</label>
</p>
               <p>
                   <input type="submit" value="Submit" name="submit" />
</p>
           </fieldset>
       </form>
   </body>
</html>  