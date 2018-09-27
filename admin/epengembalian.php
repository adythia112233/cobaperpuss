<?php

session_start();
	if(isset($_POST["judul"])) {
		include 'koneksi.php';

		$idbuku = $_POST["idbuku"];
		$judul = $_POST["judul"];
		$pengarang = $_POST["pengarang"];
		$penerbit = $_POST["penerbit"];
		$nim = $_POST["nim"];
		$nama = $_POST["nama"];
		$kelas = $_POST["kelas"];
		$tglkembali = $_POST["tglkembali"];
		$jumlahbuku = $_POST["jumlahbuku"];
		$status = $_POST["status"];


		$message ="";

		if($idbuku==""){
			$message ="Silahkan Masukan ID Buku";
		}else if($judul==""){
			$message ="Silahkan Masukan Judul";
		}else if($pengarang==""){
			$message ="Silahkan Masukan  Pengarang";
		}else if($penerbit==""){
			$message ="Silahkan Masukan Penerbit";
		}else if($nim==""){
			$message ="Silahkan Masukan Nim";
		}else if($nama==""){
			$message ="Silahkan Masukan Nama";
		}else if($kelas==""){
			$message ="Silahkan Masukan Kelas";
		}else if($tglkembali==""){
			$message ="Silahkan Masukan Tgl Kembali";
		}else if($jumlahbuku==""){
			$message ="Silahkan Masukan Jumlah Buku";
		}else if($status==""){
			$message ="Silahkan Masukan Status";
		
		
		
		}else{


			
			

			

			$connection->query("UPDATE pengembalian SET idbuku='".$idbuku."',judul='".$judul."',pengarang='".$pengarang."',penerbit='".$penerbit."',nim='".$nim."',nama='".$nama.,"',kelas='".$kelas.",tglkembali='".$tglkembali."',jumlahbuku='".$jumlahbuku."',status='".$status."' WHERE idpengembalian=".$idpengembalian);

			
			
		}

		$_SESSION["message"] = $message;

	}
	header("location:riwayatpeminjaman.php");
	exit();

?>