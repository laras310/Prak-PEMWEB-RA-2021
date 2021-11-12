<?php
include ("connect.php");

$nim = $_POST['nim'];

$sql=mysqli_query($connect,"delete from mahasiswa where nim='$nim'");
?>