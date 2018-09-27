<?php
session_start();
if(!isset($_GET["id"])){
	header("location:anggota.php");
	exit();
}

include "koneksi.php";

$id = $_GET["id"];
$getdata = $connection->query("SELECT * FROM anggota WHERE idanggota = ".$id);

if($getdata ->num_rows==0){
	header("location:anggota.php");
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
            	<h2>EDIT ANGGOTA</h2><BR>
            
            
		<div class="container2">

         <form method ="post" action="eanggota.php">

         	<input type="hidden" name="id" value="<?=$_GET["id"]?>">

		<div class="row">

		 	<div class="col-25">
				<label>Nim</label>
			</div>

			<div class="col-75">
				<input type="text" name=nim value="<?=$getdata["nim"]?>">
			</div>
		</div>

		<div class="row">

		 	<div class="col-25">
				<label>Nama</label>
			</div>

			<div class="col-75">
				<input type="text" name=nama value="<?=$getdata["nama"]?>">
			</div>
		</div>

		<div class="row">

		 	<div class="col-25">
				<label>Kelas</label>
			</div>

			<div class="col-75">
				<input type="radio" name=kelas value="10"> 10
				<input type="radio" name=kelas value="11"> 11
				<input type="radio" name=kelas value="12"> 12
			</div>
		</div>

		<div class="row">

		 	<div class="col-25">
				<label>Jurusan</label>
			</div>

			<div class="col-75">
				<input type="radio" name=jurusan value="IPA"> IPA
				<input type="radio" name=jurusan value="IPS"> IPS
			</div>
		</div>

		<div class="row">

		 	<div class="col-25">
				<label>Jenis Kelamin</label>
			</div>
			<div class="col-75">
				<input type="radio" name=jk value="Laki"> Laki
				<input type="radio" name=jk value="Perempuan"> Perempuan
			</div>
		</div>
		
		
		<button type ="submit"name="edit" class="submit">Simpan</button>
		
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