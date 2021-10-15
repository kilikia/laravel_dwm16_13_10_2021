<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>@yield('title')</title>

</head>
<body>
  
    <header>
        <div class="topnav">
            <a class="active" href="/">Home</a>
            <a href="/page_2">News</a>
            <a href="/page_3">Contact</a>
            <a href="/page_4">About</a>
            @yield('header')
        </div>
    </header>
    <main>
        @yield('content')
    </main>

</body>
</html>
