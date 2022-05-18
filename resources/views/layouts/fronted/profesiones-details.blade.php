<!DOCTYPE html> 
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="imagenes" href="{{secure_asset('img/favicon.ico')}}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.min.css">
	    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">
        <title>REYHOGAR |Detalle de Producto</title>

        <!-- Fonts--> 
        <link href="{{secure_asset('css/style.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Styles -->
    </head>
    <body>
        @yield('redes')
        <section id="headerSection_productos">
            @yield('navbar_top')
            @yield('navbar')
            @yield('banner')
        </section>
        <section id="productoDetalle">
         @yield('content')
        </section>
        <!-- @yield('products') -->
       @yield('footer')
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <script src="{{secure_asset('js/responsive.js') }}"></script>
    <script src="{{secure_asset('js/security.js') }}"></script>
    <script src="{{secure_asset('js/product-detail.js') }}"></script>
    </body>
</html>