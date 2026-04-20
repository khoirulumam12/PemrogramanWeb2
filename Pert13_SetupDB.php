<?php
$host = "localhost";
$user = "root";
$pass = "";

$con = mysqli_connect($host, $user, $pass);

if (!$con) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Buat database
$sql_db = "CREATE DATABASE IF NOT EXISTS db_mahasiswa";
if (mysqli_query($con, $sql_db)) {
    echo "✅ Database 'db_mahasiswa' berhasil dibuat.<br>";
} else {
    echo "❌ Error: " . mysqli_error($con) . "<br>";
}

// Pilih database
mysqli_select_db($con, "db_mahasiswa");

// Buat tabel mahasiswa
$sql_tbl = "CREATE TABLE IF NOT EXISTS mahasiswa (
    id_mahasiswa VARCHAR(10) PRIMARY KEY,
    nama VARCHAR(50) NOT NULL,
    jurusan VARCHAR(30) NOT NULL,
    alamat VARCHAR(100) NOT NULL,
    telepon VARCHAR(15) NOT NULL
)";

if (mysqli_query($con, $sql_tbl)) {
    echo "✅ Tabel 'mahasiswa' berhasil dibuat.<br>";
} else {
    echo "❌ Error: " . mysqli_error($con) . "<br>";
}

mysqli_close($con);
echo "<br>🎉 Setup selesai! Sekarang jalankan <a href='Pert13_Latihan1_Form.php'>Pert13_Latihan1_Form.php</a>";
?>