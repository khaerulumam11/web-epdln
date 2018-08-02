<?php
include("koneksi.php");

$id = $_GET['id'];
$results = mysqli_query($config, "SELECT perjadin.no_pengajuan as no,perjadin.status_perjadin as status ,perjadin.id as id ,kegiatan.id as id_kegiatan,kegiatan.namakegiatan, kegiatan.satker, count(delegasi.id) as id_delegasi, delegasi.waktuawal, delegasi.waktuakhir, pegawai.nama_pegawai, pegawai.nip, pegawai.nik,pegawai.jabatan from kegiatan join perjadin on perjadin.id_kegiatan = kegiatan.id join delegasi on perjadin.id = delegasi.id_perjadin join pegawai on delegasi.id_pegawai = pegawai.id_pegawai where perjadin.id =".$id);

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
