<html>
<head>
</head>
<body>
    <h1>Pendataan Vaksin Covid-19</h1>
    <form action="proses.php" method ="POST"> 
        <form>
            <fieldset>
                <p>
                    <label for="nama">Nama:</label>
                    <input type="text" name="nama"/>
</p>
                <p>
                    <label for="alamat">Alamat:</label>
                    <input type="text" name="alamat"/>
</p>
                <p>
                    <label for="jenis_vaksin" name="jenis_vaksin"> Jenis Vaksin: </label>
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
                    <input type="submit" value="submit" name="submit" />
</p>
</fieldset>
</form>
</body>
</html>