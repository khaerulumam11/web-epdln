<?php
include('../koneksi.php');
// == fungsi logout ==
  session_start();
  session_destroy();
  echo '
  <script language="javascript">
  alert("Anda sudah logout");
  document.location ="../login/login.php";
  </script>
  ';
 ?>
