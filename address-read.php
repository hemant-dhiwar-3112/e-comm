<?php
include 'config.php';
session_start();

$id = $_POST["id"];

$output = "";

$sql = "SELECT * FROM ecomm_address WHERE pro_id = '{$id}'";
$result = mysqli_query($con, $sql);
$a = 1;
while ($row = mysqli_fetch_array($result)) {

    $output .= '<div class="py-3 border-bottom border-dark" style="padding: 0 10%;" id="sh">
        <h5>Address
            ' . $a . '
        </h5>
        <div class="d-flex align-items-center" id="tb">

            <p style=" padding: 0 5%;">
           ' . $row["A_House_No"] . ' 
           ' . $row["A_Street"] . ' 
            ' . $row["A_City"] . ' 
            ' . $row["A_District"] . ' 
            ' . $row["A_State"] . ' 
            ' . $row["A_Pincode"] . ' 
            </p>
            <p style=" padding: 0 3%; margin: 0;">
                <button class="btn btn-danger" id="edit" data-id="' . $row['A_ID'] . '">Edit</button>
            </p>
            <p style=" padding: 0 3%; margin: 0;">
                <button class="btn btn-success" id="del" data-id="' . $row['A_ID'] . '">Remove</button>
            </p>
        </div>
    </div>';
    $a++;

}

echo $output;

?>