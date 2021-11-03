
<body>
<?php echo form_open(base_url().'login/login_submit');?>
    <main class="h-120 mt-4">
        <div class="row w-75 m-auto main-card">
            <div class="col-md-6 p-0 right-card">
                <div class="card bg">
                    <form action="" method="POST">
                        <div class="card-body card-main login-container">
                                <div class="mt-3 form-group text-center">
                                    <a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>images/logo1.png" class="logo mb-2" width="80" height="80"></a>
                                    <h3 class="text-primary font-weight-bolder">Login to GoTrip</h3>                        
                                </div>
                                <div class="form-group mt-5">
                                    <label class="col-form-label" for="inputDefault">Username</label>
                                    <input type="text" class="form-control username" name="username" placeholder="Enter Username" id="username" required>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label" for="inputDefault">Password</label>
                                    <input type="password" title="8 or more characters" class="form-control password" name="password" placeholder="Enter Password" id="password"  required>
                                </div>
                                <div class="clearfix">
						            <label class="float-left form-check-label"><input type="checkbox" name="remember" id="remember " <?php if(isset($_COOKIE["loginId"])) { ?> checked="checked" <?php } ?>> Remember me</label>
                                    
                                    <a href="<?php echo base_url();?>forgot-password" class="btn-link float-right">Forgot Password?</a>
                                </div>
                                <div class="mt-2 text-center">
                                    <button class="btn btn-primary rounded-pill btn-lg w-75 login-btn mt-5">Log in Now</button>
                                </div>
                                <div class="text-center mt-3">
                                    <small class="mt-5 text font-italic">Need an Account?<a href="<?php echo base_url();?>signup" class="btn-link">Create here</a></small>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            <div class="col-md-6 text-center left-card p-0">
                <div class="h-105 logo-container">
                    <img class="img-login img img-fluid" style="height: 34rem;" src="<?php echo base_url();?>images/travel.jpg"/>
                </div>
            </div>
        </div>
    </main>
<?php echo form_close(); ?>
</body>