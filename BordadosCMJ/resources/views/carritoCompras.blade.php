@extends('layouts.carritoCompras',['titulo'=>'Carrito de Compras'])

@section('contenedor')
<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Carrito de Compras</h4>
                        <div class="breadcrumb__links">
                            <a href="/index">Inicio</a>
                            <a href="/shop">Tienda</a>
                            <span>Carrito de Compras</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
<!-- Shopping Cart Section Begin -->
<section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="shopping__cart__table">
                        <?php $valor = 0 ?>
                        @if(session('carritoCompras'))
                        <table>
                            <thead>
                                <tr>
                                    <th>Producto</th>
                                    <th>Cantidad</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            
                                @foreach(session('carritoCompras') as $id => $prod_detalles)
                                <?php $valor += $prod_detalles['precio'] * $prod_detalles['cantidad'] ?>
                                <tr>
                                    <td class="product__cart__item">
                                        <div class="product__cart__item__pic">
                                            <img src="{{ asset('prods/'. $prod_detalles['imagen']) }}" width="120px" alt="">
                                        </div>
                                        <div class="product__cart__item__text">
                                            <h6>{{ $prod_detalles['nombre'] }}</h6>
                                            <h5>${{ $prod_detalles['precio'] }}</h5>
                                        </div>
                                    </td>
                                    <td class="quantity__item">
                                        <div class="quantity">
                                            <div class="pro-qty-2">
                                                <input type="text" value="{{ $prod_detalles['cantidad'] }}">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="cart__price">{{ $prod_detalles['precio'] * $prod_detalles['cantidad'] }}</td>
                                    <td class="cart__close"><i class="fa fa-close"></i></td>
                                </tr>
                                @endforeach
                                
                        </table>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn">
                                <a href="#">Continuar Comprando</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn update__btn">
                                <a href=""><i class="fa fa-spinner"></i>Actualizar Carrito</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cart__discount">
                        <h6>Codigos de Descuento</h6>
                        <form action="#">
                            <input type="text" placeholder="Código de descuento">
                            <button type="submit">Aplicar</button>
                        </form>
                    </div>
                    <div class="cart__total">
                        <h6>Carrito Total</h6>
                        <ul>
                            <li>Subtotal <span>$ {{$valor}}</span></li>
                            <li>Total <span>$ {{$valor}}</span></li>
                        </ul>
                        <a href="#" class="primary-btn">Procesar compra</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->
@endsection