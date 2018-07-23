<?php

include('../koneksi.php');

if(isset($_POST['update'])){
if (isset($_GET['id'])){ // ketika link delete di klik
    $id = $_POST['id'];
    $passwordbaru = $_POST['password'];
    $role = $_POST['role'];
    $satker = $_POST['satker'];

    $simpan = "UPDATE user SET role ='$role', satuan_kerja ='$satker', password ='$passwordbaru' WHERE id_user == '$id'";

    mysqli_query($config, $simpan);
     echo '
     <script language="javascript">
       ";
       </script>
     ';

}
}

?>
