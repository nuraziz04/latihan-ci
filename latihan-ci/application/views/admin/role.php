
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
                     Role
                   </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="#">Home</a>
                           <span class="divider">/</span>
                       </li>
                       <li class="active">
                           Role
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
                                <h4><i class="icon-refresh"></i> List Role</h4>
                            <span class="tools">
                                <a href="javascript:;" class="icon-chevron-down"></a>
                                <a href="javascript:;" class="icon-remove"></a>
                            </span>
                            </div>
                            <div class="widget-body">
                                <button class="btn btn-success" data-toggle="modal" data-target="#newMenuModal"><i class="icon-plus icon-white"></i> Add Role</button>
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
                                  <?php foreach ($role['data'] as $r) : ?>
                                  <tr>
                                      <td><?= $no++ ?></td>
                                      <td class="hidden-phone"><?= $r['role'] ?></td>
                                      <td>
                                          <a href="<?= base_url('backend/admin/roleAccess/') . $r['id'] ?>" class="btn btn-warning"><i class="icon-ban-circle" title="access"></i></a>
                                          <button class="btn btn-primary" onclick="return editUserMenu('<?= $r['id'] ?>')" id="edit-menu" data-toggle="modal" data-target="#editMenuModal"><i class="icon-pencil" title="edit"></i></button>
                                          <button class="btn btn-danger" onclick="return getId('<?= $r['id'] ?>')" id="hapus-menu" data-toggle="modal" data-target="#deleteModal"><i class="icon-trash" title="delete"></i></button>
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

   