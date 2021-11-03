<main class="h-110 mt-4">
        <div class="row w-75 m-auto main-card">

            <div class="col-md-6 p-0 right-card">
                <div class="card bg-secondary">
                    <form action="" method="POST">
                        <div class="card-body card-main">
                                <div class="form-group text-center">
                                <a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>images/logo1.png" class="logo mb-2" width="50" height="60"></a>
                                    <h3 class="text-primary font-weight-bolder">Recover your Password</h3>                        
                                </div>
                            
                                <div class="form-group">
                                    <label class="col-form-label" for="inputDefault">Type your Username</label>
                                    <input type="text" class="form-control username" name="username" placeholder="Enter Username" id="username" required>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label" for="inputDefault">Type your Email Address</label>
                                    <input type="email" class="form-control email" name="email" placeholder="Enter Email" id="email"  required>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label" for="inputDefault">Secret Question: What's the name of your first pet?</label>
                                    <input type="text" class="form-control answer" name="answer" placeholder="Enter Your Answer" id="answer" required>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label" for="inputDefault">New Password</label>
                                    <input type="password" pattern=".{8,}" title="8 or more characters" class="form-control password" name="password" placeholder="Enter Password" id="password"  required>
                                </div>
                                <div class="clearfix">
                                    <a href="<?php echo base_url();?>login" class="btn-link float-right">Back to login</a></small>
                                </div>
           
                                <div class="mt-5 form-group text-center">
                                    <button class="btn btn-primary rounded-pill btn-lg w-50 forgot-btn">Reset your Password</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 p-0 text-center left-card">
                    <div class="h-100 logo-container">
                        <img class="img img-fluid" style="height: 38rem;" src="<?php echo base_url();?>images/forgot_password.jpg"/>
                    </div>
                </div>         
            </div>           
        </div>
    </main>