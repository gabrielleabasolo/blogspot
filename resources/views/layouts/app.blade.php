<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body class="bg bg-gray-300">
    <nav class="p-6 bg-white flex justify-between mb-6">
        <ul class="flex items-center">
            <li><a href="" class="p-6">Home</a></li>
            <li><a href="" class="p-6">Dashboard</a></li>
            <li><a href="" class="p-6">Post</a></li>
        </ul>
        <ul class="flex items-center">
            <li><a href="" class="p-6">Hi Gab</a></li>
            <li><a href="" class="p-6">Log in</a></li>
            <li><a href="" class="p-6">Register</a></li>
            <li><a href="" class="p-6">Logout</a></li>
        </ul>
    </nav>
    @yield('content')
</body>
</html>