<?php include ('header.php'); ?>

<!-- --------------------- main -------------------- -->

<!-- sillder -->
<div class="saider">
    <div class="head-saider-img">
        <img src=".//image/slider-bg.jpg" alt="slider-bg">
    </div>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-lg-6  col-sm-6">
                            <div class="head-saider">
                                <div class="detail-box">
                                    <h1>
                                        <span>
                                            Sale 20% Off
                                        </span>
                                        <br>
                                        On Everything
                                    </h1>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam, laborum.
                                        ipsum dolor, sit amet consectetur adipisicing elit. Ut, officiis. ipsum
                                        dolor sit amet consectetur adipisicing elit. Minima temporibus ducimus rerum
                                        eos. Sunt ipsam obcaecati earum praesentium perferendis consequuntur?
                                    </p>
                                    <div class="btn-box">
                                        <a href="" class="form-btn btn">
                                            Shop Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-lg-6">
                            <div class="head-saider">
                                <div class="detail-box">
                                    <h1>
                                        <span>
                                            Sale 20% Off
                                        </span>
                                        <br>
                                        On Everything
                                    </h1>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam, laborum.
                                        ipsum dolor, sit amet consectetur adipisicing elit. Ut, officiis. ipsum
                                        dolor sit amet consectetur adipisicing elit. Minima temporibus ducimus rerum
                                        eos. Sunt ipsam obcaecati earum praesentium perferendis consequuntur?
                                    </p>
                                    <div class="btn-box">
                                        <a href="" class="form-btn btn">
                                            Shop Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="carousel-indicators movebtn">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
        </div>
    </div>
</div>


<?php
// free quality 

include ('free.php');

// new arriwal 

include ('arriwal.php');

// <!-- product -->

?>


<div class="container padding">
    <div class="m-4" style="text-align: center;">
        <h1>OUR <span style="color: red;">PRODUCT </span></h1>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-4 col-lg-4 col-sm-6">
            <a href="product.php?ID=S" style="color: inherit; text-decoration:none;">
                <div class="box1">
                    <div class="box-img">
                        <img src=".//image/Smartphone.jpg" alt="">
                    </div>
                    <div class="box-detail justify-content-center">
                        <h5>Smartphone</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 col-lg-4 col-sm-6">
            <a href="product.php?ID=L" style="color: inherit; text-decoration:none;">
                <div class="box1">
                    <div class="box-img">
                        <img src=".//image/laptop.jpg" alt="">
                    </div>
                    <div class="box-detail justify-content-center">
                        <h5>Laptop</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 col-lg-4 col-sm-6">
            <a href="product.php?ID=T" style="color: inherit; text-decoration:none;">
                <div class="box1">
                    <div class="box-img">
                        <img src=".//image/ledtv.jpg" alt="">
                    </div>
                    <div class="box-detail justify-content-center">
                        <h5>lED TV</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 col-lg-4 col-sm-6">
            <a href="product.php?ID=H" style="color: inherit; text-decoration:none;">
                <div class="box1">
                    <div class="box-img">
                        <img src=".//image/headphone.jpg" alt="">
                    </div>
                    <div class="box-detail justify-content-center">
                        <h5>HEADPHONE</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 col-lg-4 col-sm-6">
            <a href="product.php?ID=D" style="color: inherit; text-decoration:none;">
                <div class="box1">
                    <div class="box-img">
                        <img src=".//image/dress.jpg" alt="">
                    </div>
                    <div class="box-detail justify-content-center">
                        <h5>DRESS</h5>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>



<div class="back4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="sub-form" style="text-align: center;">

                    <div class="form-head">
                        <h3>Subscribe To Get Discount Offers</h3>
                    </div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur,
                        consectetur.</p>
                    <form action="">
                        <input class="form-control form-text" type="text" placeholder="Enter Your Email">
                        <input type="submit" value="Subscribe" class="form-btn">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- // Testimonial -->

<?php include ('Testimonial.php');
?>
<?php
include ('footer.php');
?>