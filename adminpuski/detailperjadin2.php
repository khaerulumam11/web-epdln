<?php
include('../koneksi.php');
session_start();
if (empty($_SESSION['username'])) {
echo '
  <script language="javascript">
  alert("Login Terlebih Dahulu");
  document.location ="../login/login.php";
  </script>
  ';
} elseif ($_SESSION['role'] == "Admin Puski") {
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Aplikasi e-RASIONAL</title>
  <!-- Bootstrap core CSS-->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="../css/sb-admin.css" rel="stylesheet">
</head>
<style>
  tr th{
    text-align: center;
  }
</style>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">

    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <center>
          <a class="nav-link" href="dashboard_adminpuski.php">
            <img src="https://pdln.dev.kominfo.go.id/logo.png" alt="logo" width='100px'><br>
              <h4 style="color: #eff5f9 !important">Aplikasi e-RASIONAL</h4>
          </a>
        </center>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="dashboard_adminpuski.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="daftarkegiatan.php">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Kegiatan</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Daftar Pengguna">
          <a class="nav-link" href="daftarpengguna.php">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Daftar Pengguna</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link" href="detailperjadin.php">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Detail Perjadin</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link" href="../logout.php">
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
        <!-- <li class="nav-item dropdown">
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
        </li> -->
        <li class="nav-item">
          <a class="nav-link" >
            <i class="fa fa-user"> </i>
            <?php
              echo $_SESSION['nama_pengguna'];
            ?>
          </a>
          </li>
          <li class="nav-item">
        <a class="nav-link" href="../logout.php">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <div>
        <h3>Detail Perjalanan Dinas</h3>
      </div>
      <!-- Example DataTables Card-->
      <div class="card mb-3" id="tables">
        <div class="card-header" >
          <i class="fa fa-table"></i> Detail Perjalanan Dinas
        </div>
          <?php
          $id = $_GET['id'];
          $results = mysqli_query($config, "SELECT perjadin.no_pengajuan as no,perjadin.id ,kegiatan.id as id_kegiatan,kegiatan.namakegiatan, kegiatan.jeniskegiatan, kegiatan.jmldelegasi, kegiatan.satker, kegiatan.tglmulai, kegiatan.tglselesai,kegiatan.kompetensi from kegiatan join perjadin on perjadin.id_kegiatan = kegiatan.id  where perjadin.id = '$id' ");
          $row = mysqli_fetch_array($results);
          ?>
        <div class="">
          <div class="">
            <table class="table" width="100%;" style="margin-top:20px;margin-left:20px" cellspacing="0">
            <tr>
            <td style="width:25%"><b>Nama Kegiatan</b></td>
              <td style="width:1%">:</td>
              <td><?php echo $row['namakegiatan'] ?></td>
            </tr>
            <tr>
            <td style="width:15%"><b>Jenis Pertemuan</b></td>
              <td style="width:1%">:</td>
              <td><?php echo $row['jeniskegiatan'] ?></td>
            </tr>
            <tr>
            <td style="width:15%"><b>Tanggal Kegiatan Mulai</b></td>
              <td style="width:1%">:</td>
              <td><?php echo $row['tglmulai'] ?></td>
            </tr>
            <tr>
            <td style="width:15%"><b>Tanggal Kegiatan Selesai</b></td>
              <td style="width:1%">:</td>
              <td><?php echo $row['tglselesai'] ?></td>
            </tr>
            <tr>
            <td style="width:15%"><b>Kompetensi Calon Delegasi</b></td>
              <td style="width:1%">:</td>
              <td><?php echo $row['kompetensi'] ?></td>
            </tr>
            <tr>
            <td style="width:15%"><b>Satuan Kerja</b></td>
              <td style="width:1%">:</td>
              <td><?php echo $row['satker'] ?></td>
            </tr>
            <tr>
            <td style="width:15%"><b>Nomor Pengajuan</b></td>
              <td style="width:1%">:</td>
              <td><?php echo $row['no'] ?></td>
            </tr>
            <tr>
            <td style="width:15%"><b>Maksimal Delegasi</b></td>
              <td style="width:1%">:</td>
              <td><?php echo $row['jmldelegasi'] ?> orang</td>
            </tr>
            </table>
          </div>
        </div>
      </div>
      <div class="card mb-3" id="tables" style="margin-top:30px">
        <div class="card-header" >
          <i class="fa fa-table"></i> Daftar Delegasi
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Nama Delegasi</th>
                  <th>NIP</th>
                  <th>NIK</th>
                  <th>Jabatan</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
              $id = $_GET['id'];
            $results = mysqli_query($config, "SELECT perjadin.id as id , delegasi.id as id_delegasi, pegawai.id_pegawai, pegawai.nama_pegawai, pegawai.nik, pegawai.nip, pegawai.jabatan from perjadin  join delegasi on perjadin.id = delegasi.id_perjadin join pegawai on delegasi.id_pegawai = pegawai.id_pegawai where perjadin.id = '$id' ");
          //  $results = mysqli_query($config, "SELECT * from kegiatan");
                while ($row = mysqli_fetch_array($results)){
                ?>
                <tr>
                  <td><?php echo $row['nama_pegawai'] ?></td>
                  <td><?php echo $row['nip'] ?></td>
                  <td><?php echo $row['nik'] ?></td>
                  <td><?php echo $row['jabatan'] ?></td>
                  <td style="width:10%"> <center><a href="detaildelegasi.php?id=<?php echo $row['id'];?>">  <button style="width:120px;height:40px; border:0px; background:#448aff; margin-bottom:10px; padding: 3px "><label style="font-size:13px;color:white">Detail Delegasi</label> </button></a>
                  </td>
              </tr>
              <?php } ?>

              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>

    <?php
    $id = $_GET['id'];
    $results = mysqli_query($config, "SELECT perjadin.no_pengajuan as no,perjadin.id, perjadin.status_perjadin ,kegiatan.id as id_kegiatan,kegiatan.namakegiatan, kegiatan.jeniskegiatan, kegiatan.jmldelegasi, kegiatan.satker, kegiatan.tglmulai, kegiatan.tglselesai,kegiatan.kompetensi from kegiatan join perjadin on perjadin.id_kegiatan = kegiatan.id  where perjadin.id = '$id' ");
    $row = mysqli_fetch_array($results);
    ?>

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
            <a class="btn btn-primary" href="../logout.php">Logout</a>
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
  </div>
</body>
<?php
}
else{
  echo '
    <script language="javascript">
    alert("Salah Masuk Kamar Boy!!");
    document.location ="../adminsatker/dashboard_adminsatker.php";
    </script>
    ';
}
 ?>
</html>
