<?php include('header.php');
include('config.php');
$Name = $_GET['ID'];
?>

<h2 style="    text-align: center;
    padding-top: 20px;">
    <?php if ($Name == "S") { ?>
        SMARTPHONE
    <?php } elseif ($Name == "L") { ?>
        LAPTOP
    <?php } elseif ($Name == "T") { ?>
        LEDTV
    <?php } elseif ($Name == "H") { ?>
        HEADPHONE
    <?php } elseif ($Name == "D") { ?>
        DRESS
    <?php } else { ?>
        NOT RECORED
    <?php } ?>
</h2>

<?php
include('pro.php');
include('footer.php');
?>