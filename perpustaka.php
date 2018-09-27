<?php
error_reporting(0);
include 'koneksi.php';
session_start();

if(!isset($_SESSION['user']))
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
	<link href="admin/style.css" rel="stylesheet" />
	<link href="admin/style2.css" rel="stylesheet" />
	<link href="admin/p.css" rel="stylesheet" />
	

	
	
</head>
<BODY>

	<div id="header">
			
			<img id="logo" alt="logo Dp" src="admin/logo.png" width="50" />
			
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
					<li><a href="peminjaman.php">Peminjaman</a></li>
					<li><a href="falidasi.php">Order Buku</a></li>
					<li><a href="riwayatpeminjaman.php">Riwayat Peminjam</a></li>
			</ul>
		</div>
			<div id = "konten">

				<div id="page-wrapper" >
            <div id="page-inner">
                
                              
                               <h2> Perpustakaan Online</h2>
                               <br><br><br>
                               <p>Selamat Datang <b> <?php echo $_SESSION["user"]["nama"]?> ( <?php echo $_SESSION["user"]["nim"]?> ) <b></p>
                      
                      
                    </div>
                </div>
                
               
               
    </div>
           
            </div>
			

</BODY>


</html>