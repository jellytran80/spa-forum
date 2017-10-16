<!DOCTYPE html>
<html lang="vi VN">
    <head>
        <meta charset="utf-8">
        <title>SPA Forum</title>
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <meta id="csrf-token" name="csrf-token" value="{{ csrf_token() }}">
    </head>
    <body>
        <div id="app">
        </div>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>