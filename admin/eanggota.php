<?php

session_start();
	if(isset($_POST["nim"])) {
		include 'koneksi.php';

	$idanggota = $_POST["id"];
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$kelas = $_POST['kelas'];
	$jurusan = $_POST['jurusan'];
	$jk = $_POST['jk'];
	

		$message ="";

		if($nim==""){
			$message ="Silahkan Masukan Nim";
		}else if($nama==""){
			$message ="Silahkan Masukan Nama";
		}else if($kelas==""){
			$message ="Silahkan Masukan  Kelas";
		}else if($jurusan==""){
			$message ="Silahkan Masukan Jurusan";
		}else if($jk==""){
			$message ="Silahkan Masukan Jenis Kelamin";
		
		}else{


			

			$connection->query("UPDATE anggota SET nim='".$nim."',nama='".$nama."',kelas='".$kelas."',jurusan='".$jurusan."',jk='".$jk."' WHERE idanggota=".$idanggota);

			
			
		}

		$_SESSION["message"] = $message;

	}
	header("location:uanggota.php");
	exit();

?>