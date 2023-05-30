<!DOCTYPE html>
<html>
<head>
    <title>Halaman Saldo</title>
</head>
<body>
    <h1>Saldo Hotel</h1>

    <?php
    // Menghubungkan ke database
    $koneksi = mysqli_connect("localhost", "username", "password", "nama_database");

    // Memeriksa koneksi database
    if (mysqli_connect_errno()) {
        echo "Koneksi database gagal: " . mysqli_connect_error();
        exit();
    }

    // Query untuk mengambil saldo dari database
    $query = "SELECT saldo FROM hotel";
    $result = mysqli_query($koneksi, $query);

    // Memeriksa apakah query berhasil dieksekusi
    if (!$result) {
        echo "Query salah: " . mysqli_error($koneksi);
        exit();
    }

    // Mengambil saldo dari hasil query
    $row = mysqli_fetch_assoc($result);
    $saldo = $row['saldo'];

    // Menampilkan saldo
    echo "Saldo saat ini: " . $saldo;

    // Menutup koneksi database
    mysqli_close($koneksi);
    ?>
</body>
</html>
