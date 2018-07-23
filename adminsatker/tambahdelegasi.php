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
  <title>Tambah Delegasi</title>
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
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script
  <script src="../js/jquery.ui.datepicker-id.js"></script>

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

<script type="text/javascript">
	$(document).ready(function(){

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
          <a class="nav-link" href="dashboard_adminsatker.php">
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

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link" href="daftarperjadin.php">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Perjalanan Dinas</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="modal" data-target="#exampleModal" >
          <a class="nav-link"href="../logout/logout.php">
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
        <i class=""></i> <h3>Tambah Delegasi</h3>
        </div>
        <div class="card mb-3" id="tables" style="width:100%; margin-top:3%">
          <div class="card-header">
            <i class="table"></i> Formulir Registrasi Delegasi
        </div>

        <div style="margin-left:10%">
          <div class="card-body" >
            <?php
            $id = $_GET['id'];
            $results = mysqli_query($config, "SELECT perjadin.no_pengajuan as no,perjadin.id as id_perjadin ,kegiatan.id as id_kegiatan,kegiatan.namakegiatan, kegiatan.jeniskegiatan, kegiatan.jmldelegasi, kegiatan.satker, kegiatan.tglmulai, kegiatan.tglselesai,kegiatan.kompetensi from kegiatan join perjadin on perjadin.id_kegiatan = kegiatan.id where perjadin.id = '$id' ");
            $row = mysqli_fetch_array($results);
            ?>
            <div class="table-responsive">
              <form action="../proses/tambahdelegasi_process.php?id=<?php echo $row['id'];?>" method="post" enctype="multipart/form-data">
                <div class="form-group">

                        <!-- <input style="width:80%;height:40px" class="form-control" type="hidden" name="nama" placeholder="Nama Kegiatan" readonly></input> -->
                        <input style="width:100%;height:40px" class="form-control" type="text" name="id_perjadin" placeholder="Nama Kegiatan" value="<?php echo $row['id_perjadin'] ?>" ></input>
                  <b><label required>Nama Kegiatan</label></b>
                    <input style="width:80%;height:40px" class="form-control" type="text" name="nama" placeholder="Nama Kegiatan" readonly value="<?php echo $row['namakegiatan'] ?>"></input>

              </div>
                <div  class="form-group">

                  <b><label for="exampleInputPassword1">Jenis Peserta </label> </b>
                    <select style="width:80%;height:40px" class="form-control" name="peserta" id="jepeserta">
                      <option selected="" value="kosong">--Pilih Peserta--</option>
                      <option value="pns">PNS</option>
                      <option value="pnslain">PNS Instansi Lainnya</option>
                      <option value="nonpns">Non PNS</option>
                    </select>

            </div>
            <div>
            <div id="namapegawai" class="form-group">

              <b><label for="exampleInputPassword1">Nama Pegawai </label> </b>

                  <?php
                  $results = mysqli_query($config, "SELECT * from pegawai");
                  $jsArray = "var prdName = new Array();\n";
                  $jsArray2 = "var prdName1 = new Array();\n";
                  echo '<select style="width:80%;height:40px" class="form-control" name="namapeg" onchange="changeValue(this.value)">';
                  echo '<option disabled selected>--Pilih Bobot Pegawai--</option>';

                  while ($row = mysqli_fetch_array($results)){
                    echo '<option value="' . $row['nama_pegawai'] . '">' . $row['nama_pegawai'] . '</option>';
                    $jsArray .= "prdName['" . $row['nama_pegawai'] . "'] = {name:'" . addslashes($row['nama_pegawai']) . "',nik:'". addslashes($row['nik']) . "',nip:'" .addslashes($row['nip']). "',jabatan:'" .addslashes($row['jabatan']) . "'};\n";

                    $jsArray2 .= "prdName1['" . $row['nama_pegawai'] . "'] = {nohp:'" . addslashes($row['nohp']) . "',email:'". addslashes($row['email']) . "',instansi:'" .addslashes($row['instansi']). "',id:'".addslashes($row['id_pegawai'])."'};\n";
                  }
                  echo '</select>';
                   ?>
                </select>

        </div>
          <input style="width:100%;height:40px" class="form-control" type="text" id="idpegawai" name="id_pegawai" placeholder="Nama Kegiatan" ></input>
      </div>
            <div  class="form-group">

              <b><label for="exampleInputPassword1">NIK </label> </b>
              <input style="width:80%;height:40px" class="form-control" type="text" name="nik" placeholder="NIK" id="nik" ></textarea>

        </div>
        <div class="form-group">

          <b><label for="exampleInputPassword1">Nama Delegasi </label> </b>
            <input style="width:80%;height:40px" class="form-control" type="text" name="namadeleg" placeholder="Nama Delegasi" id="namadeleg" ></textarea>

      </div>
        <div class="form-group">

          <b><label for="exampleInputPassword1">NIP</label> </b>
          <input style="width:80%;height:40px" class="form-control" type="text" name="nip" placeholder="NIP" id="nip"></input>

    </div>
    <div class="form-group">

      <b><label for="exampleInputPassword1">Jabatan</label> </b>
      <input style="width:80%;height:40px" class="form-control" type="text" name="jabatan" placeholder="Jabatan" id="jabatan"></input>

    </div>
    <div class="form-group">

      <b><label for="exampleInputPassword1">Nomor HP</label> </b>
      <input style="width:80%;height:40px" class="form-control" type="phone" name="nohp" placeholder="Nomor HP" id="nohp"></input>

    </div>
    <div class="form-group">

      <b><label for="exampleInputPassword1">E-Mail</label> </b>
      <input style="width:80%;height:40px" class="form-control" type="email" name="email" placeholder="E-Mail" id="email"></input>

    </div>
    <div class="form-group">

      <b><label for="exampleInputPassword1">Instansi</label> </b>
      <input style="width:80%;height:40px" class="form-control" type="text" name="instansi" placeholder="Instansi" id="instansi"></input>

    </div>
    <div class="form-group">

                  <b><label for="exampleInputPassword1"> Data Pendukung Endorse </label> </b>
                        <input style="width:80%;height:40px" class="form-control" type="file" name="attach" accept="application/pdf" onchange="ValidateSize(this)"/>
                           <p>Maksimal ukuran file : 2 MB</p>

          </div>
          <div class="form-group">

            <b><label for="exampleInputPassword1">Estimasi Biaya (Rp)</label> </b>
            <input style="width:80%;height:40px" class="form-control money-input" type="text" name="estimasi" placeholder="Estimasi Biaya"></input>

          </div>
          <div class="form-group">

                        <b><label for="exampleInputPassword1">Komponen Biaya Delegasi </label> </b>
                              <select placeholeder="Satuan Kerja" style="width:80%;height:40px" class="form-control" name="biaya" id="" >
                                <option disabled selected>--Pilih Komponen Biaya Delegasi--</option>
                                <option>Tunggal</option>
                                <option>Campuran</option>
                                </select>

                </div>
    <div class="form-group">

                  <b><label for="exampleInputPassword1">Waktu Penugasan Awal </label> </b> </td>
                    <td>
                        <input style="width:80%;height:40px" style="width:80%;height:40px" class="form-control"  type="date" name="tglmulai"  placeholder=" Tanggal Mulai" />

          </div>
          <div class="form-group">

                        <b><label for="exampleInputPassword1">Waktu Penugasan Akhir </label> </b>
                              <input style="width:80%;height:40px" style="width:80%;height:40px" class="form-control"   type="date" name="tglakhir"   placeholder=" Tanggal Akhir"/>

                </div>
                <div class="form-group">

                              <b><label for="exampleInputPassword1">Apakah Delegasi ada Paspor </label> </b> <br>
                                    <input     type="radio" name="cek" value="ada" id="optionada">Ada</input> <br>
                                      <input   type="radio" name="cek" value="tidak" id="optiontidakada" checked=""es>Tidak Ada</input>
                                      </td>

                      </div>

                      <div class="form-group" id="paspor">

                                    <b><label for="exampleInputPassword1">Paspor </label> </b>
                                          <input style="width:80%;height:40px" style="width:80%;height:40px" class="form-control"   type="text" name="paspor" id="paspor"  placeholder=" Tanggal Akhir"/>

                            </div>
                            <div class="form-group" id="paspor_keluar">

                                          <b><label for="exampleInputPassword1">Tanggal dikeluarkan paspor </label> </b>
                                                <input style="width:80%;height:40px" style="width:80%;height:40px" class="form-control"   type="date" name="tgldibuat" id="paspor_keluar" placeholder=" Tanggal Akhir"/>

                                  </div>
                                  <div class="form-group" id="paspor_expired">

                                                <b><label for="exampleInputPassword1">Tanggal kadaluarsa paspor </label> </b>
                                                      <input style="width:80%;height:40px" style="width:80%;height:40px" class="form-control"   type="date" name="tglkaduluarsa"  id="paspor_expired" placeholder=" Tanggal Akhir"/>

                                        </div>

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
  });


  $(document).ready(function(){
       $("#jepeserta").change(function(){
        var val = $(this).val();
        if(val == "pns"){
          $("#namapegawai").show();
          // $("#nik").attr("readonly","true");
          // $("#namadeleg").attr("readonly","true");
          // $("#nip").attr("readonly","true");
          //   $("#nohp").attr("readonly","true");
          // $("#email").attr("readonly","true");
          // $("#instansi").attr("readonly","true");
        }
        else{
          $("#namapegawai").hide();
          $("#nik").removeAttr("readonly");
          $("#namadeleg").removeAttr("readonly");
          $("#nip").removeAttr("readonly");
          $("#jabatan").removeAttr("readonly");
          $("#nohp").removeAttr("readonly");
          $("#email").removeAttr("readonly");
          $("#instansi").removeAttr("readonly");
        }
        $("#nik").val("");
        $("#nama").val("");
        $("#nip").val("");
        $("#jabatan").val("");
        $("#nohp").val("");
        $("#email").val("");
        $("#instansi").val("");
        $("#paspor").val("");
        $("#paspor_keluar").val("");
        $("#paspor_expired").val("");
      });



    // $("#komponen_biaya_delegasi").change(function(){
    //   var jenis = $(this).val();
    //   if(jenis == "tunggal"){
    //     $("#komponen_biaya_turunan").show();
    //     $("#komponen_biaya_turunan_campuran").hide();
    //
    //   }else{
    //     $("#komponen_biaya_turunan").hide();
    //     $("#komponen_biaya_turunan_campuran").show();
    //   }
    // });
    //
    // $("#komponen_tunggal").change(function(){
    //   var values = $(this).val();
    //   if(values == "Lainnya"){
    //     $("#tunggal_lainnya").show();
    //   }else{
    //     $("#tunggal_lainnya").hide();
    //
    //   }
    // });
    //
    $("#optionada").change(function(){
      $("#paspor").show();
      $("#paspor_keluar").show();
      $("#paspor_expired").show();
    });

    $("#optiontidakada").change(function(){
      $("#paspor").hide();
      $("#paspor_keluar").hide();
      $("#paspor_expired").hide();
    });
  });
</script>
<script type="text/javascript">
<?php echo $jsArray; ?>
<?php echo $jsArray2; ?>
function changeValue(id){
document.getElementById('nik').value = prdName[id].nik;
document.getElementById('namadeleg').value = prdName[id].name;
document.getElementById('nip').value = prdName[id].nip;
document.getElementById('jabatan').value = prdName[id].jabatan;
document.getElementById('nohp').value = prdName1[id].nohp;
document.getElementById('email').value = prdName1[id].email;
document.getElementById('instansi').value = prdName1[id].instansi;
document.getElementById('idpegawai').value = prdName1[id].id;
};
</script>
  </div>
</body>
<?php } ?>
</html>
