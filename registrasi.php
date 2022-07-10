<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Registration</title>
		<style>
		body {
			background-image: url(images/Background/kontro.png);

		}

		a{
			text-decoration: none;
		}

		a:hover {
			color: pink;
		}

		.form {
			box-shadow: 0 10px 10px 0 rgba(2, 2, 2, 2.5);
			border: 4px solid #575D63;
			width: 30%;
			height: 450px;
			border-radius: 20px 30px 20px 30px;
			padding-top: 20px;
			padding-left: 20px;
			color: black;
		}
	</style>
	</head>
<body>
	<center>
		<div class="form">
			<h1>Form Registrasi</h1>
			<form action="proses_registrasi.php" method="post">
				<label>Username</label><br/>
				<input type="text" name="username" required /><br><br>
				<label>Nama</label><br/>
				<input type="text" name="name" required> <br><br>
				<label>Email</label><br/>
				<input type="email" name="email" required /><br><br>
				<label>Password</label><br/>
				<input type="password" name="password" required /><br><br>
				<input type="submit" name="submit" value="Register" />
			</form>
		</div>
	</center>
</body>
</html>