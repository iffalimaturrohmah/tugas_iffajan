<?php
include("koneksi.php");
if(!isset($_GET['id'])){
    header("location:komputer.php?");
}
   $kode=$_GET['id'];
   $sql="SELECT * FROM tb_komputer where id=$kode";
   $query= mysqli_query($db, $sql);
   $komputer= mysqli_fetch_assoc($query);

   if(mysqli_num_rows($query) < 1){
    die ("Data tidak ditemukan");
   }
   ?>

<html>
<head>
</head>
<body>
    <h1>Daftar Siswa</h1>
    <form action="proses_tambah.php" method="POST">
        <fieldset>
        <input type="hidden" name="id" value="<?php echo $komputer['id_siswa']?>" />
            <p>
                <label for="nama">Nama :</label>
                <input type="text" name="nama"  value="<?php echo $siswa['nama']?>" />
            </p>

            <p>
                <label for="kelas">Kelas :</label>
                <input type="text" name="kelas"  value="<?php echo $siswa['no_seri']?>"/>
            </p>
            <p>
                <label for="nama_jurusan">Jurusan :</label>
                <input type="text" name="nama_jurusan"  value="<?php echo $siswa['no_seri']?>" /> 
</select></br>
            </p>
            <p>
                <label for="tahun">Tahun :</label>
                <input type="number" name="tahun"  value="<?php echo $siswa['no_seri']?>"/>
            </p>
            <p>
                <label for="nominal">Nominal :</label>
                <input type="number" name="nominal"  value="<?php echo $siswa['no_seri']?>"/>
            </p>
            <p>
                <input type="submit" value="kirim" name="kirim_bayar" />
            </p>
        </fieldset>
</form>
</center>
</body>
</html>