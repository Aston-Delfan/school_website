<!DOCTYPE html>
<html lang="en">

<!-- Header -->
<?php
session_start();
if(!$_SESSION['nama']){
  header('Location: ../');
}
include('header.php');
include('../conf/config.php');
?>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <?php include('preloader.php');?>

  <!-- Navbar -->
  <?php include('navbar.php');?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <?php include('logo.php');?>

    <!-- Sidebar -->
    <?php include('sidebar.php'); ?>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php include('content_header.php');?>
    <!-- /.content-header -->

    <!-- Main content -->
    <?php 
    if(isset($_GET['page'])){
      if($_GET['page'] == 'dashboard'){
        include('dashboard.php');
      }
      else if($_GET['page'] == 'data_siswa'){
        include('data_siswa.php'); 
      }
      else if($_GET['page'] == 'data_guru'){
        include('data_guru.php'); 
      }
      else if($_GET['page'] == 'data_jurusan'){
        include('data_jurusan.php'); 
      }
      else if($_GET['page'] == 'edit_data'){
        include('edit/edit_data.php'); 
      }
      else if($_GET['page'] == 'edit_data_jur'){
        include('edit/edit_data_jur.php'); 
      }
      else if($_GET['page'] == 'edit_data_guru'){
        include('edit/edit_data_guru.php'); 
      }
      else{
        include('not_found.php');   
      }
    }
    else{
      include('dashboard.php');   
    }
    ?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include('footer.php');?>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

</body>
</html>
