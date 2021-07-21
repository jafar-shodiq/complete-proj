<?php
session_start();
if(isset($_POST['login_admin'])){
    $username = $_POST['username'];
    $password = md5($_POST['pass']);

    require_once __DIR__."/../pages/koneksi.php";
    
	$query = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($koneksi, $query) OR die(mysqli_error($koneksi));

    if(mysqli_num_rows($result) > 0){
        $data = mysqli_fetch_assoc($result);

        $_SESSION['id_admin'] = $data['id_admin'];
        $_SESSION['username'] = $data['username'];

        header("Location: ../pages/dashboard.php");
    }
    else {
        header("Location: ../login/login.php");
    }
}
else {
    header("Location: ../login/login.php");
}
?>