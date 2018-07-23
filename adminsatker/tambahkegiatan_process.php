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


 $simpan = "INSERT INTO kegiatan (id, namakegiatan, pertemuanke, deskripsi, level, jeniskegiatan, bobot, tglmulai, tglselesai,
   satker, negara, kota, kompetensi, attachment, biaya, deadline, jmldelegasi) VALUES
 ('', '$namakeg', '$pertemuan', '$deskripsi', '$level','$jeniskegiatan','$bobot','$tglmulai','$tglselesai','$satker',
 '$negara','$kota','$kompetensi','$attach','$biaya','$deadline','$jmldelegasi')";


mysqli_query($config, $simpan);
echo '
<script language="javascript">
alert("Kegiatan Berhasil Ditambahkan");
  document.location ="../adminpuski/daftarkegiatan.php";
  </script>
';
}
?>
