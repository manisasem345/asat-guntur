<?php
include 'connect_db.php';

$nama_pengirim = $_POST['nama_pengirim'];
$email_pengirim = $_POST['email_pengirim'];
$judul_pesan = $_POST['judul_pesan'];
$pesan = $_POST['pesan'];
$tgl_pesan = date('Y-m-d H:i:s'); // Tanggal otomatis dari server

$sql = "INSERT INTO pesan (nama_pengirim, email_pengirim, judul_pesan, pesan, tgl_pesan)
        VALUES ('$nama_pengirim', '$email_pengirim', '$judul_pesan', '$pesan', '$tgl_pesan')";

if (mysqli_query($conn, $sql)) {
    echo "<script>
        alert('Pesan berhasil dikirim!');
        window.location.href = 'contact.php';
    </script>";
} else {
    echo "Gagal menyimpan pesan: " . mysqli_error($conn);
}
?>
