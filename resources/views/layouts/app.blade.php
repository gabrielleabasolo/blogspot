<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body class="bg-gray-300 bg">
    <nav class="flex justify-between p-3 mb-6 bg-white">
        <ul class="flex items-center">
            <li><a href="" class="p-3">Home</a></li>
            <li><a href="{{ route('dashboard') }}" class="p-3">Dashboard</a></li>
            <li><a href="" class="p-3">Post</a></li>
        </ul>
        <ul class="flex items-center">
            @auth
            <li><a href="" class="p-3">Hi Gab</a></li>
            <li>
                <form action="{{ route('logout') }}" method="post" class="inline">
                    @csrf
                    <button type="submit">Log Out</button>
                </form>
            </li>
            @endauth
            
            @guest
            <li><a href="{{ route('login') }}" class="p-3">Log in</a></li>
            <li><a href="{{ route('register') }}" class="p-3">Register</a></li>
            @endguest
            
            
            
        </ul>
    </nav>
    @yield('content')
    
</body>
</html>