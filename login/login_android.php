<?php
//      define('_HOST_NAME','localhost');
//      define('_DATABASE_NAME','epdln');
//      define('_DATABASE_USER_NAME','root');
//      define('_DATABASE_PASSWORD','');
//
//      $MySQLiconn = new MySQLi(_HOST_NAME,_DATABASE_USER_NAME,_DATABASE_PASSWORD,_DATABASE_NAME);
//
//      if($MySQLiconn->connect_errno) {
//        die("ERROR : -> ".$MySQLiconn->connect_error);
//      }
//
//
// $response = array("erorr" => FALSE);
//
// if (isset($_POST['user']) && isset($_POST['pass'])) {
//
//  $username = $_POST['user'];
//  $password = $_POST['pass'];
//
//  $encrypted_password = hash("sha256", $password);// encrypted password
//
//  //$query = mysqli_query($config,"SELECT * FROM user WHERE username='$username' AND password='$password'");
// $sql = $MySQLiconn->query("SELECT * FROM user WHERE username='$username' AND password='$password'");
//
//  if(mysqli_num_rows($sql) > 0){
//   while($row = $sql->fetch_array()){
//        $response["error"] = FALSE;
//        $response["message"] = "Login Successfull";
//        $response["data"]["username"] = $row['username'];
//       }
//
//   echo json_encode($response);
//    }else{
//     $response["error"] = TRUE;
//      $response["message"] = "Incorrect Username or Password!";
//
//   echo json_encode($response);
//    }
// }

include('../koneksi.php');

$username = $_POST['user'];
$password = $_POST['pass'];

$response = array("eror" => FALSE);

  $query = mysqli_query($config,"SELECT * FROM user WHERE username='$username' AND password='$password' AND role ='Admin Sekjen'");

  if(mysqli_num_rows($query) > 0){
     while($row = mysqli_fetch_array($query)){
         $response["error"] = FALSE;
         $response["message"] = "Login Successfull";
         $response["data"]["username"] = $row['username'];
        }

    echo json_encode($response);
     }else{
      $response["error"] = TRUE;
       $response["message"] = "Incorrect Username or Password!";

    echo json_encode($response);
     }



// if(isset($row)){
//
//  echo "success";
//  }
//  else{
//  echo "failure";
//  }
//  mysqli_close($config);


?>
