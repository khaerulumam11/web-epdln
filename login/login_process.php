<?php

include('../koneksi.php');

if(isset($_POST['submit'])){

$username = $_POST['user'];
$password = $_POST['pass'];

  $query = mysqli_query($config,"SELECT * FROM user WHERE username='$username' AND password='$password'");
  $row = mysqli_fetch_array($query);



  if ($username == $row['username'] && $password == $row['password']){
    if ($row['role'] == "Admin Puski") {
      echo '
      <script language="javascript">
      document.location ="../adminpuski/dashboard_adminpuski.php";
      </script>
      ';

      session_start();
      $_SESSION['username'] = $username;
      $_SESSION['password'] = $password;
      $_SESSION['id'] = $row['id'];
      $_SESSION['role'] = $row['role'];
      $_SESSION['nama_pengguna'] = $row['nama_pengguna'];
    } else if ($row['role'] == "Admin Satker") {
      echo '
      <script language="javascript">
      document.location ="../adminsatker/dashboard_adminsatker.php";
      </script>
      ';

      session_start();
      $_SESSION['username'] = $username;
      $_SESSION['password'] = $password;
      $_SESSION['id'] = $row['id'];
      $_SESSION['role'] = $row['role'];
      $_SESSION['nama_pengguna'] = $row['nama_pengguna'];
    }

    else{
    # code...
    // echo '
    // <script language="javascript">
    // document.location ="../dashboard_adminsatker.php";
    // </script>
    // ';

    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    $_SESSION['id'] = $row['id'];
    $_SESSION['role'] = $row['role'];
    $_SESSION['nama_pengguna'] = $row['nama_pengguna'];
    echo '
     <script language="javascript">
    document.location ="../index.php";
    </script>
    ';
    }
  }else{
    session_destroy();
    echo '
    <script language="javascript">
    alert("Failed to login!");
    document.location ="login.php";
    </script>
    ';
  }

}
?>
