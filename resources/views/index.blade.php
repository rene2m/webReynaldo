@extends('layouts.fronted.index')
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
                <li><a href="" class="active">INICIO</a></li>
                <li><a href="{{ url('/contact')}}">CONTÁCTENOS</a></li>
                <li><a href="{{ url('/productos')}}">BIENES RAICES</a></li>
                <li><a href="{{ url('/nosotros')}}">NOSOTROS</a></li>
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
                        <h1 class="tipeo1">REY HOGAR</h1>
                        <h1 class="tipeo2"><span class="type"></span></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 
@section('cards_service')
<div class="container_cards">
    <div class="row_cards">
        <div class="col-md-3 col-sm-6 mb-3 text-center">
            <div class="single-content_service">
                <div class="service">
                    <i class="fas fa-percent fa-4x"></i>
                    <h4 class="title_services">Ofertas del Día</h4>
                    <p class="description_services">Ofertas especiales</p><br>
                    <a href="" class="btn_modal_wel mt-5" data-toggle="modal" data-target=".bd-example-modal-x3">Ver mas</a>  
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-3 text-center">
            <div class="single-content_service">
                <div class="service">
                    <i class="fas fa-shopping-cart fa-4x"></i>
                    <h4 class="title_services">Entrega Inmediata</h4>
                    <p class="description_services">Servicio de entrega inmediata</p><br>
                    <a href="" class="btn_modal_wel mt-5" data-toggle="modal" data-target=".bd-example-modal-xl2">Ver mas</a>  
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-3 text-center">
            <div class="single-content_service">
                <div class="service">
                    <i class="fas fa-user-check fa-4x"></i>
                    <h4 class="title_services">Clientes Satisfechos</h4>
                    <p class="description_services">Nuestros clientes felices con nuestro servicio</p>
                    <a href="" class="btn_modal_wel mt-5" data-toggle="modal" data-target=".bd-example-modal-xl2">Ver mas</a>   
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-3 text-center">
            <div class="single-content_service">
                <div class="service">
                    <i class="fas fa-thumbs-up fa-4x"></i>
                    <h4 class="title_services">Múltiples Formas de Pago</h4>
                    <p class="description_services">Diferentes tipos de pago</p>
                    <a href="" class="btn_modal_wel mt-5" data-toggle="modal" data-target=".bd-example-modal-xl">Ver mas</a>          
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('cards')
<div class="container_cards">    
    <div class="row_cards">
        <div class="col-md-3 col-sm-6 mb-3">
            <div class="single-content">
                <img src="{{ secure_asset('img/categoria/cat1.jpg')}}" alt="">
                <div class="text-content">
                    <h3>Casas</h3>
                    <hr class="style2">
                    <h5>Para la Familia</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-3">
            <div class="single-content">
                <img src="{{ secure_asset('img/categoria/cat2.jpg')}}" alt="">
                <div class="text-content">
                    <h3>Apartamentos</h3>
                    <hr class="style2">
                    <h5>En diferentes partes de la ciudad</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-3">
            <div class="single-content">
                <img src="{{ secure_asset('img/categoria/cat3.jpg')}}" alt="">
                <div class="text-content">
                    <h3>Locales  Comerciales</h3>
                    <hr class="style2">
                    <h5>Para tu negocio</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-3">
            <div class="single-content">
                <img src="{{ secure_asset('img/categoria/cat4.jpg')}}" alt="">
                <div class="text-content">
                    <h3>Terrenos</h3>
                    <hr class="style2">
                    <h5>Para tu casa</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-3">
            <div class="single-content">
                <img src="{{ secure_asset('img/categoria/cat8.jpg')}}" alt="">
                <div class="text-content">
                    <h3>Parqueos</h3>
                    <hr class="style2">
                    <h5>Gestion de Estacionamiento</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-3">
            <div class="single-content">
                <img src="{{ secure_asset('img/categoria/cat5.jpg')}}" alt="">
                <div class="text-content">
                    <h3>Garzonier</h3>
                    <hr class="style2">
                    <h5>Hermoso y en el mejor punto de la ciudad</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-3">
            <div class="single-content">
                <img src="{{ secure_asset('img/categoria/cat6.jpg')}}" alt="">
                <div class="text-content">
                    <h3>Casa como lote</h3>
                    <hr class="style2">
                    <h5>A precio de lote</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-3">
            <div class="single-content">
                <img src="{{ secure_asset('img/categoria/cat7.jpg')}}" alt="">
                <div class="text-content">
                    <h3>Terreno agrario</h3>
                    <hr class="style2">
                    <h5>Para la Siembra</h5>
                </div>
            </div>
        </div>
      
    </div>
</div>
@endsection
<!-- @section('title5')
<div class="col-12 pt-2" style="background: #0781b6">
		<div class="proveedor-title">
			<h5 style="color: black">CONOCE A</h5>
            <h3 style="color: white">NUESTROS PROVEEDORES</h3>
            <hr class="style5">
	    </div>
</div>
@endsection -->
<!-- @section('Proveedores')
<div class="container_prove">
    <div class="carousel_prove">
        <div class="buttons_prove">
            <span class="prev"> &#8592; </span>
            <span class="next"> &#8594; </span>
        </div>
        @foreach($proveedores as $proveedore)
        <div class="item">
            <div class="content">
                <h1>{{$proveedore->name}}</h1>
                <hr class="">
                <h5 style="color: white">En Este segmento puedes poner una descripción de lo mas importante acerca de tus proveedores.</h5>
            </div>
            <div class="img">
                <img src="{{secure_asset('/img/proveedore/'.$proveedore->image)}}" alt="">
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection -->
@section('title2')
<div class="col-12">
		<div class="testimonial-title">
			<h5>NUESTROS</h5>
            <h3>INMUEBLES DESTACADOS </h3>
            <hr class="style1">
	    </div>
