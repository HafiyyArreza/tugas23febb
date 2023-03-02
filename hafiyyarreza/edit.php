<?php
include("koneksi.php");
if(!isset($_GET['id_pemilik'])){
    header("location:tampil.php");
}

$id_pemilik=$_GET['id_pemilik'];
$sql="SELECT * FROM tb_pemilik INNER JOIN tb_kendaraan ON tb_pemilik.id_kendaraan = tb_kendaraan.id_kendaraan
WHERE tb_pemilik.id_pemilik='$id_pemilik'";
$query=mysqli_query($db,$sql);
$tb_pemilik=mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT</title>
</head>
<body>
    <center>
        <h1>EDIT DATA</h1>
        <form action ="proses_edit.php" method="POST">
            <tr>
                <td><input type="hidden" name="id_pemilik" value="<?php echo $tb_pemilik['id_pemilik']?>" /></td>
</tr>
            <table border = "2">
                
                <tr>
                    <td><label for="nama_pemilik">Nama Toko</label></td>
                    <td><input type="text" name="nama_pemilik" value="<?php echo $tb_pemilik['nama_pemilik']?>" /></td>
</tr>
<tr>
                    <td><label for="alamat">Alamat</label></td>
                    <td><input type="text" name="alamat" value="<?php echo $tb_pemilik['alamat']?>" /></td>
</tr>
<tr>

                    <td><label for="jenis_kelamin">Jenis Kelamin</label></td>
                    <td><input type="radio" name="jenis_kelamin" value="laki-laki">LAKI LAKI
                    <input type="radio" name="jenis_kelamin" value="perempuan">PEREMPUAN</td>
<tr>
                    <td><label for="no_polisi">No Polisi</label></td>
                    <td><input type="number" name="no_polisi" value="<?php echo $tb_pemilik['no_polisi']?>" /></td>
</tr>
<tr>
                    <td><label for="jenis_kendaraan">Jenis Kendaraan</label></td>
                    <td><input type="radio" name="jenis_kendaraan" value="motor">MOTOR
                    <input type="radio" name="jenis_kendaraan" value="mobil">MOBIL</td>
</tr>
<tr>
                    <td><label for="tgl_member">Tanggal Member</label></td>
                    <td><input type="date" name="tgl_member" value="<?php echo $tb_pemilik['tgl_member']?>" /></td>
</tr>

<td><input type="submit" value="edit" name="edit"></td>
</table>
<a href ="tampil.php"><input type="button" value="KEMBALI"></a>
</body>
</html>
