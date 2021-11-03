<head>

<script src='https://www.google.com/recaptcha/api.js' async defer></script>
</head>
<body>
    <main class="h-110 mt-4">
        <div class="row w-75 m-auto main-card">

            <div class="col-md-6 p-0 right-card">
                <div class="card bg-secondary">
                    <form action="" method="POST">
                        <div class="card-body card-main">
                                <div class="form-group text-center">
                                <a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>images/logo1.png" class="logo mb-2" width="50" height="60"></a>
                                    <h3 class="text-primary font-weight-bolder">Join GoTrip Today</h3>                        
                                </div>
                            
                                <form method="post" action="<?php echo base_url().'gotrip/signup_submit';?>">
                                <div class="form-group">
                                    <label class="col-form-label" for="inputDefault">Username</label>
                                    <input type="text" class="form-control username" name="username" placeholder="Enter Username" id="username" required>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label" for="inputDefault">Email Address</label>
                                    <input type="email" class="form-control email" name="email" placeholder="Enter Email" id="email"  required>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label" for="inputDefault">Password</label>
                                    <input type="password" pattern=".{8,}" title="8 or more characters" class="form-control password" name="password" placeholder="Enter Password" id="password"  required>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label" for="inputDefault">Confirm Password</label>
                                    <input type="password" class="form-control password1" name="password1" placeholder="Please Confirm Password" id="password1"  required>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label" for="inputDefault">Secret Question: What's the name of your first pet?</label>
                                    <input type="text" class="form-control answer" name="answer" placeholder="Enter Your Answer" id="answer" required>
                                </div>
                                <div class="form-group">
                                    <div class="g-recaptcha" data-type="image" data-sitekey="6LdH-OwaAAAAANAwfJcI2IWoX1GXEi-AfoaKtyb6"></div>
                                    
                                </div>
            
                                <div class="mt-5 form-group text-center">
                                    <button class="btn btn-primary rounded-pill btn-lg w-50 signup-btn">Get Started</button>
                                </div>
                                <div class="text-center">
                                <small class="text-muted font-italic">Already have an Account?<a href="<?php echo base_url();?>login" class="btn-link"> Login here</a></small>
                                </div>
                                </form>
                            </div>
                        </div>
                    </form>
                </div>
            <div class="col-md-6 p-0 text-center left-card ">
                <div class="h-100 logo-container">
                    <img class="img img-fluid" style="height: 48rem;" src="<?php echo base_url();?>images/signup1.jpeg"/>
                </div>
            </div>
        </div>
    </main>

</body>