    </main>
    <!-- END of Main container -->

    <!-- Codebase Core JS -->
    <script src="<?= base_url('assets/vendors/codebase/assets/js/core/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('assets/vendors/codebase/assets/js/core/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?= base_url('assets/vendors/codebase/assets/js/core/jquery.slimscroll.min.js'); ?>"></script>
    <script src="<?= base_url('assets/vendors/codebase/assets/js/core/jquery-scrollLock.min.js'); ?>"></script>
    <script src="<?= base_url('assets/vendors/codebase/assets/js/core/jquery.appear.min.js'); ?>"></script>
    <script src="<?= base_url('assets/vendors/codebase/assets/js/core/jquery.countTo.min.js'); ?>"></script>
    <script src="<?= base_url('assets/vendors/codebase/assets/js/core/js.cookie.min.js'); ?>"></script>
    <script src="<?= base_url('assets/vendors/codebase/assets/js/codebase.js'); ?>"></script>

    <!-- Datatables JS Plugins -->
    <script src="<?= base_url('assets/vendors/codebase/assets/js/plugins/datatables/jquery.dataTables.min.js');?>"></script>
    <script src="<?= base_url('assets/vendors/codebase/assets/js/plugins/datatables/dataTables.bootstrap4.min.js');?>"></script>

    <!-- Bootstrap datepicker -->
    <script src="<?= base_url('assets/vendors/codebase/assets/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js');?>"></script>

    <!-- Bootstrap notify -->
    <script src="<?= base_url('assets/vendors/codebase/assets/js/plugins/bootstrap-notify/bootstrap-notify.min.js');?>"></script>

    <!-- Sweetalert js -->
    <script src="<?= base_url('assets/vendors/codebase/assets/js/plugins/sweetalert2/sweetalert2.min.js');?>"></script>


    <!-- Form validation plugin -->
    <script src="<?= base_url('assets/vendors/codebase/assets/js/plugins/jquery-validation/jquery.validate.min.js');?>"></script>
    <script src="<?= base_url('assets/vendors/codebase/assets/js/plugins/jquery-validation/additional-methods.js');?>"></script>




    <!-- Local scripts -->
    <script src="<?= base_url('assets/js/core.js');?>"></script>
    <script src="<?= base_url('assets/js/admin.js');?>"></script>
    <script src="<?= base_url('assets/js/company.js');?>"></script>

    <?php if($this->session->flashdata('error')): ?>
        <script>
            $(document).ready(() =>{
                notify('fa fa-warning','warning',"<?= $this->session->flashdata('error') ?>");
            });
        </script>
    <?php endif;?>

    <?php if($this->session->flashdata('message')): ?>
        <script>
            $(document).ready(() =>{
                notify('fa fa-flag','success',"<?= $this->session->flashdata('message') ?>");
            });
        </script>
    <?php endif;?>

</body>
</html>