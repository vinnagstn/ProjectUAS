<?php
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];
    $namaLengkap = $_POST['nama_lengkap']; // Ubah $nama_lengkap menjadi $namaLengkap
    $email = $_POST['email'];
    $message = "";
    $messageClass = "";

    if ($password !== $confirmPassword) {
        $message = "Konfirmasi password tidak cocok.";
        $messageClass = "error-message";
    } else {
        $koneksi = mysqli_connect("localhost", "root", "", "uas");

        if (!$koneksi) {
            die("Koneksi database gagal: " . mysqli_connect_error());
        }

        $sql = "INSERT INTO tb_users (username, password, nama_lengkap, email, role) VALUES ('$username', '$password', '$namaLengkap', '$email', 'admin')";

        if (mysqli_query($koneksi, $sql)) {
            $message = "Registrasi sukses, data berhasil disimpan. <a href='LoginGG2.php'>LOGIN</a> sekarang !!!";
            $messageClass = "success-message";
        } else {
            $message = "Error: " . $sql . "<br>" . mysqli_error($koneksi);
            $messageClass = "error-message";
        }

        mysqli_close($koneksi);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .success-message {
            background-color: #abcfab;
            color: #155724;
            padding: 50px;
            border-radius: 5px;
            margin: 280px;
            text-align: center;
        }

        .error-message {
            background-color: #cfabab;
            color: #721c24;
            padding: 50px;
            border-radius: 5px;
            margin: 280px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="<?php echo $messageClass; ?>"><?php echo $message; ?></div>
</body>
</html>
