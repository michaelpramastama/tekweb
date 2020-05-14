<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="shortcut icon" href="image/truck.png">
   <link rel="stylesheet" type="text/css" href="include/css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="include/style.css">
   <link rel="stylesheet" type="text/css" href="include/sweetalert.css">
</head>
<body>
	<!-- <center>
    <h2>MABA CUP 2019</h2>
    </center>
	<br/> -->
	<!-- cek pesan notifikasi -->
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
					<img src="image/lock.png" alt="Avatar">
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
			</div>
			<div class="modal-footer">
				<a href="#">PT. Logistik</a>
			</div>
		</div>
        
	</div>
</div>




<!-- 
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
 
		<form action="cek_login.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
 
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
			
		</form>
		
	</div> -->
  

    <script src="include/js/jquery.min.js"></script>
    <script src="include/js/bootstrap.min.js"></script>
   
</body>
</html>