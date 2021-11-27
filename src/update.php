<?php
include ("connect.php");

$no = $_POST['no'];
$nama = $_POST['nama'];
$jumlah=$_POST['jumlah'];
$tanggal=$_POST['tanggal'];
$waktu=$_POST['waktu'];

$sql=mysqli_query($connect,"update rsvp set nama='$nama', jumlah='$jumlah',tanggal='$tanggal', waktu='$waktu' where no='$no'");
?>