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
    <title>Alokasa</title>
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
                    <li><a href="index2.php">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="setting.php">Setting</a></li>
                </div>
            </ul>
        </nav>
        <div class="content text-primary" id="header-text" style="margin-top: 20vh; padding: 50px;">
            <h2 style="font-size: 3em;">Simpan kenangan indah anda</h2>
            <h3>Karena moment, sulit diulang kembali</h3>
        </div>
    </header>
    <main style="padding: 20px;  margin-top: 50vh;">
        <section class="flex" id="about">
            <div style="margin: 20px;">
                <img src="assets/images/asset.png" alt="" width="400vh"
                    style="background-size: cover; border-radius: 10px">
            </div>
            <div class="grow-4 text-center" style="margin: 20px">
                <div class="content" style="margin-top: 15vh;">
                    <h1 style="font-size: 2em;">About Us</h1>
                    <p style="font-weight: 1; font-size: 0.8em; margin-top: 5vh;">Alokasa hadir untuk membantu Anda
                        mengabadikan momen-momen berharga dalam hidup Anda. Kami memahami bahwa setiap pengalaman
                        memiliki nilai pribadi yang unik, dan itulah mengapa kami memberikan alat yang kuat untuk
                        merangkumnya. Linimasa pribadi Anda adalah kanvas untuk mengungkapkan kreativitas Anda.</p>
                </div>
            </div>
        </section>
        <hr style="width: 70%; margin: auto;  margin-top: 10vh;">

        <section style="padding: 20px; margin-top: 10vh; position: relative;" id="linimasa">
            <div class="flex" style="justify-content: space-between;">
                <h1 style="font-size: 2em;">Linimasa</h1>
                <a href="upload.php" class="button button-seccondary">Tambah linimasa &plus;</a>
            </div>
            <div class="flex linimasa-data" style="justify-content: space-evenly;">
                <div class="card">
                    <img src="assets/images/kelasBDL.jpeg" alt="Avatar" style="width:100%">
                    <div class="container">
                        <h4><b>Kelas basis data lanjutan</b></h4>
                        <small>Senin, 11 September 2023</small>
                        <div class="action" style="margin-top: 2vh;">
                            <button class="button-action">lihat &rarr;</button>
                            <button class="button-action">download &darr;</button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="assets/images/kelasBDL.jpeg" alt="Avatar" style="width:100%">
                    <div class="container">
                        <h4><b>Kelas basis data lanjutan</b></h4>
                        <small>Senin, 11 September 2023</small>
                        <div class="action" style="margin-top: 2vh;">
                            <button class="button-action">lihat &rarr;</button>
                            <button class="button-action">download &darr;</button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="assets/images/kelasBDL.jpeg" alt="Avatar" style="width:100%">
                    <div class="container">
                        <h4><b>Kelas basis data lanjutan</b></h4>
                        <small>Senin, 11 September 2023</small>
                        <div class="action" style="margin-top: 2vh;">
                            <button class="button-action">lihat &rarr;</button>
                            <button class="button-action">download &darr;</button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="assets/images/kelasBDL.jpeg" alt="Avatar" style="width:100%">
                    <div class="container">
                        <h4><b>Kelas basis data lanjutan</b></h4>
                        <small>Senin, 11 September 2023</small>
                        <div class="action" style="margin-top: 2vh;">
                            <button class="button-action">lihat &rarr;</button>
                            <button class="button-action">download &darr;</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section style="padding: 20px; margin-top: 10vh;">
            <h1 style="font-size: 2em;">Review</h1>
            <div class="flex review-data" style="justify-content: space-evenly; margin-top: 5vh;">
                <div class="card-review flex" style="align-items: center;">
                    <div class="icon">
                        <img src="assets/images/profile.png" alt="" srcset="" width="60vh">
                    </div>
                    <div class="comments">
                        <strong>User</strong>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                    </div>
                </div>
                <div class="card-review flex" style="align-items: center;">
                    <div class="icon">
                        <img src="assets/images/profile.png" alt="" srcset="" width="60vh">
                    </div>
                    <div class="comments">
                        <strong>User</strong>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. </p>
                    </div>
                </div>
                <div class="card-review flex" style="align-items: center;">
                    <div class="icon">
                        <img src="assets/images/profile.png" alt="" srcset="" width="60vh">
                    </div>
                    <div class="comments">
                        <strong>User</strong>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                    </div>
                </div>
                <div class="card-review flex" style="align-items: center;">
                    <div class="icon">
                        <img src="assets/images/profile.png" alt="" srcset="" width="60vh">
                    </div>
                    <div class="comments">
                        <strong>User</strong>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                    </div>
                </div>
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

        if (currentHeight > 350) {
            // handling navbar when scroll up by adding a class
            document.getElementById('navbar').classList.add('bg-primary')
            document.getElementById('navbar').classList.remove('bg-transparent')
            document.getElementById('logo').classList.add('text-seccondary')
            document.getElementById('logo').classList.remove('text-primary')
            document.getElementById('hamburger').classList.add('text-seccondary')
            document.getElementById('hamburger').classList.remove('text-primary')

        } else if (currentHeight < 350) {
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