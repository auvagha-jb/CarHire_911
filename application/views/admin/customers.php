<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
 <!-- Main Conent container -->
    <main id="main-container">
        <!-- Page content -->
        <div class="content">
            
            <div class="block p-0">
                <div class=" block-header block-header-default">
                    <h3 class="block-title text-primary">Customers</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" id="refresh-customers">
                            <i class="si si-refresh"></i>
                        </button>
                    </div>

                </div>

                <div class="block-content">
                    <table class="w-100 table table-hover table-striped js-dataTable-customer" data-source="<?= base_url('admin/get_customers'); ?>" data-suspend-target="<?= base_url('admin/suspend_customer'); ?>">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Date registered</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <!-- End of page content -->
