<?php
include('koneksi.php');

$kegiatan = $_POST['idkegiatan'];
$perjadin = $_POST['idperjadin'];
$delegasi = $_POST['iddelegasi'];

$response = array("eror" => FALSE);

  $query = mysqli_query($config,"SELECT count(kegiatan.id) as id_kegiatan, count(perjadin.id) as id_perjadin,count(delegasi.id) as id_delegasi FROM kegiatan join perjadin on kegiatan.id = perjadin.id_kegiatan join delegasi on perjadin.id = delegasi.id_perjadin");

  if(mysqli_num_rows($query) > 0){
     while($row = mysqli_fetch_array($query)){
         $response["error"] = FALSE;
         $response["message"] = "Login Successfull";
         $response["data"]["idkegiatan"] = $row['id_kegiatan'];
         $response["data"]["idperjadin"] = $row['id_perjadin'];
         $response["data"]["iddelegasi"] = $row['id_delegasi'];
        }

    echo json_encode($response);
     }else{
      $response["error"] = TRUE;
       $response["message"] = "Incorrect Username or Password!";

    echo json_encode($response);
     }


?>
