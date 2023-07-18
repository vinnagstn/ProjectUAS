<?php 
session_start();
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM tb_users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($koneksi, $sql);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $username;
        header("location: BerandaGG.php");
    } else {
        $message = "Username dan Password salah. Kembali ke halaman <a href='LoginGG.php'>LOGIN</a>";
        $messageClass = "error-message";
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