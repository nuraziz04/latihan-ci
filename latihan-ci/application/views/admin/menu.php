
   <!-- BEGIN CONTAINER -->
   <div id="container" class="row-fluid">
      <!-- BEGIN PAGE -->  
      <div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">
                     Menu Management
                   </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="#">Menu</a>
                           <span class="divider">/</span>
                       </li>
                       <li class="active">
                           Menu Management
                       </li>
                       
                   </ul>
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
                <!--BEGIN METRO STATES-->
               
                <!--END METRO STATES-->
            </div>
            <div class="page-wraper">
              <button class="btn btn-success"><i class="icon-plus icon-white"></i> Add Menu</button>
            </div>
            <br>
            <div id="page-wraper">
                <div class="row-fluid">
                    <div class="span8">
                        <!-- BEGIN BASIC PORTLET-->
                        <div class="widget orange">
                            <div class="widget-title">
                                <h4><i class="icon-reorder"></i> List Menu Management</h4>
                            <span class="tools">
                                <a href="javascript:;" class="icon-chevron-down"></a>
                                <a href="javascript:;" class="icon-remove"></a>
                            </span>
                            </div>
                            <div class="widget-body">
                                <table class="table table-striped table-bordered" id="sample_1">
                                    <thead>
                                    <tr>
                                        <th><i class=""></i>#</th>
                                        <th class="hidden-phone"><i class="icon-question-sign"></i> Menu</th>
                                        <th><i class=" icon-edit"></i>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($userMenu['data'] as $menu) : ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td class="hidden-phone"><?= $menu['id_menu'] ?></td>
                                        <td>
                                            <button class="btn btn-primary"><i class="icon-pencil"></i></button>
                                            <button class="btn btn-danger" onclick="return getId('<?= $menu['id'] ?>')" id="hapus-menu" data-toggle="modal" data-target="#logoutModal"><i class="icon-trash"></i></button>
                                        </td>
                                    </tr>
                                    <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- END BASIC PORTLET-->
                    </div>
                </div>

            </div>

            <!-- END PAGE CONTENT-->         
         </div>
         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->  
   </div>
   <!-- END CONTAINER -->


   <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Are you sure want to delete?</h5>
          <input type="hidden" id="id" name="id">
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button class="btn btn-danger" onclick="return deleteMenu()">Delete</button> 
        </div>
      </div>
    </div>
  </div>

<script type="text/javascript">

  function getId($id){
    var id = $id;
    $("#logoutModal").find("input[name='id']").val(id);
  }

  function deleteMenu(){
    $id = $("#logoutModal").find("input[name='id']").val();
    window.location.href = "<?= base_url('backend/menu/deletemenu/'); ?>"+$id;
  }

</script>