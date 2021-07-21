<?php
if(isset($_POST['login_admin'])){
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = mysqli_real_escape_string($koneksi, md5($_POST['password']));

    require_once __DIR__."/../pages/koneksi.php";
    
    $query = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
    var_dump($query); die();
    $result = mysqli_query($koneksi, $query);

    if(mysqli_num_rows($result) > 0){
        $data = mysqli_fetch_assoc($result);

        $_SESSION['id_admin'] = $data['id_admin'];
        $_SESSION['username'] = $data['username'];

        header("Location: ../pages/dashboard.php");
    }
    else {
        header("Location: login.php");
    }
}
else {
    header("Location: login.php");
}
?>