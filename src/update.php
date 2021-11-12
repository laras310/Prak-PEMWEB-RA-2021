<?php
include ("connect.php");

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$prodi=$_POST['prodi'];
$angkatan=$_POST['angkatan'];

$sql=mysqli_query($connect,"update mahasiswa set nama='$nama', prodi='$prodi', angkatan='$angkatan' where nim='$nim'");
?>