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

// Menambah saldo pengguna
if (isset($_POST['tambah_saldo'])) {
    $user_id = $_POST['user_id'];
    $jumlah_saldo = $_POST['jumlah_saldo'];

    // Memeriksa apakah entri saldo sudah ada
    $sql = "SELECT * FROM saldo WHERE user_id = $user_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Memperbarui saldo pengguna
        $sql = "UPDATE saldo SET saldo = saldo + $jumlah_saldo WHERE user_id = $user_id";
    } else {
        // Menambahkan entri saldo baru
        $sql = "INSERT INTO saldo (user_id, saldo) VALUES ($user_id, $jumlah_saldo)";
    }

    if ($conn->query($sql) === true) {
        // Mengarahkan ke halaman pengguna setelah proses tambah saldo selesai
        header('Location: user_saldo.php?user_id=' . $user_id);
        exit();
    } else {
        echo 'Gagal menambahkan saldo: ' . $conn->error;
    }
}

// Menampilkan daftar pengguna
$sql = 'SELECT * FROM user';
$result = $conn->query($sql);

// Memeriksa hasil query
if ($result->num_rows > 0) {
    echo '<h1>Daftar Pengguna</h1>';
    echo '<table>';
    echo '<tr><th>user_id</th><th>username</th><th>Saldo</th><th>Tambah Saldo</th></tr>';

    // Menampilkan data pengguna
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row['user_id'] . '</td>';
        echo '<td>' . $row['name'] . '</td>';
        echo '<td>' . $row['username'] . '</td>';

        // Menampilkan saldo pengguna
        $user_id = $row['user_id'];
        $sql_saldo = "SELECT saldo FROM saldo WHERE user_id = $user_id";
        $result_saldo = $conn->query($sql_saldo);
        $saldo = ($result_saldo->num_rows > 0) ? $result_saldo->fetch_assoc()['saldo'] : 0;
        echo '<td>' . $saldo . '</td>';

        echo '<td>';
        echo '<form method="post" action="">';
        echo '<input type="hidden" name="user_id" value="' . $row['user_id'] . '">';
        echo '<input type="number" name="jumlah_saldo" required>';
        echo '<input type="submit" name="tambah_saldo" value="Tambah">';
        echo '</form>';
        echo '</td>';
        echo '</tr>';
    }

    echo '</table>';
} else {
    echo 'Tidak ada pengguna.';
}

// Menutup koneksi
$conn->close();
?>
