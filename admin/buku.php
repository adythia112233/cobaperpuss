<?php
error_reporting(0);
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
	<link href="tabel.css" rel="stylesheet" />
	<link href="cari.css" rel="stylesheet" />
	

	
	
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
                
                               <h2>DATA BUKU</h2>
<br><br>
		
<form action="" method="POST">
	
	<input type="submit" name="cari" value="search"/>
	
	<input type="text" name="query" placeholder="caridata"/>
</form>




<div class="table-wrapper-scroll-y">

  <table style="width:100%" class="table table-bordered table-striped"><br>
	
		<tr>
			<th>No</th>
			<th>Judul</th>
			<th>Pengarang</th>
			<th>Penerbit</th>
			<th>Deskripsi</th>
			<th>Tahun Terbit</th>
			<th>Jumlah Buku</th>
			<th>Lokasi Loker</th>
			<th>Foto</th>
			<th></th>
			<th>Opsi</th>

		</tr>

		<?php
		include 'koneksi.php';
		$no = 1;
		$query = $_POST['query'];
		if($query !=''){
			$getbuku = $connection->query("SELECT * FROM buku WHERE judul LIKE'%".$query."%' OR pengarang LIKE'%".$query."%' ");
		}else{
			$getbuku = $connection->query("SELECT * FROM buku Order by tahunterbit DESC");
		}
		include 'koneksi.php';
		
		while($fetchbuku = $getbuku->fetch_assoc()){


			?>
		
		<tr>
			<td><?php echo $no++?></td>
			<td><?=$fetchbuku["judul"]?></td>
			<td><?=$fetchbuku["pengarang"]?></td>
			<td><?=$fetchbuku["penerbit"]?></td>
			<td><?=$fetchbuku["deskripsi"]?></td>
			<td><?=$fetchbuku["tahunterbit"]?></td>
			<td><?=$fetchbuku["jumlahbuku"]?></td>
			<td><?=$fetchbuku["lokasi"]?></td>
			<td><img style="width:100px" src="upload/<?php echo $fetchbuku ['foto'] ?>"></td>
			<td>
				<a href="ubah.php?id=<?=$fetchbuku["idbuku"]?>" class="btn">Edit</a>
			</td>
			<td>
				<a href="hapus.php?id=<?=$fetchbuku["idbuku"]?>" class="btn">Hapus</a>
			</td>
				
		</tr>
			<?php } ?>
	
	
</table>

	</div><br>
	<a href="tambah.php" class="btn btn-warning">Tambah Data</a>
	
                       
                    </div>
                </div>
                
               
               
    </div>
           
            </div>
			

</BODY>


</html>