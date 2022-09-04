<?php 

session_start();
include 'config.php';

 
$email = $_POST['email'];
$pass = md5($_POST['password']);
 
$sql = mysqli_query($conf, "SELECT * FROM users WHERE email='$email' AND password='$pass'");
$cek = mysqli_num_rows($sql);


// var_dump($pass);

if($cek > 0){
	$data = mysqli_fetch_assoc($sql);
	if($data['role']=="User"){
		$_SESSION['nama'] =  $data['nama'];
		$_SESSION['role'] = "User";
		header("location:layout/user.php");
	}else if($data['role']=="Admin"){
		$_SESSION['nama'] = $data['nama'];
		$_SESSION['role'] = "Admin";
		header("location:layout/admin.php");
	}else{
		echo "<script>alert('Login gagal. Silahkan coba lagi!'); window.location='index.php';</script>";
	}	
}else{
     echo "<script>alert('Login gagal. Email atau Password salah!'); window.location='index.php';</script>";
}
?>