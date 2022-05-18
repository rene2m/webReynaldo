@extends('layouts.fronted.product-details')
@section('redes')
<div class="red">
    <div id="facebook">
        <a href="https://www.facebook.com/profile.php?id=100078648653054" target="none" class="fab fa-facebook-f "></a>
    </div>
    <div id="instagram">
        <a href="" target="none" class="fab fa-instagram"></a>
    </div>
    <div id="twiter">
        <a href="" target="none" class="fab fa-twitter-square"></a>
    </div>
    <div id="whatsaap">
        <a href="https://api.whatsapp.com/send?phone=59163173664&text=Deseo%20Informacion%20Sobre%20Bienes%20Inmuebles" target="none" class="fab fa-whatsapp"></a>
    </div>
    <div id="linkeding">
        <a href="" target="none" class="fab fa-linkedin"></a>
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
                <li><a class="active"  href="{{ url('/profesiones')}}">SERVICIOS PROFESIONALES</a></li>
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
                        <h1 class="tipeo1">DESCRIPCIÓN:</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 
@section('content')
<main class="container_product">
    <div class="left-column">
        <img data-image="red" class="active" src="{{secure_asset('/img/profesiones/'.$profesiones->image)}}">
    </div>
    <!-- Right Column -->
    <div class="right-column">
    <!-- Product Description -->
    <div class="product-description">
        <span>{{$profesiones->visible == 1 ? "En Stock":"Agotado"}}</span>
        <h1>{{$profesiones->name}}</h1>
        <p>{{$profesiones->extract}}</p>
    </div>

    <!-- Product Configuration -->
    <div class="product-configuration">
        <!-- Cable Configuration -->
        <div class="cable-config">
            <span>Categoría: </span><br>
                <div class="cable-choose">
                    <button>
                        <a href="{{ route('searchServicio' , $profesiones->servicio->slug)}}">
                            {{$profesiones->servicio->name}}
                        </a>
                    </button>
                </div>
        </div>
    </div>

    <!-- Product Pricing -->
    <div class="product-price">
        <span>S/{{$profesiones->price}}</span>
            <a target="none" href="https://wa.me/59163173664?text=Hola+interesad%40+en+el+Producto%3A+{{$profesiones->name}}" class="cart-btn">
            Consultar
            </a>
    </div>
  </div>
</main>
<div class="container">
<div class="media">
    <img width="100" height="100"  src="{{secure_asset('/img/profesiones/'.$profesiones->image)}}" class="align-self-start mr-3" alt="...">
    <div class="media-body">
      <h5 class="mt-0">Descripción:</h5>
      <p>{{$profesiones->descriptions}}</p>
    </div>
  </div>
</div>
@endsection 

@section('footer')
<footer class="footer">
<div class="l-footer">
        <img  class="footer_img" src="{{secure_asset('img/logo.png')}}" alt="">
        <!-- <h2 style="color: white" class="footer_img">REYHOGAR</h2> -->
    <p>Un grupo de profesionesales te asesorarán en todo el proceso de VENTA, COMPRA y ALQUILER.
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
                        <a href="#" target="_blank">Instagram</a>
                    </li>
                    <li class="button_social">
                        <i class="fab mr-2 fa-linkedin-in"></i>
                        <a href="#" target="_blank">Linkedin</a>
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
                    <li><a type="button" href="#">Ver mas</a></li>
                </ul>
                </li>
        </ul>
        <div class="b-footer">
        <p>Todos los Derechos reservados by ©DESOCOM-2022</p>
        </div>
</footer>
@endsection