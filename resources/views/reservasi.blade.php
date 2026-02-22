<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Reservasi - Pawon Djawa</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/reservasi.css') }}">
</head>
<body>

@include('layouts.Header')

<div class="container">

    <div class="title">
        RESERVASI
    </div>

    <div class="content">

        <!-- FORM -->
        <div class="form-box">

            <form id="reservasiForm">

                <input type="text" id="nama" placeholder="Nama" required>
                <input type="text" id="telepon" placeholder="Nomor Telephone" required>
                <input type="number" id="jumlah_orang" placeholder="Jumlah Orang" required>
                <input type="date" id="tanggal" required>

                <button type="submit" class="btn">
                    Pesan Sekarang
                </button>

            </form>

            <p id="successMessage" style="color:green; display:none; margin-top:10px;">
                Reservasi berhasil disimpan!
            </p>

        </div>

        <!-- MAP -->
        <div class="map">
            <img src="{{ asset('images/peta.png') }}">
        </div>

    </div>

</div>

<script>
document.getElementById("reservasiForm").addEventListener("submit", function(e) {
    e.preventDefault();

    const data = {
        nama: document.getElementById("nama").value,
        telepon: document.getElementById("telepon").value,
        jumlah_orang: document.getElementById("jumlah_orang").value,
        tanggal: document.getElementById("tanggal").value
    };

    let reservasi = JSON.parse(localStorage.getItem("reservasi")) || [];
    reservasi.push(data);
    localStorage.setItem("reservasi", JSON.stringify(reservasi));

    document.getElementById("reservasiForm").reset();
    document.getElementById("successMessage").style.display = "block";

    setTimeout(() => {
        document.getElementById("successMessage").style.display = "none";
    }, 3000);
});
</script>

</body>
</html>