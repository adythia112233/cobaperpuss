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
	
	<link href="tabel.css" rel="stylesheet" />

	

	
	
</head>
<BODY>
 <a href="index.php">
    <button onClick="window.print();">Print</button>
    </a>
	

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
					
		</tr>
			<?php } ?>
	
	
</table>

<br><br><br><br>

<h2>PENGEMBALIAN BUKU</h2>



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
					
		</tr>
			<?php } ?>
	
	
</table>


</BODY>


</html>
<script>
window.print();
</script> 