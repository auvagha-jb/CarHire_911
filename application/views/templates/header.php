<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!doctype html>
<!--[if lte IE 9]>     <html lang="en" class="no-focus lt-ie10 lt-ie10-msg"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en" class="no-focus"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <title>CAR HIRE</title>

        <meta name="author" content="Stephen Wanyee">
        <meta name="author" content="Jerry Auvagha">
        <meta name="author" content="Afandi Indiatsi">
        <meta name="author" content="Sharon Mujera">
        <meta name="robots" content="noindex, nofollow">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="<?= base_url('favicon.ico') ?>">
        <!-- END Icons -->

        <!-- Stylesheets -->
        
        <!-- Datepicker Css -->
        <link rel="stylesheet" href="<?= base_url('assets/vendors/codebase/assets/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css');?>">

        <!-- Datatables bootstrap styling -->
        <link rel="stylesheet" href="<?= base_url('assets/vendors/codebase/assets/js/plugins/datatables/dataTables.bootstrap4.css');?>">

        <!-- Sweetalert CSS -->
        <link rel="stylesheet" href="<?= base_url('assets/vendors/codebase/assets/js/plugins/sweetalert2/sweetalert2.min.css');?>">



        <!-- Fonts and Codebase framework -->
        <link rel="stylesheet" href="<?= base_url('assets/vendors/codebase/assets/fonts/muli-font.css'); ?>">
        <link rel="stylesheet" id="css-main" href="<?= base_url('assets/vendors/codebase/assets/css/codebase.min.css'); ?>">

        <!-- Local stylesheets -->
        <link rel="stylesheet" href="<?= base_url('assets/css/admin.css') ?>">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <link rel="stylesheet" id="css-theme" href="<?= base_url('assets/vendors/codebase/assets/css/themes/corporate.css');?>">
        <!-- END Stylesheets -->
    </head>
    <body>
    <div id="page-loader" class="bg-corporate-dark show"></div>


    <!-- Page Container -->
    <div id="page-container" class="sidebar-o side-scroll page-header-fixed page-header-inverse sidebar-inverse">

    

    <!-- Header -->
    <header id="page-header">
        <!-- Header Content -->
        <div class="content-header">
            <!-- Left Section -->
            <div class="content-header-section">
                <!-- Toggle Sidebar -->
                <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="sidebar_mini_toggle">
                    <i class="fa fa-navicon"></i>
                </button>
                <!-- END Toggle Sidebar -->

            </div>
            <!-- END Left Section -->

            <!-- Right Section -->
            <div class="content-header-section">
                <!-- User Dropdown -->
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user d-sm-none"></i>
                        <span class="d-none d-sm-inline-block">J. Smith</span>
                        <i class="fa fa-angle-down ml-5"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right min-width-200" aria-labelledby="page-header-user-dropdown">
                        <h5 class="h6 text-center py-10 mb-5 border-b text-uppercase">User</h5>
                        <a class="dropdown-item" href="be_pages_generic_profile.html">
                            <i class="si si-user mr-5"></i> Profile
                        </a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between" href="be_pages_generic_inbox.html">
                            <span><i class="si si-envelope-open mr-5"></i> Inbox</span>
                            <span class="badge badge-primary">3</span>
                        </a>
                        <a class="dropdown-item" href="be_pages_generic_invoice.html">
                            <i class="si si-note mr-5"></i> Invoices
                        </a>
                        <div class="dropdown-divider"></div>

                        <!-- Toggle Side Overlay -->
                        <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                        <a class="dropdown-item" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_toggle">
                            <i class="si si-wrench mr-5"></i> Settings
                        </a>
                        <!-- END Side Overlay -->

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="op_auth_signin.html">
                            <i class="si si-logout mr-5"></i> Sign Out
                        </a>
                    </div>
                </div>
                <!-- END User Dropdown -->

                <!-- Notifications -->
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-notifications" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-flag"></i>
                        <span class="badge badge-primary badge-pill">1</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right min-width-300" aria-labelledby="page-header-notifications">
                        <h5 class="h6 text-center py-10 mb-0 border-b text-uppercase">Notifications</h5>
                        <ul class="list-unstyled my-20">
                            <li>
                                <a class="text-body-color-dark media mb-15" href="javascript:void(0)">
                                    <div class="ml-5 mr-15">
                                        <i class="fa fa-fw fa-check text-success"></i>
                                    </div>
                                    <div class="media-body pr-10">
                                        <p class="mb-0">You’ve upgraded to a VIP account successfully!</p>
                                        <div class="text-muted font-size-sm font-italic">15 min ago</div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-center mb-0" href="javascript:void(0)">
                            <i class="fa fa-flag mr-5"></i> View All
                        </a>
                    </div>
                </div>
                <!-- END Notifications -->
            </div>
            <!-- END Right Section -->
        </div>
        <!-- END Header Content -->
    </header>
    <!-- END Header -->