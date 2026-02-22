<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sayuran - Pawon Djawa</title>

    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/sayuran.css') }}">
</head>
<body>
@include('layouts.Header')
<div class="container">

    <!-- TITLE -->
    <div class="header">

        <div class="title">
            SAYURAN
        </div>

        <div class="price">
            20k/porsi
        </div>

    </div>

    <!-- MENU LIST -->
    <div class="menu-list">

        <div class="menu-item">
            <img src="{{ asset('images/kangkung.png') }}">
            <div class="menu-name">Kangkung</div>
        </div>

        <div class="menu-item">
            <img src="{{ asset('images/capcay.png') }}">
            <div class="menu-name">Cap Cay</div>
        </div>

        <div class="menu-item">
            <img src="{{ asset('images/tumispare.png') }}">
            <div class="menu-name">Tumis Pare</div>
        </div>

        <div class="menu-item">
            <img src="{{ asset('images/urap.png') }}">
            <div class="menu-name">Urap</div>
        </div>

    </div>

</div>

</body>
</html>