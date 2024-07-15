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
                    <h3>ADDRESS</h3>
                </div>
                <div class="pay-option">
                    <div class="card-box ">
                        <div class="form-box">
                            <div class="row ">
                                <input id="hide" hidden value="<?php echo $_SESSION['user']; ?>" />
                                <div class="col" id="add-read">
                                    <?php include ('msgbox.php'); ?>
                                </div>
                                <div class="py-3 d-flex justify-content-between" style="padding: 0 10%;">
                                    <h5>Add Address</h5>
                                    <button class="btn btn-primary" id="add">ADD</button>
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
    <div id="modal-form" style="left: calc(50% - 18%); width: 37%; top:6%">
        <h2 id="head"></h2>
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
<script src=".//js/addaddress.js"></script>



<script>
    $(document).ready(function () {
        // loading
        function loadtable() {
            var Id = $("#hide").val();
            $.ajax({
                url: "address-read.php",
                type: "POST",
                data: { id: Id },
                success: function (data) {
                    $("#add-read").html(data);
                }
            });

        };
        loadtable();

        // show model
        $(document).on("click", '#edit', function (e) {
            e.preventDefault();
            $("#modal").show();
            $("#head").text('Edit Address');
            var Id = $(this).data("id");
            $.ajax({
                url: "load-update2.php",
                type: "POST",
                data: { id: Id },
                success: function (data) {
                    $("#modal-form table").html(data);
                }
            });
        });


        //  add show model
        $(document).on("click", '#add', function (e) {
            e.preventDefault();
            $("#modal").show();
            $("#head").text('Add Address');
            var Id = "add";
            $.ajax({
                url: "load-update2.php",
                type: "POST",
                data: { id: Id },
                success: function (data) {
                    $("#modal-form table").html(data);
                }
            });
        });

        // close model
        $("#close-btn").on("click", function () {
            $("#modal").hide();
        });

        // remove address
        $(document).on("click", "#del", function (e) {
            var Id = $(this).data("id");
            var element = this;

            $.ajax({
                url: "address-delete.php",
                type: "POST",
                data: { id: Id },
                success: function (data) {
                    $('#sh').animate().fadeOut();
                    loadtable();
                }
            });
        });

        // ----------------- add data--------------------

        $(document).on("click", "#add-submit", function validate() {
            let flag = 1;
            let house = $("#house").val();
            if (house === "") {
                $("#house").addClass("is-invalid");
                $("#mhouse").addClass("invalid-feedback");
                $("#mhouse").text("House Name is required and can't be empty");
                flag = 0;
            }
            let street = $("#street").val();
            if (street === "") {
                $("#street").addClass("is-invalid");
                $("#mstreet").addClass("invalid-feedback");
                $("#mstreet").text("Street is required and can't be empty");
                flag = 0;
            }
            let city = $("#city").val();
            if (city === "") {
                $("#city").addClass("is-invalid");
                $("#mcity").addClass("invalid-feedback");
                $("#mcity").text("City is required and can't be empty");
                flag = 0;
            }
            let district = $("#district").val();
            if (district === "") {
                $("#district").addClass("is-invalid");
                $("#mdistrict").addClass("invalid-feedback");
                $("#mdistrict").text("district is required and can't be empty");
                flag = 0;
            }
            let pin = $("#pin").val();
            if (pin === "") {
                $("#pin").addClass("is-invalid");
                $("#mpin").addClass("invalid-feedback");
                $("#mpin").text("Pincode is required and can't be empty");
                flag = 0;
            }
            if (flag === 1) {
                let Id = $("#id").val();
                let house = $("#house").val();
                let street = $("#street").val();
                let city = $("#city").val();
                let state = $("#state").val();
                let district = $("#district").val();
                let pin = $("#pin").val();

                $.ajax({
                    url: "add-address.php",
                    type: "POST",
                    data: { id: Id, house: house, street: street, city: city, state: state, district: district, pin: pin },
                    success: function (data) {
                        if (data == 1) {
                            $("#modal").hide();
                            loadtable();
                        }
                    }
                });
            } else {
                return false;
            }
        });

        //  ------------------------------- update ----------------------------

        $(document).on("click", "#edit-submit", function validate() {
            let flag = 1;
            let house = $("#house").val();
            if (house === "") {
                $("#house").addClass("is-invalid");
                $("#mhouse").addClass("invalid-feedback");
                $("#mhouse").text("House Name is required and can't be empty");
                flag = 0;
            }
            let street = $("#street").val();
            if (street === "") {
                $("#street").addClass("is-invalid");
                $("#mstreet").addClass("invalid-feedback");
                $("#mstreet").text("Street is required and can't be empty");
                flag = 0;
            }
            let city = $("#city").val();
            if (city === "") {
                $("#city").addClass("is-invalid");
                $("#mcity").addClass("invalid-feedback");
                $("#mcity").text("City is required and can't be empty");
                flag = 0;
            }
            let district = $("#district").val();
            if (district === "") {
                $("#district").addClass("is-invalid");
                $("#mdistrict").addClass("invalid-feedback");
                $("#mdistrict").text("district is required and can't be empty");
                flag = 0;
            }
            let pin = $("#pin").val();
            if (pin === "") {
                $("#pin").addClass("is-invalid");
                $("#mpin").addClass("invalid-feedback");
                $("#mpin").text("Pincode is required and can't be empty");
                flag = 0;
            }
            if (flag === 1) {
                let id = $("#idd").val();
                let house = $("#house").val();
                let street = $("#street").val();
                let city = $("#city").val();
                let state = $("#state").val();
                let district = $("#district").val();
                let pin = $("#pin").val();

                $.ajax({
                    url: "update-address.php",
                    type: "POST",
                    data: { id: id, house: house, street: street, city: city, state: state, district: district, pin: pin },
                    success: function (data) {
                        if (data == 1) {
                            $("#modal").hide();
                            loadtable();
                        }
                    }

                })
            } else {
                return false;
            }
        });






    });

</script>