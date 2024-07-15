<?php include('header.php'); ?>

<div class="head-title">
    <h1>Contact us
    </h1>
</div>

<div class="container">
    <div class="row">
        <div class="form-body offset-lg-3 col-lg-6 offset-md-2 col-md-8 col-10 offset-1" style="border: none;">
            <form action="">
                <div class="c-form-group">
                    <input type="text" class="form-control rounded-0" placeholder="Enter Your Full Name">
                </div>
                <div class="c-form-group">
                    <input type="email" class="form-control rounded-0" placeholder="Enter Your Email Adderss">
                </div>
                <div class="c-form-group">
                    <input type="text" class="form-control rounded-0" placeholder="Enter Subject">
                </div>
                <div class="c-form-group">
                    <textarea class="form-control rounded-0" placeholder="Enter Your Message" rows="4"></textarea>
                </div>
                <div class="c-form-group d-flex justify-content-center">
                    <input type="submit" value="Submit" class="btn c-form-btn">
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include('arriwal.php');
include('footer.php'); ?>