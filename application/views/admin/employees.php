<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
    <!-- MAIN Content Container -->
    <main id="main-container">
        <!-- Page content -->
        <div class="bg-primary-darker text-body-color-light content">
            
            <div class="block bg-primary-darker mt-15">
                <div class="block-header block-header-default">
                    <button class="btn btn-primary btn-rounded" data-toggle="modal" data-target="#add_employee_modal">
                        <i class="fa fa-plus"></i>
                        New Employee
                    </button>

                    <!-- Block option -->
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                    </div>
                    <!-- END of options -->
                </div>                

                <!-- Block content: Tables of employess -->
                <div class="block-content block-content-full">
                    <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/be_tables_datatables.js -->
                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                        <thead>
                            <tr>
                                <th class="text-center"></th>
                                <th>Name</th>
                                <th class="d-none d-sm-table-cell">Email</th>
                                <th class="d-none d-sm-table-cell" style="width: 15%;">Access</th>
                                <th class="text-center" style="width: 15%;">Profile</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
                <!-- END of content -->
            </div>
        </div>
        <!-- END of page content -->

        <!-- Modal for Adding New employee -->
        <div class="modal fade" id="add_employee_modal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="">ADD NEW EMPLOYEE</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>