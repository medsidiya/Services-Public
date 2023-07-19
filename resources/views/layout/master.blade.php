<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titel')</title>
    <link rel="stylesheet" href="css/master.css">
</head>
<body>
    @include('layout.navbar')

    @section('content')
        <div class="container">
            this show is from master page
        </div>
    @show
</body>
</html>
