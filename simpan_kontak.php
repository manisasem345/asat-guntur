<?php
include 'connect_db.php';

$deskripsi_kontak = $_POST['deskripsi_kontak'];
$alamat = $_POST['alamat'];
$peta = $_POST['peta'];

$sql = "INSERT INTO kontak (deskripsi_kontak, alamat, peta) VALUES ('$deskripsi_kontak', '$alamat', '$peta')";
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Data berhasil disimpan')
    window.location.href = 'home.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>