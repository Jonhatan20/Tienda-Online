'use strict';

$(document).ready(function(){

    $('.vProductos').hide();
    $('.nProductos').hide();

    $('.filter__controls li').on('click', function () {
        $('.filter__controls li').removeClass('active');
        $(this).addClass('active');
    });
    $('.todos').on('click',function(){
        $('.tProductos').show();
        $('.vProductos').hide();
        $('.nProductos').hide();

    });
    $('.vendidos').on('click',function(){
        $('.tProductos').hide();
        $('.vProductos').show();
        $('.nProductos').hide();

    });
    $('.nuevos').on('click',function(){
        $('.tProductos').hide();
        $('.vProductos').hide();
        $('.nProductos').show();

    });
});