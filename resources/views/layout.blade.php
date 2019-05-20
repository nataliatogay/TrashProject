<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    {{-- <link rel="stylesheet" href="https:://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css"> --}}
    <title>@yield('title', 'TrashProject')</title>
    
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>