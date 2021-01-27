<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$titulo}}</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset ('/inicio/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset ('/inicio/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset ('/inicio/css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset ('/inicio/css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset ('/inicio/css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset ('/inicio/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset ('/inicio/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset ('/inicio/css/style.css') }}" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    @include('layouts/headerIndex')
    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__slider owl-carousel">
            <div class="hero__items set-bg" data-setbg="{{ asset ('/inicio/img/hero/hero-2-copia.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-7 col-md-8">
                            <div class="hero__text">
                            <h6>Bordados CMJ</h6>
                                <h2>Los mejores bordados en prendas.</h2>
                                <p>Las mejores herramientas para bordados están con nosotros para brindarte la posibilidad de que luzcas
                                    la ropa con el mejor bordado y que mejor que con el que tu elijas.</p>
                                <a href="/shop" class="primary-btn">Ir a la tienda<span class="arrow_right"></span></a>
                                <div class="hero__social">
                                    <a href="https://www.facebook.com/bordadoscmj"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__items set-bg" data-setbg="{{ asset ('/inicio/img/hero/hero-1-copia.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-7 col-md-8">
                            <div class="hero__text">
                                <h6>Colección de Gorras</h6>
                                <h2>Bordados únicos en gorras</h2>
                                <p>Una gorra increíble para regalar a una persona especial solo elige el bordado, 
                                encargala y nosotros nos encargamos de hacertela llegar.</p>
                                <a href="#" class="primary-btn">Comprar Ahora<span class="arrow_right"></span></a>
                                <div class="hero__social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Banner Section Begin -->
    <section class="banner spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 offset-lg-4">
                    <div class="banner__item">
                        <div class="banner__item__pic">
                            <img src="{{ asset ('/inicio/img/banner/banner1.jpg') }}" alt="">
                        </div>
                        <div class="banner__item__text">
                            <h2>Colección de Gorras</h2>
                            <a href="#">Comprar Ahora</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="banner__item banner__item--middle">
                        <div class="banner__item__pic">
                            <img src="{{ asset ('/inicio/img/banner/banner3.jpg') }}" alt="">
                        </div>
                        <div class="banner__item__text">
                            <h2>Colección de Playeras</h2>
                            <a href="#">Comprar Ahora</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="banner__item banner__item--last">
                        <div class="banner__item__pic">
                            <img src="{{ asset ('/inicio/img/banner/banner2.jpg') }}" alt="">
                        </div>
                        <div class="banner__item__text">
                            <h2>Colección de Mochilas</h2>
                            <a href="#">Comprar Ahora</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="filter__controls">
                        <li class="active" data-filter="*">Lo más vendido</li>
                        <li data-filter=".new-arrivals">Lo más nuevo</li>
                        <li data-filter=".hot-sales">Ventas Calientes</li>
                    </ul>
                </div>
            </div>
            <div class="row product__filter">
                @yield('contenedor')
            </div>
        </div>
    </section>
    <!-- Product Section End -->

    <!-- Categories Section Begin -->
    <!--
    <section class="categories spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="categories__text">
                        <h2>Clothings Hot <br /> <span>Shoe Collection</span> <br /> Accessories</h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories__hot__deal">
                        <img src="{{ asset ('/inicio/img/product-sale.png') }}" alt="">
                        <div class="hot__deal__sticker">
                            <span>Sale Of</span>
                            <h5>$29.99</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1">
                    <div class="categories__deal__countdown">
                        <span>Deal Of The Week</span>
                        <h2>Multi-pocket Chest Bag Black</h2>
                        <div class="categories__deal__countdown__timer" id="countdown">
                            <div class="cd-item">
                                <span>3</span>
                                <p>Days</p>
                            </div>
                            <div class="cd-item">
                                <span>1</span>
                                <p>Hours</p>
                            </div>
                            <div class="cd-item">
                                <span>50</span>
                                <p>Minutes</p>
                            </div>
                            <div class="cd-item">
                                <span>18</span>
                                <p>Seconds</p>
                            </div>
                        </div>
                        <a href="#" class="primary-btn">Shop now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    -->
    <!-- Categories Section End -->
    
    <!-- Instagram Section Begin -->
    <section class="instagram spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="instagram__pic">
                        <div class="instagram__pic__item set-bg" data-setbg="{{ asset ('/inicio/img/instagram/instagram-1.jpg') }}"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="{{ asset ('/inicio/img/instagram/instagram-2.jpg') }}"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="{{ asset ('/inicio/img/instagram/instagram-3.jpg') }}"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="{{ asset ('/inicio/img/instagram/instagram-4.jpg') }}"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="{{ asset ('/inicio/img/instagram/instagram-5.jpg') }}"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="{{ asset ('/inicio/img/instagram/instagram-6.jpg') }}"></div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="instagram__text">
                        <h2>Instagram</h2>
                        <p>Algunos de los diseños que se han bordado en diferentes prendas, si quieres ver más diseños siguenos en instagram.</p>
                        <h3>#BordadosCMJ</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Instagram Section End -->

    <!-- Latest Blog Section Begin -->
    <section class="latest spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Latest News</span>
                        <h2>Fashion New Trends</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="{{ asset ('/inicio/img/blog/blog-1.jpg') }}"></div>
                        <div class="blog__item__text">
                            <span><img src="{{ asset ('/inicio/img/icon/calendar.png') }}" alt=""> 16 February 2020</span>
                            <h5>What Curling Irons Are The Best Ones</h5>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="{{ asset ('/inicio/img/blog/blog-2.jpg') }}"></div>
                        <div class="blog__item__text">
                            <span><img src="{{ asset ('/inicio/img/icon/calendar.png') }}" alt=""> 21 February 2020</span>
                            <h5>Eternity Bands Do Last Forever</h5>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="{{ asset ('/inicio/img/blog/blog-3.jpg') }}"></div>
                        <div class="blog__item__text">
                            <span><img src="{{ asset ('/inicio/img/icon/calendar.png') }}" alt=""> 28 February 2020</span>
                            <h5>The Health Benefits Of Sunglasses</h5>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Blog Section End -->
    @include ('layouts/footerIndex')
    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="{{ asset ('/inicio/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset ('/inicio/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset ('/inicio/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset ('/inicio/js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset ('/inicio/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset ('/inicio/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset ('/inicio/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset ('/inicio/js/mixitup.min.js') }}"></script>
    <script src="{{ asset ('/inicio/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset ('/inicio/js/main.js') }}"></script>
</body>

</html>