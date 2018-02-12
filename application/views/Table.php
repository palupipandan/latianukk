<?php require_once 'v_header_admin.php' ?>
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url()?>assets/adminLTE/Table"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data User
      </h1>

      <button type="button" class="btn btn-block btn-warning">
        <?php   echo anchor('admin/Form','Tambah User');?>
      </button>
      <br>
    </section>


<!-- /.row -->

        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">`  
                <thead>
                <tr>
                  <th>No</th>
                  <th>Fullname</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Level</th>
                </tr>
                </thead>
                <tbody>
                    <?php 
                      $no = 1;
                      foreach ($user as $u){
                     ?>
                     <tr class="">
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $u->username ?></td>
                        <td><?php echo $u->fullname ?></td>
                        <td><?php echo $u->password ?></td>
                        <td><?php echo $u->level ?></td>
                        <td>
                          <button type="button" class="btn btn-warning btn-sm">
                            <?php echo anchor('admin/edit_form/'.$u->id,'Manage');?></td>
                          </button>
                        </td>
                        <td>
                         <button type="button" class="btn btn-danger btn-sm">
                              <?php echo anchor('Crud/Delete/'.$u->id,'Remove');?>
                          </button>
                        </td>
                     </tr>
                     <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
    <!-- /.content -->
</div>
  </div>
  <!-- /.content-wrapper -->



 <?php require_once 'v_footer_admin.php' ?>