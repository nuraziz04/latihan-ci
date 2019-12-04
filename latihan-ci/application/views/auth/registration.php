<!-- START SIGNUP BOX -->
    <div class="container" id="login-block">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
                <div class="login-box clearfix animated flipInY">
                    <div class="page-icon animated bounceInDown">
                        <img src="<?php echo base_url() ?>assets-backend/img/account/register-icon.png" alt="Register icon" />
                    </div>
                    <div class="login-logo">
                        <a href="#">
                            <img src="<?php echo base_url() ?>assets-backend/img/account/login-logo.png" alt="Company Logo" />
                        </a>
                    </div>

                    <?= $this->session->flashData('message') ?>

                    <hr>
                    <div class="login-form">
                        <!-- Start Error box -->
                        <div class="alert alert-danger hide">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <h4>Error!</h4>
                            Your Error Message goes here
                        </div>
                        <!-- End Error box -->
                        <form action="<?= base_url('backend/auth/registration') ?>" method="POST">
                            <input type="text" name="name" id="name" placeholder="Name" class="input-field" value="<?= set_value('name'); ?>" />
                            <?= form_error('name'); ?>

                            <input type="text" name="email" id="email" placeholder="E-mail" class="input-field" value="<?= set_value('email'); ?>" />
                            <?= form_error('email'); ?>

                            <input type="password" name="password1" id="password1" placeholder="Password" class="input-field" />
                            <?= form_error('password1'); ?>

                            <input type="password" name="password2" id="password2" placeholder="Confirm Password" class="input-field" />
                            <?= form_error('password2'); ?>

                            <button type="submit" class="btn btn-login">Sign Up</button>
                        </form>
                        <div class="login-links">
                            <a href="password_forgot.html">Forgot password?</a>
                            <br>
                            <a href="<?php echo base_url('backend/auth/') ?>">Already have an account? <strong>Sign In</strong></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SIGNUP BOX -->