@extends('layouts.fronted.nosotros')
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
                <li><a  href="{{ url('/')}}" >INICIO</a></li>
                <li><a  href="{{ url('/contact')}}">CONTÁCTENOS</a></li>
                <li><a  href="{{ url('/productos')}}">BIENES RAICES</a></li>
                <li><a class="active" href="{{ url('/nosotros')}}">NOSOTROS</a></li>
                <li><a href="{{ url('/profesiones')}}">SERVICIOS PROFESIONALES</a></li>
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
                        <h4>INMOBILIARIA</h4>
						<br>
						<br>
                        <h1 class="tipeo1">COMUNÍCATE CON NOSOTROS</h1>
                        <!-- <h1 class="tipeo2"><span class="type"></span></h1> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 
@section('foda')
<div class="nosotros_body">
<div class="nosotros_container">
    <div class="nosotros_card">
        <div class="nosotros_imbBx"  data-text="¿Quienes Somos?">
            <i class="fas fa-5x fa-question"></i>
        </div>
        <div class="nosotros_content">
            <div>
                <h3>¿Quienes somos?</h3>
                <p>Somos una empresa de Bienes Raíces fundada en el año 2021, contamos con un equipo especializado de profesionales inmobiliarios, donde te damos un servicio de atención personalizada y profesional, en la compra, venta y renta de inmuebles.
                </p>
            </div>
        </div>
    </div>

    <div class="nosotros_card">
        <div class="nosotros_imbBx" data-text="¿Nuestra Misión?">
            <i class="fas fa-5x fa-user-friends"></i>
        </div>
        <div class="nosotros_content">
            <div>
                <h3>Nuestra Misión</h3>
                <p>Establecer una relación con nuestros clientes a traves de la comopra y venta de nuestro inmuebles con eficiencia,rapidez, buenos precios y buscando la mejora continua para contribuir con su desarrollo y el de nuestros colaboradores.
                </p>
            </div>
        </div>
    </div>

    <div class="nosotros_card">
        <div class="nosotros_imbBx" data-text="¿Nuestra Visión?">
            <i class="fas fa-5x fa-chart-bar"></i>
        </div>
        <div class="nosotros_content">
            <div>
                <h3>Nuestra Visión</h3>
                <p>Consolidarnos como una de las empresas líderes en compra y venta de bienes inmuebles a nivel nacional,
                    reconocida por su compromiso y responsabilidad.
                </p>
            </div>
        </div>
    </div>

    <div class="nosotros_card">
        <div class="nosotros_imbBx" data-text="¿Porque escogernos?">
            <i class="fas fa-5x fa-money-bill-wave"></i>
        </div>
        <div class="nosotros_content">
            <div>
                <h3>¿Porque escogernos?</h3>
                <p>Contamos con una amplia experiencia en ventas de departamentos, casas , terrenios y a los mejores precios del mercado para la satisfacción de nuestros clientes. 
                </p>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
<!-- @section('clientes')
    <div class="swiper-container">
        <div class="swiper-wrapper">
            @foreach($clientes as $cliente)
            <div class="swiper-slide">
                <img class="client_img text-center"src="{{secure_asset('/img/clientes/'.$cliente->image)}}" alt="{{$cliente->image}}" class="card-img-top">
            </div>
            @endforeach  
        </div>
    </div>   
@endsection  -->
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
@section('title')
<div class="col-12">
		<div class="testimonial-title">
			<h5>CLIENTES </h5>
            <h3>QUE CONFÍAN EN NOSOTROS</h3>
            <hr class="style1">
	    </div>
</div>
@endsection
@section('title2')
<div class="col-12">
		<div class="testimonial-title">
			<h5>CONOCE</h5>
            <h3>MÁS ACERCA DE NOSOTROS</h3>
            <hr class="style1">
	    </div>
</div>
@endsection