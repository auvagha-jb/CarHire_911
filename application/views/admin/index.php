<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

    <!-- MAIN container -->
    <main id="main-container">
    <!-- Page Content -->
    <div class="content bg-primary-dark text-body-color-light" style="min-height: 88.6vh; overflow-y:scroll;">
        <div class="row invisible container" data-toggle="appear">
            <!-- Row #1 -->
            <div class="col-6 col-xl-3">
                <div class="block block-rounded block-transparent bg-black-op text-body-color-light text-right">
                    <div class="block-content block-content-full clearfix">
                        <div class="float-left mt-10 d-none d-sm-block">
                            <i class="si si-users fa-3x text-muted"></i>
                        </div>
                        <div class="font-size-h3 font-w600" data-toggle="countTo" data-speed="1000" data-to="<?= $customers['count'];?>">0</div>
                        <div class="font-size-sm font-w600 text-uppercase text-muted">CUSTOMERS</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-xl-3">
                <div class="block block-rounded block-transparent bg-black-op text-body-color-light text-right">
                    <div class="block-content block-content-full clearfix">
                        <div class="float-left mt-10 d-none d-sm-block">
                            <i class="si si-users fa-3x text-muted"></i>
                        </div>
                        <div class="font-size-h3 font-w600" data-toggle="countTo" data-speed="1000" data-to="<?= $employees['count'];?>">0</div>
                        <div class="font-size-sm font-w600 text-uppercase text-muted">EMPLOYEES</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-xl-3">
                <div class="block block-rounded block-transparent bg-black-op text-body-color-light text-right">
                    <div class="block-content block-content-full clearfix">
                        <div class="float-left mt-10 d-none d-sm-block">
                            <i class="fa fa-car fa-3x text-muted"></i>
                        </div>
                        <div class="font-size-h3 font-w600" data-toggle="countTo" data-speed="1000" data-to="1500">0</div>
                        <div class="font-size-sm font-w600 text-uppercase text-muted">bookings</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-xl-3">
                <div class="block block-rounded block-transparent bg-black-op text-body-color-light text-right">
                    <div class="block-content block-content-full clearfix">
                        <div class="float-left mt-10 d-none d-sm-block">
                            <i class="si si-wallet fa-3x text-muted"></i>
                        </div>
                        <div class="font-size-h3 font-w600">KES <span data-toggle="countTo" data-speed="1000" data-to="780">0</span></div>
                        <div class="font-size-sm font-w600 text-uppercase text-muted">Earnings</div>
                    </div>
                </div>
            </div>
            <!-- END Row #1 -->
        </div>

        <div class="row">
            <!-- Latest Updates -->
            <div class="col-xl-6">
                <div class="block block-rounded block-themed">
                    <div class="block-header">
                        <h3 class="block-title text-uppercase">Latest Updates</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content p-5">
                        <table class="table table-borderless table-striped mb-0">
                            <thead>
                                <tr>
                                    <th style="width: 100px;">ID</th>
                                    <th>Status</th>
                                    <th class="d-none d-sm-table-cell">Customer</th>
                                    <th class="text-right">Value</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END Latest Updates --> 
            
            <!-- Suspended Accounts -->
            <div class="col-xl-6">
                <div class="block block-rounded block-themed">
                    <div class="block-header">
                        <h3 class="block-title text-uppercase">Suspended accounts</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                            <button type="button" class="btn-block-option">
                                <i class="si si-wrench"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content p-5">
                        <table class="table table-borderless table-striped mb-0">
                            <thead>
                                <tr>
                                    <th style="width: 100px;">ID</th>
                                    <th>Status</th>
                                    <th class="d-none d-sm-table-cell">Customer</th>
                                    <th class="text-right">Value</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END Suspended accounts --> 
        </div>

    <div>