<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="OIP.jpg">
    <title>Portfolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bd1">
    <x-navbar />
    
        {{$slot}}
    
    
    
    <x-footer />
    <script src="https://kit.fontawesome.com/f65e26a568.js" crossorigin="anonymous"></script>
</body>
</html>