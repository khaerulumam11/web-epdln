<?php
include('../koneksi.php');
//include('session.php');
// == fungsi delete ==
if (isset($_GET['id'])){ // ketika link delete di klik
  $id = $_GET['id'];
  mysqli_query($config, "DELETE FROM delegasi WHERE id_perjadin ='$id'");
  echo '
  <script language="javascript">
  alert("Delegasi Terhapus");
  document.location ="../adminsatker/detailperjadin.php?id='.$id.'";
  </script>
  ';

}
?>
