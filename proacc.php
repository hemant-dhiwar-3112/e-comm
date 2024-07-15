<?php
include ('header.php');
include ('profile.php');
include ('config.php');
if (!isset($_SESSION['user'])) { ?>
    <script>
        window.location.href = 'login.php';
    </script>
    <?php
}
?>

<div class="container-flude">
    <div class="row" style="margin: 0;">
        <div class="offset-md-2 col-md-8 mt-5 mb-5">
            <div class="payment">
                <div class="payment-title">
                    <h3>ACCOUNT</h3>
                </div>
                <div class="pay-option">
                    <div class="card-box ">
                        <div class="form-box">
                            <div class="row">
                                <div class="offset-md-2 col-md-8">
                                    <?php
                                    $sql = "SELECT * FROM ecomm_registration WHERE R_ID = '{$_SESSION["user"]}'";
                                    $result = mysqli_query($con, $sql);
                                    while ($row = mysqli_fetch_array($result)) { ?>
                                        <form class="form-com py-3" id="Submit-form">
                                            <div class="form-group">
                                                <label class="control-label" id="plname">
                                                    Name</label><br>
                                                <input type="text" class="form-control input" disabled
                                                    value='<?php echo $row["R_NAME"]; ?>'>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" id="plcard">Date Of Birth</label><br>
                                                <input type="date" class="form-control input" disabled
                                                    value='<?php echo $row["R_DOB"]; ?>'>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label">Email ID</label><br>
                                                <input type="text" class="form-control input" disabled
                                                    value='<?php echo $row["R_EMAIL"]; ?>'>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Phone 1</label><br>
                                                <input type="text" class="form-control input" disabled
                                                    value='<?php echo $row["R_PHONE_NO1"]; ?>'>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Phone 2</label><br>
                                                <input type="text" class="form-control input" disabled
                                                    value='<?php echo $row["R_PHONE_NO2"]; ?>'>
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <button value='<?php echo $row["R_ID"]; ?>'
                                                    class="btn btn-primary m-3 py-2 px-5" id="edit">Edit </button>
                                            </div>
                                        </form>

                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="modal">
    <div id="modal-form">
        <h2>Edit Account</h2>
        <table cellpadding="10px" width="100%">
        </table>
        <div id="close-btn">X</div>
    </div>
</div>
</body>

</html>
<script src=".//js/bootstrap.bundle.js"></script>

<script src=".//js/jquery-3.7.1.min.js"></script>
<script src=".//js/action1.js"></script>

<script>
    $(document).ready(function () {

        $("#edit").on("click", function (e) {
            e.preventDefault();
            $("#modal").show();
            var Id = $('#edit').val();
            $.ajax({
                url: "load-update1.php",
                type: "POST",
                data: { id: Id },
                success: function (data) {
                    $("#modal-form table").html(data);
                }
            });
        });

        $("#close-btn").on("click", function () {
            $("#modal").hide();
        });


        // ------------------------------------uuuuuuppppp-----------------


        let flag1 = 1;
        $(document).on("input", "#name", function () {
            let na = /^[A-Za-z ]+$/;
            let name = $("#name").val();
            if (name === "") {
                $("#name").addClass("is-invalid");
                $("#name").removeClass("in1");
                $("#mname").addClass("invalid-feedback");
                $("#mname").text("Name is required and can't be empty");
                flag1 = 0;
            } else if (!na.test(name)) {
                $("#name").addClass("is-invalid");
                $("#name").removeClass("in1");
                $("#mname").addClass("invalid-feedback");
                $("#mname").text("Enter Valid Name");
                flag1 = 0;
            } else {
                $("#name").addClass("in1 is-valid");
                $("#name").removeClass("is-invalid");
                flag1 = 1;
            }
        });
        let flag2 = 1;
        $(document).on("input", "#email", function () {
            let em = /^[A-Za-z][A-Za-z0-9._]{3,20}@[A-Za-z0-9]{4,8}.[A-Za-z.]{2,9}$/;
            let email = $("#email").val();
            if (email === "") {
                $("#email").addClass("is-invalid");
                $("#email").removeClass("in1");
                $("#mamail").addClass("invalid-feedback");
                $("#memail").text("Email is required and can't be empty");
                flag2 = 0;
            } else if (!em.test(email)) {
                $("#email").addClass("is-invalid");
                $("#email").removeClass("in1");
                $("#memail").addClass("invalid-feedback");
                $("#memail").text("Enter valid Email");
                flag2 = 0;
            } else {
                $("#email").addClass("in1 is-valid");
                $("#email").removeClass("is-invalid");
                flag2 = 1;
            }
        });

        let flag3 = 1;
        $(document).on("input", "#phone1", function () {
            let phone1 = $("#phone1").val();
            if (phone1 === "") {
                $("#phone1").addClass("is-invalid");
                $("#phone1").removeClass("in1");
                $("#mphone1").addClass("invalid-feedback");
                $("#mphone1").text("Moblie Number is required and can't be empty");
                flag3 = 0;
            } else if (isNaN(phone1)) {
                $("#phone1").addClass("is-invalid");
                $("#phone1").removeClass("in1");
                $("#mphone1").addClass("invalid-feedback");
                $("#mphone1").text("Enter valid Number");
                flag3 = 0;
            } else if (phone1.length != 10) {
                $("#phone1").addClass("is-invalid");
                $("#phone1").removeClass("in1");
                $("#mphone1").addClass("invalid-feedback");
                $("#mphone1").text("The Number must be more than 10 characters");
                flag3 = 0;
            } else {
                $("#phone1").addClass("in1 is-valid");
                $("#phone1").removeClass("is-invalid");
                flag3 = 1;
            }
        });

    });

    $(document).on("click", "#edit-submit", function validate() {
        let flag = 1;
        let name = $("#name").val();
        if (name === "") {
            $("#name").addClass("is-invalid");
            $("#name").removeClass("in1");
            $("#mname").addClass("invalid-feedback");
            $("#mname").text("Name is required and can't be empty");
            flag = 0;
        }
        let phone1 = $("#phone1").val();
        if (phone1 === "") {
            $("#phone1").addClass("is-invalid");
            $("#phone1").removeClass("in1");
            $("#mphone1").addClass("invalid-feedback");
            $("#mphone1").text("Moblie Number is required and can't be empty");
            flag = 0;
        }
        let email = $("#email").val();
        if (email === "") {
            $("#email").addClass("is-invalid");
            $("#email").removeClass("in1");
            $("#memail").addClass("invalid-feedback");
            $("#memail").text("Email is required and can't be empty");
            flag = 0;
        }
        if (flag === 1) {

            let Id = $("#id").val();
            let name = $("#name").val();
            let dob = $("#dob").val();
            let email = $("#email").val();
            let phone1 = $("#phone1").val();
            let phone2 = $("#phone2").val();

            $.ajax({
                url: "acco-update.php",
                type: "POST",
                data: { id: Id, name: name, dob: dob, email: email, phone1: phone1, phone2: phone2 },
                success: function (data) {
                    if (data == 1) {
                        $("#modal").hide();
                        location.reload();
                    }
                }
            });
        } else {
            return false;
        }

    });



</script>