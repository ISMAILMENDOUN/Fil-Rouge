<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <title>Document</title>
</head>
<body>
@include("./components.navbar") 


<div class="d-flex row justify-content-center col-12 ">
  <h1 class="text-center mt-5 fw-bold">Service X plans</h1>  
@include("components.serviceX")</div>

<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>