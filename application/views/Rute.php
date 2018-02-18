<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/adminLTE/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/adminLTE/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/adminLTE/dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/adminLTE/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/adminLTE/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/adminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/adminLTE/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/adminLTE/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/adminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url()?>assets/adminLTE/index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
         
          <li class="dropdown user user-menu">
            <a href="<?php echo base_url()?>assets/adminLTE/#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Palupi Pandanarum </span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Palupi Pandanarum - Web Developer
                  <small>Member since Jan. 2018</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="<?php echo base_url()?>assets/adminLTE/#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="<?php echo base_url()?>assets/adminLTE/#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="<?php echo base_url()?>assets/adminLTE/#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo base_url()?>assets/adminLTE/#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url()?>assets/adminLTE/#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="<?php echo base_url()?>assets/adminLTE/#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url()?>assets/adminLTE/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Palupi Pandanarum</p>
          <a href="<?php echo base_url()?>assets/adminLTE/#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="<?php echo site_url('admin');?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
          </li>
       
        <li class="treeview">
          <a href="<?php echo site_url('admin/User');?>">
            <i class="fa fa-dashboard"></i> <span>User</span>
          </a>
          </li>
          <li class="treeview">
          <a href="<?php echo site_url('admin/Customer');?>">
            <i class="fa fa-dashboard"></i> <span>Customer</span>
          </a>
          </li>
          <li class="treeview">
          <a href="<?php echo site_url('admin/Reservation');?>">
            <i class="fa fa-dashboard"></i> <span>Reservation</span>
          </a>
          </li>
          <li class="active treeview">
          <a href="<?php echo site_url('admin/Rute');?>">
            <i class="fa fa-th"></i>
              <span>Rute</span>
          </a>
          </li>
          </li>
          <li class="treeview">
          <a href="<?php echo site_url('admin/Transportation');?>">
            <i class="fa fa-th"></i>
              <span>Transportation</span>
          </a>
          </li>
       
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    
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
        <?php   echo anchor('admin/Reservation','Tambah User');?>
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
                  <th>Depart At</th>
                  <th>Rute From</th>
                  <th>Rute To</th>
                  <th>Transit To</th>
                  <th>Transit Arrived</th>
                  <th>Arrived</th>
                  <th>Price  </th>
                  <th>Transpotation Id  </th>
                </tr>
                </thead>
                <tbody>
                    <?php 
                      $no = 1;
                      foreach ($rute as $r){
                     ?>
                     <tr class="">
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $r->depart_at ?></td>
                        <td><?php echo $r->rute_from ?></td>
                        <td><?php echo $r->rute_to ?></td>
                        <td><?php echo $r->transit_to ?></td>
                        <td><?php echo $r->transit_arrived ?></td>
                        <td><?php echo $r->arrived ?></td>
                        <td><?php echo $r->price ?>  </td>
                        <td><?php echo $r->transpotation_id ?>  </td>
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