<?php
session_start();
if(!isset($_SESSION['username']) && !isset($_SESSION['password'])) { //melakukan pengecekkan SESSION username & password
  echo '
  <script language="javascript">
  alert("Login First");
  document.location ="../login/login.php";
  </script>
  ';
}
?>
