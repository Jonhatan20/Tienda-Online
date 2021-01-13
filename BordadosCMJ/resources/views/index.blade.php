@extends('layouts.mainIndex',['titulo'=>'Bordados CMJ'])

@section('contenedor')
    @foreach($prods as $p)
        <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
            <div class="product__item">
                <div class="product__item__pic set-bg" data-setbg="{{ asset('prods/'.$p->imagen) }}">
                <span class="label">Nuevo</span>
                        <ul class="product__hover">
                            <li><a href="#"><img src="{{ asset ('/inicio/img/icon/heart.png') }}" alt=""></a></li>
                            <li><a href="#"><img src="{{ asset ('/inicio/img/icon/compare.png') }}" alt=""> <span>Compare</span></a></li>
                            <li><a href="#"><img src="{{ asset ('/inicio/img/icon/search.png') }}" alt=""></a></li>
                        </ul>
                            </div>
                            <div class="product__item__text">
                                <h6>{{ $p->nombre }}</h6>
                                <a href="#" class="add-cart">+ Agregar al carrito</a>
                                <p>{{ $p->descripcion }}</p>
                                <div class="rating">
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                    <h5>${{$p->precio}}</h5>
                                
                            </div>
            </div>
        </div>
    @endforeach
@endsection
