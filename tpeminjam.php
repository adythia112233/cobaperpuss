<?php

session_start();
	

	if(isset($_POST["save"])) {
		include 'koneksi.php';
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
		


		

			
			
			$connection->query("INSERT INTO falidasi VALUES (null,'".$idbuku."','".$judul."','".$pengarang."','".$penerbit."','".$nim."','".$nama."','".$kelas."','".$tglpinjam."','".$tglkembali."','".$jumlahbuku."','".$status."' ) ");

			$message ="Berhasil Menambah Data";
		}

		$_SESSION["message"] = $message;


	header("location:falidasi.php");
	exit();

?>
