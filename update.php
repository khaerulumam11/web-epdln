<?php
include("koneksi.php");

$id = $_GET['id'];

$status = $_POST['status_perjadin'];
$alasan = $_POST['alasan'];

$results = mysqli_query($config, "UPDATE perjadin SET status_perjadin='$status',alasan='$alasan' where perjadin.id =".$id);
//$results = mysqli_query($config,"SELECT * FROM perjadin");
$response = array();

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

echo json_encode(array('updateperjadin' => $response));;
// echo json_encode($response);
// }else{
//   $response["error"] = TRUE;
//   $response["message"] = "Incorrect Username or Password!";
//
// echo json_encode($response);
// }
?>
