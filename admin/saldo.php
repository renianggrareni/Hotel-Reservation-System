<?php
session_start();

// Cek apakah pengguna sudah login sebagai admin
// if (!isset($_SESSION['admin'])) {
//     header("Location: login.php");
//     exit();
// }

// Koneksi ke database
$host = "localhost";
$username = "root";
$password = "";
$database = "hotel_db";
$conn = mysqli_connect($host, $username, $password, $database);

// Ambil ID pengguna dari parameter URL
$id = $_GET['user_id'];

// Ambil saldo pengguna
$conn = "SELECT saldo FROM user WHERE id = $id";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$saldo = $row['saldo'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Saldo</title>
</head>
<body>
    <h1>Halaman Saldo</h1>

    <h2>ID Pengguna: <?php echo $id; ?></h2>
    <h3>Saldo: <?php echo $saldo; ?></h3>

    <!-- Tambah saldo form -->
    <form action="proses_saldo.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="amount">Tambah Saldo:</label>
        <input type="number" name="amount" id="amount" min="0">
        <input type="submit" value="Tambah">
    </form>

    <br>
    <a href="admin.php">Kembali ke Halaman Admin</a>
    <br>
    <a href="logout.php">Logout</a>
</body>
</html>
