<?php
include("config.php");
  if($_SERVER['REQUEST_METHOD'] == "POST"){
      //ambil data dari from
      $nis = $_POST['id'];
      $nama = $_POST['nis'];
      $alamat = $_POST['nama'];
      $jk = $_POST['jenis_kelamin'];
      $no_telp = $_POST['no_telp'];
      $alamat = $_POST['alamat'];
      $berat_badan = $_POST['berat_badan'];
      $tinggi_badan = $_POST['tinggi_badan'];
      //buat query update
      $sql = "UPDATE t_siswa SET id='$id', nis='$nis',
      nama='$nama', jenis_kelamin='$jk',no_telp ='$no_telp',alamat='$alaamt' WHERE 
      berat_badan = '$berat_badan', tinggi_badan='$tinggi_badan'";
      $query = mysqli_query($db,$sql) or die(mysqli_error($db));
      //apakah update berhasil
      if($query){
        //kalau berhasil,ahlikan ke halaman index.php dengam status=sukes
          header('location:index.php?status=gagal');
      }
 }else{
     die("Akses dilarang ...");
 }
?>