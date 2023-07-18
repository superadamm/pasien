<?php
$koneksi = new mysqli('localhost','root',"",'adam_rpl3') or die(mysqli_error($koneksi));

if (isset($_POST['simpan'])){
    $idPasien = $_POST['idpasien'];
    $nmPasien = $_POST['nmpasien'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $koneksi->query("INSERT INTO pasien (idpasien, nmpasien, jk, alamat)values ('$idpasien', '$nmpasien', '$jk', '$alamat' )");

    header('location:pasien.php');
}
if (isset($_GET['idPasien'])){
    $idpasien = $_GET['idpasien'];
    $koneksi->query("DELETE FROM pasien where idpasien = '$idpasien'");
    header('location:pasien.php');
}
if (isset($_POST['edit'])){
    $idpasien = $_POST['idpasien'];
    $nmpasien = $_POST['nmpasien'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $koneksi->query("UPDATE pasien SET idpasien='$idpasien', nmpasien='$nmpasien', jk='$jk', alamat='$alamat'");
     header('location:pasien.php');
}
?>

