<?php
include ("connect.php");

$nama = $_POST['nama'];
$jumlah=$_POST['jumlah'];
$tanggal=$_POST['tanggal'];
$waktu=$_POST['waktu'];

$sql=mysqli_query($connect,"insert into rsvp set nama='$nama', jumlah='$jumlah',tanggal='$tanggal', waktu='$waktu'");
?>