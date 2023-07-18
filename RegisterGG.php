<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Register Member - Grow Guard </title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="CssGG.css">
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
</head>

<body style="background: whitesmoke; font-family: 'Raleway', sans-serif;">

	<div class="LOGO" style="align-items: center; justify-content: center; display: flex; padding-top:50px; padding-bottom: 30px;">
		<img src="Foto/logoo.png" height="70px" width="60px" >
	</div>
	<br>

	<div class="container-login-register">
        <h2 style="text-align: center; padding-top:20px; padding-bottom: 20px;">Register Admin</h2>
        <form method="POST" action="ProsesRegister.php">
            <div class="form-group">
                <label>Nama Lengkap:</label>
                <input type="text" name="nama_lengkap" require>
            </div>
            <div class="form-group">
                <label>Username:</label>
                <input type="text" name="username" required>
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="email" name="email" required class="email" style="width: 100%; padding: 5px; border: 1px solid #ccc; border-radius: 3px;">
            </div>
            <div class="form-group">
                <label>Password:</label>
                <input type="password" name="password" required>
            </div>
            <div class="form-group">
                <label>Konfirmasi Password:</label>
                <input type="password" name="confirm_password" required>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-center pt-3">
            	 <button type="submit">Daftar</button>
            </div>
        </form>
        <br>
        <p>Sudah punya akun? <a href="LoginGG.php">Login disini</a></p>
    </div>
    <br> <br>

	<footer style="text-align: center; padding: 20px; font-size: 18px; background-color: #72a460; color: white; font-family: 'Raleway', sans-serif;">
	&copy; All Right Reserved by Grow Guard 2023 </footer>

</body>
</html>