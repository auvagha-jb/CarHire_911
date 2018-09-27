<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
    <!-- MAIN Content Container -->
    <main id="main-container">
        <!-- Page content -->
        <div class=" content">
            
            <div class="block  mt-15">
                <!-- Block nav tabs -->
                <ul class="nav nav-tabs nav-tabs-block align-items-center" data-toggle="tabs" role="tablist">
                    <li class="nav-item">
                        <a href="#btabs-view-employees" class="nav-link active">
                            View Employees
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#btabs-add-employee" class="nav-link">
                            Add Employee
                        </a>
                    </li>
                    <!-- Options -->
                    <li class="nav-item ml-auto">
                        <div class="block-options mr-15">
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                        </div>
                    </li>
                </ul>
                <!-- END of block nav tabs -->              

                <!-- Block content -->
                <div class="block-content tab-content overflow-hidden">
                    <!-- View employees tab -->
                    <div class="tab-pane fade show active" id="btabs-view-employees" role="tabpanel">
                        <table class="table table-hover table-striped table-vcenter js-dataTable-employee">
                            <thead>
                                <tr>
                                    <th class="text-center" width="20">#</th>
                                    <th class="text-center d-none d-sm-table-cell">Name</th>
                                    <th class="text-center d-none d-sm-table-cell">Email</th>
                                    <th class="text-center d-none d-sm-table-cell" width="170">Department</th>
                                    <th style="width: 10px;">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th class="text-center" scope="row">1</th>
                                    <td class="text-center">Carol Ray</td>
                                    <td class="text-center">Carol@Ray.com</td>
                                    <td class="text-center">Sales</td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Edit">
                                                <i class="fa fa-pencil"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Delete">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- END of view employees tab -->

                    <!-- Add employees tab -->
                    <div class="tab-pane fade show" id="btabs-add-employee" role="tabpanel">
                        <div class="block block-themed">
                            <div class="block-header bg-corporate">
                                <h3 class="block-title">Employee Details</h3>
                            </div>
                        </div>

                        <!-- Content: Form -->
                        <div class="block-content block-content-full">
                            <form class="js-add-emp-validation" action="<?= base_url('admin/add_employee'); ?>" method="post">
                                <!-- Row 1 -->
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <div class="form-material floating">
                                            <input type="text" class="form-control" name="fname" id="fname" autofocus >
                                            <label>First Name</label>
                                        </div>
                                    </div>

                                    <div class=" form-group col-md-6">
                                        <div class="form-material floating">
                                            <input type="text" class="form-control" name="lname" >
                                            <label>Last Name</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Row 2 -->
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <div class="form-material floating">
                                            <input type="text" class="form-control" name="email" >
                                            <label>Email</label>
                                            <!-- Hidden helper field -->
                                            <input type="hidden" id="check_email_url" name="check_email_url" value="<?= base_url('admin/check_email')?>">
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <div class="form-material floating">
                                                <select class="form-control" name="department">
                                                    <option></option><!-- Empty value for demostrating material select box -->
                                                    <option value="1">Sales</option>
                                                    <option value="2">Accounts</option>
                                                    <option value="3">Inventory</option>
                                                </select>
                                                <label>Choose department</label>
                                            </div>
                                    </div>
                                </div>

                                <div class="form-group flex-row">
                                        <button type="submit" class="btn btn-alt-success">Submit Details</button>
                                        <button type="reset" class="btn btn-alt-warning">Clear</button>
                                </div>

                            </form>
                        </div>
                        <!-- END of Content: form -->
                    </div>
                    <!-- END add employees tab -->                    
                </div>
                <!-- END of content -->
            </div>
        </div>
        <!-- END of page content -->