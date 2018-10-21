<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<main id="main-container" style="min-height: 608px;">

    <!-- Page Content -->
    <div class="bg-gd-lake">
        <div class="hero-static content content-full bg-white js-appear-enabled animated fadeIn" data-toggle="appear">
            <!-- Header -->
            <div class="py-30 px-5 text-center">
                <a class="link-effect font-w700" href="<?= base_url('company')?>">
                    <i class="fa fa-car"></i>
                    <span class="font-size-xl text-primary-dark">car</span><span class="font-size-xl">door</span>
                </a>
                <h1 class="h2 font-w700 mt-50 mb-10"><?= $title;?></h1>
                <h2 class="h4 font-w400 text-muted mb-0"><?= $description; ?></h2>
            </div>
            <!-- END Header -->

            <!-- Update password Form -->
            <div class="row justify-content-center px-5">
                <div class="col-sm-8 col-md-6 col-xl-4">
                    <form class="js-validation-update" action="<?= base_url('company/update_password');?>" method="post" novalidate="novalidate">
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material floating">
                                    <input type="password" class="form-control" id="update-password" name="update-password" required>
                                    <label for="reminder-credential">New Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material floating">
                                    <input type="password" class="form-control" id="update-confirm" name="update-confirm" required>
                                    <label for="reminder-credential">Confirm Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="update" class="btn btn-block btn-hero btn-noborder btn-rounded btn-alt-primary">
                                Update Password
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Update password Form -->
        </div>
    </div>
    <!-- END Page Content -->

</main>