@extends('layouts.fronted.productos')
@section('redes')
<div class="red">
    <div id="facebook">
        <a href="https://www.facebook.com/profile.php?id=100078648653054" target="none" class="fab fa-facebook-f "></a>
    </div>
    <div id="instagram">
        <a href="#" target="none" class="fab fa-instagram"></a>
    </div>
    <div id="twiter">
        <a href="" target="none" class="fab fa-twitter-square"></a>
    </div>
    <div id="whatsaap">
        <a href="https://api.whatsapp.com/send?phone=59163173664&text=Deseo%20Informacion%20Sobre%20Bienes%20Inmuebles" target="none" class="fab fa-whatsapp"></a>
    </div>
    <div id="linkeding">
        <a href="#" target="none" class="fab fa-linkedin"></a>
    </div>
</div>
@endsection
@section('navbar_top')
<div class="header-top">
    <div class="container d-flex justify-content-between">
        <div class="d-inline-flex ml-auto">
            <div class="headcont">
                <i class="fas fa-2x fa-mobile-alt messenge"></i>
                +591 63173664
            </div>
            <div class="headcont">
                <i class="fas fa-2x fa-envelope messenge"></i>
                reyyvalles@gmail.com
            </div>
        </div>
    </div>
</div>
@endsection
@section('navbar')
    <header>
    <a href="#" class="logo">
    <img  class="imgtamaño" src="{{ secure_asset('img/logo.png')}}" alt="">
        <h2 style="color: white" class="imgtamaño">REYHOGAR</h2>
    </a>
    <div class="menu-toggle" ></div>
        <nav>
            <ul>
                <li><a href="{{ url('/')}}" >INICIO</a></li>
                <li><a href="{{ url('/contact')}}">CONTÁCTENOS</a></li>
                <li><a href="{{ url('/productos')}}">BIENES RAICES</a></li>
                <li><a href="{{ url('/nosotros')}}">NOSOTROS</a></li>
                <li><a class="active" href="{{ url('/profesiones')}}">SERVICIOS PROFESIONALES</a></li>
            </ul>
        </nav>
        <div class="clearfix"></div>
    </header>
@endsection
@section('banner')
<div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="hero-text">
                        <!-- <h4>PAGINA <span>WEB</span></h4> -->
					    <br><br>
                        <h1 class="tipeo1">PROFESIONES EN STOCK</h1>
                        <!-- <h1 class="tipeo2"><span class="type"></span></h1> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 
@section('products')
<div class="container mt-5 mb-5">
    <div class="row">
        @foreach($profesiones as $profesion)
        <div class="col-md-4 col-sm-6">
            <div class="product-grid8">
                <div class="product-image8">
                    <a href="#">
                        <img  class="pic-1" src="{{secure_asset('/img/profesiones/'.$profesion->image)}}" alt="{{$profesion->image}}">
                        <!-- <img class="pic-2" src="https://via.placeholder.com/280x300/FFF5EE/000000"> -->
                    </a>
                    <ul class="social">
                        <li><a href="" class="fa fa-search"></a></li>
                    </ul>
                    <span class="product-discount-label">{{$profesion->visible == 1 ? "En Stock":"Agotado"}}</span>
                </div>
                <div class="product-content">
                    <div class="price">{{$profesion->name}}</div>
                    <!-- <span class="product-shipping">Free Shipping</span> -->
                    <h3 class="title"><a href="{{ route('searchServicio' ,$profesion->servicio->name)}}">{{$profesion->servicio->name}}</a></h3>
                    <a class="all-deals" href="{{route('profesiones-details', $profesion->slug)}}">Detalles<i class="fa fa-angle-right icon"></i></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    {{$profesiones->links()}}
</div>
@endsection
@section('footer')
<footer class="footer">
    <div class="l-footer">
        <img  class="footer_img" src="{{secure_asset('img/logo.png')}}" alt="">
        <!-- <h2 style="color: white" class="footer_img">REYHOGAR</h2> -->
    <p>Un grupo de profesionales te asesorarán en todo el proceso de VENTA, COMPRA y ALQUILER.
       Te ofrecemos realizar un análisis de mercado para determinar el valor de tu propiedad.
    </p>
    </div>
        <ul class="r-footer">
            <li>
            <h2>Social</h2>
                <ul class="box">
                    <li class="button_social">
                        <i class="fab mr-2 fa-facebook"></i>
                        <a href="https://www.facebook.com/profile.php?id=100078648653054" target="_blank">Facebook</a>
                    </li>
                    <li class="button_social">
                        <i class="fab mr-2 fa-twitter"></i>
                        <a href="#">Twitter</a>
                    </li>
                    <li class="button_social">
                        <i class="fab mr-2 fa-instagram"></i>
                        <a href="h" target="_blank">Instagram</a>
                    </li>
                    <li class="button_social">
                        <i class="fab mr-2 fa-linkedin-in"></i>
                        <a href="" target="_blank">Linkedin</a>
                    </li>
                </ul>
            </li>
            <li class="features">
            <h2>Información</h2>
            <ul class="box">
                <li><a href="#">Políticas de Privacidad</a></li>
                <li><a href="#">Trabaja con nosotros</a></li>
            </ul>
            </li>
            <li class="features">
                <h2>Procedimiento de Pagos</h2>
                <ul class="box">
                    <li><a type="button" class="btn btn-outline-info"  data-toggle="modal" data-target=".bd-example-modal-xl" href="#">Ver mas</a></li>
                </ul>
                </li>
        </ul>
        <div class="b-footer">
            <p>Todos los Derechos reservados by ©DESOCOM-2022</p>
        </div>
</footer>
@endsection