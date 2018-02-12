<?php require_once 'v_header_admin.php' ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        General Form Elements
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="assets/adminLTE/#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="assets/adminLTE/#">Forms</a></li>
        <li class="active">General Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Forms</h3>
              <?php if ($user != 0) {
                $base = base_url();
                echo "<form class='form-sample' action='$base/index.php/crud/update' method='post'>";
                foreach ($user as $u) {
                  $id = $u->id;
                  $fullname = $u->fullname;
                  $username = $u->username;
                  $password = $u->password;
                  $level = $u->level;
                }
              } else {
                $base = base_url();
                echo "<form class='form-sample' action='$base/index.php/crud/add' method='post'>";
                  $id = null;
                  $fullname = null;
                  $username = null;
                  $password = null;
                  $level = null;
              }
               ?>
              
              
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="id">Id</label>
                  <input type="text" class="form-control" id="id" placeholder="id" name="id" value="<?php echo $id?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputFullname">Fullname</label>
                  <input type="text" class="form-control" id="exampleInputFullname" placeholder="Enter Fullname" name="fullname" value="<?php echo $fullname?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputUsername">Username</label>
                  <input type="text" class="form-control" id="exampleInputUsername" placeholder="Enter Username" name="username" value="<?php echo $username?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword" placeholder="Password" name="password" value="<?php echo $password?>">
                </div>
                 <div class="form-group">
                  <label for="exampleInputLevel">Level</label>
                  <input type="text" class="form-control" id="exampleInputLevel" placeholder="Level" name="level" value="<?php echo $level?>">
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
         </div>
        </div>
       </section>
        <!-- /.box -->

    </div>    

<?php require_once 'v_footer_admin.php' ?>