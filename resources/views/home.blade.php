<!-- resources/views/home.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - UNIConnect</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @extends('layouts.navbar')

    @section('content')
    <div class="container">
        <h1>Selamat datang di UNIConnect</h1>
        <p>Mau ikut UKM? Jelajahi UKM di Universitas!</p>

        <button>Gabung Sekarang!</button>
    </div>
    @endsection
</body>
</html>
