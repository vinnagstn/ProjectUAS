<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Input Produk - Grow Guard</title>
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

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
					<ul class="navbar-nav mb-2 mb-lg-0 p-0">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="#"><i class="fad fa-shopping-cart fa-lg" ></i></a>
						</li>
					</ul>
					<form class="d-flex" role="search">
						<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
						<button class="btn btn-outline-success" type="submit"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/> </svg> </button>
					</form>
				</div>
			</nav>

			<div class="judul">
						<br><br>
						<h2 class="text-center m" style="font-family: 'Cinzel Decorative', sans-serif;"> INPUT PRODUK </h2>
				</div>


	<div class="container-login-register mt-5 ">
            <form  method="POST" >
            	<div class="form-group">
                    <label for="nama">Kode Produk:</label>
                    <input type="text" name="kode" id="kode" required>
                </div>
            	<div class="form-group">
                    <label for="nama">Nama Produk:</label>
                    <input type="text" name="nama" id="nama" required>
                </div>
                <div class="form-group">
                    <label for="harga">Harga:</label>
                    <input type="text" name="harga" id="harga" required>
                </div>
                <div class="form-group">
                    <label for="detail">Detail Produk:</label>
                    <textarea name="detail" id="detail" rows="5" required></textarea>
                </div>
                <div class="form-group">
                    <label for="foto">Foto Produk:</label>
                    <input type="file" name="foto" id="foto" accept="image/*" required>
                </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-center pt-3" style="border-radius: 5px;">
            	 <button type="submit">Input</button>
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