<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

    <!-- MAIN container -->
    <main id="main-container">
    <!-- Page Content -->
    <div class="content bg-primary-dark text-body-color-light">
        <div class="row invisible container" data-toggle="appear">
            <!-- Row #1 -->
            <div class="col-6 col-xl-3">
                <a class="block block-rounded block-transparent bg-black-op text-body-color-light text-right" href="javascript:void(0)">
                    <div class="block-content block-content-full clearfix">
                        <div class="float-left mt-10 d-none d-sm-block">
                            <i class="si si-bag fa-3x text-muted"></i>
                        </div>
                        <div class="font-size-h3 font-w600" data-toggle="countTo" data-speed="1000" data-to="1500">0</div>
                        <div class="font-size-sm font-w600 text-uppercase text-muted">Sales</div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-xl-3">
                <a class="block block-rounded block-transparent bg-black-op text-body-color-light text-right" href="javascript:void(0)">
                    <div class="block-content block-content-full clearfix">
                        <div class="float-left mt-10 d-none d-sm-block">
                            <i class="si si-wallet fa-3x text-muted"></i>
                        </div>
                        <div class="font-size-h3 font-w600">$<span data-toggle="countTo" data-speed="1000" data-to="780">0</span></div>
                        <div class="font-size-sm font-w600 text-uppercase text-muted">Earnings</div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-xl-3">
                <a class="block block-rounded block-transparent bg-black-op text-body-color-light text-right" href="javascript:void(0)">
                    <div class="block-content block-content-full clearfix">
                        <div class="float-left mt-10 d-none d-sm-block">
                            <i class="si si-envelope-open fa-3x text-muted"></i>
                        </div>
                        <div class="font-size-h3 font-w600" data-toggle="countTo" data-speed="1000" data-to="15">0</div>
                        <div class="font-size-sm font-w600 text-uppercase text-muted">Messages</div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-xl-3">
                <a class="block block-rounded block-transparent bg-black-op text-body-color-light text-right" href="javascript:void(0)">
                    <div class="block-content block-content-full clearfix">
                        <div class="float-left mt-10 d-none d-sm-block">
                            <i class="si si-users fa-3x text-muted"></i>
                        </div>
                        <div class="font-size-h3 font-w600" data-toggle="countTo" data-speed="1000" data-to="4252">0</div>
                        <div class="font-size-sm font-w600 text-uppercase text-muted">Online</div>
                    </div>
                </a>
            </div>
            <!-- END Row #1 -->
        </div>

        <div class="row">
            <!-- Latest Orders -->
            <div class="col-xl-6">
                <div class="block block-rounded block-themed">
                    <div class="block-header">
                        <h3 class="block-title text-uppercase">Latest Updates</h3>
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
                                <tr>
                                    <td>
                                        <a class="font-w600" href="javascript:void(0)">ORD.1851</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-danger">Canceled</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <a href="javascript:void(0)">Jose Parker</a>
                                    </td>
                                    <td class="text-right">
                                        <span class="text-black">$203</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a class="font-w600" href="javascript:void(0)">ORD.1850</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-warning">Pending</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <a href="javascript:void(0)">Jose Parker</a>
                                    </td>
                                    <td class="text-right">
                                        <span class="text-black">$842</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a class="font-w600" href="javascript:void(0)">ORD.1849</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-danger">Canceled</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <a href="javascript:void(0)">Betty Kelley</a>
                                    </td>
                                    <td class="text-right">
                                        <span class="text-black">$151</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a class="font-w600" href="javascript:void(0)">ORD.1848</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-success">Completed</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <a href="javascript:void(0)">Barbara Scott</a>
                                    </td>
                                    <td class="text-right">
                                        <span class="text-black">$688</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a class="font-w600" href="javascript:void(0)">ORD.1847</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-danger">Canceled</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <a href="javascript:void(0)">Susan Day</a>
                                    </td>
                                    <td class="text-right">
                                        <span class="text-black">$963</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a class="font-w600" href="javascript:void(0)">ORD.1846</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-success">Completed</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <a href="javascript:void(0)">Susan Day</a>
                                    </td>
                                    <td class="text-right">
                                        <span class="text-black">$836</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a class="font-w600" href="javascript:void(0)">ORD.1845</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-info">Processing</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <a href="javascript:void(0)">Alice Moore</a>
                                    </td>
                                    <td class="text-right">
                                        <span class="text-black">$616</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a class="font-w600" href="javascript:void(0)">ORD.1844</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-warning">Pending</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <a href="javascript:void(0)">Sara Fields</a>
                                    </td>
                                    <td class="text-right">
                                        <span class="text-black">$162</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a class="font-w600" href="javascript:void(0)">ORD.1843</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-info">Processing</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <a href="javascript:void(0)">Betty Kelley</a>
                                    </td>
                                    <td class="text-right">
                                        <span class="text-black">$683</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a class="font-w600" href="javascript:void(0)">ORD.1842</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-info">Processing</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <a href="javascript:void(0)">Megan Fuller</a>
                                    </td>
                                    <td class="text-right">
                                        <span class="text-black">$240</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END Latest Orders --> 
            
            <!-- Latest Orders -->
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
                                <tr>
                                    <td>
                                        <a class="font-w600" href="javascript:void(0)">ORD.1851</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-danger">Canceled</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <a href="javascript:void(0)">Jose Parker</a>
                                    </td>
                                    <td class="text-right">
                                        <span class="text-black">$203</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a class="font-w600" href="javascript:void(0)">ORD.1850</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-warning">Pending</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <a href="javascript:void(0)">Jose Parker</a>
                                    </td>
                                    <td class="text-right">
                                        <span class="text-black">$842</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a class="font-w600" href="javascript:void(0)">ORD.1849</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-danger">Canceled</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <a href="javascript:void(0)">Betty Kelley</a>
                                    </td>
                                    <td class="text-right">
                                        <span class="text-black">$151</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a class="font-w600" href="javascript:void(0)">ORD.1848</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-success">Completed</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <a href="javascript:void(0)">Barbara Scott</a>
                                    </td>
                                    <td class="text-right">
                                        <span class="text-black">$688</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a class="font-w600" href="javascript:void(0)">ORD.1847</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-danger">Canceled</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <a href="javascript:void(0)">Susan Day</a>
                                    </td>
                                    <td class="text-right">
                                        <span class="text-black">$963</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a class="font-w600" href="javascript:void(0)">ORD.1846</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-success">Completed</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <a href="javascript:void(0)">Susan Day</a>
                                    </td>
                                    <td class="text-right">
                                        <span class="text-black">$836</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a class="font-w600" href="javascript:void(0)">ORD.1845</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-info">Processing</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <a href="javascript:void(0)">Alice Moore</a>
                                    </td>
                                    <td class="text-right">
                                        <span class="text-black">$616</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a class="font-w600" href="javascript:void(0)">ORD.1844</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-warning">Pending</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <a href="javascript:void(0)">Sara Fields</a>
                                    </td>
                                    <td class="text-right">
                                        <span class="text-black">$162</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a class="font-w600" href="javascript:void(0)">ORD.1843</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-info">Processing</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <a href="javascript:void(0)">Betty Kelley</a>
                                    </td>
                                    <td class="text-right">
                                        <span class="text-black">$683</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a class="font-w600" href="javascript:void(0)">ORD.1842</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-info">Processing</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <a href="javascript:void(0)">Megan Fuller</a>
                                    </td>
                                    <td class="text-right">
                                        <span class="text-black">$240</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END Latest Orders --> 
        </div>

    <div>