<?php

session_start();
	if(isset($_GET["id"])) {
		include 'koneksi.php';

		$connection->query("DELETE FROM pengembalian WHERE idpengembalian = ".$_GET["id"]);
	}

	header("location:riwayatpeminjaman.php");
?>