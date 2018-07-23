<?php

include('../koneksi.php');

if(isset($_POST['simpan'])){

$namakeg = $_POST['nama'];
$pertemuan = $_POST['ke'];
$deskripsi = $_POST['deskripsi'];
$level = $_POST['level'];
$jeniskegiatan = $_POST['jekeg'];
$bobot = $_POST['bobot'];
$tglmulai = $_POST['tglmulai'];
$tglselesai = $_POST['tglakhir'];
$satker =implode(",", $_POST['satker']);
$negara = $_POST['negara'];
$kota = $_POST['kota'];
$kompetensi = $_POST['kompetensi'];

$attach = addslashes($_FILES['attach']['tmp_name']);

$biaya = $_POST['biaya'];
$deadline= $_POST['deadline'];
$jmldelegasi= $_POST['jmldelegasi'];

$id = $_GET['id'];

 $simpan = "UPDATE kegiatan SET id='$id', namakegiatan = '$namakeg', pertemuanke = '$pertemuan', deskripsi='$deskripsi', level='$level', jeniskegiatan='$jeniskegiatan', bobot='$bobot', tglmulai='$tglmulai', tglselesai='$tglselesai',
   satker='$satker', negara='$negara', kota='$kota', kompetensi='$kompetensi', attachment='$attach', biaya='$biaya', deadline='$deadline', jmldelegasi='$jmldelegasi' where id='$id'";


mysqli_query($config, $simpan);
echo '
<script language="javascript">
alert("Kegiatan Berhasil Diupdate");
  document.location ="../adminpuski/daftarkegiatan.php";
  </script>
';
}
?>
