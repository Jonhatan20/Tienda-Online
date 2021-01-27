@extends('layouts.mainContacto',['titulo'=>'Bordados CMJ'])

@section('headerNav')
<div class="col-lg-6 col-md-6">
    <nav class="header__menu mobile-menu">
        <ul>
            <li><a href="/index">Inicio</a></li>
            <li><a href="/shop">Tienda</a></li>
            <li><a href="./blog-details.html">Blog</a></li>
            <li class="active"><a>Contacto</a>
                <ul class="dropdown">
                    <li><a href="/contacto">Contáctanos</a></li>
                    <li><a href="https://www.facebook.com/bordadoscmj">Acerca de nosotros</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</div>
@endsection('headerNav')
@section('contenedor')
     <!-- Map Begin -->
     <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3440.3964900866936!2d-107.92138728549824!3d30.424860307457298!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86dcac5aeb204981%3A0x208ada6ef0996734!2sBordados%20cmj!5e0!3m2!1ses-419!2smx!4v1610844936251!5m2!1ses-419!2smx" height="500" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <!-- Map End -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="contact__text">
                        <div class="section-title">
                            <span>Información</span>
                            <h2>Contáctanos</h2>
                            <p>Servicio de Bordado, Publicidad textil, Uniformes empresariales, 
                                Uniformes Escolares y Muchas Cosas Mas Relacionadas 
                                con el Bordado.</p>
                        </div>
                        <ul>
                            <li>
                                <h4>Nuevo Casas Grandes, México</h4>
                                <p>Álvaro Obregón #414 31700<br />+52 636 694 1445</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="contact__form">
                    @if(Auth::user())
                        @if(Auth::user()->nivel == 'cliente' || Auth::user()->nivel == 'admin')
                        <form action="/contacto" method="POST">
                        @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Nombre" name="nombre">
                                </div>
                                <div class="col-lg-6">
                                    <input type="email" placeholder="Correo" name="correo">
                                </div>
                                <div class="col-lg-12">
                                    <textarea name="mensaje" placeholder="Mensaje..."></textarea>
                                    <button type="submit" class="site-btn">Enviar Mensaje</button>
                                </div>
                            </div>
                        </form>
                        @endif
                    @else
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Nombre" name="name">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Correo" name="correo">
                                </div>
                                <div class="col-lg-12">
                                    <textarea placeholder="Mensaje"></textarea>
                                    <a href="/login"><button type="button" class="site-btn">Enviar Mensaje</button></a>
                                </div>
                            </div>
                        </form>
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->
@endsection('contenedor')