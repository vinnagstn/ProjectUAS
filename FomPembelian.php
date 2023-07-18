<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Pembelian - Grow Guard</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="CssGG.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelvr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Cinzel+Decorative' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Anonymous+Pro' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
</head>

<body style="background: whitesmoke; font-family: 'Raleway', sans-serif;">

	<nav class="navbar navbar-expand-md navbar-light bg-light">
					<div class="container-fluid">
						<button class="btn btn-lg px-1 py-2 open-btn" style="padding-top: 0px"><i class="fad fa-bars"></i></button>
						<div class="d-flex justify-content-between  d-block px-3"><a class="navbar-brand fs-4 " href="#"> <img src="Foto/logoo.png" width="30px"></a>
						<h3 class="text-center" style="padding-top:8px"> Grow Guard </h3>
					</div>
				</div>
			</nav> <br><br>

			<div class="judul">
						<br><br>
						<h2 class="text-center m" style="font-family: 'Cinzel Decorative', sans-serif;"> Form Pembelian </h2>
				</div>


	<div class="container-login-register mt-5 ">
            <form  method="POST" >
            	<div class="form-group">
                    <label for="nama">Jumlah Pembelian :</label>
                    <input type="text" name="jumlah" id="jumlah" required>
                </div>
            	<div class="form-group">
                    <label for="nama">Alamat:</label>
                    <textarea name="alamat" id="alamat" rows="5" required></textarea>
                </div>
                <div class="form-group">
                    <label for="harga">Pilihan Ekspedisi :</label>
                    <select name="jumlah_produk" id="jumlah_produk">
            			<option value="1">JNE</option>
            			<option value="2">JNT Expres</option> </select>
            	    </select></div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-center pt-3" style="border-radius: 5px;">
            	 <a href="Pembelian.php" class="btn btn-success">Pesan</a>
            </div>
        </form>
        
    </div>
    <br> <br>

	<footer style="text-align: center; padding: 30px; font-size: 18px; background-color: #386641; color: white; font-family: 'Raleway', sans-serif;">
						<div class="SOSMED">
							<ul style="display: inline-block; padding: 0px;">
								<li><img src="Foto/1facebook.png" width="30"></li>
								<li><img src="Foto/1whatsapp.png" width="30"></li>
								<li><img src="Foto/1twitter.png" width="30"></li>
								<li><img src="Foto/1instagram.png" width="30"></li>
							</ul>
						</div>
					&copy; All Right Reserved by Grow Guard 2023 </footer>

</body>
</html>