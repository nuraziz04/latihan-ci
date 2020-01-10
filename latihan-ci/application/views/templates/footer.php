<!-- BEGIN FOOTER -->
   <div id="footer">
       <?= date('Y') ?> &copy; Dwi Abadi Teknik
   </div>
   <!-- END FOOTER -->

  <!-- BEGIN JAVASCRIPTS -->
   <!-- Load javascripts at bottom, this will reduce page load time -->
   <script src="<?php echo base_url() ?>assets-backend/js/jquery-1.8.3.min.js"></script>
   <script src="<?php echo base_url() ?>assets-backend/js/jquery.nicescroll.js" type="text/javascript"></script>
   <script src="<?php echo base_url() ?>assets-backend/assets/bootstrap/js/bootstrap.min.js"></script>
   <script src="<?php echo base_url() ?>assets-backend/js/jquery.blockui.js"></script>
   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="js/excanvas.js"></script>
   <script src="js/respond.js"></script>
   <![endif]-->
   <script type="text/javascript" src="<?php echo base_url() ?>assets-backend/assets/uniform/jquery.uniform.min.js"></script>
   <script type="text/javascript" src="<?php echo base_url() ?>assets-backend/assets/data-tables/jquery.dataTables.js"></script>
   <script type="text/javascript" src="<?php echo base_url() ?>assets-backend/assets/data-tables/DT_bootstrap.js"></script>


   <!--common script for all pages-->
   <script src="<?php echo base_url() ?>assets-backend/js/common-scripts.js"></script>

   <!--script for this page only-->
   <script src="<?php echo base_url() ?>assets-backend/js/dynamic-table.js"></script>

   <script src="<?php echo base_url() ?>assets-backend/form_validation.js"></script>

   <!-- END JAVASCRIPTS -->   

  <!-- END JAVASCRIPTS -->

   <!-- END JAVASCRIPTS -->  

  <script type="text/javascript">
    $('.form-check-input').on('click', function() {
      const roleId = $(this).data('role');
      const menuId = $(this).data('menu');

      $.ajax({
        url: "<?php echo base_url('backend/admin/changeAccess'); ?>",
        type: 'post',
        data: {
            roleId: roleId,
            menuId: menuId
        },
        success: function() {
            window.location.href = "<?php echo base_url('backend/admin/roleAccess/'); ?>" + roleId;
        }
      });
    });
  </script>

</body>
<!-- END BODY -->
</html>