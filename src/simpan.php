<?php
include ("connect.php");

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$prodi=$_POST['prodi'];
$angkatan=$_POST['angkatan'];

$sql=mysqli_query($connect,"insert into mahasiswa set nama='$nama', nim='$nim',prodi='$prodi', angkatan='$angkatan'");
?>