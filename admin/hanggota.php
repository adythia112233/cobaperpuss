<?php

session_start();
	if(isset($_GET["id"])) {
		include 'koneksi.php';

		$connection->query("DELETE FROM anggota WHERE idanggota = ".$_GET["id"]);
	}

	header("location:anggota.php");
?>