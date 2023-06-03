<?php
// Konfigurasi database
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'hotel_db';

// Membuat koneksi ke database
$conn = new mysqli($host, $user, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die('Koneksi gagal: ' . $conn->connect_error);
}

// Memeriksa user_id yang diterima dari parameter URL
if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];

    // Menampilkan halaman pengguna
    echo '<h1>Selamat datang, pengguna!</h1>';

    // Menampilkan saldo pengguna
    $sql = "SELECT saldo FROM saldo WHERE user_id = $user_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo 'Saldo Anda: ' . $row['saldo'];
    } else {
        echo 'Saldo tidak ditemukan.';
    }
} else {
    echo 'User ID tidak ditemukan.';
}

// Menutup koneksi
$conn->close();
?>
