<?php

session_start();
	if(isset($_GET["id"])) {
		include 'koneksi.php';

		$connection->query("DELETE FROM peminjaman WHERE idpeminjam = ".$_GET["id"]);
	}

	header("location:riwayatpeminjaman.php");
?>