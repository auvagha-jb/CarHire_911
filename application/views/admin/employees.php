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
                    <li class="nav-item d-none">
                        <a href="#btabs-edit-employee" class="nav-link">
                            Edit Employee
                        </a>
                    </li>
                    <!-- Options -->
                    <li class="nav-item ml-auto">
                        <div class="block-options mr-15">
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" id="refresh-emp-table">
                                <i class="si si-refresh"></i>
                            </button>
                        </div>
                    </li>
                </ul>
                <!-- END of block nav tabs -->              

                <!-- Block content -->
                <div class="block-content tab-content overflow-hidden">
                    <!-- View employees tab -->
                    <div class="tab-pane fade show active table-responsive" id="btabs-view-employees" role="tabpanel">
                        <table class="w-100 table table-hover table-striped js-dataTable-employee" data-source="<?= base_url('admin/get_employees'); ?>" data-suspend-target="<?= base_url('admin/suspend_employee'); ?>" data-unsuspend-target="<?= base_url('admin/unsuspend_employee'); ?>">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Department</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                            </tbody>
                        </table>
                    </div>
                    <!-- END of view employees tab -->

                    <!-- Add employees tab -->
                    <div class="tab-pane fade show" id="btabs-add-employee" role="tabpanel">
                        <div class="block block-themed">
                            <div class="block-header bg-primary">
                                <h3 class="block-title">Enter employee details</h3>
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
                                                <select class="form-control" name="department" data-source="<?= base_url('admin/fetch_departments'); ?>">
                                                    <option></option><!-- Empty value for demostrating material select box -->
                                                    
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

                    <!-- Edit employees tab -->
                    <div class="tab-pane fade show" id="btabs-edit-employee" role="tabpanel">
                        <div class="block block-themed">
                            <div class="block-header bg-corporate">
                                <h3 class="block-title">Edit employee details</h3>
                            </div>
                        </div>

                        <!-- Content: Form -->
                        <div class="block-content block-content-full">
                            <form class="js-edit-emp-validation" action="<?= base_url('admin/edit_employee'); ?>" method="post" data-source="<?= base_url('admin/get_single_employee');?>">
                                <!-- Hidden field for employee id -->
                                <input type="hidden" name="emp_id">

                                <!-- Row 1 -->
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <div class="form-material">
                                            <label>First Name</label>
                                            <input type="text" class="form-control" name="fname">
                                        </div>
                                    </div>

                                    <div class=" form-group col-md-6">
                                        <div class="form-material">
                                            <label>Last Name</label>
                                            <input type="text" class="form-control" name="lname" >
                                        </div>
                                    </div>
                                </div>

                                <!-- Row 2 -->
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <div class="form-material">
                                            <label>Email</label>
                                            <input type="text" class="form-control" name="email" >
                                            <!-- Hidden helper field -->
                                            <input type="hidden" id="check_edit_email_url" name="check_email_url" value="<?= base_url('admin/check_edit_email')?>">
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <div class="form-material">
                                                <label>Department</label>
                                                <select class="form-control" name="department" data-source="<?= base_url('admin/fetch_departments'); ?>">
                                                    <option></option><!-- Empty value for demostrating material select box -->
                                                    
                                                </select>
                                            </div>
                                    </div>
                                </div>

                                <div class="form-group flex-row">
                                        <button type="submit" class="btn btn-alt-success">Save Changes</button>
                                        <button type="cancel" class="btn btn-alt-warning">Cancel</button>
                                </div>

                            </form>
                        </div>
                        <!-- END of Content: form -->
                    </div>
                    <!-- END edit employees tab -->                    
                </div>
                <!-- END of content -->
            </div>
        </div>
        <!-- END of page content -->

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
