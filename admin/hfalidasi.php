<?php

session_start();
	if(isset($_GET["id"])) {
		include 'koneksi.php';

		$connection->query("DELETE FROM falidasi WHERE idfalidasi = ".$_GET["id"]);
	}

	header("location:falidasi.php");
?>