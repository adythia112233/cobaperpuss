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
	<link rel="stylesheet" type="text/css" href="jquery.bxslider.css">
	
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


		<div id="slider">
			<ul id="gambar-slider">
				<li>
					<img alt="slider DM" src="sekolah1.jpg" width="100%"/>
				</li>

				<li>
					<img alt="slider DM" src="sekolah2.jpg" width="100%" />
				</li>

				<li>
					<img alt="slider DM" src="sekolah3.jpg" width="100%" />
				</li>
			</ul>
		</div>

		<div id="isi">
			
			<div id="client">
				<div id="isi-client">
					
			</div>

		
			<div id="opening">
				<div id="bungkus-opening">
					<div id="isi-opening">
						<div id="subjudul-opening"></div>
						<div id="judul-opening">SMAN 24 KAB.TANGERANG</div>
						<div id="deskripsi-opening">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </div>
						
					</div>
				</div>
			</div>

			<div id="isi1">
			
			<div id="client1">
				<div id="isi-client1">
					
				</div>
			</div>

			
			<div id="opening1">
				<div id="bungkus-opening1">
					<div id="isi-opening">
						<div id="subjudul-opening1">KENALI KAMI</div>
						<div id="judul-opening1">LEBIH DEKAT</div>
						<div id="deskripsi-opening1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
						
					</div>
				</div>
			</div>

			<div id="footer">
				<div id="bungkus-footer">
					<div id="label-footer">Temukan kami</div>

					<div id="sosmed-footer">
						<img id="facebook" alt="medsos facebook" src="facebook.png" />
						<img id="twitter" alt="medsos twitter" src="twitter.png" />
						<img id="instagram" alt="medsos instagram" src="instagram.png" />
						<img id="linkedin" alt="medsos linkedin" src="linkedin.png" />
						<img id="behance" alt="medsos behance" src="behance.png" />
					</div>

					<div>Telp. <span id="telp">(021) 55221xx</span> | Umum: <span id="email-umum">SMAN24@GMAIL.coM</span> | Penawaran: <span id="email-penawaran">penawaran@tp.co.id</span></div>

					<div id="copyright"> &copy; 2018 SMAN 24 KAB. TANGERANG.</div>
				</div>
			</div>
		</div>


</BODY>

<script src="jquery-2.1.1.min.js"></script>
		<script src="jquery.bxslider.min.js"></script>
		<script>
			$('#gambar-slider').bxSlider({
				mode: 'horizontal',
				slideMargin: 0,
				auto: true,
				pager: false
			});
		</script>

</html>