<?php
    include("connect.php");
    $sql = mysqli_query($connect, "SELECT * FROM rsvp");
    $result = array();
    
    while ($row = mysqli_fetch_assoc($sql)) {
        $data[] = $row;
    }

    echo json_encode(array("result" => $data));
?>