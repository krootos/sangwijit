<?php
    include_once 'conn.php';

    $sql = "SELECT COUNT(*) as count FROM technician WHERE technician_iden = '".$_POST["iden"]."' ";
    $result = $mysqli->query($sql);

    while ($rowCount = $result->fetch_assoc()) {
        $count = $rowCount['count'];
    }

    // echo $count;

    if($count > 0){
        echo "true";
    }else{
        echo "false";
    }

?>