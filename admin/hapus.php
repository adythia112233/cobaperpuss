<?php

session_start();
	if(isset($_GET["id"])) {
		include 'koneksi.php';

		$connection->query("DELETE FROM buku WHERE idbuku = ".$_GET["id"]);
	}

	header("location:buku.php");
?>