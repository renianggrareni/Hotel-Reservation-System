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
$password = "password";
$database = "database_name";
$conn = mysqli_connect($host, $username, $password, $database);

// Ambil data dari form
$id = $_POST['id'];
$amount = $_POST['amount'];

// Perbarui saldo pengguna
$query = "UPDATE users SET saldo = saldo + $amount WHERE id = $id";
mysqli_query($conn, $query);

// Tambahkan entri transaksi
$query = "INSERT INTO transactions (user_id, amount, date) VALUES ($id, $amount, NOW())";
mysqli_query($conn, $query);

// Kembali ke halaman saldo
header("Location: saldo.php?id=$id");
exit();
?>
