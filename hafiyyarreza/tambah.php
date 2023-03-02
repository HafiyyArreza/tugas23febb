<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>TAMBAH KENDARAAN</h1>
        <form action="proses_tambah.php" method="POST">
            <table border="4">
                <tr>
                    <td><label for="nama_pemilik">Nama Pemilik</label></td>
                    <td><input type="text" name="nama_pemilik"></td>
                </tr>
                <tr>
                    <td><label for="alamat">Alamat</label></td>
                    <td><input type="text" name="alamat"></td>
                </tr>
                <tr>
                    <td><label for="jenis_kelamin">Jenis Kelamin</label></td>
                    <td><input type="radio" name="jenis_kelamin" value="laki-laki">LAKI LAKI
                    <input type="radio" name="jenis_kelamin" value="perempuan">PEREMPUAN</td>
                </tr>
                <tr>
                    <td><label for="no_polisi">No Polisi</label></td>
                    <td><input type="number" name="no_polisi"></td>
                </tr>
                <tr>
                    <td><label for="jenis_kendaraan">Jenis Kendaraan</label></td>
                    <td><input type="radio" name="jenis_kendaraan" value="motor">MOTOR
                    <input type="radio" name="jenis_kendaraan" value="mobil">MOBIL</td>
                </tr>
                <tr>
                    <td><label for="tgl_member">Tanggal Member</label></td>
                    <td><input type="date" name="tgl_member"></td>
                </tr>
 </table><p>
<td><a href="tampil.php"><input type="button" value="KEMBALI"></a></td>
<td><input type="submit" name="tambah" value="TAMBAH"></td>
</p>
</center>
</body>
</html>