<?php
include ('config.php');

session_start();
$user = $_SESSION['user'];
include ('msgbox.php');

$sql = "SELECT * FROM ecomm_order WHERE pro_id = $user ";
$result = mysqli_query($con, $sql);

$total_record = mysqli_num_rows($result);

$page_limit = 4;
$page = "";
if (isset($_POST['page'])) {
    $page = $_POST['page'];
} else {
    $page = "1";
}


$offset = ($page - 1) * $page_limit;

$total_pages = ceil($total_record / $page_limit);

$output = '        <div class="container-flude">
            <div class="row" style="margin: 0;">
                <div class="offset-md-2 col-md-8 mt-5 mb-5">
                    <div class="payment">
                        <div class="payment-title">
                            <h3>ORDERS</h3>
                        </div>
                        <div class="pay-option">
                            <div class="card-box ">
                                <div class="form-box">
                                    <div class="row ">
                                        <div class="col " id="order">';

$sql = "select * from ecomm_order where pro_id= '  $user ' ORDER BY O_datetime DESC limit {$offset},{$page_limit}  ";
$result = mysqli_query($con, $sql) or die("not database");
while ($row = mysqli_fetch_array($result)) {

    $output .= '<div class="py-3 border-bottom border-dark d-flex" style="padding: 0 10%;" id="sh">
                    <div class="d-flex" style="min-width: 60%;">
                         <div class="ohead " style="width: 20%; cursor: pointer; " id="detail" data-id="' . $row['O_ID'] . ' ">
                           <img src=".//image/order/' . $row['O_photo'] . '" style="width: 100%;">
                         </div>
                         <div class="obody" style="" value="">
                             <br>
                             <h6>' . $row['O_fname'] . '</h6>
                             <h6 style="margin:10px;">' . $row['O_amount'] . '₹</h6>
                         </div>
                    </div>
                <div>
                     <div class="ofooter">';
    $dstatus = $row['O_dstatus'];
    if ($dstatus == "processing") {
        $output .= '    <h5 style="text-align: center;">Order Processing</h5>
                        <div class="progress border border-dark" role="progressbar" aria-label="Animated striped example"
                            aria-valuemin="0" aria-valuemax="100" style="    background-color: white;">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                                    style="width: 75%">
                            </div>
                        </div>
                        <button class="form-btn mybtn" data-id=" ' . $row['O_ID'] . '" id="edit-order">cancel
                                    order
                        </button>';
    } elseif ($dstatus == "cancel") {
        $output .= '    <h5 style="color:red;margin: 10px 0 0 65px;">Order Canceled
                        </h5>
                        <button class="form-btn mybtn" data-id=" ' . $row['O_ID'] . '" id="remove-order">Remov
                                    item</button>';
    } elseif ($dstatus == "conform") {
        $output .= '   <h5 style="color:green;margin: 20px 0 0 60px;">Order
                                Delivered
                                &#10004;</h5>';
    }
    $output .= '     </div></div>  </div>  ';
}
$output .= '                        
            </div></div></div></div></div></div></div></div></div>   
<div class="row">
<div class="col-3 offset-5  mb-2">
    <ul class="pagination">';
for ($i = 1; $i <= $total_pages; $i++) {
    if ($i == $page) {
        $class_name = "active";
    } else {
        $class_name = "";
    }
    $output .= "<li class='{$class_name} page-item'><a class=' page-link sele' id='{$i}' href=''>{$i}</a>";
}
$output .= '</div>
</div>';
echo $output; ?>