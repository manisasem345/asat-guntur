<?php
session_start();
include('connect_db.php');

// Ambil data dari form
$nama_depan = $_POST['nama_depan'];
$nama_belakang = $_POST['nama_belakang'];
$tentang = $_POST['tentang'];
$profesi = $_POST['profesi'];
$deskripsi_profesi = $_POST['deskripsi_profesi'];
$tgl_lahir = $_POST['tgl_lahir'];
$website = $_POST['website'];
$gelar = $_POST['gelar'];
$hp = $_POST['hp'];
$email = $_POST['email'];
$kota = $_POST['kota'];
$freelance = $_POST['freelance'];
$keterangan_about = $_POST['keterangan_about'];
$keterangan_skill = $_POST['keterangan_skill'];
$skill = $_POST['skill'];

$hero_name = $_FILES['url_hero']['name'];
$hero_tmp = $_FILES['url_hero']['tmp_name'];
move_uploaded_file($hero_tmp, "uploads/" . $hero_name);

$foto_name = $_FILES['url_foto']['name'];
$foto_tmp = $_FILES['url_foto']['tmp_name'];
move_uploaded_file($foto_tmp, "uploads/" . $foto_name);

$sql = "INSERT INTO biodata (nama_depan, nama_belakang, tentang, profesi, deskripsi_profesi, tgl_lahir, website, gelar, hp, email, kota, freelance, keterangan_about, keterangan_skill, skill, url_hero, url_foto) VALUES ('$nama_depan', '$nama_belakang', '$tentang', '$profesi', '$deskripsi_profesi', '$tgl_lahir', '$website', '$gelar', '$hp', '$email', '$kota', '$freelance', '$keterangan_about', '$keterangan_skill', '$skill', '$hero_name', '$foto_name')";
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Data berhasil disimpan. Sekarang isi kontak!')
    window.location.href = 'kontak.html';</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Tutup koneksi
$stmt->close();
$conn->close();
?>