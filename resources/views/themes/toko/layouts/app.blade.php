<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <title>Toko: Official Site</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/themes/toko/main.css'])
</head>
<body>
    @include('themes.toko.shared.header')
    @include('themes.toko.shared.slider')
    @yield('content')
    @include('themes.toko.shared.footer')
</body>
</html>