<?php
// Sambungan buat ke database
$servername = "localhost"; 
$username = "root";
$password = "";
$dbname = "tugasJWD";

// Buat koneksi databasenya
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi databasenya
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Tangkap data dari form hasil input di web form awal tadi
$nama = $_POST['nama'];
$umur = $_POST['umur'];
$alamat = $_POST['alamat'];

// Query untuk menyimpan data ke database tugasJWD pak dino
$sql = "INSERT INTO biodata (nama, umur, alamat) VALUES ('$nama', $umur, '$alamat')";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil disimpan.<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Tutup koneksi databasenya
$conn->close();
?>
<br>
<a href="index.php">Kembali ke halaman utama</a>
