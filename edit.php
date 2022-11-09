<?php
include("koneksi.php");
if(!isset($_GET['id'])){
    header("Location:tampil.php?");
}
    $kode=$_GET['id'];
    $sql="SELECT * FROM tb_hewan where id=$kode";
    $query = mysqli_query($koneksi, $sql);
    $hewan = mysqli_fetch_assoc($query);

    if(mysqli_num_rows($query) < 1){
         die ("Data tidak ditemukan");
    }

    ?>
    <html>
        <head>
        </head>
        <body>
            <h1> PEMERIKSAAN HEWAN </h1>
            <form action="prosesedit.php" method="POST">
                <fieldset>
                    <input type="hidden" name="id" value="<?php echo $hewan['id']?>" />
         <p>
            <label for="nama">Nama Pemilik:</label>
            <input type="text" name="nama" value="<?php echo $hewan['nama']?>" />
        </p>
        <p>
            <label for="jenis">Jenis Hewan:</label>
            <select name = "jenis" value="<?php echo $hewan['jenis']?>" >
            <option value ="Kucing">Kucing</option>
            <option value ="Anjing">Anjing</option>
            <option value ="Ular">Ular</option>
            </select>
        </p>
        <p>
            <label for="keluhan">Keluhan</label>
            <input type="text" name="keluhan" value="<?php echo $hewan['keluhan']?>" />
        </p>
        </p>
        <input type="submit" value="tambah" name="tambah"/>
        </p>

        </fieldset>

            </form>
            </body>
            </html>