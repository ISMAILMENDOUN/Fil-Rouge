<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Styles -->
    <style>

    </style>
</head>

<body class="antialiased">

    <div id="app" class="text-light">
    @include("./components.navbar")
        <navbar></navbar>
    </div>
    <h1 class="text-center fw-bold mt-3">My Services</h1>


    <div id="app1" class=" row d-flex justify-content-center col-12">
        
        @include("./components.service")
            <service></service>
       

    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>