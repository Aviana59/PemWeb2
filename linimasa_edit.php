<?php
include('koneksi.php');
include_once('linimasa_controller.php');
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
</body>