<?php
include("koneksi.php");

$results = mysqli_query($config, "SELECT count(perjadin.id) as id_perjadin, count(kegiatan.id) as id_kegiatan, count(delegasi.id) as id_delegasi from perjadin right join kegiatan on perjadin.id_kegiatan = kegiatan.id left join delegasi on delegasi.id_perjadin = perjadin.id");
// $results1 = mysqli_query($config, "SELECT count(kegiatan.id) as id_kegiatan from kegiatan");
// $results = mysqli_query($config, "SELECT count(perjadin.id) as id_perjadin from perjadin");
// $results2= mysqli_query($config, "SELECT count(delegasi.id) as id_delegasi from delegasi");

//$results = mysqli_query($config,"SELECT * FROM perjadin");
$response = array();
// $response1 = array();
// $response2 = array();

// if(mysqli_num_rows($results) > 0){
while ($row  = mysqli_fetch_assoc($results))
{

  $response[] = $row;
	// $response[] = $row['id'];
  // $response[] = $row['namakegiatan'];
  // $response[] = $row['id_delegasi'];
  // $response[] = $row['status'];
  // $response[] = $row['no'];
}

// while ($row1 = mysqli_fetch_assoc($results1))
// {
//
//   $response1[] = $row1;
	// $response[] = $row['id'];
  // $response[] = $row['namakegiatan'];
  // $response[] = $row['id_delegasi'];
  // $response[] = $row['status'];
  // $response[] = $row['no'];
// }
//
// while ($row2 = mysqli_fetch_assoc($results2) )
// {
//
//   $response2[] = $row2;
	// $response[] = $row['id'];
  // $response[] = $row['namakegiatan'];
  // $response[] = $row['id_delegasi'];
  // $response[] = $row['status'];
  // $response[] = $row['no'];
// }

//$test = array_merge($response1,$response,$response2);

//echo json_encode(array('daftar' => ($response),'daftar1'=>($response1),'daftar2'=>($response2)));
echo json_encode(array('daftar' => ($response)));
// echo json_encode(array('daftar1' => ($response1)));
// echo json_encode(array('daftar2' => ($response2)));
// echo json_encode($response);
// }else{
//   $response["error"] = TRUE;
//   $response["message"] = "Incorrect Username or Password!";
//
// echo json_encode($response);
// }
?>
