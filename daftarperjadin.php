<?php
include("koneksi.php");


$results = mysqli_query($config, 'SELECT perjadin.no_pengajuan as no,perjadin.status_perjadin as status ,perjadin.id as id , perjadin.alasan ,kegiatan.id as id_kegiatan,kegiatan.namakegiatan, kegiatan.jmldelegasi, count(delegasi.id) as id_delegasi from kegiatan join perjadin on perjadin.id_kegiatan = kegiatan.id join delegasi on perjadin.id = delegasi.id_perjadin where perjadin.status_perjadin ="PengajuanBaru"' );
//$results = mysqli_query($config,"SELECT * FROM perjadin");
$response = array();

// if(mysqli_num_rows($results) > 0){
while ($row  = mysqli_fetch_array($results))
{
  if ($row[0]['id_delegasi']==0 && $row[0]['no']==null){
    echo "Data Tidak Ada";
  }else{
    $response[] = $row;
  }
	// $response[] = $row['id'];
  // $response[] = $row['namakegiatan'];
  // $response[] = $row['id_delegasi'];
  // $response[] = $row['status'];
  // $response[] = $row['no'];
}

// if ($response) {
//   // code...
//   echo json_encode($response["message"] = "Data Tidak Ada");
// }
// else {

  echo json_encode($response);  // code...


// echo json_encode($response);
// }else{
//   $response["error"] = TRUE;
//   $response["message"] = "Incorrect Username or Password!";
//
// echo json_encode($response);
// }
?>
