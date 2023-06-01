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

// Ambil daftar pengguna
$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Halaman Admin</h1>

    <!-- Tampilkan daftar pengguna -->
    <table>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Saldo</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['saldo']; ?></td>
                <td>
                    <a href="saldo.php?id=<?php echo $row['id']; ?>">Lihat Saldo</a>
                </td>
            </tr>
        <?php } ?>
    </table>

    <br>
    <a href="logout.php">Logout</a>
</body>
</html>
