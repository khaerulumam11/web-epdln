<?php
include('../koneksi.php');
session_start();
if (empty($_SESSION['username'])) {
echo '
  <script language="javascript">
  alert("Login Terlebih Dahulu");
  document.location ="login/login.php";
  </script>
  ';
} else {
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>e-RASIONAL</title>
  <!-- Bootstrap core CSS-->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <!-- Custom styles for this template-->
  <link href="../css/sb-admin.css" rel="stylesheet">
</head>
<style>
  tr th{
    text-align: center;
  }

  .row.no-gutter [class*='col-'] {
  padding-right: 10px;
  padding-left: 10px; }

.row.gutter [class*='col-'] {
  padding-right: 15px;
  padding-left: 15px; }

.form-horizontal .form-group.no-gutter {
  padding-right: 10px;
  padding-left: 10px; }
</style>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">e-RASIONAL</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="dashboard_adminsatker.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="daftarkegiatan.php">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Daftar Kegiatan</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Daftar Pengguna">
          <a class="nav-link" href="daftarperjadin.php">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Perjalanan Dinas</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link" href="../logout/logout.php">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Logout</span>
          </a>
        </li>

      </ul>
      <ul class="navbar-nav ml-auto">
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-envelope"></i>
            <span class="d-lg-none">Messages
              <span class="badge badge-pill badge-primary">12 New</span>
            </span>
            <span class="indicator text-primary d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">New Messages:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>David Miller</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>Jane Smith</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>John Doe</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all messages</a>
          </div>
        </li> -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell"></i>
            <span class="d-lg-none">Alerts
              <span class="badge badge-pill badge-warning">6 New</span>
            </span>
            <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">New Alerts:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-danger">
                <strong>
                  <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all alerts</a>
          </div>
        </li>
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for...">
              <span class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" >
            <i class="fa fa-user"> </i>
            <?php
              echo $_SESSION['nama_pengguna'];
            ?>
          </a>
          </li>
          <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal" href="../logout/logout.php" >
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>

<div style="margin-left:5%">
      <div class="w3-container w3-cell" style="width:30%">
      <div class="card mb-3">
        <center>
        <div class="card-header" >
        <b>  <label style="font-size:60px"></label> Jumlah Kegiatan </b>
        </div>
        <div class="card-body">
          <?php
          $test = mysqli_query($config, "SELECT count(id) as total from kegiatan");

          $row = mysqli_fetch_array($test);

          if ($row['total'] == 0) {
            // code...
            echo '
            <p style="font-size:50px"> 0 <p>
            ';
          }
          else{
            echo '
              <p style="font-size:50px"> '.$row['total'].' <p>
            ';
          }

          ?>

            <p style="font-size:20px">Total Kegiatan<p>
        </div>
      </center>
      </div>
    </div>

    <div class="w3-container w3-cell" style="width:30%">
    <div class="card mb-3">
      <center>
      <div class="card-header" >
        <b><label style="font-size:60px"></label> Jumlah Perjalanan Dinas</b>
      </div>
      <div class="card-body">
        <?php
        $test = mysqli_query($config, "SELECT count(id) as total from perjadin");

        $row = mysqli_fetch_array($test);
        ?>
        <p style="font-size:50px"><?php echo $row['total'] ?><p>
          <p style="font-size:20px">Total Perjalanan Dinas<p>
      </div>
    </center>
    </div>
  </div>

  <div class="w3-container w3-cell" style="width:30%">
  <div class="card mb-3">
    <center>
    <div class="card-header" >
    <b>  <label style="font-size:60px"></label> Jumlah Delegasi </b>
    </div>
    <div class="card-body">
      <p style="font-size:50px">0<p>
        <p style="font-size:20px">Total Delegasi<p>
    </div>
  </center>
  </div>
</div>
</div>

      <div class="card mb-3" id="tables">
        <div class="card-header" >
          <i class="fa fa-table"></i> Daftar Kegiatan
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <th>Nama Kegiatan</th>
                <th>Satuan Kerja</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Selesai</th>
                <th>Bobot Prioritas</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php


          //    $results = mysqli_query($config, "SELECT perjadin.id as total ,kegiatan.id,namakegiatan,satker,tglmulai,tglselesai,bobot from kegiatan inner join perjadin on perjadin.id_kegiatan = kegiatan.id ");
          //  $results = mysqli_query($config, "SELECT * from kegiatan where id = (select count(id) as total from perjadin where id_kegiatan > 0)");
        $results = mysqli_query($config, "SELECT * from kegiatan");
              while ($row = mysqli_fetch_array($results)){
              ?>
              <tr>
                <td><?php echo $row['namakegiatan'] ?></td>
                <td><?php echo $row['satker'] ?></td>
                <td><?php echo $row['tglmulai'] ?></td>
                <td><?php echo $row['tglselesai'] ?></td>
                <td><?php echo $row['bobot'] ?></td>
              <td>
                <center>
                  <a href="tambahperjadin.php?id=<?php echo $row['id'];?>"><button style="width:100px;height:50px">Tambah Perjadin</button></a>
                  </td>
            </tr>
            <?php } ?>


              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
        </div>
    </div>
</div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="../logout/logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="../vendor/chart.js/Chart.min.js"></script>
    <script src="../vendor/datatables/jquery.dataTables.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="../js/sb-admin-datatables.min.js"></script>
    <script src="../js/sb-admin-charts.min.js"></script>

<!-- library jQuery -->
  </div>

</body>
<?php } ?>
</html>
