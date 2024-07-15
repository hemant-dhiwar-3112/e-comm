<?php
include ('header.php');
include ('profile.php');
if (!isset($_SESSION['user'])) { ?>
    <script>
        window.location.href = 'login.php';
    </script>
    <?php
}
?>
<style>
    .obody {
        margin-left: 5%;
    }

    .ofooter {
        width: 280px;
        margin-left: 2%;

    }

    .ofooter h6 {
        text-align: center;

    }

    .mybtn {
        margin-top: 14px;
        width: 70%;
        padding: 5px 18px;
        margin-left: 15%;
    }
</style>

<div id="order-detail">
</div>


<div id="modal">
    <div id="modal-form" style="left: calc(40% - 15%);
    width: 50%; top:3%; background: rgb(240 240 245);">
        <h2 style="text-align: center;">Order Detail</h2>
        <div id="data">

        </div>
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
        function loadtable(page_id) {
            $.ajax({
                url: "load-order.php",
                type: "POST",
                data: { page: page_id },
                success: function (data) {
                    $("#order-detail").html(data);
                }
            });
        };

        loadtable();

        //pagination
        $(document).on("click", ".sele", function (e) {
            e.preventDefault();
            var page_id = $(this).attr("id");
            loadtable(page_id);
        });

        $(document).on("click", '#detail', function () {
            $("#modal").show();
            var Id = $(this).data('id');
            $.ajax({
                url: "load-detail.php",
                type: "POST",
                data: { id: Id },
                success: function (data) {
                    $("#data").html(data);
                }
            });
        });


        $("#close-btn").on("click", function () {
            $("#modal").hide();
        });


        $(document).on("click", "#edit-order", function () {
            var Id = $(this).data('id');
            $.ajax({
                url: "cancel.php",
                type: "POST",
                data: { id: Id },
                success: function (data) {
                    if (data == 1) {
                        loadtable();
                    }
                }
            })
        });



        // delete
        $(document).on("click", "#remove-order", function (e) {
            var Id = $(this).data("id");
            var element = this;
            $.ajax({
                url: "remov.php",
                type: "POST",
                data: { id: Id },
                success: function (data) {
                    $(element).closest("sh").fadeOut();
                    loadtable();
                }
            });
        });
    });
</script>