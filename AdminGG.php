<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Admin Grow Guard </title>
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

<body>
	<div class="ADMIN">
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
					<form class="d-flex" role="search">
						<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
						<button class="btn btn-outline-success" type="submit"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/> </svg> </button>
					</form>
				</div>
			</nav>

			<div class="TABEL_PRODUK">
				<div class="judul">
						<br><br>
						<h2 class="text-center m" style="font-family: 'Cinzel Decorative', sans-serif;"> ADMIN </h2>
				</div>


				<div class="input_produk">
					<a href="Input_Produk.php" tabindex="-1" role="button" aria-disabled="true"><button type="button" class="btn btn-success mt-auto p-2" style="margin-left: 40px; font-family: 'Raleway', sans-serif;">Input Produk</button></a> 
				</div>

				<div class="TABEL" style="padding:40px ">
				<table class="table table-striped table-light">
					<thead>
						<tr>
							<th scope="col">No</th>
							<th scope="col">Kode Produk</th>
							<th scope="col">Produk</th>
							<th scope="col">Nama</th>
							<th scope="col">Harga</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">1</th>
							<th scope="row">OT0001</th>
							<td><img src="Foto/Jual1.jpg"  class="rounded p-0 m-0" width="200" height="200" alt="..."></td>
							<td>RHODIAMINE 856 SL</td>
							<td>Rp.55.000</td>
							<td><button type="button" class="btn btn-outline-success">Edit</button>
								<button type="button" class="btn btn-outline-danger">Hapus</button>
							</td>
						</tr>
						<tr>
							<th scope="row">2</th>
							<th scope="row">OT0002</th>
							<td><img src="Foto/Jual2.jpg"  class="rounded p-0 m-0" width="200" height="200" alt="..."></td>
							<td>SELDENE</td>
							<td>Rp.25.000</td>
							<td><button type="button" class="btn btn-outline-success">Edit</button>
								<button type="button" class="btn btn-outline-danger">Hapus</button>
							</td>
						</tr>
						<tr>
							<th scope="row">3</th>
							<th scope="row">OT0003</th>
							<td><img src="Foto/Jual3.jpg"  class="rounded p-0 m-0" width="200" height="200" alt="..."></td>
							<td>CURACRON</td>
							<td>Rp.40.000</td>
							<td><button type="button" class="btn btn-outline-success">Edit</button>
								<button type="button" class="btn btn-outline-danger">Hapus</button>
							</td>
						</tr>
						<tr>
							<th scope="row">4</th>
							<th scope="row">OT0004</th>
							<td><img src="Foto/Jual4.jpg"  class="rounded p-0 m-0" width="200" height="200" alt="..."></td>
							<td>EXPLORE</td>
							<td>Rp.110.000</td>
							<td><button type="button" class="btn btn-outline-success">Edit</button>
								<button type="button" class="btn btn-outline-danger">Hapus</button>
							</td>
						</tr>
						<tr>
							<th scope="row">5</th>
							<th scope="row">OT0005</th>
							<td><img src="Foto/Jual5.jpg"  class="rounded p-0 m-0" width="200" height="200" alt="..."></td>
							<td>SIDAMETHRIN</td>
							<td>Rp.43.000</td>
							<td><button type="button" class="btn btn-outline-success">Edit</button>
								<button type="button" class="btn btn-outline-danger">Hapus</button>
							</td>
						</tr>
						<tr>
							<th scope="row">6</th>
							<th scope="row">OT0006</th>
							<td><img src="Foto/Jual6.jpg"  class="rounded p-0 m-0" width="200" height="200" alt="..."></td>
							<td>HERBISIDA DMA 6</td>
							<td>Rp.75.000</td>
							<td><button type="button" class="btn btn-outline-success">Edit</button>
								<button type="button" class="btn btn-outline-danger">Hapus</button>
							</td>
						</tr>
						<tr>
							<th scope="row">7</th>
							<th scope="row">OT0007</th>
							<td><img src="Foto/Juall7.jpg"  class="rounded p-0 m-0" width="200" height="200" alt="..."></td>
							<td>DIPHO<</td>
							<td>Rp.30.000</td>
							<td><button type="button" class="btn btn-outline-success">Edit</button>
								<button type="button" class="btn btn-outline-danger">Hapus</button>
							</td>
						</tr>
						<tr>
							<th scope="row">8</th>
							<th scope="row">OT0008</th>
							<td><img src="Foto/Juall8.jpg"  class="rounded p-0 m-0" width="200" height="200" alt="..."></td>
							<td>SUMO</td>
							<td>Rp.57.000</td>
							<td><button type="button" class="btn btn-outline-success">Edit</button>
								<button type="button" class="btn btn-outline-danger">Hapus</button>
							</td>
						</tr>
						<tr>
							<th scope="row">9</th>
							<th scope="row">OT0009</th>
							<td><img src="Foto/Juall9.jpg"  class="rounded p-0 m-0" width="200" height="200" alt="..."></td>
							<td>YASITHRIN</td>
							<td>Rp.11.000</td>
							<td><button type="button" class="btn btn-outline-success">Edit</button>
								<button type="button" class="btn btn-outline-danger">Hapus</button>
							</td>
						</tr>
					</tbody>
				</table>
				</div>

				<div class="cek_stok">
					<a href="Stok_Produk.php" tabindex="-1" role="button" aria-disabled="true"><button type="button" class="btn btn-success mt-auto p-2" style="margin-left: 1370px; font-family: 'Raleway', sans-serif;">Cek Stok</button></a>
				</div>
				
			</div>

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
	</div>

</body>
</html>