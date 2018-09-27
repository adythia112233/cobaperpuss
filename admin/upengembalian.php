<?php
session_start();
if(!isset($_GET["id"])){
	header("location:riwayatpeminjaman.php");
	exit();
}

include "koneksi.php";

$id = $_GET["id"];
$getdata = $connection->query("SELECT * FROM pengembalian WHERE idpengembalian = ".$id);

if($getdata ->num_rows==0){
	header("location:riwayatpeminjaman.php");
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

				<div id="page-wrapper" >
            <div id="page-inner">
            	<h2>TAMBAH PRODUK</h2><BR>
            
              

         <form method ="post" action="epengembalian.php" >
         	<div>
		<label>ID Buku</label>
			<input type="text" name=idbuku value="<?=$getdata["idbuku"]?>">
		</div>
		<div>
			<label>Judul</label>
			<input type="text" name=judul value="<?=$getdata["judul"]?>">
		</div>
		<div>
			<label>Pengarang</label>
			<input type="text" name=pengarang value="<?=$getdata["pengarang"]?>">
		</div>
		<div>
			<label>Penerbit</label>
			<input type="text" name=penerbit value="<?=$getdata["penerbit"]?>">
		</div>
		<div>
			<label>Nim</label>
			<input type="text" name=nim value="<?=$getdata["nim"]?>">
		</div>
		<div>
			<label>Nama</label>
			<input type="text" name=nama value="<?=$getdata["nama"]?>">
		</div>
		<div>
			<label>Kelas</label>
			<input type="text" name=kelas value="<?=$getdata["kelas"]?>">
		</div>
		<div>
			<label>Tanggal Kembali</label>
			<input type="date" name=tglkembali value="<?=$getdata["tglkembali"]?>">
		</div>
		<div>
			<label>Jumlah Buku</label>
			<input type="text" name=jumlahbuku value="<?=$getdata["jumlahbuku"]?>">
		</div>
		<div>
			<label>Status</label>
			<input type="radio" name=status value="Kembali">Kembali
		</div>
		
		
		<button type ="submit"name="save" class="btn">Simpan</button>
		
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