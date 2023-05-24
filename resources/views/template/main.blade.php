<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
@vite(['resources/js/app.js'])

<body style="min-height:100vh" class="d-flex flex-column justify-content-between">
    @include('template.navbar')
    @yield('content')
    @include('template.footer')
</body>

</html>
