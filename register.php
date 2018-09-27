<?php
include 'koneksi.php';
session_start();
?>
<html>
<head>
    <title> Daftar Anggota</title>
    <link rel="stylesheet" type="text/css" href="admin/style_login.css">
</head>
    
<body>
    <div class="login">

        <h2>Daftar Anggota</h2>
         <form method ="post" action="daftaranggota.php" >

        <div>
			<label>Nim</label>
			<input style="width: 100%" type="text" name=nim>
		</div>
		<div>
			<label>Nama</label>
			<input style="width: 100%" type="text" name=nama>
		</div>
		<div>
			<label>Kelas</label><br><br>
			<input type="radio" name=kelas value="10"> 10
			<input type="radio" name=kelas value="11"> 11
			<input type="radio" name=kelas value="12"> 12
		</div><br>
		<div>
			<label>Jurusan</label><br><br>
			<input type="radio" name=jurusan value="IPA"> IPA
			<input type="radio" name=jurusan value="IPS"> IPS
		</div><br>
		<div>
			<label>Jenis Kelamin</label><br><br>
			<input type="radio" name=jk value="Laki"> Laki
			<input type="radio" name=jk value="Perempuan"> Perempuan
		</div>
		
		
		<button type ="submit"name="save" class="btn">Simpan</button>
		
	</form>
	<?php
			if(isset($_SESSION["message"])){
				echo $_SESSION["message"];
				unset($_SESSION["message"]);
			}

		?>
           
         <p>
            Sudah Mempunyai Akun ? <a href="login.php"> Silahkan Login</a>
         </p>
         
        </form>
        

    </div>
    </body>
</html>