
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
                     Role Access
                   </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="#">Home</a>
                           <span class="divider">/</span>
                       </li>
                       <li class="active">
                           Role Access
                           <span class="divider">/</span>
                       </li>
                       <li class="active">
                           <?= $roleAccess['data']['role'] ?>
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
                              
                                <h4><i class="icon-refresh"></i> Role : <?= $roleAccess['data']['role'] ?></h4>
                              
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
                                      <th class="hidden-phone"><i class="icon-question-sign"></i> </th>
                                      <th><i class=" icon-edit"></i>Action</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                  <?php $no = 1; ?>
                                  <?php foreach ($userMenu['data'] as $um) : ?>
                                  <?php if($um['id'] != '1'){ ?>
                                  <tr>
                                      <td><?= $no++ ?></td>
                                      <td class="hidden-phone"><?= $um['id_menu'] ?></td>
                                      <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" <?= check_access($roleAccess['data']['id'], $um['id']); ?> data-role="<?= $roleAccess['data']['id']; ?>" data-menu="<?= $um['id']; ?>">
                                        </div>  
                                      </td>
                                  </tr>
                                  <?php } ?>
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

   