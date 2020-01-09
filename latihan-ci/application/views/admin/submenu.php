
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
                     Sub Menu Management
                   </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="#">Menu</a>
                           <span class="divider">/</span>
                       </li>
                       <li class="active">
                           Sub Menu Management
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
                        <?= $this->session->flashData('message') ?>
                        <!-- BEGIN BASIC PORTLET-->
                        <div class="widget orange">
                            <div class="widget-title">
                                <h4><i class="icon-reorder"></i> List Sub Menu Management</h4>
                            <span class="tools">
                                <a href="javascript:;" class="icon-chevron-down"></a>
                                <a href="javascript:;" class="icon-remove"></a>
                            </span>
                            </div>
                            <div class="widget-body">
                                <button class="btn btn-success" data-toggle="modal" data-target="#newSubMenuModal"><i class="icon-plus icon-white"></i> Add Sub Menu</button>
                                <br><br>
                                <table class="table table-striped table-bordered" id="sample_1">
                                    <thead>
                                    <tr>
                                        <th><i class=""></i>#</th>
                                        <th class="hidden-phone"><i class="icon-question-sign"></i> Title</th>
                                        <th class="hidden-phone"><i class="icon-question-sign"></i> Url</th>
                                        <th class="hidden-phone"><i class="icon-question-sign"></i> Icon</th>
                                        <th><i class=" icon-edit"></i> Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no = 1 ?>
                                    <?php foreach ($submenu['data'] as $sm) : ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td class="hidden-phone"><?= $sm['title'] ?></td>
                                        <td class="hidden-phone"><?= $sm['url'] ?></td>
                                        <td class="hidden-phone"><?= $sm['icon'] ?></td>
                                        <td>
                                            <button class="btn btn-primary" onclick="return editSubMenu('<?= $sm['id'] ?>')" id="edit-submenu" data-toggle="modal" data-target="#editSubMenuModal"><i class="icon-pencil"></i></button>
                                            <button class="btn btn-danger" onclick="return getId('<?= $sm['id'] ?>')" id="hapus-menu" data-toggle="modal" data-target="#deleteModal"><i class="icon-trash"></i></button>
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

<!-- new sub menu Modal -->
<div class="modal fade" id="newSubMenuModal" tabindex="-1" role="dialog" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="newSubMenuModalLabel">Add New Sub Menu</h5>
          </div>
          <form action="<?= base_url('backend/menu/postSubMenu') ?>" method="post">
              <div class="modal-body">
                    <div class="controls">
                      <div class="input-icon left">
                          <i class="icon-envelope"></i>
                          <input type="text" class="span5" id="title" name="title" placeholder="Submenu title" autofocus="autofocus">
                      </div>
                      <div class="alert alert-danger" id="titleRequired" role="alert" style="display:none; width: 90%">Title field is required.</div>
                    </div>
                    <div class="controls">
                      <div class="input-icon left">
                          <i class="icon-envelope"></i>
                          <select class="span5" name="menuId" id="menu" data-placeholder="Choose a Category" tabindex="1">
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Select Menu</option>
                            <?php foreach ($userMenu['data'] as $m) : ?>
                            <option value="<?= $m['id'] ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $m['id_menu'] ?></option>
                            <?php endforeach ?>
                          </select>
                      </div>
                      <div class="alert alert-danger" id="menuRequired" role="alert" style="display:none; width: 90%">Menu field is required.</div>
                    </div>
                    <div class="controls">
                      <div class="input-icon left">
                          <i class="icon-envelope"></i>
                          <input type="text" class="span5" id="url" name="url" placeholder="Submenu url">
                      </div>
                      <div class="alert alert-danger" id="urlRequired" role="alert" style="display:none; width: 90%">Url field is required.</div>
                    </div>
                    <div class="controls">
                      <div class="input-icon left">
                          <i class="icon-envelope"></i>
                          <input type="text" class="span5" id="icon" name="icon" placeholder="Submenu icon">
                      </div>
                      <div class="alert alert-danger" id="iconRequired" role="alert" style="display:none; width: 90%">Icon field is required.</div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" name="isActive" id="is_active" checked>
                            <label class="form-check-label" for="is_active">
                                Active?
                            </label>
                        </div>
                    </div>
                    
                    <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button id="btn" type="submit" class="btn btn-primary">Add</button>
                </div>
                </div>
          </form>
      </div>
  </div>
</div>

<!-- edit sub menu Modal -->
<div class="modal fade" id="editSubMenuModal" tabindex="-1" role="dialog" aria-labelledby="editSubMenuModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="editSubMenuModalLabel">Add New Sub Menu</h5>
          </div>
          <form action="<?= base_url('backend/menu/editSubMenu') ?>" method="post">
              <input type="hidden" name="id" id="id" value="">
              <div class="modal-body">
                    <div class="controls">
                      <div class="input-icon left">
                          <i class="icon-envelope"></i>
                          <input type="text" class="span5" id="title" name="title" placeholder="Submenu title" autofocus="autofocus">
                      </div>
                      <div class="alert alert-danger" id="titleRequired" role="alert" style="display:none; width: 90%">Title field is required.</div>
                    </div>
                    <div class="controls">
                      <div class="input-icon left">
                          <i class="icon-envelope"></i>
                          <select class="span5" name="menuId" id="menu" data-placeholder="Choose a Category" tabindex="1">
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Select Menu</option>
                            <?php foreach ($userMenu['data'] as $m) : ?>
                            <option value="<?= $m['id'] ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $m['id_menu'] ?></option>
                            <?php endforeach ?>
                          </select>
                      </div>
                      <div class="alert alert-danger" id="menuRequired" role="alert" style="display:none; width: 90%">Menu field is required.</div>
                    </div>
                    <div class="controls">
                      <div class="input-icon left">
                          <i class="icon-envelope"></i>
                          <input type="text" class="span5" id="url" name="url" placeholder="Submenu url">
                      </div>
                      <div class="alert alert-danger" id="urlRequired" role="alert" style="display:none; width: 90%">Url field is required.</div>
                    </div>
                    <div class="controls">
                      <div class="input-icon left">
                          <i class="icon-envelope"></i>
                          <input type="text" class="span5" id="icon" name="icon" placeholder="Submenu icon">
                      </div>
                      <div class="alert alert-danger" id="iconRequired" role="alert" style="display:none; width: 90%">Icon field is required.</div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" name="isActive" id="checkbox" checked>
                            <label class="form-check-label" for="is_active">
                                Active?
                            </label>
                        </div>
                    </div>
                    
                    <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button id="btn" type="submit" class="btn btn-primary">Edit</button>
                </div>
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
    window.location.href = "<?= base_url('backend/menu/deletesubmenu/'); ?>"+$id;
  }

  function editSubMenu($id){
    $.ajax({
        url: 'http://localhost/rest-server-dwiabaditeknik/api/submenu?id='+$id,
        contentType: "application/json",
        dataType: 'json',
        success: function(result){
          $("#editSubMenuModal").find("input[name='id']").val(result.data.id);
          $("#editSubMenuModal").find("input[name='title']").val(result.data.title);
          $("#editSubMenuModal").find("select[name='menuId']").val(result.data.menu_id);
          $("#editSubMenuModal").find("input[name='url']").val(result.data.url);
          $("#editSubMenuModal").find("input[name='icon']").val(result.data.icon);

          $isActive = result.data.is_active;
          if ($isActive === '1') {
            document.getElementById("checkbox").checked = true;
          } else {
            document.getElementById("checkbox").checked = false;
          }
        }
    });
  }

</script>
