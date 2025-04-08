<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <style>
            body {
                font-family: 'Nunito', sans-serif;
                line-height: 1.6;
                margin: 0;
                padding: 0;
                display: flex;
                align-items: center;
                justify-content: center;
                height: 100vh;
                background-color: #f8fafc;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 56px;
                font-weight: 700;
                color: #636b6f;
                margin-bottom: 30px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 15px;
                font-size: 14px;
                font-weight: 600;
                text-decoration: none;
                text-transform: uppercase;
            }

            .version {
                margin-top: 40px;
                font-size: 12px;
                color: #b0bec5;
            }
        </style>
    </head>
    <body>
        <div class="content">
            <div class="title">
                Laravel
            </div>

            <div class="links">
                <a href="https://laravel.com/docs">Docs</a>
                <a href="https://laracasts.com">Laracasts</a>
                <a href="https://laravel-news.com">News</a>
                <a href="https://blog.laravel.com">Blog</a>
                <a href="https://nova.laravel.com">Nova</a>
                <a href="https://forge.laravel.com">Forge</a>
                <a href="https://vapor.laravel.com">Vapor</a>
                <a href="https://github.com/laravel/laravel">GitHub</a>
            </div>

            <div class="version">
                Laravel v{{ Illuminate\Foundation\Application::VERSION }}
            </div>
        </div>
    </body>
</html>
