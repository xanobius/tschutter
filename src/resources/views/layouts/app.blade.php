<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tschuttu</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @livewireStyles
</head>
<body>

<div class="wrapper">
    <nav id="sidebar">
        @include('navigation')


    </nav>
    <div id="content" class="container-fluid">

        <div class="row">
            <div class="col-sm">1</div>
            <div class="col-sm">2</div>
            <div class="col-sm">3</div>
            <div class="col-sm">4</div>
            <div class="col-sm">5</div>

        </div>
        @yield('content')

    </div>
</div>
@livewireScripts

</body>
</html>
