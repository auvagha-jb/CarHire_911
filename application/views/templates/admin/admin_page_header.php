<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
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
                        <span class="d-none d-sm-inline-block"><?= $this->session->userdata('name');?></span>
                        <i class="fa fa-angle-down ml-5"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right min-width-200" aria-labelledby="page-header-user-dropdown">
                        <h5 class="h6 text-center py-10 mb-5 border-b text-uppercase">User</h5>
                        <a class="dropdown-item" href="#">
                            <i class="si si-user mr-5"></i> Edit Profile
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?= base_url('company/logout');?>">
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