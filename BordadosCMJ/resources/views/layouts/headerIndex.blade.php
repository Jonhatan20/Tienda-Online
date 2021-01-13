   
    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7">
                        <div class="header__top__left">
                            <p>Realiza tu compra. Devolución de 30 días o garantía de reembolso</p>
                        </div>
                    </div>
                    @if(Auth::user())
                    <div class="col-lg-6 col-md-5">
                    <div class="header__top__right">
                    <div class="header__top__links">
                    <form class="" action="{{ route('logout') }}" method="post">
                        @csrf
                        @if(Auth::user()->nivel == 'admin'))
                        <a href="/cons_user">Administración</a>
                        @endif
                        <button class="btn btn-secundary" type="submit">
                        <a href="" class="dropdown-item">
                            <i class="ni ni-user-run"></i>
                            <span>Cerrar Sesión</span>
                        </a>
                        </button>
                    </form>
                    </div>
                    </div>
                    </div>
                    @else
                    <div class="col-lg-6 col-md-5">
                        <div class="header__top__right">
                            <div class="header__top__links">
                                <a href="{{ route('register') }}">Crear Cuenta</a>
                                <a href="{{ route('login') }}">Ingresar</a>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="{{ asset ('/dash/assets/img/brand/logoSinFondo.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="active"><a href="/index">Inicio</a></li>
                            <li><a href="/shop">Tienda</a></li>
                            <li><a href="#">Páginas</a>
                                <ul class="dropdown">
                                    <li><a href="./about.html">Acerca de nosotros</a></li>
                                    <li><a href="./shop-details.html">Detalles de Compra</a></li>
                                    <li><a href="/carritoCompras">Carrito de Compras</a></li>
                                    <li><a href="./checkout.html">Verificación de Compra</a></li>
                                </ul>
                            </li>
                            <li><a href="./blog-details.html">Blog</a></li>
                            <li><a href="./contact.html">Contacto</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="header__nav__option">
                        <a href="#" class="search-switch"><img src="{{ asset ('/inicio/img/icon/search.png') }}" alt=""></a>
                        <a href="#"><img src="{{ asset ('/inicio/img/icon/heart.png') }}" alt=""></a>
                        <a href="#"><img src="{{ asset ('/inicio/img/icon/cart.png') }}" alt=""> <span>0</span></a>
                        <div class="price">$0.00</div>
                    </div>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>
    <!-- Header Section End -->
