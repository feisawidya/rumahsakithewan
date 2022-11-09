<!DOCTYPE html>
<html lang="en">
<head>
    <title>tambah</title>
</head>

    <form action="proses_tambah.php" method="POST">
    <h1>PEMERIKSAAN HEWAN</h1>
<body>
    <form>
        <fieldset>
        <p>
            <label for="nama">Nama Pemilik:</label>
            <input type="text" name="nama"/>
        </p>
        <p>
            <label for="jenis">Jenis Hewan:</label>
            <select name = "jenis">
            <option value ="Kucing">Kucing</option>
            <option value ="Anjing">Anjing</option>
            <option value ="Ular">Ular</option>
            </select>
        </p>
        <p>
            <label for="keluhan">Keluhan</label>
            <input type="text" name="keluhan">
        </p>
        <input type="submit" value="tambah" name="tambah"/>
        </p>

</fieldset>
</form>
</body>
</html>