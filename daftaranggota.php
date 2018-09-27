<?php
session_start();
	if(isset($_POST["save"])) {
		include 'koneksi.php';

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

	$connection->query("INSERT INTO anggota VALUES (null,'".$nim."','".$nama."','".$kelas."','".$jurusan."','".$jk."' )");

$message ="Berhasil Menambah Data";
		}

		$_SESSION["message"] = $message;

	}

	header("location:login.php");
	exit();

?>