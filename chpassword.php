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
                    <h3>CHANGE PASSWORD</h3>
                </div>
                <div class="pay-option">
                    <div class="card-box ">
                        <div class="form-box">
                            <div class="row">
                                <div class="offset-md-2 col-md-8">
                                    <form class="form-com py-3" id="Submit-form">
                                        <div class="form-group">
                                            <label class="control-label" id="plname">
                                                Old Password</label><br>
                                            <input type="text" class="form-control input in1" id='old'>
                                            <input type="text" hidden value="<?php echo $_SESSION['user']; ?>" id='id'>

                                            <div class="error1" id="mold"></div>

                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" id="plcard">New Password</label><br>
                                            <input type="text" class="form-control input in1" id='newp'>
                                            <div class="error1" id="mnewp"></div>

                                        </div>

                                        <div class="form-group">
                                            <label class="control-label">New Confrom-Password</label><br>
                                            <input type="text" class="form-control input in1" id='newcp'>
                                            <div class="error1" id="mnewcp"></div>
                                        </div>
                                        <div class=" form-group d-flex justify-content-center">
                                            <button class="btn form-btn" id="save">Save </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>
<script src=".//js/bootstrap.bundle.js"></script>

<script src=".//js/jquery-3.7.1.min.js"></script>
<script src=".//js/action1.js"></script>

<script>
    $(document).ready(function () {


        // change password
        $(document).on("click", "#save", function () {
            var Id = $("#id").val();
            var old = $("#old").val();
            var newp = $("#newp").val();
            var newcp = $("#newcp").val();
            if (newp == newcp) {
                $.ajax({
                    url: "change.php",
                    type: "POST",
                    data: { id: Id, old: old, newp: newp },
                    success: function (data) {
                        if (data == 1) {
                            console.log('save');
                        }
                    }
                })
            }
        });

        // -------------------------------old ---------------------
        let flag1 = 1;
        $(document).on("input", "#old", function () {
            let old = $("#old").val();
            if (old === "") {
                $("#old").addClass("is-invalid");
                $("#old").removeClass("in1");
                $("#mold").addClass("invalid-feedback");
                $("#mold").text("Password is required and can't be empty");
                flag1 = 0;
            } else if (old.length < 6) {
                $("#old").addClass("is-invalid");
                $("#old").removeClass("in1");
                $("#mold").addClass("invalid-feedback");
                $("#mold").text("The Password must be more than 6 characters long");
                flag1 = 0;
            } else {
                $("#old").addClass("in1 is-valid");
                $("#old").removeClass("is-invalid");
                flag1 = 1;
            }
        });



        // -----------------------------------pass------------------

        let flag2 = 1;
        let flag3 = 1;
        var newp = '';
        let newcp = $("#newcp").val();
        $(document).on("input", "#newp", function () {
            newp = $("#newp").val();
            if (newp === "") {
                $("#newp").addClass("is-invalid");
                $("#newp").removeClass("in1");
                $("#mnewp").addClass("invalid-feedback");
                $("#mnewp").text("Password is required and can't be empty");
                flag2 = 0;
            } else if (newp.length < 6) {
                $("#newp").addClass("is-invalid");
                $("#newp").removeClass("in1");
                $("#mnewp").addClass("invalid-feedback");
                $("#mnewp").text("The Password must be more than 6 characters long");
                flag2 = 0;
            } else if (newp != newcp) {
                $("#newp").addClass("is-invalid");
                $("#newp").removeClass("in1");
                $("#mnewp").addClass("invalid-feedback");
                $("#mnewp").text("Password doesn't  macth");
                $("#newcp").addClass("is-invalid");
                $("#newcp").removeClass("in1");
                $("#mnewcp").addClass("invalid-feedback");
                $("#mnewcp").text("Password doesn't  macth");
                flag2 = 0;
            } else {
                $("#newp").addClass("in1 is-valid");
                $("#newp").removeClass("is-invalid");
                $("#newcp").addClass("in1 is-valid");
                $("#newcp").removeClass("is-invalid");
                flag2 = 1;
                flag3 = 1;
            }
        });

        //     // ----------------------------com pass-----------------
        $(document).on("input", "#newcp", function () {
            newcp = $("#newcp").val();
            if (newcp === "") {
                $("#newcp").addClass("is-invalid");
                $("#newcp").removeClass("in1");
                $("#mnewcp").addClass("invalid-feedback");
                $("#mnewcp").text("Password is required and can't be empty");
                flag3 = 0;
            } else if (newcp.length < 6) {
                $("#newcp").addClass("is-invalid");
                $("#newcp").removeClass("in1");
                $("#mnewcp").addClass("invalid-feedback");
                $("#mnewcp").text(
                    "The Password must be more than 6 characters long"
                );
                flag3 = 0;
            } else if (newp != newcp) {
                $("#newcp").addClass("is-invalid");
                $("#newcp").removeClass("in1");
                $("#mnewcp").addClass("invalid-feedback");
                $("#mnewcp").text("Password doesn't  macth");
                $("#newp").addClass("is-invalid");
                $("#newp").removeClass("in1");
                $("#mnewp").addClass("invalid-feedback");
                $("#mnewp").text("Password doesn't  macth");
                flag3 = 0;
            } else {
                $("#newcp").addClass("in1 is-valid");
                $("#newcp").removeClass("is-invalid");
                $("#newp").addClass("in1 is-valid");
                $("#newp").removeClass("is-invalid");
                flag3 = 1;
                flag2 = 1;
            }
        });


        // ----------------------  all validate ------------------------------

        $(document).on("click", "#save", function validate() {
            let old = $("#old").val();
            if (old === "") {
                $("#old").addClass("is-invalid");
                $("#old").removeClass("in1");
                $("#mold").addClass("invalid-feedback");
                $("#mold").text("Password is required and can't be empty");
                flag1 = 0;
            }
            let newp = $("#newp").val();
            if (newp === "") {
                $("#newp").addClass("is-invalid");
                $("#newp").removeClass("in1");
                $("#mnewp").addClass("invalid-feedback");
                $("#mnewp").text("Password is required and can't be empty");
                flag2 = 0;
            }
            let newcp = $("#newcp").val();
            if (newcp === "") {
                $("#newcp").addClass("is-invalid");
                $("#newcp").removeClass("in1");
                $("#mnewcp").addClass("invalid-feedback");
                $("#mnewcp").text("Password is required and can't be empty");
                flag3 = 0;
            }
            if (
                flag1 === 1 &&
                flag2 === 1 &&
                flag3 === 1
            ) {
                return true;
            } else {
                return false;
            }
        });

    });
</script>