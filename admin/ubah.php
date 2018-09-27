<?php
session_start();
if(!isset($_GET["id"])){
	header("location:buku.php");
	exit();
}

include "koneksi.php";

$id = $_GET["id"];
$getdata = $connection->query("SELECT * FROM buku WHERE idbuku = ".$id);

if($getdata ->num_rows==0){
	header("location:buku.php");
	exit();
}

$getdata = $getdata->fetch_assoc();

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
            	<h2>EDIT BUKU</h2><BR>
            
           
		<div class="container">

         <form method ="post" action="edit.php" enctype="mulripart/form-data">

         	<input type="hidden" name="id" value="<?=$_GET["id"]?>">

		 <div class="row">

		 	<div class="col-25">
				<label>Judul</label>
			</div>

			<div class="col-75">
				<input type="text" name=judul value="<?=$getdata["judul"]?>">
		 	</div>
   		 </div>

		<div class="row">

		 	<div class="col-25">
				<label>Pengarang</label>
			</div>

			<div class="col-75">
				<input type="text" name=pengarang value="<?=$getdata["pengarang"]?>">
			</div>
		</div>

		<div class="row">

		 	<div class="col-25">
				<label>Penerbit</label>
			</div>

			<div class="col-75">
				<input type="text" name=penerbit value="<?=$getdata["penerbit"]?>">
			</div>
		</div>

		<div class="row">
			
		 	<div class="col-25">
				<label>Tahun Terbit</label>
			</div>

			<div class="col-75">
				<input type="date" name=tahunterbit value="<?=$getdata["tahunterbit"]?>">
			</div>
		</div>

		<div class="row">
			
		 	<div class="col-25">
				<label>Jumlah Buku</label>
			</div>

			<div class="col-75">
				<input type="text" name=jumlahbuku value="<?=$getdata["jumlahbuku"]?>">
			</div>
		</div>

		<div class="row">
			
		 	<div class="col-25">
				<label>Lokasi Loker</label>
			</div>

			<div class="col-75">
				<input type="text" name=lokasi value="<?=$getdata["lokasi"]?>">
			</div>
		</div>

		<div class="row">
			
		 	<div class="col-25">
				<label>Deskripsi</label>
			</div>

			<div class="col-75">
				<textarea tyle="height:200px" name=deskripsi value="<?=$getdata["deskripsi"]?>"></textarea>
			</div>
		</div>

		<div class="row">
			
		 	<div class="col-25">
				<label>Foto</label>
			</div>

			<div class="col-75">
				<input type="file" name=foto>
			</div>

		<div class="row">
      		<input type="submit" value="Submit">

   	 	</div>
	</form>
</div>

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