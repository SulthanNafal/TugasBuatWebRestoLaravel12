<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tentang Kami - Pawon Djawa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
<section class="tentang-section">
<!-- Logo -->
    <img src="{{ asset('images/logo.png') }}" class="logo" alt="Logo Pawon Djawa">

    <!-- Card Login -->
    <div class="login-card">
        <h2>LOGIN</h2>

        <form action="" method="POST">
            <table class="login-table">
                <tr>
                    <td class="label">Username</td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="username" required>
                    </td>
                </tr>

                <tr>
                    <td class="label">Password</td>
                </tr>
                <tr>
                    <td>
                        <input type="password" name="password" id="password" required>
                    </td>
                </tr>

                <tr>
                    <td class="checkbox-row">
                        <input type="checkbox" onclick="togglePassword()"> 
                        Tampilkan password
                    </td>
                </tr>

                <tr>
                    <td class="btn-row">
                        <button type="submit">LOGIN</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>

</div>

<script>
function togglePassword() {
    const pass = document.getElementById("password");
    pass.type = pass.type === "password" ? "text" : "password";
}
</script>

</body>
</html>
