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
                            <form action="" method="post">
                                <!-- Row 1 -->
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <div class="form-material floating">
                                            <input type="text" class="form-control" name="fname" autofocus required>
                                            <label>First Name</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-material floating">
                                            <input type="text" class="form-control" name="lname" required>
                                            <label>Last Name</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Row 2 -->
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <div class="form-material floating">
                                            <input type="text" class="form-control" name="email" required>
                                            <label>Email</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-material floating">
                                            <input type="text" class="js-datepicker form-control" name="dob" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="mm/dd/yy" data-date-end-date="0d" required>
                                            <label>Date of Birth</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Row 3 -->
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <div class="form-material floating">
                                            <select class="form-control" name="department">
                                                <option></option><!-- Empty value for demostrating material select box -->
                                                <option value="sales">Sales</option>
                                                <option value="accounts">Accounts</option>
                                                <option value="inventory">Inventory chek</option>
                                            </select>
                                            <label>Select department</label>
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