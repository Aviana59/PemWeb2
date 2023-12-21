<?php
// INCLUDE KONEKSI KE DATABASE
include_once("koneksi.php");

// AMBIL DATA DARI DATABASE BERDASARKAN DATA TERAKHIR DI INPUT
$result = mysqli_query($koneksi, "SELECT * FROM linimasa ORDER BY id DESC");

if($_POST){
    $result = $linimasa->delete($_POST['delete_linimasa']);
    
    if($result){
        header("Location: Dashboard.php");
    } else {
        echo'ERROR';
        die;
    }
}
?>

<html>

<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;0,700;1,300&family=Poppins:wght@400;600;700&display=swap"
        rel="stylesheet">
    <title>Dashboard-Alokasa</title>
</head>

<body>
	<header class="text-center" style="top: 0; position: absolute;">
        <nav class="navbar bg-transparent" id="navbar">
            <div class="logo text-primary text-bold" id="logo">Alokasa</div>

            <!-- NAVIGATION MENU -->
            <ul class="nav-links">
                <!-- USING CHECKBOX HACK -->
                <input type="checkbox" id="checkbox_toggle" />
                <label for="checkbox_toggle" id="hamburger" class="hamburger">&#9776;</label>

                <!-- NAVIGATION MENUS -->
                <div class="menu">
                    <li><a href="Dashboard.php">Home</a></li>
                    <li><a href="#review">Review</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="setting.php">Setting</a></li>
                </div>
            </ul>
        </nav>
        <div class="content text-primary" id="header-text" style="margin-top: 20vh; padding: 50px;">
            <h2 style="font-size: 3em;">Selamat datang di ALOKASA</h2>
            <h3>Dimana setiap pengalaman adalah bagian dari perjalanan</h3>
        </div>
    </header>

    <main style="padding: 20px;  margin-top: 50vh;">
        <section style="padding: 20px; margin-top: 10vh; position: relative;" id="linimasa">
            <div class="flex" style="justify-content: space-between;">
                <h1 style="font-size: 2em;">Linimasa</h1>
                <a href="upload.php" class="button button-seccondary center">Tambah linimasa &plus;</a>
            </div>
            <div class="linimasa-data" style="display: flex; flex-warp:warp; justify-content: space-evenly;">

            <?php
                while ($res = mysqli_fetch_array($result)) 
                {
                    ?>
                    <div class="card" style="width:250px">
                        <img src="image/<?php echo $res['file']; ?>" alt="Avatar" style="width:100%">
                        <div class="container">
                            <h4><b><?php echo $res['judul']; ?></b></h4>
                            <small><?php echo $res['tanggal']; ?></small>
                            <p><?php echo $res['deskripsi'];?></p>
                            <div class="flex action" style="margin-top: 2vh;">
                                <a href="linimasa_edit.php?id=<?php echo $res['id']; ?>" class="button-action">Edit &rarr;</a>
                                <form method="POST">
                                    <button type="submit" name="delete_linimasa" value="<?= $res['id'] ?>" class="button-action">Delete</button>
                                </form>
                                <a href="assets/file/<?php echo $res['id']; ?>" Download class="button-action">Download &darr;</a>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            ?>

            </div>
        </section>
        
        <hr style="width: 70%; margin: auto;  margin-top: 10vh; margin-bottom: 10vh;">

        <section style="padding: 20px; margin-top: 10vh; position: relative;" id="review">
            <div class="flex" style="justify-content: space-between;">
                <h1 style="font-size: 2em;">Review</h1>
            </div>
            <div>
                <form action="review_operator.php" method="POST">
                    <div style="margin-top: 20px; padding: 20px; text-align: left;">
                        <label style="margin-bottom:25px;" class="label" for="">Berikan penilaian Anda untuk situs kami: </label>
                        <input type="text" name="review" required class="login-form" />
                    </div>
                    <div style="padding: 5px 20px;">
                        <button style="padding: 15px 30px;" type="submit" name="save_review" class="button button-action">Submit</button>
                    </div>
                </form>
            </div>
        </section>
    </main>
    
	<footer>
        <address>
            <div id="contact" class="text-center">
                <span><i class="email-symbol">&#x2709</i> alokasa@gmail.com</span><br>
                <div class="instagram-symbol">
                    <img src="https://cdn.icon-icons.com/icons2/2714/PNG/96/instagram_logo_thin_icon_171701.png"
                        alt="logo instagram">
                    <span>alokasa_official</span>
                </div><br>
                <div class="twitter-symbol">
                    <img src="https://cdn.icon-icons.com/icons2/1143/PNG/96/twitterlogooutline_80724.png"
                        alt="logo twitter">
                    <span>alokasaofficial</span>
                </div>
            </div>
        </address>
    </footer>

</body>

</html>

<script>
    window.onload = function () {
        document.getElementById('header-text').style.opacity = 1;
        document.getElementById('header-text').style.transform = "translateX(0px)";
    }

    /* !TODO : Action to handle Navbar when user is scrolling */

    // get current height
    let currentHeight = window.pageYOffset;

    // function when user is scrolling
    window.onscroll = () => {
        // get previous height
        let prevHeight = window.pageYOffset;

        if (currentHeight > 300) {
            // handling navbar when scroll up by adding a class
            document.getElementById('navbar').classList.add('bg-primary')
            document.getElementById('navbar').classList.remove('bg-transparent')
            document.getElementById('logo').classList.add('text-seccondary')
            document.getElementById('logo').classList.remove('text-primary')
            document.getElementById('hamburger').classList.add('text-seccondary')
            document.getElementById('hamburger').classList.remove('text-primary')

        } else if (currentHeight < 300) {
            // handling navbar when scroll down by adding a class
            document.getElementById('logo').classList.remove('text-seccondary')
            document.getElementById('logo').classList.add('text-primary')
            document.getElementById('hamburger').classList.remove('text-seccondary')
            document.getElementById('hamburger').classList.add('text-primary')
            document.getElementById('navbar').classList.remove('bg-primary')
            document.getElementById('navbar').classList.add('bg-transparent')
        }

        // assign currentHeight with previous height
        currentHeight = prevHeight;
    }
</script>
