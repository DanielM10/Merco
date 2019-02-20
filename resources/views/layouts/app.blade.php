<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" id="theme" href="css/theme-light.css" />
    <link rel="stylesheet" type="text/css" id="tema-secundario" href="css/colores.css" />
    <link rel="stylesheet" type="text/css" id="tema-secundario" href="css/picker.min.css" />
    <link rel="stylesheet" type="text/css" id="tema-secundario" href="css/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" id="tema-secundario" href="css/jquery/jquery-ui.min.css" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body >
    <div id="app" style="background-color:#f19829;">
        <nav style="background-color:#f19829;" >
            <div style="background-color:#f19829;" class="container">
                <div style="background-color:#f19829;" class="navbar-header">

                    <!-- Collapsed Hamburger -->
                   

                    <!-- Branding Image -->
                    <a style="background-color:#f19829;" class="navbar-brand" href="{{ url('/') }}">
                     <div class="email-title">   {{ config('app.name', 'Laravel') }}</div>
                       
                    </a>
                    
                </div>

                
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
