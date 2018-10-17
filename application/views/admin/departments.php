<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

    <!-- Main Conent container -->
    <main id="main-container">
        <!-- Page content -->
        <div class="content">
            
            <div class="block col-6 p-0">
                <div class=" block-header block-header-default">
                    <h3 class="block-title text-primary">Departments</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option add-dept" data-toggle="modal" data-target="#modalDept">
                            <i class="si si-plus"></i> Add department
                        </button>
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" id="refresh-dept-list">
                            <i class="si si-refresh"></i>
                        </button>
                    </div>

                </div>

                <div class="block-content">
                    <ul class="list-group list-group-flush pb-1 dept-list" data-fetch-url="<?= base_url('admin/view_departments');?>">
                        <!-- Where the departments are displayed -->
                    </ul>
                </div>
            </div>

        </div>
        <!-- End of page content -->

            <!--Modal for department details (Add,edit)  -->
            <div class="modal fade mt-10" id="modalDept" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-dialog-top" role="document">
                    <div class="modal-content">
                        <div class="block block-themed block-transparent mb-0">
                            <div class="block-header bg-primary">
                                <h3 class="block-title">Add new department</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                        <i class="si si-close"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="block-content">
                                <form data-add-action="<?= base_url('admin/add_department');?>" data-edit-action="<?= base_url('admin/edit_department');?>" class="" method="post">
                                    <div class="form-group">
                                        <div class="form-material">
                                            <label>Department Name</label>
                                            <input type="text" class="form-control" name="dept_name" id="dept_name" autofocus required>
                                        </div>
                                    </div>
                                    <input type="hidden" name="dept_id" value="">
                                    <input type="hidden" name="check_dept_name" value="<?= base_url('admin/check_dept_name');?>">
                                    <input type="hidden" name="check_dept_name_edit" value="<?= base_url('admin/check_dept_name_edit');?>">
                                
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-alt-success">
                                <i class="fa fa-check"></i> Add department
                            </button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>