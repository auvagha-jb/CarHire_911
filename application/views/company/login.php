<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<main id="main-container" style="min-height: 608px;">

    <!-- Page Content -->
    <div class="bg-gd-dusk">
        <div class="hero-static content content-full bg-white js-appear-enabled animated fadeIn" data-toggle="appear">
            <!-- Header -->
            <div class="py-30 px-5 text-center">
                <a class="link-effect font-w700" href="<?= base_url('company')?>">
                    <i class="fa fa-car"></i>
                    <span class="font-size-xl text-primary-dark">car</span><span class="font-size-xl">door</span>
                </a>
                <h1 class="h2 font-w700 mt-50 mb-10">WELCOME BACK</h1>
                <h2 class="h4 font-w400 text-muted mb-0">Please sign in</h2>
            </div>
            <!-- END Header -->

            <!-- Sign In Form -->
            <div class="row justify-content-center px-5">
                <div class="col-sm-8 col-md-6 col-xl-4">
                    <form class="js-validation-login" action="<?= base_url('company/login'); ?>" method="post">
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material floating">
                                    <input type="email" class="form-control" id="login-email" name="login-email" required>
                                    <label for="login-username">Email</label>
                                    <input type="hidden" id="check_email_url" value="<?= base_url('company/check_login_email');?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material floating">
                                    <input type="password" class="form-control" id="login-password" name="login-password" required>
                                    <label for="login-password">Password</label>
                                    <input type="hidden" id="check_password_url" value="<?= base_url('company/check_login_password');?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row gutters-tiny">
                            <div class="col-12 mb-10">
                                <button type="submit" class="btn btn-block btn-hero btn-noborder btn-rounded btn-alt-primary">
                                    <i class="si si-login mr-10"></i> Sign In
                                </button>
                            </div>
                            <div class="col-sm-12 mb-5">
                                <a class="btn btn-block btn-noborder btn-rounded btn-alt-secondary" href="<?= base_url('company/forgot_password');?>">
                                    <i class="fa fa-warning text-muted mr-5"></i> Forgot password
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Sign In Form -->
        </div>
    </div>
    <!-- END Page Content -->
