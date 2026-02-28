<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Nasi Kotak - Pawon Djawa</title>

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/nasikotak.css') }}">
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

        <a href="{{ route('setmenu') }}" class="menu-btn">
            Set Menu
        </a>

        <a href="{{ route('prasmanan') }}" class="menu-btn">
            Prasmanan
        </a>

        <a href="{{ route('nasikotak') }}" class="menu-btn active">
            Nasi Kotak
        </a>

    </div>
<a href="{{ route('reservasi', ['kategori' => 'paket', 'menu' => 'A']) }}">
    <!-- CARD -->
    <div class="card-container">

        <!-- Paket A -->
        <div class="card">

            <h2>Paket A</h2>

            <div class="price">
                Rp 45.000
            </div>

            <ul>
                <li>Ayam Goreng / Panggang</li>
                <li>Cap Cay Sayur</li>
                <li>Tahu Tumis Udang Manis / Tauco Kacang Panjang</li>
                <li>Sambal Teri + Tempe / Sambal Teri Pete</li>
                <li>Lalapan</li>
                <li>Kerupuk</li>
                <li>Nasi Putih</li>
                <li>Buah-Buahan</li>
            </ul>

        </div>
</a>

<a href="{{ route('reservasi', ['kategori' => 'paket', 'menu' => 'B']) }}">
        <!-- Paket B -->
        <div class="card">

            <h2>Paket B</h2>

            <div class="price">
                Rp 49.000
            </div>

            <ul>
                <li>Ayam Goreng / Panggang</li>
                <li>Daging Ikan Asam Manis</li>
                <li>Tahu Tumis Udang Manis / Tauco Kacang Panjang</li>
                <li>Sambal Teri + Tempe / Sambal Teri Pete</li>
                <li>Lalapan</li>
                <li>Kerupuk</li>
                <li>Nasi Putih</li>
                <li>Buah-Buahan</li>
            </ul>

        </div>
</a>
    </div>

</div>

</body>
</html>
