<script src=".//js/jquery-3.7.1.min.js"></script>

<style>
    .alert-success1 {
        background-color: #dff0d8;
        color: #3c763d;
        border-color: #d6e9c6;
    }

    .alert1 {
        padding: 15px;
        margin-bottom: 20px;
        border: 1px solid transparent;
        border-radius: 10px;
        position: absolute;
        width: 25%;
        margin: 90px 0 0 62%;
    }

    .alert-danger1 {
        color: #a94442;
        background-color: #f2dede;
        border-color: #ebccd1;
    }
</style>
<?php if (isset($_SESSION['success'])) {
?>
    <div class="alert1 alert-success1" id='hideMe' onclick="hide()">
        <h4 style="margin-top: 0px;"> Success!</h4>
        <?php echo $_SESSION['success']; ?>
    </div>
<?php 
}
unset($_SESSION['success']);

if (isset($_SESSION['error'])) {
?>
    <div class="alert1 alert-danger1" id='hideMe' >
        <h4 style="margin-top: 0px;"> Alert!</h4>
        <?php echo $_SESSION['error']; ?>
    </div>
<?php }
unset($_SESSION['error']); ?>

<script>
    $(document).ready(function () {
        let hid = $('#hideMe');
        function hide() {
            hid.closest(hid).fadeOut();
        }
        setTimeout(function () {
            hide()
        }, 3000);
    });

</script>