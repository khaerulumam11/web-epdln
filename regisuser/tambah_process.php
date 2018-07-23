<?php

include('../koneksi.php');

if(isset($_POST['simpan'])){

$namapegawai = $_POST['namapeg'];
$role = $_POST['role'];
$satker = $_POST['satker'];

$chracter = '0123456789abcdefghijklmnopqrstuABCDEFGHIJKLMNOPQRSTUVWXYZ';
$karakter = strlen('$namapegawai');

$chracterlength = strlen($chracter);

$randomuser ="";
$randompass ="";

for ($j=0; $j < 1 ; $j++) {
  // code...

  for ($i=0; $i < 1 ; $i++) {
    // code...
    $randomuser .= $namapegawai;
  }
    for ($i=0; $i < 5 ; $i++) {
      // code...
      $randompass .= $chracter[rand(0, $chracterlength - 1)];
    }
}


 $simpan = "INSERT INTO user (id_user, username, password, nama_pengguna, role, satuan_kerja) VALUES
 ('', '$randomuser', '$randompass', '$namapegawai', '$role','$satker')";


mysqli_query($config, $simpan);
  echo '
  <script language="javascript">
    document.location ="tambah_pengguna.php";
    </script>
  ';
}
?>
