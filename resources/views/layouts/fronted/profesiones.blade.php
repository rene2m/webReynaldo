<!DOCTYPE html> 
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="imagenes" href="{{secure_asset('img/favicon.ico')}}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.min.css">
	    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">
        <title>REYHOGAR |profesiones</title>

        <!-- Fonts--> 
        <link href="{{secure_asset('css/style.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Styles -->
    </head>
    <body>
        @yield('redes')
        <section id="headerSection_nosotros">
            @yield('navbar_top')
            @yield('navbar')
            @yield('banner')
        </section>
        @yield('title')
        <section id="imnuebles">
        @yield('products')
        </section>
          
           
       @yield('footer')
       <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <script src="{{secure_asset('js/responsive.js') }}"></script>
    <script src="{{secure_asset('js/security.js') }}"></script>
    <script src="{{secure_asset('js/typed.js') }}"></script>
    <script src="{{secure_asset('js/producto.js') }}"></script>    
    <!-- <script>
	var typed = new Typed('.type', {
    strings: ['<span><i class="fas fa-check"></i></span> TERRENOS', 
                '<span><i class="fas fa-check"></i></span> CASAS',
                '<span><i class="fas fa-check"></i></span> DEPARTAMEMTOS'],
    typeSpeed:60,backSpeed:60,loop:true});
    </script> -->
    </body>
</html>