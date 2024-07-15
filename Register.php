<?php include ('header.php'); ?>

<div class="container-flued">
    <div class="row">
        <div class="form-body offset-lg-4 col-lg-4 offset-md-3 col-md-6 col-10 offset-1">
            <div class="form-header">
                <h4>Register</h4>
            </div>
            <div class="form-footer">
                <form action="Registerpro.php" method="POST">
                    <div class="form-group">
                        <label for="text" class="form-label">Name</label>
                        <input class="form-control inputs in1 " id="name" type="text" placeholder="Enter your name"
                            name="name">
                        <span class="material-symbols-outlined">person</span>
                        <div id="mname" class=" error"></div>
                    </div>
                    <div class="form-group">
                        <label for="text" class="form-label">Mobile No.</label>
                        <input class="form-control inputs in1" type="text" placeholder="Enter your mobile no."
                            id="number" name="number">
                        <span class="material-symbols-outlined">phone</span>
                        <div id="mnumber" class=" error"></div>
                    </div>
                    <div class="form-group">
                        <label for="text" class="form-label">Email</label>
                        <input class="form-control inputs in1" type="text" placeholder="Enter your email" id="email"
                            name="email">
                        <span class="material-symbols-outlined">Email</span>
                        <div id="memail" class="error"></div>
                    </div>
                    <div class="form-group">
                        <label for="Password" class="form-label">Password</label>
                        <input type="new password" id="Password" class="form-control inputs in1" placeholder="Password"
                            name="pass">
                        <span class="material-symbols-outlined">lock</span>
                        <div id="mPassword" class="error"></div>
                    </div>
                    <div class="form-group">
                        <label for="Password" class="form-label">Conform-Password</label>
                        <input type="new password" id="comPassword" class="form-control inputs in1"
                            placeholder="Conform-Password" name="compass">
                        <span class="material-symbols-outlined">lock</span>
                        <div id="mcomPassword" class="error"></div>
                    </div>
                    <div class="form-group d-flex justify-content-center">
                        <input type="submit" value="Register" class="btn form-btn" id="sub">
                    </div>
                </form>
                <div class="form-group d-flex justify-content-center mt-4">
                    <p class="label">Do have account?<a href="login.php" style="text-decoration: none;"> Go to
                            login</a></password>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include ('footer.php'); ?>
<script src=".//js/Register.js"></script>