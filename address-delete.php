<?php

$ID = $_POST["id"];
session_start();
include ('config.php');

$sql = "DELETE FROM ecomm_address WHERE A_ID = $ID";

if (mysqli_query($con, $sql)) {
    echo 1;
} else {
    echo 0;
}

?>