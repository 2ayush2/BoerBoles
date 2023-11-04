<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="copyright" content="MACode ID, https://boerboelacademy.com/">

    <title>@yield('title') | {{config('app.name','Boerboel Academy Breed Society')}}</title>

    @include('layouts.style')
</head>

<body>

    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
    @include('layouts.script')

</body>

</html>