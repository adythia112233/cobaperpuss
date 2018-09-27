<?php
include 'koneksi.php';
session_start();
?>
<html>
<head>
    <title> Masuk Akun</title>
    <link rel="stylesheet" type="text/css" href="admin/style_login.css">
</head>
    
<body>
    <div class="login">

        <h2>LOGIN</h2>
        <form method="post" action="">
			<label> Nim </label>
            <input type="text" name="nim">
			
			<label> Nama </label>
            <input type="text" name="nama">
            <button class="btn btn-primary" name="login">Login</button>
           
         <p>
            Belum Mempunyai Akun ? <a href="register.php"> Silahkan Registrasi </a>
         </p>
         
        </form>
        <?php
            if(isset($_POST['login']))
            {
                $getbuku = $connection->query("SELECT * FROM anggota WHERE nim='$_POST[nim]' AND nama='$_POST[nama]' ");

                $yangcocok = $getbuku->num_rows;
                if($yangcocok==1)
                {
                    $_SESSION['user']=$getbuku->fetch_assoc();
                    echo "<div class='alert alert-info'>Login Berhasil</div>";
                    echo "<meta http-equiv='refresh' content='1;url=perpustaka.php' ";
                }
                else
                {
                    echo "<div class='alert alert-danger'>Login Gagal</div>";
                    echo "<meta http-equiv='refresh' content='1;url=login.php' ";
                }
            }
        ?>
    

    </div>
    </body>
</html>