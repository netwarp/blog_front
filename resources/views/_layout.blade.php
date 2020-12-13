<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="/css/app.css">
        <title>Blog</title>
    </head>
    <body>
        <header>
            <div class="logo">
                LOGO
            </div>
            <nav>
                <ul>
                    <li><a href="#">A propos</a></li>
                    <li><a href="#">Contract</a></li>
                </ul>
            </nav>
        </header>

        <main>
            @yield('content')
        </main>
        <script src="/js/app.js"></script>
    </body>
</html>
