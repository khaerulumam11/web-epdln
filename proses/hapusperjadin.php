<?php
include('../koneksi.php');
//include('session.php');
// == fungsi delete ==
if (isset($_GET['id'])){ // ketika link delete di klik
  $id = $_GET['id'];
  mysqli_query($config, "DELETE FROM perjadin WHERE id ='$id'");
  echo '
  <script language="javascript">
  
  </script>
  ';

}
?>
