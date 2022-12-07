<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Q Store</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

   <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a href="" class="nav-link h4">Selamat datang Admin!</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <!-- Right navbar links -->
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <!-- Sidebar -->
    <div class="sidebar">
      <nav>
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item">
            <a href="index.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>

         
           <li class="nav-item">
            <a href="kategori.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Kategori
                
              </p>
            </a>
          </li>

           <li class="nav-item">
            <a href="artikel.php" class="nav-link active">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Artikel 
                
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="komentar.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Komentar 
                
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Logout
                
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h5 class="m-0 text-dark">Dashboard</h5>
          </div><!-- /.col -->
        </div><!-- /.row -->
        
      </div><!-- /.container-fluid -->
    </div>

 
    
    <!-- /.content-header -->


  <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row justify-content-center">
          <div class="col-12 col-sm-6 col-md-12">

           <div class="card">

           	 <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
                <a href="#" type="button" class="add_category btn btn-sm btn-primary" style="float: right;">Add</a>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="cat_table" class="table table-bordered table-striped">
                  <thead>
                  <tr class="text-center">
                    <th>ID</th>
                    <th>Image </th>
                    <th>Category Name</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Action</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                  <tr class="text-center">
                    <td>1</td>
                    <td><img src="https://asset.kompas.com/crops/2sHxYC4t6Bw0s1Lcr332l8VI7SE=/0x0:980x653/750x500/data/photo/2019/08/04/5d45c517eb3b5.jpg" width="50" height="50"></td>
                    <td>Bulutangkis</td>
                    <td>4 Pemain Badminton China Diskors 3 Bulan karena Tidak Bermain Maksimal</td>
                    <td>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod.</td>
                    <td>
                    	<a href="#" class=" btn btn-info btn-xs" > Edit</a>
                    	<a href="#" class="btn btn-danger btn-xs"> Delete</a>
                    </td>
                  </tr>
                  <tr class="text-center">
                    <td>2</td>
                    <td><img src="https://akcdn.detik.net.id/community/media/visual/2022/11/07/mohamed-salah-3.jpeg?w=700&q=90" width="50" height="50"></td>
                    <td>Sepakbola</td>
                    <td>Mohamed Salah Is Back!</td>
                    <td>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod.</td>
                    <td>
                    	<a href="#" class=" btn btn-info btn-xs" > Edit</a>
                    	<a href="#" class="btn btn-danger btn-xs"> Delete</a>
                    </td>
                  </tr>
                  <tr class="text-center">
                    <td>3</td>
                    <td><img src="https://www.ligaolahraga.com/storage/images/news/2022/11/04/galank-gunawan-tegaskan-siap-hadapi-bima-perkasa.jpg" width="50" height="50"></td>
                    <td>Basket</td>
                    <td>Galank Gunawan Tegaskan Siap Hadapi Bima Perkasa</td>
                    <td>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod.</td>
                    <td>
                    	<a href="#" class=" btn btn-info btn-xs" > Edit</a>
                    	<a href="#" class="btn btn-danger btn-xs"> Delete</a>
                    </td>
                  </tr>
                  <tr class="text-center">
                    <td>4</td>
                    <td><img src="https://asset-a.grid.id/crop/0x0:0x0/700x465/photo/2022/05/23/whatsapp-image-2022-05-23-at-08-20220523085703.jpeg" width="50" height="50"></td>
                    <td>Voli</td>
                    <td>SEA Games 2021 - 'Kelas Tim Voli Putra Indonesia Saat Ini Bukan Asia Tenggara Lagi</td>
                    <td>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod.</td>
                    <td>
                    	<a href="#" class=" btn btn-info btn-xs" > Edit</a>
                    	<a href="#" class="btn btn-danger btn-xs"> Delete</a>
                    </td>
                  </tr>
                  
                
                  </tbody>
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
         
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
  <!-- /.content -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>