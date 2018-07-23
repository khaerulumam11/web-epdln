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
  <!-- Custom styles for this template-->
  <link href="../css/sb-admin.css" rel="stylesheet">
  <link href="../css/select2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   <link href="https://pdln.dev.kominfo.go.id/bower_components/select2/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://pdln.dev.kominfo.go.id/bower_components/EasyAutocomplete/dist/jquery.easy-autocomplete.min.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker(
      { dateFormat: 'DD, d MM yy', locale:'id'}
    ).val();
  } );
  $( function() {
    $( "#datepicker1" ).datepicker(
    { dateFormat: 'DD, d MM yy', locale:'id'}
  ).val();
  } );
  $( function() {
    $( "#deadline" ).datepicker(
    { dateFormat: 'DD, d MM yy', locale:'id'}
  ).val();
  } );
  </script>
  <script src="https://pdln.dev.kominfo.go.id/bower_components/select2/dist/js/select2.min.js"></script>
  <script>
$(function()
{
  $(".select2").select2(
    {
  maximumSelectionLength: 2
});
});
</script>
<script type="text/javascript">


  function ValidateSize(file) {
      var FileSize = file.files[0].size / 1024 / 1024; // in MB
      if (FileSize > 2) {
        alert('File size exceeds 2 MB');
        $(file).val('');
      }
    }
</script>

