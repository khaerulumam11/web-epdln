<?php

include('../koneksi.php');

if(isset($_POST['simpan'])){

$id = $_GET['id'];

$idperjadin= $_POST['id_perjadin'];
$jepes = $_POST['peserta'];
$idpegawai=$_POST['id_pegawai'];
$datapendukung = addslashes($_FILES['attach']['tmp_name']);
$estimasi = $_POST['estimasi'];
$komponen = $_POST['biaya'];
$waktuawal= $_POST['tglmulai'];
$waktuakhir = $_POST['tglakhir'];
$cekdelegasi = $_POST['cek'];
$paspor= $_POST['paspor'];
$pasporkeluar = $_POST['tgldibuat'];
$pasporkadaluarsa = $_POST['tglkadaluarsa'];

 $simpan = "INSERT INTO delegasi (id, id_perjadin, jenispeserta, id_pegawai, datapendukung, estimasi, komponenbiaya, waktuawal, waktuakhir, cekpaspor,
   nopaspor, tglkeluarpaspor, tglkadaluarsa) VALUES
 ('', '$idperjadin', '$jepes', '$idpegawai', '$datapendukung','$estimasi','$komponen','$waktuawal','$waktuakhir','$cekdelegasi',
 '$paspor','$pasporkeluar','$pasporkadaluarsa')";

 // $ambil = mysqli_query($config, "SELECT * from delegasi");
 // $row = mysqli_fetch_array($ambil);


mysqli_query($config, $simpan);
echo '
<script language="javascript">
alert("Delegasi Berhasil Ditambahkan");
  document.location ="../adminsatker/daftarperjadin.php";
  </script>
';
}
?>
