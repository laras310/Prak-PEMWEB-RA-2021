<?php
include ("connect.php");

$no= $_POST['no'];

$sql=mysqli_query($connect,"delete from RSVP where no='$no'");
?>