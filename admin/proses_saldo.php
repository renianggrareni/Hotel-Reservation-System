<?php
session_start();

// Cek apakah pengguna sudah login sebagai admin
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

// Koneksi ke database
$host = "localhost";
$username = "username";
$password = "";
$database = "hotel_db";
$conn = mysqli_connect($host, $username, $password, $database);

// Ambil data dari form
$id = $_POST['id_user'];
$amount = $_POST['amount'];

// Perbarui saldo pengguna
$query = "UPDATE user SET saldo = saldo + $amount WHERE id_user = $id";
mysqli_query($conn, $query);

// Tambahkan entri transaksi
$query = "INSERT INTO transaction (user_id, amount, date) VALUES ($id, $amount, NOW())";
mysqli_query($conn, $query);

// Kembali ke halaman saldo
header("Location: saldo.php?id=$id");
exit();
?>
