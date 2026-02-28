<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Set Menu - Pawon Djawa</title>

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/setmenu.css') }}">
</head>
<body>
@include('layouts.Header')
<div class="container">

    <!-- LOGO -->
    <a href="{{ route('paket') }}">
        <img src="{{ asset('images/logo.png') }}" class="logo">
    </a>

    <!-- TITLE -->
    <div class="title">
       PILIH PAKET MENU
    </div>

    <!-- NAV -->
    <div class="menu-nav">

        <a href="{{ route('setmenu') }}" class="menu-btn active">
            Set Menu
        </a>

        <a href="{{ route('prasmanan') }}" class="menu-btn">
            Prasmanan
        </a>

        <a href="{{ route('nasikotak') }}" class="menu-btn">
            Nasi Kotak
        </a>

    </div>

    <!-- CARD MENU -->
    <div class="card-container">
<a href="{{ route('reservasi', ['kategori' => 'setmenu', 'menu' => 'A']) }}">
    <div class="card">
        <h2>Menu A</h2>
        <div class="price">
            Rp 150.000
        </div>

        <b>Makanan</b>
        <ul>
            <li>Ayam Goreng / Panggang</li>
            <li>Gurami Bakar / Asam Manis</li>
            <li>Sate Ayam / Cumi Goreng</li>
            <li>Udang Tauco</li>
            <li>Kangkung Terasi</li>
            <li>Sayur Asam</li>
            <li>Tahu Tempe Goreng</li>
            <li>Nasi Putih</li>
            <li>Buah-buahan</li>
        </ul>
    </div>
</a>

<a href="{{ route('reservasi', ['kategori' => 'setmenu', 'menu' => 'B']) }}">
        <!-- Menu B -->
        <div class="card">

            <h2>Menu B</h2>

            <div class="price">
                Rp 180.000
            </div>

            <b>Makanan</b>
            <ul>
                <li>Ayam Goreng</li>
                <li>Gurami Bakar</li>
                <li>Gulai Kepala Ikan</li>
                <li>Sate Ayam</li>
                <li>Udang Saus Mentega</li>
                <li>Tauge Ikan Asin</li>
                <li>Sop Ayam</li>
                <li>Nasi Putih</li>
                <li>Buah-buahan</li>
            </ul>

        </div>
</a>

<a href="{{ route('reservasi', ['kategori' => 'setmenu', 'menu' => 'C']) }}">
        <!-- Menu C -->
        <div class="card">

            <h2>Menu C</h2>

            <div class="price">
                Rp 290.000
            </div>

            <b>Makanan</b>
            <ul>
                <li>Ayam Goreng</li>
                <li>Gurami Bakar</li>
                <li>Gulai Kepala Ikan</li>
                <li>Kepiting</li>
                <li>Udang Tauco</li>
                <li>Kangkung Terasi</li>
                <li>Sayur Asam</li>
                <li>Nasi Putih</li>
                <li>Buah-buahan</li>
            </ul>

        </div>
</a>

<a href="{{ route('reservasi', ['kategori' => 'setmenu', 'menu' => 'D']) }}">
        <!-- Menu D -->
        <div class="card">

            <h2>Menu D</h2>

            <div class="price">
                Rp 380.000
            </div>

            <b>Makanan</b>
            <ul>
                <li>Ayam Goreng</li>
                <li>Gurami Bakar</li>
                <li>Gulai Kepala Ikan</li>
                <li>Udang Galah</li>
                <li>Kepiting</li>
                <li>Sate Ayam</li>
                <li>Kangkung Terasi</li>
                <li>Nasi Putih</li>
                <li>Buah-buahan</li>
            </ul>

        </div>
</a>

    </div>

</div>

</body>
</html>
