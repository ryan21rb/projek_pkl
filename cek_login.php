<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'koneksi.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($con,"select * from users where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['level']=="admin"){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:halaman_admin.php");
 
	// cek jika user login sebagai directory
	}else if($data['level']=="directory"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "directory";
		// alihkan ke halaman dashboard directory
		header("location:halaman_directory.php");
	
		// cek jika user login sebagai employe
	}else if($data['level']=="employe"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "employe";
		// alihkan ke halaman dashboard employe
		header("location:halaman_employe.php");
 
	// cek jika user login sebagai manaer
	}else if($data['level']=="manager"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "manager";
		// alihkan ke halaman dashboard manager
		header("location:halaman_manager.php");
 
	}else{
 
		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}
 
?>