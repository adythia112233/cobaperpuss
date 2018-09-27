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
                
                               <h2>DATA ANGGOTA</h2>

		<br><br>
<form action="" method="POST">
	
	<input type="submit" name="cari" value="search"/>
	<input type="text" name="query" placeholder="caridata"/>
</form>




<div class="table-wrapper-scroll-y">

  <table  class="table table-bordered table-striped"><br>
		<tr>
			<th>No</th>
			<th>Nim</th>
			<th>Nama</th>
			<th>Kelas</th>
			<th>Jurusan</th>
			<th>Jenis Kelamin</th>
			<th>Opsi</th>

		</tr>

		<?php
		include 'koneksi.php';
		$no = 1;
		$query = $_POST['query'];
		if($query !=''){
			$getbuku = $connection->query("SELECT * FROM anggota WHERE nim LIKE'%".$query."%' OR nama LIKE'%".$query."%' ");
		}else{
			$getbuku = $connection->query("SELECT * FROM anggota Order by kelas ");
		}
		include 'koneksi.php';
		
		while($fetchbuku = $getbuku->fetch_assoc()){


			?>
		
		<tr>
			<td><?php echo $no++?></td>
			<td><?=$fetchbuku["nim"]?></td>
			<td><?=$fetchbuku["nama"]?></td>
			<td><?=$fetchbuku["kelas"]?></td>
			<td><?=$fetchbuku["jurusan"]?></td>
			<td><?=$fetchbuku["jk"]?></td>
			
			<td>
				<a href="uanggota.php?id=<?=$fetchbuku["idanggota"]?>" class="btn">Edit</a>
			
				<a href="hanggota.php?id=<?=$fetchbuku["idanggota"]?>" class="btn">Hapus</a>
			</td>
				
		</tr>
			<?php } ?>
	
	
</table>

	</div><br>
	<a href="fanggota.php" class="btn btn-warning">Tambah Data</a>
	
                       
                    </div>
                </div>
                
               
               
    </div>
           
            </div>
			

</BODY>


</html>