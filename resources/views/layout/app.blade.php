<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Home Bookshelf')</title>
</head>
<body>
    <header id="site_header">
        <h1>Site Header here</h1>
    </header>
    <main id="site_main">
        @yield('main_content')
    </main>
    <footer id="site_footer">
        <h2>Site Footer here</h2>
    </footer>
</body>
</html>