<!DOCTYPE html>
<html>
    <head>
        <meta name="author" content="Alexander Zhujkov">
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="https://laravel.com">Laravel</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="/tasks">Home</a></li>
                    <li><a href="/tasks/create">Create</a></li>
                    <li><a href="/tasks/author">Author</a></li>
                </ul>
            </div>
        </div>
        </div>
        <div class="container info">
            @yield('content')
        </div>

        <footer class="footer">
            <div class="container">
                <p class="text-muted">Sdelano za 15 minut na kolenke.</p>
            </div>
        </footer>
        <script src="/js/bootstrap.min.js"></script>
    </body>
</html>
