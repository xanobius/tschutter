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
        @livewire('navigation')
    </nav>
    <div id="content" class="container-fluid">
        <header>
            <h1>Welcome to tschutter</h1>
        </header>
        @yield('content')
    </div>
</div>
@livewireScripts
</body>
</html>
