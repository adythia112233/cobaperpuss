<?php
session_start();
if(!isset($_SESSION['admin']))
{
	echo "<script>alert('Anda Harus Login'); </script>";
	echo "<script>location='login.php'; </script>";
	header('location:login.php');
	exit();
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>PERPUS SEKOLAH</title>
	<link href="style.css" rel="stylesheet" />
	<link href="style2.css" rel="stylesheet" />
	<link href="tabel.css" rel="stylesheet" />
	<link href="formcss.css" rel="stylesheet" />
	

	
	
</head>
<BODY>


	<div id="header">
			
			<img id="logo" alt="logo Dp" src="logo.png" width="50" />
			
			<span id="navigasi">
				<a id="link-active" href="index.php">Profil</a>
				<a href="perpustaka.php"><i class="fa fa-dashboard fa-3x"></i> Perpustakaan</a>
				<a href="logout.php"><i class="fa fa-dashboard fa-3x"></i> Logout</a>
			</span>
			
		</div>
		

				<h1>LOGO</h1>

	 <div id = "body">
			<div id = sidebar><br>

			<ul>
					<li><a href="buku.php"><i class="fa fa-dashboard fa-3x"></i>Data Buku</a></li>
					<li><a href="anggota.php">Data Anggota</a></li>
					<li><a href="falidasi.php">Order Buku</a></li>
					<li><a href="peminjaman.php">Peminjaman</a></li>
					<li><a href="riwayatpeminjaman.php">Riwayat Peminjam</a></li>
			</ul>
		</div>
			<div id = "konten">

				<div id="page-wrapper1" >
            <div id="page-inner1">
            	<h2>TAMBAH BUKU</h2>
            
            <br>
		<div class="container">

         <form method ="post" action="doadd.php" enctype="multipart/form-data">

		  <div class="row">

		 	<div class="col-25">
				<label>Judul</label>
			</div>

			<div class="col-75">
				<input type="text" name=judul placeholder="Masukan Judul">
		 	</div>
   		 </div>

		<div class="row">

		 	<div class="col-25">
				<label>Pengarang</label>
			</div>

			<div class="col-75">
				<input type="text" name=pengarang placeholder="Masukan Pengarang">
			</div>
		</div>

		<div class="row">

		 	<div class="col-25">
				<label>Penerbit</label>
			</div>

			<div class="col-75">
				<input type="text" name=penerbit placeholder="Masukan Penerbit">
			</div>
		</div>

		<div class="row">
			
		 	<div class="col-25">
				<label>Tahun Terbit</label>
			</div>

			<div class="col-75">
				<input type="date" name=tahunterbit placeholder="<Masukan Tahun Terbit">
			</div>
		</div>

		<div class="row">
			
		 	<div class="col-25">
				<label>Jumlah Buku</label>
			</div>

			<div class="col-75">
				<input type="text" name=jumlahbuku placeholder="Masukan Jumlah Buku">
			</div>
		</div>

		<div class="row">
			
		 	<div class="col-25">
				<label>Lokasi Loker</label>
			</div>

			<div class="col-75">
				<input type="text" name=lokasi placeholder="Masukan Lokasi Loker">
			</div>
		</div>

		<div class="row">
			
		 	<div class="col-25">
				<label>Deskripsi</label>
			</div>

			<div class="col-75">
				<textarea tyle="height:200px" name=deskripsi placeholder="Masukan Deskripsi Buku"></textarea>
			</div>
		</div>

		<div class="row">
			
		 	<div class="col-25">
				<label>Foto</label>
			</div>

			<div class="col-75">
				<input type="file" name=foto>
			</div>

		
		<button type ="submit" name="save" class="submit">Simpan</button>
		</div>
	</form>
	<?php
			if(isset($_SESSION["message"])){
				echo $_SESSION["message"];
				unset($_SESSION["message"]);
			}

		?>
            	
                </div>
                
               
               
    </div>
           
            </div>
			

</BODY>


</html>