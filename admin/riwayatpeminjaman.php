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
                
    <a href="print.php">
    <button class="btn btn-info">Print</button>
    </a>                            

<br><br>
		
<form action="" method="POST">
	
	<input type="submit" name="cari" value="search"/>
	<input type="text" name="query" placeholder="caridata"/>
</form>


<br><br>

<div class="table-wrapper-scroll-y1">

<h2>PEMINJAMAN BUKU</h2>

  <table  class="table table-bordered table-striped"><br>
	
		<tr>
			<th>No</th>
			<th>Judul</th>
			<th>Pengarang</th>
			<th>Penerbit</th>
			<th>ID Buku</th>
			<th>Nim</th>
			<th>Nama</th>
			<th>Kelas</th>
			<th>Tanggal Pinjam</th>
			<th>Tanggal Kembali</th>
			<th>Jumlah Buku</th>
			<th>Status</th>
			<th></th>
			<th>Opsi</th>


		</tr>

		<?php
		include 'koneksi.php';
		$no = 1;
		$query = $_POST['query'];
		if($query !=''){
			$getbuku = $connection->query("SELECT * FROM peminjaman WHERE nama LIKE'%".$query."%' OR judul LIKE'%".$query."%' ");
		}else{
			$getbuku = $connection->query("SELECT * FROM peminjaman WHERE status='Pinjam' ");
		}
		include 'koneksi.php';
		
		while($fetchbuku = $getbuku->fetch_assoc()){


			?>
		
		<tr>
			<td><?php echo $no++?></td>
			<td><?=$fetchbuku["judul"]?></td>
			<td><?=$fetchbuku["pengarang"]?></td>
			<td><?=$fetchbuku["penerbit"]?></td>
			<td><?=$fetchbuku["idbuku"]?></td>
			<td><?=$fetchbuku["nim"]?></td>
			<td><?=$fetchbuku["nama"]?></td>
			<td><?=$fetchbuku["kelas"]?></td>
			<td><?=$fetchbuku["tglpinjam"]?></td>
			<td><?=$fetchbuku["tglkembali"]?></td>
			<td><?=$fetchbuku["jumlahbuku"]?></td>
			<td><?=$fetchbuku["status"]?></td>
			<td>
				<a href="fpengembalian.php?id=<?=$fetchbuku["idpeminjam"]?>" class="btn btn-info">Pengembalian</a>
			
			</td>
			<td>
				<a href="hpeminjam.php?id=<?=$fetchbuku["idpeminjam"]?>" class="btn btn-info">Hapus</a>
			</td>		
		</tr>
			<?php } ?>
	
	
</table>

<br><br><br><br>

<h2>PENGEMBALIAN BUKU</h2>

<div class="table-wrapper-scroll-y">

  <table style="width:100%" class="table table-bordered table-striped"><br>
	
		<tr>
			<th>No</th>
			<th>Judul</th>
			<th>Pengarang</th>
			<th>Penerbit</th>
			<th>ID Buku</th>
			<th>Nim</th>
			<th>Nama</th>
			<th>Kelas</th>
			<th>Tanggal Pengembalian</th>
			<th>Jumlah Buku</th>
			<th>Status</th>
			<th></th>
			<th>Opsi</th>


		</tr>

		<?php
		include 'koneksi.php';
		$no = 1;
		$query = $_POST['query'];
		if($query !=''){
			$getbuku = $connection->query("SELECT * FROM pengembalian WHERE nama LIKE'%".$query."%' OR judul LIKE'%".$query."%' ");
		}else{
			$getbuku = $connection->query("SELECT * FROM pengembalian WHERE status='Kembali' ");
		}
		include 'koneksi.php';
		
		while($fetchbuku = $getbuku->fetch_assoc()){


			?>
		
		<tr>
			<td><?php echo $no++?></td>
			<td><?=$fetchbuku["judul"]?></td>
			<td><?=$fetchbuku["pengarang"]?></td>
			<td><?=$fetchbuku["penerbit"]?></td>
			<td><?=$fetchbuku["idbuku"]?></td>
			<td><?=$fetchbuku["nim"]?></td>
			<td><?=$fetchbuku["nama"]?></td>
			<td><?=$fetchbuku["kelas"]?></td>
			<td><?=$fetchbuku["tglkembali"]?></td>
			<td><?=$fetchbuku["jumlahbuku"]?></td>
			<td><?=$fetchbuku["status"]?></td>
			<td></td>
			<td>
				<a href="hpengembalian.php?id=<?=$fetchbuku["idpengembalian"]?>" class="btn btn-info">Hapus</a>
			</td>		
		</tr>
			<?php } ?>
	
	
</table>

	</div><br>
	
	
                       
                    </div>
                </div>
                
               
               
    </div>
           
            </div>
			

</BODY>


</html>