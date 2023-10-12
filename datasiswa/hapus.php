<?
include("config.php");
if(isset($_GET['nis'])){
    //ambil nis dari query string
    $id = $_GET['id'];
    //buat query hapus
    $sql = "DELETE FROM siswa WHERE id=$id";
    $query = mysqli_query($db, $sql) or die(mysqli_error($db));
    //apakah query update berhasil?
    if($query){
        //kalau berhasil, ahlikan ke halaman index,php dengan status=sukses
        header('Location:index.php?status=sukses');
    }else{
        //kalau gagal, ahlikan kehalaman index.php dengan status = gagal
        header('location:index.php?status=gagal');
    }
} else {
    die("Akses dilarang ...");
}
?>