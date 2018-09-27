<?php

session_start();
	

	if(isset($_POST["save"])) {
		include 'koneksi.php';
		$idfalidasi = $_POST["idfalidasi"];
		$idbuku = $_POST["idbuku"];
		$judul = $_POST["judul"];
		$pengarang = $_POST["pengarang"];
		$penerbit = $_POST["penerbit"];
		$nim = $_POST["nim"];
		$nama = $_POST["nama"];
		$kelas = $_POST["kelas"];
		$tglpinjam = $_POST["tglpinjam"];
		$tglkembali = $_POST["tglkembali"];
		$jumlahbuku = $_POST["jumlahbuku"];
		$status = $_POST["status"];
		


		

			
			
			$connection->query("INSERT INTO peminjaman VALUES (null,'".$idfalidasi."','".$idbuku."','".$judul."','".$pengarang."','".$penerbit."','".$nim."','".$nama."','".$kelas."','".$tglpinjam."','".$tglkembali."','".$jumlahbuku."','".$status."' ) ");

			$message ="Berhasil Menambah Data";
		}

		$_SESSION["message"] = $message;


	header("location:fpeminjam.php");
	exit();

?>
