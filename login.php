<!DOCTYPE html>
<html>
	<head>
		<title>Login Form</title>
	</head>
	
<body>
	<center>
		<div class="form">
			<h1>LOGIN</h1>

			<?php if (isset($error)) :?>
				<script type="text/javascript">alert('Gagal Login');</script>
			<?php endif; ?>

			<form method="post" action="index.html">
				<label>Username</label><br/>
				<input type="text" name="username" placeholder="Masukkan Username" required><br/><br/>
				<label>Password</label><br/>
				<input type="password" name="password" placeholder="Masukkan Password" required><br/><br/>
				<input type="submit" name="submit" value="Login">
			</form>
			<p>Belum Registrasi? <a href='registrasi.php'>Silahkan Register Disini</a></p>
		</div>
	</center>
</body>
</html>