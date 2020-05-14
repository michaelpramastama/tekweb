<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="shortcut icon" href="">
    <link rel="stylesheet" type="text/css" href="css/sweetalert.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>

	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo ' <script src="include/js/sweetalert.min.js"></script>';
            echo '<script language="javascript">';
            echo 'sweetAlert("Oops..","Password Or Username Wrong","error")';
            echo '</script>';
			
		}else if($_GET['pesan'] == "belum_login"){
			echo ' <script src="include/js/sweetalert.min.js"></script>';
            echo '<script language="javascript">';
            echo 'alert("Anda harus login untuk mengakses halaman admin")';
            echo '</script>';
		}
	}
	?>


<div>
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">
				<div class="avatar">
				</div>				
				<h4 class="modal-title">Login</h4>	
			</div>
			<div class="modal-body">
				<form action="cek_login.php" method="post">
					<div class="form-group">
						<input type="text" class="form-control" name="username" placeholder="Username" required="required">		
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="password" placeholder="Password" required="required">	
					</div>        
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Login</button>
					</div>
				</form>
				<p>Belum Punya Akun ? <a href="daftar.php">Klik Disini</a></p>
			</div>
			<div class="modal-footer">
				<a href="#">Sosmed</a>
			</div>
		</div>
	</div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
   
</body>
</html>