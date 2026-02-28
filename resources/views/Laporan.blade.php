<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tentang Kami - Pawon Djawa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/Laporan.css') }}">
</head>
<body>
<section class="tentang-section">

    <!-- LOGO -->
    <a href="{{ route('dashboard') }}">
        <img src="{{ asset('images/logo.png') }}" class="logo">
    </a>

    <!-- TITLE -->
    <div class="title">
        LAPORAN TRANSAKSI RESERVASI
    </div>
  <!-- SEARCH -->
    <div class="search-container">
        <input type="text" placeholder="Cari transaksi..." class="search-input">
        <button class="search-btn">Search</button>
    </div>

    <!-- TABLE -->
    <div class="table-container">
        <table class="transaksi-table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Paket</th>
                    <th>Jumlah Orang</th>
                    <th>Waktu</th>
                    <th>Tanggal</th>
                    <th>No Tlpn</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Aktivitas</th>
                </tr>
            </thead>
        </table>
    </div>

</section>
</body>
</html>
