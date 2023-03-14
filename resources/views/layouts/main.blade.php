<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="/css/aboutUs.css">
    <link rel="stylesheet" href="/css/profile.css">
    <script src="https://kit.fontawesome.com/b75608f116.js" crossorigin="anonymous"></script>
    <title>{{ $title }}</title>
</head>
<body>
    @include('component.navbar')

    <div class="contain">
        @yield('container')
    </div>
</body>
</html>