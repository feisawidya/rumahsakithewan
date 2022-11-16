<?php
include("koneksi.php");
?>

<html>
<head>
</head>
<body>
<?php
    session_start();
    if($_SESSION['status']!="login"){
        header("location:../index.php?pesan=belum_login");
    }
    ?>

    <h4>Selamat datang, <?php echo $_SESSION['username']; ?>! anda telah login.</h4>

    <br/>
    <br/>

    <h1> PEMERIKSAAN HEWAN RS SUMBER WARAS</h1>


    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama Pemilik</th>
            <th>Jenis Hewan</th>
            <th>Keluhan</th>
            <th>Aksi</th>
        </tr>

        <?php
        include("koneksi.php");
        $sql = "SELECT * FROM tb_hewan";
        $query= mysqli_query($koneksi, $sql);

        while($hewan=mysqli_fetch_array($query)){
            echo "<tr>";
            echo "<td>" .$hewan['id']."</td>";
            echo "<td>" .$hewan['nama']."</td>";
            echo "<td>" .$hewan['jenis']."</td>";
            echo "<td>" .$hewan['keluhan']."</td>";
            echo "<td>";
            echo "<a href='edit.php?id=".$hewan['id']."'>Edit</a> |";
            echo "<a href='hapus.php?id=".$hewan['id']."'>Hapus</a> |";
            echo "</td>";
            echo "</tr>";
        }
        ?>
        <input type="button" value="Back" onclick="history.back(-1)"/>
        <a href="tambah.php"><input type="button" name="tambah" value="Tambah Data"/></a>
        </table>
        <a href="logout.php">LOGOUT</a>
    </body>
    </html>