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
    <title>Upload-Alokasa</title>
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
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="setting.php">Setting</a></li>
                </div>
            </ul>
        </nav>
        <div class="content text-primary" style="margin-top: 20vh; padding: 50px;">
            <h2 style="font-size: 2em;">Abadikan moment Anda bersama Alokasa</h2>
        </div>
    </header>
    <main style="margin-top: 50vh;">

         <div class="form-upload">
            <p>Pilih Foto/Video Anda</p>
            <label class="custom-file-upload">
                <input type="file" id="files" name="files[]" onchange="checkFileExtension(this)"/>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"/></svg>
                <span>Choose a file</span>
            </label>
            <p>Masukkan tanggal</p>
            <input type="date"/>
            <p>Tambahkan judul</p>
            <input type="text">
            <p>Deskripsikan moment Anda</p>
            <input type="text">
            <p>Kategori moment</p>
            <select name="kategori">
                <option value="1">Pendidikan</option>
                <option value="2">Pekerjaan</option>
                <option value="3">Keluarga</option>
                <option value="4">Teman</option>
                <option value="5">Hiburan</option>
            </select>
            <p>Sesuaikan tampilan (Pilih template)</p>
            <div style="display: flex; flex-wrap:wrap">
                <img src="xxx" alt="Default">
                <img src="assets/images/template1.png" alt="template1" style="margin: 10px;" width="300px" height="200px">
                <img src="assets/images/template2.png" alt="template2" style="margin: 10px;" width="300px" height="200px">
            </div>
         </div>   
        
        <a href="index2.html"><button class="button-primary"
                style=" align-items: right; padding: 15px; margin: 20px;">Upload</button></a>
    </main>

    <footer style="margin-top: 5vh;">
        <address>
            <div id="contact" class="text-center">
                <span><i class="email-symbol">&#x2709</i> alokasa@gmail.com</span><br>
                <div class="instagram-symbol">
                    <img src="assets/images/logoInstagram.png" alt="logo instagram">
                    <span>alokasa_official</span>
                </div><br>
                <div class="twitter-symbol">
                    <img src="assets/images/logoTwitter.png" alt="logo twitter">
                    <span>alokasaofficial</span>
                </div>
            </div>
        </address>
    </footer>
</body>

<script>
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

</html>
