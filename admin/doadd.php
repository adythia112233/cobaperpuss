<?php

session_start();
	if(isset($_POST["save"])) {
		include 'koneksi.php';

		$judul = $_POST["judul"];
		$pengarang = $_POST["pengarang"];
		$penerbit = $_POST["penerbit"];
		$deskripsi = $_POST["deskripsi"];
		$tahunterbit = $_POST["tahunterbit"];
		$jumlahbuku = $_POST["jumlahbuku"];
		$lokasi = $_POST["lokasi"];
		$foto = $_FILES["foto"]["name"];
		$source = $_FILES["foto"]["tmp_name"];
		$folder = './upload/';


		$message ="";

		if($judul==""){
			$message ="Silahkan Masukan Judul";
		}else if($pengarang==""){
			$message ="Silahkan Masukan Pengarang";
		}else if($penerbit==""){
			$message ="Silahkan Masukan  Penerbit";
		}else if($deskripsi==""){
			$message ="Silahkan Masukan Deskripsi";
		}else if($jumlahbuku==""){
			$message ="Silahkan Masukan Jumlah Buku";
		}else if($lokasi==""){
			$message ="Silahkan Masukan Lokasi Loker";
		
		
		}else{


			move_uploaded_file($source,$folder.$foto);
			$connection->query("INSERT INTO buku VALUES (null,'".$judul."','".$pengarang."','".$penerbit."','".$deskripsi."','".$tahunterbit."','".$jumlahbuku."','".$lokasi."','".$foto."' ) ");

			$message ="Berhasil Menambah Data";
		}

		$_SESSION["message"] = $message;

	}
	header("location:tambah.php");
	exit();

?>
