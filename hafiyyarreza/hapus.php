<?php
include("koneksi.php");

$id_pemilik=$_GET['id_pemilik'];

$sql="DELETE FROM tb_pemilik where id_pemilik='$id_pemilik'";
$query=mysqli_query($db,$sql);

$sql="DELETE FROM tb_kendaraan where id_kendaraan='$id_pemilik'";
$query=mysqli_query($db,$sql);

if($query){
    header("Location:tampil.php?status=sukses");
}else{
    die("akses dilarang");
}

?>