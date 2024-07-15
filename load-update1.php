<?php
include 'config.php';

$id = $_POST['id'];


$sql = "SELECT * FROM ecomm_registration WHERE R_ID = '$id'";
$result = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($result)) { ?>


    <tr>
        <td width='90px'>Name</td>
        <td><input type='text' class="form-control" id='name' value='<?php echo $row["R_NAME"] ?>'>
            <div class="error1" id="mname" style="margin: 5px 0 0 0"></div>
            <input type='text' id='id' hidden value='<?php echo $row["R_ID"] ?>'>
        </td>
    </tr>
    <tr>
        <td>DOB</td>
        <td><input type='date' class="form-control" id='dob' value='<?php echo $row["R_DOB"] ?>'>
        </td>
    </tr>
    <tr>
        <td>Email</td>
        <td><input type='text' class="form-control" id='email' value='<?php echo $row["R_EMAIL"] ?>'>
            <div class="error1" id="memail" style="margin: 5px 0 0 0"></div>
        </td>
    </tr>
    <tr>
        <td>Phone 1</td>
        <td><input type='text' class="form-control" id='phone1' value='<?php echo $row["R_PHONE_NO1"] ?>'>
            <div class="error1" id="mphone1" style="margin: 5px 0 0 0"></div>
        </td>
    </tr>
    <tr>
        <td>Phone 2</td>
        <td><input type='text' class="form-control" id='phone2' value='<?php echo $row["R_PHONE_NO2"] ?>'></td>
    </tr>
    <tr>
        <td></td>
        <td><input type='submit' id='edit-submit' value='update' class="btn btn-primary"></td>
    </tr>

<?php } ?>