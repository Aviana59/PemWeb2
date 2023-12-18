<?php 

  // panggil koneksi ke database
  require_once 'koneksi.php';

  // jika user klik tombol login
  if(isset($_POST['kirim'])){

    // jalankan fungsi login dari class auth
    if($auth->signin($_POST['username'],$_POST['password'])){

      // redirect ke index
      header("location: index.php");
    }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;0,700;1,300&family=Poppins:wght@400;600;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <style>
        * {
            margin: 0;
            font-family: "Merriweather";
        }
    </style>
</head>

<body>
    <main class="flex space-between flex-center full-height padding-md" style="background-color: #FBE0DB">
        <section class="text-center side-image">
            <img src="assets/images/asset.png" height="100%" alt="" />
        </section>
        <section class="login-form text-center">
            <h1 style="margin-bottom: 10px" class="text-primary margin-top-md font-xl">
                Welcome!
            </h1>
            <p>Masukan detail anda</p>
            <form method="post">
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="username"/>
                    <label for="">Password</label>
                    <input type="password" name="password"/>
                    <button type="submite" name="kirim" class="button-primary" style="margin-top: 2vh; width: 100%; text-align: center;">
                        Sign in
                    </button>
                    <div class="text-center" style="margin-top: 2vh; width: 100%;">

                        <p>Belum Punya Akun?</p>
                        <a href="signup.php" style="font-weight: 600; color: black;">Sign Up</a>
                    </div>
            </div>
        </form>
        </section>
    </main>
</body>

</html>