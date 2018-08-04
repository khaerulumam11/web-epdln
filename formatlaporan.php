<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->

    <!-- Custom styles for this template-->

    <title>Surat Perjalanan Dinas</title>
  </head>
  <style media="screen">
  tr th{
    text-align: center;
  }

  table {
    border-collapse:collapse;
    table-layout:fixed;width: 630px;
  }

  table td {
    word-wrap:break-word;
    width: 20%;
  }
  </style>
  <body>
    <!-- <img src="https://pdln.dev.kominfo.go.id/logo.png" alt="logo" width='100px'><br>
      <h4 style="color: #eff5f9 !important">Aplikasi e-RASIONAL</h4> -->

  <?php
  include ("koneksi.php");
    $result = mysqli_query($config, "SELECT kegiatan.id, kegiatan.negara, kegiatan.namakegiatan, kegiatan.tglmulai, kegiatan.tglselesai, kegiatan.kota, perjadin.id, delegasi.id,delegasi.id_pegawai,delegasi.id,delegasi.id_pegawai,pegawai.nama_pegawai,pegawai.id_pegawai,pegawai.jabatan,pegawai.nip from perjadin RIGHT join kegiatan on perjadin.id_kegiatan = kegiatan.id LEFT join delegasi on delegasi.id_perjadin = perjadin.id left join pegawai on delegasi.id_pegawai = pegawai.id_pegawai where perjadin.id = 4");
    $row = mysqli_fetch_array($result)
  ?>
<table style="width:100%">
  <tr>
    <td rowspan="4">
            <img src="https://ppidkemkominfo.files.wordpress.com/2011/03/logo-kominfo-copy.jpg" style="margin-left:-20px;width:200px;margin-top:120px">
    </td>
  </tr>
  <tr>
    <td style="width:100%">
      <b><label style="font-size:25px; margin-left:-10px">KEMENTERIAN KOMUNIKASI DAN INFORMATIKA</label></b> <br>
      <b><label style="font-size:20px; margin-left:-10px;margin-top:5px">SEKRETARIAT JENDERAL</label></b><br>
      <b><label style="font-size:20px; margin-left:-10px;margin-top:10px">PUSAT KELEMBAGAAN INTERNASIONAL</label></b><br>
      <i><label style="font-size:20px; margin-left:-10px;margin-top:10px">Menuju Masyarakat Informasi Indonesia</label></i><br>
      <label style="font-size:13px; margin-left:-10px;margin-top:15px">Jl. Medan Merdeka 9, Jakarta 10110 Telp.(021) 3865189 Fax. (021) 3440858 www.kominfo.go.id </label>
    </td>

  </tr>
</table>
<hr style="border-width:3px;background:black;margin-top:10px">
  <div style="margin-left:80px; margin-top:30px">
<label style="margin-left:400px">  Jakarta, 9 Juli 2018 </label> <br><br>
Nomor		: B-0003/KOMINFO/SJ/KU.01.05/07/2018 <br>
Perihal		: Permohonan Izin Perjalanan Dinas Luar Negeri ke <?php echo $row['negara'] ?><br>
Lampiran    : - <br><br>

Kepada Yth.<br>
Sekretaris Kementerian Sekretariat Negara RI<br>
Up. Kepala Biro Kerjasama Teknik Luar Negeri<br>
Kementerian Sekretariat Negara<br>
di  Jakarta<br><br>

Sehubungan dengan tawaran "<?php echo $row['namakegiatan'] ?>" pada hari <?php echo $row['tglmulai'] ?> - <?php echo $row['tglselesai'] ?> di <?php echo $row['kota'] ?>, <?php echo $row['negara'] ?>, bersama ini kami mohon bantuan Saudari kiranya dapat memberikan persetujuan keberangkatan bagi peserta dari Kementerian Komunikasi dan Informatika yang akan mengikuti pelatihan dimaksud dengan nama-nama seperti dibawah ini.<br><br>
Adapun seluruh biaya yang timbul bagi nama-nama yang bersangkutan untuk mengikuti pelatihan tersebut (berangkat hari <?php echo $row['tglmulai'] ?> dan kembali ke Indonesia pada tanggal <?php echo $row['tglselesai'] ?>), akan ditanggung oleh DIPA Direktorat Jenderal SDPPI Kementerian Kominfo TA 2017.<br><br>
Berikut nama - nama yang akan berangkat :
  <div style="width:80%;margin-top:15px">
<table border=2 style="width:100%" class="table">
  <thead border=2>
    <tr border=2>
      <th>No</th>
      <th>Nama</th>
      <th>NIP</th>
      <th>Jabatan</th>
    </tr>
  </thead>

  <tbody border=2>
    <?php

    $results = mysqli_query($config, "SELECT kegiatan.id, kegiatan.negara, kegiatan.namakegiatan, kegiatan.tglmulai, kegiatan.tglselesai, kegiatan.kota, perjadin.id, delegasi.id,delegasi.id_pegawai,delegasi.id,delegasi.id_pegawai,pegawai.nama_pegawai,pegawai.id_pegawai,pegawai.jabatan,pegawai.nip from perjadin RIGHT join kegiatan on perjadin.id_kegiatan = kegiatan.id LEFT join delegasi on delegasi.id_perjadin = perjadin.id left join pegawai on delegasi.id_pegawai = pegawai.id_pegawai where perjadin.id = 4");

    while ($row = mysqli_fetch_array($results)){
    ?>
    <tr>
      <td style="text-align:center" border=2></td>
      <td style="text-align:center" border=2><?php echo $row['nama_pegawai'] ?></td>
      <td style="text-align:center" border=2><?php echo $row['nip'] ?></td>
      <td style="text-align:center" border=2><?php echo $row['jabatan'] ?></td>
  </tr>
  <?php } ?>


    </tbody>
</table>

</div>
<br><br>

Demikian disampaikan, atas perhatian dan kerjasamanya kami ucapkan terima kasih.
<br><br><br><br>

<label style="margin-left:400px">Sekretaris Jenderal,</label><br><br><br><br><br>
<br><br>
 <label style="margin-left:400px">Farida Dwi Cahyarini</label><br><br>
Tembusan Yth.:<br>
INSPEKTORAT JENDERAL

</div>
</body>
</html>
