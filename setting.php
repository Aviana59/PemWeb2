<?php
require_once 'koneksi.php';
if(!$_SESSION){
    header("Location: signin.php");
}
if(isset($_POST['signout'])){
    $signout = $auth->signout();
    if ($signout){
        header('Location: signin.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;0,700;1,300&family=Poppins:wght@400;600;700&display=swap"
        rel="stylesheet">
    <title>Setting-Alokasa</title>
</head>

<body>
    <div class="bg-primary header-setting">
        <a href="index2.php">
            <p style="font-size: 30px; color:white;">&#x2190</p>
        </a>
        <p>Setting</p>
    </div>
    <main>
        <div class="user">
            <img src="assets/images/profile.png" alt="profile" width="150px">
            <h2><?= $_SESSION['user']?></h2>
        </div>
        <div class="content-setting">
            <div class="sub-setting">
                <h4>Akun</h4>
                <p style="font-size: 13px;">Notifikasi keamanan, ganti password</p>
            </div>
            <div class="sub-setting">
                <h4>Privasi</h4>
                <select name="privasi">
                    <option value="a">Yang memiliki link bisa melihat</option>
                    <option value="b">Tidak ada yang bisa melihat</option>
                </select>
            </div>
            <div class="sub-setting">
                <h4>Bahasa</h4>
                <select name="bahasa">
                    <option value="x">Bahasa Indonesia</option>
                    <option value="y">Bahasa Inggris</option>
                </select>
            </div>
            <form  method="post">
                <button name="signout" type="submit">Sign Out</button>
            </form>
        </div>
    </main>
</body>

</html>