</div>
@endsection

@section('products')
<div class="producst_body autoplay ">
    @foreach($productos as $producto)
    <div class="wrapper">
        <div class="container">
            <img class="top"src="{{secure_asset('/img/productos/'.$producto->image)}}" alt="{{$producto->image}}">
          <div class="bottom">
            <div class="left">
              <div class="details">
                <h2 class="txt_products">{{$producto->name}}</h2>
                <p>S/{{$producto->price}}</p>
              </div>
              <div class="buy text-center">
                <a href="{{route('product-details', $producto->slug)}}">
                    <i class="fas fa-eye"></i>
                </a>  
            </div>
            </div>
          </div>
        </div>
        <div class="inside">
          <div class="icon"><i class="fas fa-plus"></i></div>
          <div class="contents">
            <h1>{{$producto->extract}}</h1>
            <h5 style="color: white">{{$producto->descriptions}}</h5>
          </div>
        </div>
      </div>
    @endforeach 
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
@section('title')
<div class="col-12">
		<div class="testimonial-title">
			<h5>CONOCE</h5>
            <h3>NUESTRAS CATEGORÍAS</h3>
            <hr class="style1">
	    </div>
</div>
@endsection
<!--MODALS-->
@section('modals')
<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="text-center modal-title" id="exampleModalCenterTitle">Formas de pago</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="principalPagos">
                    <div id="contenedor" class="row_p">
                        <div id="naranja" class="">
                            <img class="popou_img"src="{{ secure_asset('img/pagos.jpg')}}" alt="">
                        </div>       
                        <div id="verde" class="content_pagos"> 
                            <h2 class=" frm_pagos text-center">FORMAS DE PAGO</h2>
                <hr class="style3"> 

                <div id="price">
                    <!--price tab-->
                    <div class="plan">
                      <div class="plan-inner">
                        <div class="entry-title">
                          <h3>BANCO UNION</h3>
                          <div class="price"><i class="mt-3 fa-2x fas fa-credit-card"></i>
                          </div>
                        </div>
                        <div class="entry-content">
                          <ul>
                            <li>Número de cuenta</li>
                            <li>10000041694345</li>
                            <li>N° de cta. interbancaria</li>
                            <li>10000041694345</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!-- end of price tab-->
                    <!--price tab-->
                    <div class="plan basic">
                      <div class="plan-inner">
                        <div class="entry-title">
                          <h3>BBVA</h3>
                          <div class="price"><i class="mt-3 fa-2x fas fa-credit-card"></i>
                          </div>
                        </div>
                        <div class="entry-content">
                          <ul>
                            <li>Número de cuenta</li>
                            <li>*******************</li>
                            <li>N° de cta. interbancaria</li>
                            <li>**********************</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!-- end of price tab-->
                    <!--price tab-->
                    <div class="plan standard">
                      <div class="plan-inner">
                        <div class="entry-title">
                          <h3>Yape</h3>
                          <div class="price"><i class="mt-3 fa-2x fas fa-mobile-alt"></i>
                          </div>
                        </div>
                        <div class="entry-content">
                          <ul>
                            <li>Número de Billetera Electronica</li>
                            <li>999 086 095</li>
                            <li>.</li>
                            <li>.</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!-- end of price tab--> 
                </div>
                        </div>
                    </div>
                </div> 
            </div>
    </div>
</div>

<div class="modal fade bd-example-modal-xl2" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div id="contenedor" class="row_p">
            <div id="naranja" class="">
                <img class="popou_img"src="{{ secure_asset('img/entrega.jpg')}}" alt="">
            </div>       
            <div id="verde" class="content_pagos"> 
                <h2 class=" frm_pagos text-center">REALIZAMOS ENTREGA ESPECIAL</h2>  
                <hr class="style3">   
                <h5>Primero se envía la cotización al cliente, luego de ello el cliente envía la orden de compra por medio de nuestro correo, se realiza la visita  
                    a la propiedad seguidamente se realiza el deposito de garantia y finalmente la trasferencia de compra venta</h5>                   
            </div>
        </div>
    </div>
</div>

<div class="modal fade modal fade bd-example-modal-x3" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="text-center modal-title" id="exampleModalCenterTitle">OFERTAS DEL DÍA</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="principal">
                @foreach($ofertas as $oferta)
                <div id="contenedor" class="row_p">
                    <div id="naranja" class="">
                        <img class="popou_img"src="{{secure_asset('/img/ofertas/'.$oferta->image)}}" alt="{{$oferta->image}}">
                    </div>       
                    <div id="verde" class="content_pagos"> 
                        <strong><h2 class=" frm_pagos text-center">{{$oferta->titulo}}</h2></strong>  
                        <br>    
                        <h4>{{$oferta->texto}}</h4>  
                        <button type="button" class="btnwssp btn btn-outline-success btn-lg">
                            <a target="none" href="https://wa.me/51987654321?text=Hola%2CEstoy+interesad%40+en+la+oferta%3A+{{$oferta->titulo}}">
                               Preguntar
                            </a>
                        </button> 
                    </div>
                </div>
                @endforeach  
            </div> 
        </div>
    </div>
    <div class='icon-scroll'></div> 
    <h6 style="color: white" class="text-center">Si hay más promociones por favor siga bajando</h6>     
</div>
@endsection