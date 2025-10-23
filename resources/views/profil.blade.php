<!DOCTYPE html>
<html>
<head>
    <title>Halaman Profil</title>
</head>
<body>
    <h1>Halo, ini Halaman Profil Saya</h1>

    <p>Waktu sekarang adalah: {{ now() }}</p>

    @if (Auth::check())
        <p>Selamat datang, {{ Auth::user()->name }}!</p>
    @else
        <p>Anda belum login.</p>
    @endif
</body>
</html>