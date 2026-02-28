<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Transaksi</title>
    <link rel="stylesheet" href="{{ asset('css/transaksi.css') }}">
</head>
<body>

<div class="hero">
    <div class="overlay"></div>

    <!-- Logo -->
    <div class="logo">
        <img src="{{ asset('images/logo.png') }}" alt="Logo">
    </div>

    <div class="container">

        <h1 class="title">TRANSAKSI</h1>

        @if(session('success'))
            <div class="alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('transaksi') }}" method="POST">
            @csrf

            <!-- Row 1 - Tanggal Transaksi -->
            <div class="form-row">
                <div class="fake-input">Tanggal Transaksi</div>
                <input type="date" name="tanggal_transaksi" class="date-input" required>
            </div>

            <!-- Row 2 -->
            <div class="form-row">
                <input type="text" name="paket" placeholder="Paket" required>
                <input type="text" name="jenis_paket">
            </div>

            <!-- Row 3 -->
            <div class="form-row">
                <input type="number" name="jumlah_orang" placeholder="Jumlah Orang" required>
                <input type="text" name="catatan">
            </div>

            <!-- Row 4 -->
            <div class="form-row">
                <input type="text" name="reservasi" placeholder="Reservasi" required>
                <input type="text" name="kode_reservasi">
            </div>

            <!-- Row 5 -->
            <div class="form-row">
                <input type="text" name="total_transaksi" placeholder="Total Transaksi" required>
                <input type="text" name="metode_pembayaran">
            </div>

            <div class="button-wrapper">
                <a href="{{ url()->previous() }}" class="btn-pesan">
    Kembali
</a>
                <button type="submit" class="btn-pesan">Pesan Sekarang</button>
            </div>

        </form>
    </div>
</div>

</body>
</html>