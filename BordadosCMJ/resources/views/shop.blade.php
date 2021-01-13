@extends('layouts.mainShop',['titulo'=>'Tienda'])

@section('contenedor')
@section('categorias')
<div class="card">
    <div class="card-heading">
        <a data-toggle="collapse" data-target="#collapseOne">Categorías</a>
    </div>
    <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
        <div class="card-body">
            <div class="shop__sidebar__categories">
                <ul class="nice-scroll">
                    @foreach($cates as $c)
                    <li><a href="#">{{$c -> nombre}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div> 
@endsection
<div class="col-lg-9">
    <div class="shop__product__option">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="shop__product__option__left">
                    <p>Showing 1–12 of 126 results</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="shop__product__option__right">
                    <p>Sort by Price:</p>
                    <select>
                        <option value="">Low To High</option>
                        <option value="">$0 - $55</option>
                        <option value="">$55 - $100</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6">
        @foreach($prods as $p)
            <div class="product__item">
                <div class="product__item__pic set-bg" data-setbg="{{ asset('prods/'.$p->imagen) }}">
                    <ul class="product__hover">
                        <li><a href="{{ url ('prod_detalles/'. $p->id) }}"><img src="{{ asset('/inicio/img/icon/view-details.png')}}" alt=""> <span>Detalles</span></a>
                        </li>
                    </ul>
                </div>
                
                <div class="product__item__text">
                    <h6>{{ $p->nombre }}</h6>
                    <a href="{{ url ('agregarCarrito/'. $p->id) }}" class="add-cart">+ Agregar al carrito</a>
                    <div class="rating">
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <h5>{{ $p->precio }}</h5>
                    <div class="product__color__select">
                        <label for="pc-4">
                            <input type="radio" id="pc-4">
                        </label>
                        <label class="active black" for="pc-5">
                            <input type="radio" id="pc-5">
                        </label>
                        <label class="grey" for="pc-6">
                            <input type="radio" id="pc-6">
                        </label>
                    </div>
                </div>
            </div>
        @endforeach
        </div>                          
    </div>
</div>
@endsection