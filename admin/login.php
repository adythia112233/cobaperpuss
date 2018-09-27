<?php
include 'koneksi.php';
session_start();
?>
<html>
<head>
    <title> Masuk Akun</title>
    <link rel="stylesheet" type="text/css" href="style_login.css">
</head>
    
<body>
    <div class="login">

        <h2> LOGIN </h2>
        <form method="post" action="">
		
			<label> User </label>
            <input type="text" name="user">
			
			<label> Password </label>
            <input type="text" name="pass">
            <button class="btn btn-primary" name="login">Login</button>
        
        </form>
        <?php
            if(isset($_POST['login']))
            {
                $getbuku = $connection->query("SELECT * FROM admin WHERE username='$_POST[user]' AND password='$_POST[pass]' ");

                $yangcocok = $getbuku->num_rows;
                if($yangcocok==1)
                {
                    $_SESSION['admin']=$getbuku->fetch_assoc();
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