<?php
include 'config.php';

$id = $_POST["id"];

$output = "";

$sql = "SELECT * FROM ecomm_order WHERE O_ID = '{$id}'";
$result = mysqli_query($con, $sql);

while ($row = mysqli_fetch_array($result)) {

    $output .= ' <div class="d-flex">';

    $cati = $row['O_catigary'];
    if ($cati == 'S') {
        $output .= ' <div class="ohead" style="width: 30%; margin: 10px 0 0 20px;    padding-right: 45px; " id="detail"
                    data-id">';
    } elseif ($cati == 'L') {
        $output .= ' <div class="ohead" style="width: 65%; margin: 10px 0 0 20px;     padding-right: 45px;" id="detail"
                    data-id">';
    } elseif ($cati == 'T') {
        $output .= ' <div class="ohead" style="width: 85%; margin: 10px 0 0 20px;     padding-right: 45px;" id="detail"
                    data-id">';
    } elseif ($cati == 'H') {
        $output .= ' <div class="ohead" style="width: 45%; margin: 10px 0 0 20px;    padding-right: 45px; " id="detail"
                    data-id">';
    } elseif ($cati == 'D') {
        $output .= '<div class="ohead" style="width: 15%; margin: 10px 0 0 20px;     padding-right: 45px;" id="detail"
                    data-id">';
    }
    $output .= '<img src=".//image/order/' . $row['O_photo'] . '" style="width: 100%;">
                </div>
                <div class="obody" >
                    <br>
                    <h6 style="padding:20px;">' . $row['O_fname'] . '' . $row['O_lname'] . ' <h6>
                            
                </div>
                </div>
            
            <div class="d-flex">
                <div class="ohead" style=" margin: 30px 0 0 13%; ">
                   <h6> Delivary Addres : </h6><br>
                    <h6 style="margin-top: 15%;"> Delivary Date : </h6><br>
                   <h6 > Order No : </h6><br>
                   <h6> Amount : </h6><br>
                   <h6> Payment Status : </h6><br>
                   <h6> Order : </h6>
                </div>
                <div class="ohead" style="width: 60%; margin: 30px 0 0 30px; ">
                   <h6> ' . $row['O_addres'] . ' </h6>
                   <br>';

    $datefind = date_create($row['O_datetime']);
    date_add($datefind, date_interval_create_from_date_string("7 days"));
    $datetime = date_format($datefind, "d-m-y");
    $output .= ' <h6> ' . $datetime . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Order Date&nbsp;:&nbsp;  &nbsp; ' . $row['O_datetime'] . '  </h6>
                         <br>
                   <h6> ' . $row['O_order_No'] . ' </h6>
                                      <br>
                   <h6> ' . $row['O_amount'] . '₹ </h6>
                                  <br>
                   <h6> ' . $row['O_status'] . ' </h6><br>';
    $dstatus = $row['O_dstatus'];
    if ($dstatus == 'processing') {
        $output .= '<h6> Processing.... </h6>';
    } elseif ($dstatus == 'cancel') {
        $output .= '<h6 style="color: red;">Order Canceled </h6>';
    } elseif ($dstatus == 'conform') {
        $output .= '<h6 style="color: green;"> Order Delivery &#10004; </h6>';
    }
    $output .= '</div>
            </div>';

}
echo $output;

?>