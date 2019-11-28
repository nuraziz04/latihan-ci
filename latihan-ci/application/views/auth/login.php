
    <!-- BEGIN LOGIN BOX -->
    <div class="container" id="login-block">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
                <div class="login-box clearfix animated flipInY">
                    <div class="page-icon animated bounceInDown">
                        <img src="<?php echo base_url() ?>assets-backend/img/account/user-icon.png" alt="Key icon">
                    </div>
                    <div class="login-logo">
                        <a href="#?login-theme-3">
                            <img src="<?php echo base_url() ?>assets-backend/img/account/login-logo.png" alt="Company Logo">
                        </a>
                    </div>
                    <hr>
                    <div class="login-form">
                        <!-- BEGIN ERROR BOX -->
                        <div class="alert alert-danger hide">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <h4>Error!</h4>
                            Your Error Message goes here
                        </div>
                        <!-- END ERROR BOX -->
                        <form action="http://themes-lab.com/pixit/admin/index.html" method="post">
                            <input type="text" placeholder="Username" class="input-field form-control user" />
                            <input type="password" placeholder="Password" class="input-field form-control password" />
                            <button type="submit" class="btn btn-login">Login</button>
                        </form>
                        <div class="login-links">
                            <a href="password_forgot.html">Forgot password?</a>
                            <br>
                            <a href="<?php echo base_url('backend/auth/registration') ?>">Don't have an account? <strong>Sign Up</strong></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END LOCKSCREEN BOX -->
