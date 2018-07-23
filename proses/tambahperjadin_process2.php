<?php

include('../koneksi.php');

if(isset($_POST['simpan'])){

$id = $_POST['id'];
$nopengajuan= $_POST['no_pengajuan'];
$status = "PengajuanBaru";

 $simpan = "INSERT INTO perjadin (id, no_pengajuan, status_perjadin,id_kegiatan) VALUES
 ('', '$nopengajuan', '$status','$id')";


mysqli_query($config, $simpan);
echo '
<script language="javascript">
alert("Perjadin Berhasil Ditambahkan");
  document.location ="../adminsatker/dashboard_adminsatker.php";
  </script>
';
}
?>
