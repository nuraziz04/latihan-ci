
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
           
            <div id="page-wraper">
                <div class="row-fluid">
                    <div class="span8">
                        <?= form_error('idMenu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                        <?= $this->session->flashData('message') ?>
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
                                <button class="btn btn-success" data-toggle="modal" data-target="#newMenuModal"><i class="icon-plus icon-white"></i> Add Menu</button>
                                <br><br>
                                <table class="table table-striped table-bordered" id="sample_1">
                                    <thead>
                                    <tr>
                                        <th><i class=""></i>#</th>
                                        <th class="hidden-phone"><i class="icon-question-sign"></i> </th>
                                        <th><i class=" icon-edit"></i>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($userMenu['data'] as $um) : ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td class="hidden-phone"><?= $um['id_menu'] ?></td>
                                        <td>
                                            <button class="btn btn-primary" onclick="return editUserMenu('<?= $um['id'] ?>')" id="edit-menu" data-toggle="modal" data-target="#editMenuModal"><i class="icon-pencil"></i></button>
                                            <button class="btn btn-danger" onclick="return getId('<?= $um['id'] ?>')" id="hapus-menu" data-toggle="modal" data-target="#deleteModal"><i class="icon-trash"></i></button>
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


<!-- Delete Modal-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure want to delete?</h5>
        <input type="hidden" id="id" name="id">
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" type="button" data-dismiss="modal">Cancel</button>
        <button class="btn btn-danger" onclick="return deleteMenu()">Delete</button> 
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="newMenuModal" tabindex="-1" role="dialog" aria-labelledby="newMenuModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="newMenuModalLabel">Add New Menu</h5>
          </div>
          <form action="<?= base_url('backend/menu'); ?>" method="post">
              <div class="modal-body">
                  <div class="form-group">
                      <input type="text" class="form-control" id="idMenu" name="idMenu" placeholder="Menu name">
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Add</button>
              </div>
          </form>
      </div>
  </div>
</div>
<!-- edit -->
<div class="modal fade" id="editMenuModal" tabindex="-1" role="dialog" aria-labelledby="editMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editMenuModalLabel">Edit Menu</h5>
            </div>
            <form action="<?= base_url('backend/menu/editUserMenu'); ?>" method="post">
                <input type="hidden" name="id" id="id" value="">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="idMenu" name="idMenu">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
             
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">

  function getId($id){
    var id = $id;
    $("#deleteModal").find("input[name='id']").val(id);
  }

  function deleteMenu(){
    $id = $("#deleteModal").find("input[name='id']").val();
    window.location.href = "<?= base_url('backend/menu/deletemenu/'); ?>"+$id;
  }

  function editUserMenu($id){
    $.ajax({
        url: 'http://localhost/rest-server-dwiabaditeknik/api/menu?id='+$id,
        contentType: "application/json",
        dataType: 'json',
        success: function(result){
          $("#editMenuModal").find("input[name='id']").val(result.data.id);
          $("#editMenuModal").find("input[name='idMenu']").val(result.data.id_menu);
        }
    });
  }

</script>