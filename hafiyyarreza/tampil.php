<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hafiyy Arreza</title>
</head>
<body>
    <center>
    <h1>DATA KENDARAAN</h1>
    <table border = 1>

    <tr>
        <td>No.</td>
        <td>Nama Pemilik</td>
        <td>Alamat</td>
        <td>Jenis Kelamin</td>
        <td>No Polisi</td>
        <td>Jenis Kendaraan</td>
        <td>Tanggal Member</td>
        <td>Aksi</td>
</tr>

<?php
include("koneksi.php");
$query = mysqli_query($db, "SELECT * FROM tb_pemilik INNER JOIN tb_kendaraan
         ON tb_pemilik.id_kendaraan = tb_kendaraan.id_kendaraan");
$no = 1;
foreach ($query as $row):
?>
<tr>
    <td><?= $no++; ?></td>
    <td><?= $row['nama_pemilik']; ?></td>
    <td><?= $row['alamat']; ?></td>
    <td><?= $row['jenis_kelamin']; ?></td>
    <td><?= $row['no_polisi']; ?></td>
    <td><?= $row['jenis_kendaraan']; ?></td>
    <td><?= $row['tgl_member']; ?></td>


    <td>
        <a href="edit.php?id_pemilik=<?= $row['id_pemilik'];?>"><input type="button" name="edit" value="EDIT"></a>
        <a href="hapus.php?id_pemilik=<?= $row['id_pemilik'];?>"><input type="button" name="edit" value="HAPUS"></a>
<?php endforeach ?>
</center>
</table><p>
<td><a href="tambah.php"><input type="button" name="tambah" value="TAMBAH"></a></td>
</body>
</html>