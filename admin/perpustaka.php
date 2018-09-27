<?php
include 'koneksi.php';
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
	<link href="p.css" rel="stylesheet" />
	

	
	
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
                
                               <h2>PERPUSTAKAAN</h2>
                               <br><br>
                      
                       <?php 

                       $getbuku = $connection->query("SELECT * FROM admin ");
                       while($fetchbuku = $getbuku->fetch_assoc()){

                       ?>
                       <p> Selamat Datang Admin <?=$fetchbuku["nama_lengkap"]?></p>

                       <?php } ?>
                    </div>
                </div>
                
               
               
    </div>
           
            </div>
			

</BODY>


</html>