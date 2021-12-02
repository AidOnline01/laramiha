<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin</title>
        <link rel="icon" href="/admin/images/logo-black.png" type="image/png" />

       {{-- Laravel Mix - CSS File --}}
       <link rel="stylesheet" href="/admin/css/admin.css">

    </head>
    <body>
        <div class="layout">
            @component('admin::layouts.sidebar')
                @yield('sidebar')
            @endcomponent

            @yield('content')
        </div>

        {{-- Laravel Mix - JS File --}}
        <script src="/admin/js/admin.js"></script>
    </body>
</html>
