<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Login | E-PDLN</title>
  <!-- Bootstrap core CSS-->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="../css/sb-admin.css" rel="stylesheet">
  <style>
  .input-container {
 /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}
.icon {
    padding: 10px;
    background: dodgerblue;
    color: white;
    min-width: 50px;
    text-align: center;
}
.input-field {
    width: 100%;
    padding: 5px;
    outline: none;
}

.input-field:focus {
    border: 2px solid dodgerblue;
}
  </style>
</head>

<body class="bg-info">
  <div class="container">
    <div class="card mx-auto" style="margin: 90px 0 0 0; width: 350px;padding:10px">
      <center><div><img src="../img/kominfo.jpg" style="width:100px; margin-top:20px"></div><center>
      <center><strong><div style="font-size:20px; margin-top:20px">Aplikasi e-RASIONAL</div></strong></center>
      <center><strong><div  style="font-size:15px; ">Masukkan username dan password anda</div></strong></center>
      <div class="card-body">
        <form action="login_process.php" method="post">
          <div class="form-group input-container">
            <i class="fa fa-user icon"></i>
            <input class="input-field form-control" type="text" name="user" placeholder="Username" required>
        </div>
          <div class="form-group input-container">
             <i class="fa fa-key icon"></i>
            <input class="input-field form-control" id="exampleInputPassword1" name="pass" type="password" placeholder="Password" required>
          </div>
          <!-- <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember Password</label>
            </div>
          </div> -->
          <input type="submit" class="btn btn-primary btn-block" value="Login" name="submit">
        </form>
        <div class="text-center">
          <!-- <a class="d-block small mt-3" href="register.html">Register an Account</a> -->
          <!-- <a class="d-block small" href="forgot-password.html" style="">Forgot Password?</a> -->
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