</head>
<style>
  tr th{
    text-align: center;
  }
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
        <li class="nav-item">
          <a class="nav-link" href="../logout/logout.php">
            <i class="fa fa-fw fa-file" ></i>
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
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal" >
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->

      <div class="card-header" >
        <i class="fa fa-table"></i> Tambah Kegiatan
        </div>
        <div class="card mb-3" id="tables" style="width:100%; margin-top:3%">
          <div class="card-header">
            <i class="table"></i> Formulir Kegiatan
        </div>
          <div class="card-body">
            <div class="table-responsive">
              <?php
                $id = $_GET['id'];
              ?>
              <form action="../proses/updatekegiatan_process.php?id=<?php echo $id?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <table style="width:90%; margin-left:10% ;">
                    <?php

                    $hasil = mysqli_query($config, "SELECT * from kegiatan where id = $id");
                    $row = mysqli_fetch_array($hasil)
                    ?>
                    <tr>
                      <td style="padding:10px">
                  <b><label required>Nama Kegiatan</label></b></td>
                  <td style="height:100%">
                    <input style="width:80%;height:40px" class="form-control" type="text" name="nama" placeholder="Nama Kegiatan" value="<?php echo $row['namakegiatan'] ?>"></input>
                </td>
              </tr>
              </div>
                <div class="form-group">
                  <tr style="">
                    <td style="padding:10px; width:20%">
                  <b><label for="exampleInputPassword1">Pertemuan ke- </label> </b> </td>
                  <td>
                  <input style="width:80%;height:40px" class="form-control" type="text" name="ke" placeholder="Pertemuan Ke"  value="<?php echo $row['pertemuanke'] ?>"></input>
                 </td>
              </tr>
            </div>
            <div class="form-group">
              <tr >
                <td style="padding:10px">
              <b><label for="exampleInputPassword1">Deskripsi Kegiatan </label> </b> </td>
              <td>
              <textarea style="width:80%;height:60px" class="form-control" type="text" name="deskripsi" placeholder="Deskripsi Kegiatan"  value=""><?php echo $row['deskripsi'] ?></textarea>
             </td>
          </tr>
        </div>
        <div class="form-group">
          <tr >
            <td style="padding:10px">
          <b><label for="exampleInputPassword1">Level </label> </b> </td>
          <td>
            <select style="width:80%;height:40px" class="form-control" name="level">
              <option><?php echo $row['level'] ?></option>
              <option disabled>--Pilih Level--</option>
              <option>Menteri</option>
              <option>Eselon 1</option>
              <option>Eselon 2</option>
          </td>
      </tr>
      </div>
            <div class="form-group">
              <tr >
                <td style="padding:10px">
              <b><label for="exampleInputPassword1">Jenis Kegiatan</label></b> </td>
              <td>
                <select style="width:80%;height:40px" class="form-control" name="jekeg" onchange="document.getElementById(\'bobot\').value = prdName[this.value]">
                  <option><?php echo $row['jeniskegiatan'] ?></option
                  <?php
                  $results = mysqli_query($config, "SELECT * from jeniskegiatan");
                  $jsArray = "var prdName = new Array();\n";

                  //  echo '<select style="width:80%;height:40px" class="form-control" name="jekeg" onchange="document.getElementById(\'bobot\').value = prdName[this.value]">';
                    echo '<option disabled selected>--Pilih Bobot Prioritas--</option>';

                  while ($row = mysqli_fetch_array($results)){

                  echo '<option value="'. $row['nama'].'">'. $row['nama'] . '</option>';
                  $jsArray .= "prdName['" . $row['nama'] . "'] = '" . addslashes($row['bobot']) . "';\n";
                  } ?>
                </select>
             </td>
          </tr>
        </div>
        <div class="form-group">
          <tr >
            <td style="padding:10px">
          <b><label for="exampleInputPassword1">Bobot Prioritas</label> </b> </td>
          <td>
            <?php
            $id = $_GET['id'];
            $hasil = mysqli_query($config, "SELECT * from kegiatan where id = $id");
            $row = mysqli_fetch_array($hasil);
            ?>
          <input style="width:80%;height:40px" class="form-control" type="text" name="bobot" id="bobot" placeholder="Bobot Prioritas" value="<?php echo $row['bobot'] ?>" readonly></input>
          <script type="text/javascript">
          <?php echo $jsArray; ?>
          </script>
         </td>
      </tr>
    </div>
    <div class="form-group">
          <tr >
              <td style="padding:10px">
                  <b><label for="exampleInputPassword1">Tanggal Mulai </label> </b> </td>
                    <td>
                        <input style="width:80%;height:40px"  type="text" name="tglmulai" id="datepicker" placeholder=" Tanggal Mulai" value="<?php echo $row['tglmulai'] ?>"/>
                          </td>
                        </tr>
          </div>
          <div class="form-group">
                <tr >
                    <td style="padding:10px">
                        <b><label for="exampleInputPassword1">Tanggal Akhir </label> </b> </td>
                          <td>
                              <input style="width:80%;height:40px"  type="text" name="tglakhir" id="datepicker1" placeholder=" Tanggal Akhir" value="<?php echo $row['tglselesai'] ?>"/>
                                </td>
                              </tr>
                </div>
          <div class="form-group">
                <tr >
                    <td style="padding:10px">
                        <b><label for="exampleInputPassword1">Satuan Kerja </label> </b> </td>
                          <td>
                              <select placeholeder="Satuan Kerja" style="width:80%;height:40px" class="select2 form-control" name="satker[]" id="" multiple >
                                <option disabled>--Pilih Satuan Kerja--</option>
                                <?php

                                $results = mysqli_query($config, "SELECT * from satker");

                                while ($row = mysqli_fetch_array($results)){
                                  $satker = explode(',',$row['satker']);
                                ?>
                                <option><?php echo $satker ?></option>
                                  <?php } ?>
                                </select>
                                </td>
                              </tr>
                </div>
        <div class="form-group">
              <tr >
                  <td style="padding:10px">
                      <b><label for="exampleInputPassword1">Lokasi Kegiatan </label> </b> </td>
                        <td>
                            <select style="width:80%;height:40px" class="select2 form-control" name="negara" id="negara">
                              <?php
                              $id = $_GET['id'];
                              $hasil = mysqli_query($config, "SELECT * from kegiatan where id = $id");
                              $row = mysqli_fetch_array($hasil);
                              ?>
                              <option><?php echo $row['negara'] ?></option>
                                <option disabled>--Pilih Negara--</option>
                                <?php
                                $results = mysqli_query($config, "SELECT * from country");

                                while ($row = mysqli_fetch_array($results)){
                                ?>
                                <option><?php echo $row['nicename'] ?></option>
                                  <?php } ?>
                              </select>
                              </td>
                            </tr>
              </div>
              <div class="form-group">
                    <tr >
                        <td style="padding:10px">
                          </td>
                              <td>
                                <?php
                                $id = $_GET['id'];
                                $hasil = mysqli_query($config, "SELECT * from kegiatan where id = $id");
                                $row = mysqli_fetch_array($hasil);
                                ?>
                                <input style="width:80%;height:40px" class="form-control"  type="text" name="kota" placeholder="Nama Kota" value="<?php echo $row['kota'] ?>"/>

                                    </td>
                                  </tr>
                    </div>
                    <div class="form-group">
                          <tr >
                              <td style="padding:10px">
                                  <b><label for="exampleInputPassword1">Kompetensi </label> </b> </td>
                                    <td>
                                        <input style="width:80%;height:40px" class="form-control" type="text" name="kompetensi" id="datepicker1" placeholder="Kompetensi (Contoh : Hukum, Cybercrime, dll)" value="<?php echo $row['kompetensi'] ?>"/>
                                          </td>
                                        </tr>
                          </div>

                          <div class="form-group">
                                <tr >
                                    <td style="padding:10px">
                                        <b><label for="exampleInputPassword1">Attachment (Undangan Kegiatan) </label> </b> </td>
                                          <td>
                                              <input style="width:80%;height:40px" class="form-control" type="file" name="attach" accept="application/pdf" onchange="ValidateSize(this)"/>
                                                 <p>Maksimal ukuran file : 2 MB</p>
                                                </td>
                                              </tr>
                                </div>
                                <div class="form-group">
                                      <tr >
                                          <td style="padding:10px">
                                              <b><label for="exampleInputPassword1">Komponen Biaya</label> </b> </td>
                                                <td>
                                                  <select style="width:80%;height:40px" class="form-control" name="biaya">
                                                    <option><?php echo $row['biaya'] ?></option>
                                                    <option disabled>--Pilih Komponen Biaya--</option>
                                                    <option>APBN</option>
                                                    <option>Donor</option>
                                                    <option>Campuran</option>
                                                      </td>
                                                    </tr>
                                      </div>
                                      <div class="form-group">
                                            <tr >
                                                <td style="padding:10px">
                                                    <b><label for="exampleInputPassword1">Deadline </label> </b> </td>
                                                      <td>
                                                          <input style="width:80%;height:40px"  type="text" name="deadline" id="deadline" placeholder=" Deadline" value="<?php echo  $row['deadline'] ?>"/>
                                                            </td>
                                                          </tr>
                                            </div>
                                            <div class="form-group">
                                                  <tr >
                                                      <td style="padding:10px">
                                                          <b><label for="exampleInputPassword1">Jumlah Delegasi </label> </b> </td>
                                                            <td>
                                                                <input style="width:80%;height:40px" class="form-control" type="number" name="jmldelegasi" placeholder="Jumlah Delegasi (Minimal 1 orang)" value="<?php echo $row['jmldelegasi'] ?>"/>
                                                                  </td>
                                                                </tr>
                                                  </div>

              </table>
                </div>

                <!-- <div class="form-group">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox"> Remember Password</label>
                  </div>
                </div> -->
                <input type="submit" class="btn btn-primary btn-block" value="Simpan" name="simpan" style="width:20%; margin-left:70%">
              </form>
            </div>
          </div>

        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
      <!-- Example DataTables Card-->

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
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
    <script src="https://pdln.dev.kominfo.go.id/bower_components/select2/dist/js/select2.min.js"></script>
    <script type="text/javascript">
	$(document).ready(function(){
		$(".select2").select2();
		})

		$(".money-input").maskMoney({
			// prefix:'Rp.',
			allowNegative: true,
			thousands:'.',
			decimal:',',
			precision: 0,
			affixesStay: false
		});
	});
</script>
  </div>
</body>
<?php } ?>
</html>
