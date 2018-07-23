<?php
include('../koneksi.php');
//include('session.php');
// == fungsi delete ==
if (isset($_GET['id'])){ // ketika link delete di klik
  $id = $_GET['id'];
  mysqli_query($config, "DELETE FROM user WHERE id_user ='$id'");
  echo '
  <script language="javascript">
  alert("User Deleted");
  document.location ="../dashboard_adminsatker.php";
  </script>
  ';

}
?>
