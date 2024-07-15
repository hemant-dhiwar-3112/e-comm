<?php include ('header.php');?>

<div class="container-flued">
    <div class="row">
        <div class="form-body offset-lg-4 col-lg-4 offset-md-3 col-md-6 col-10 offset-1">
            <div class="form-header">
                <h4>LOGIN</h4>
            </div>

            <div class="form-footer">
                <form action="loginprocess.php" method="POST">
                    <div class="form-group">
                        <label for="text" class="form-label">Email/Mobile</label>
                        <input class="form-control inputs in1" type="text" placeholder="Email/Mobile" id="text"
                            name="Email">
                        <span class="material-symbols-outlined">Email</span>
                    </div>
                    <div class="form-group">
                        <label for="Password" class="form-label">Password</label>
                        <input type="new password" id="Password" class="form-control inputs in1" placeholder="Password"
                            name="Password">
                        <span class="material-symbols-outlined">lock</span>
                    </div>

                    <div class="form-group">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                        <label class="form-check-label label" for="flexCheckDefault">
                            Remember me </label>
                        <a href="" style="float:right;">Forgot Password?</a>
                    </div>
                    <div class="form-group d-flex justify-content-center">
                        <input type="submit" value="login" class="btn form-btn">
                    </div>
                </form>
                <div class="form-group d-flex justify-content-center mt-4">
                    <p class="label">Don't have account?<a href="Register.php" style="text-decoration: none;"> Create
                            new
                            account</a></password>
                </div>
            </div>
        </div>
    </div>
</div>







<?php include ('footer.php'); ?>