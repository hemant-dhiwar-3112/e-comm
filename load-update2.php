<?php
include 'config.php';

session_start();

$id = $_POST['id'];

if ($id == "add") {
    ?>

    <tr>
        <td>House No / मकान नंबर</td>
        <td><input type='text' id='house' class="form-control">
            <div class="error1 " id="mhouse" style="margin: 5px 0 0 0"></div>
            <input type='text' id='id' hidden value='<?php echo $_SESSION["user"]; ?>'>
        </td>
    </tr>
    <tr>
        <td>Street / स्ट्रीट</td>
        <td><input type='text' id='street' class="form-control">
            <div class="error1" id="mstreet" style="margin: 5px 0 0 0"></div>
        </td>
    </tr>
    <tr>
        <td>City/Village / शहर / गांव</td>
        <td><input type='text' id='city' class="form-control">
            <div class="error1" id="mcity" style="margin: 5px 0 0 0"></div>
        </td>
    </tr>
    <tr>
        <td>State / राज्य</td>
        <td><input type='text' id='state' class="form-control is-valid" disabled value="Chhattisgarh"></td>
    </tr>
    <tr>
        <td>District / जिला</td>
        <td><input type='text' id='district' class="form-control">
            <div class="error1" id="mdistrict" style="margin: 5px 0 0 0"></div>
        </td>
    </tr>
    <tr>
        <td>Pin Code / पिनकोड</td>
        <td><input type='text' id='pin' class="form-control">
            <div class="error1" id="mpin" style="margin: 5px 0 0 0"></div>
        </td>
    </tr>
    <tr>
        <td></td>
        <td><input type='submit' id='add-submit' value='save' class="btn btn-primary"> </td>
    </tr>

    <?php
} elseif ($id !== "add") {


    $sql = "SELECT * FROM ecomm_address WHERE A_ID = '$id'";
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_array($result)) {
        ?>

        <tr>
            <td>House No / मकान नंबर</td>
            <td>
                <input type='text' id='house' class="form-control" value='<?php echo $row["A_House_No"]; ?>'>
                <div class="error1 " id="mhouse" style="margin: 5px 0 0 0"></div>
                <input type='text' id='idd' hidden value='<?php echo $_SESSION["user"]; ?>'>
            </td>
        </tr>
        <tr>
            <td>Street / स्ट्रीट</td>
            <td><input type='text' id='street' class="form-control" value='<?php echo $row["A_Street"]; ?>'>
                <div class="error1" id="mstreet" style="margin: 5px 0 0 0"></div>
            </td>
        </tr>
        <tr>
            <td>City/Village / शहर / गांव</td>
            <td><input type='text' id='city' class="form-control" value='<?php echo $row["A_City"]; ?>'>
                <div class="error1" id="mcity" style="margin: 5px 0 0 0"></div>
            </td>
        </tr>
        <tr>
            <td>State / राज्य</td>
            <td><input type='text' id='state' class="form-control is-valid" value='<?php echo $row["A_State"]; ?>' disabled>
            </td>
        </tr>
        <tr>
            <td>District / जिला</td>
            <td><input type='text' id='district' class="form-control" value='<?php echo $row["A_District"]; ?>'>
                <div class="error1" id="mdistrict" style="margin: 5px 0 0 0"></div>
            </td>
        </tr>
        <tr>
            <td>Pin Code / पिनकोड</td>
            <td><input type='text' id='pin' class="form-control" value='<?php echo $row["A_Pincode"]; ?>'>
                <div class="error1" id="mpin" style="margin: 5px 0 0 0"></div>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type='submit' id='edit-submit' value='update' class="btn btn-primary"></td>
        </tr>
        <?php

    }
}
?>