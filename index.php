<?php
// Sambungkan ke database
$servername = "localhost"; // Ganti dengan nama server Anda
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$dbname = "tugasJWD"; // Ganti dengan nama database Anda

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query untuk mengambil data dari database
$sql = "SELECT * FROM biodata";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Biodata</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Data Biodata</h2>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Umur</th>
                <th>Alamat</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                // Output data dari setiap baris
                $no = 1;
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $no . "</td>";
                    echo "<td>" . $row["nama"]. "</td>";
                    echo "<td>" . $row["umur"]. "</td>";
                    echo "<td>" . $row["alamat"]. "</td>";
                    echo "</tr>";
                    $no++;
                }
            } else {
                echo "<tr><td colspan='4'>0 results</td></tr>";
            }
            ?>
        </table>
        <br>
        <a href="index.html">Kembali ke Form Biodata</a>
    </div>
</body>
</html>
<?php
// Tutup koneksi
$conn->close();
?>
