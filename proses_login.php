<?php 
	session_start();
	include'koneksi.php';

	$username = $_POST['username'];
	$password = $_POST['password'];

	$login = mysqli_query($koneksi, "SELECT * FROM users WHERE username = '$username' AND password = '$password'");
	$cek = mysqli_num_rows($login);

	if ($cek > 0) {
		$data = mysqli_fetch_assoc($login);
		if ($data['level']=="admin") {
			$_SESSION['username'] = $username;
			header("location:../index.html");
		}else if($data['level']=="user"){
			$_SESSION['username'] = $username;
			$_SESSION['nama'] = $nama;
			$_SESSION['level'] = "user";
			header("location:index.html");
		}else{
			echo "<script> alert('Gagal Login'); document.location.href='login.php'</script>";
		}
	}
 ?>