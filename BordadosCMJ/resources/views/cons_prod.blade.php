@extends('layouts.main',['titulo'=>'Productos'],['section'=>'Administración de Productos'])

@section('section')
  @if($mensaje = Session::get('Listo'))
    <div class="alert alert-success alert-block">
      <strong>{{ $mensaje }}</strong>
    </div>
  @endif

  <div class="col-lg- col-12 mb-4 d-flex flex-row-reverse">
    <button type="button" class="btn btn-success" name="button" data-toggle="modal" data-target="#modelAgregar">Agregar Producto</button>
  </div>
  <!-- Modal Agregar -->
  <div class="modal fade" id="modelAgregar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Registrar Producto</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-8">
            <form action="/cons_prod" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <input class="form-control" type="text" name="nombre" value="" placeholder="Nombre">
              </div>
              <div class="form-group">
                <input class="form-control" type="file" name="imagen" value="">
              </div>
              <div class="form-group">
                <input class="form-control" type="text" name="descripcion" value="" placeholder="Descripción">
              </div>
              <div class="form-group">
                <input class="form-control" type="number" name="stock" value="" placeholder="Stock">
              </div>
              <div class="form-group">
                <input class="form-control" type="number" name="precio" value="" placeholder="Precio">
              </div>
              <div class="form-group">
                <input class="form-control" type="text" name="talla" value="" placeholder="Tamaño">
              </div>
              <div class="form-group">
                <label for="">Categoría</label>
                <br>
                <select name="idCategoria" id="">
                  @foreach($categorias as $cate)
                  <option value="{{$cate->id}}">{{$cate->nombre}}</option>
                  @endforeach
                </select>
              </div>
              <br>
          </div>
        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button class="btn btn-primary">Registrar</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  <!--End Modal Agregar-->

  <!-- Modal Editar -->
  <div class="modal fade" id="modelEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Editar Producto</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-8">
            <form action="/editar_prod" method="POST" enctype="multipart/form-data">
              @csrf
              <input type="hidden" name="id" id="idEdit">
              <div class="form-group">
                <input class="form-control" type="text" name="nombre" value="{{ old('nombre') }}" placeholder="Nombre" id="nameEdit">
              </div>
              <div class="form-group">
                <input class="form-control" type="file" name="imagen" value="{{ old('imagen') }}" id="imgEdit">
              </div>
              <div class="form-group">
                <input class="form-control" type="text" name="descripcion" value="{{ old('descripcion') }}" placeholder="Descripción" id="desEdit">
              </div>
              <div class="form-group">
                <input class="form-control" type="number" name="stock" value="{{ old('stock') }}" placeholder="Stock" id="stockEdit">
              </div>
              <div class="form-group">
                <input class="form-control" type="number" name="precio" value="{{ old('precio') }}" placeholder="Precio" id="precioEdit">
              </div>
              <div class="form-group">
                <input class="form-control" type="text" name="talla" value="{{ old('talla') }}" placeholder="Talla" id="tallaEdit">
              </div>
              <div class="form-group">
                <label for="">Categoría</label>
                <br>
                <select name="idCategoria" id="cateEdit">
                  @foreach($categorias as $cate)
                  <option value="{{$cate->id}}">{{$cate->nombre}}</option>
                  @endforeach
                </select>
              </div>
              <br>
          </div>
        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button class="btn btn-primary">Guardar Cambios</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  <!--End Modal Editar-->

  <!-- Modal Eliminar -->
  <div class="modal fade" id="modelEliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Eliminar Producto</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <h5>¿Deseas eliminar el producto?</h5>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-danger btnModelEliminar">Eliminar</button>
        </div>
      </div>
    </div>
  </div>
  <!--End Modal Eliminar-->

<!--FILTER CONTROLS-->
  <div class="row">
    <div class="col-lg-12">
        <ul class="filter__controls">
            <li class="active todos">Todos Los Productos</li>
            <li class="vendidos">Los Más Vendidos</li>
            <li class="nuevos">Los Más Nuevos</li>
        </ul>
    </div>
  </div>

  <!--Tabla de registros-->
    <div class="col-12 tProductos">
      <div class="row">
        <div class="col-12">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Imagen</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Stock</th>
                <th scope="col">Precio</th>
                <th scope="col">Talla</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($prod as $p)
              <tr>
                <th scope="row">{{$p->id}}</th>
                <td>{{$p->nombre}}</td>
                <td>{{$p->imagen}}</td>
                <td>{{$p->descripcion}}</td>
                <td>{{$p->stock}}</td>
                <td>{{$p->precio}}</td>
                <td>{{$p->talla}}</td>
                <td>
                  <button type="button"
                  data-id="{{ $p -> id}}"
                  data-nombre="{{ $p -> nombre}}"
                  data-imagen="{{ $p -> imagen}}"
                  data-descripcion="{{ $p -> descripcion}}"
                  data-stock="{{ $p -> stock}}"
                  data-precio="{{ $p -> precio}}"
                  data-talla="{{ $p -> talla}}"
                  data-idCategoria="{{ $p -> idCategoria}}"
                  class="btn btn-primary btnEditar" data-toggle="modal" data-target="#modelEditar" >Editar</button>
                  <button type="button" data-id="{{ $p->id }}" class="btn btn-danger btnEliminar" data-toggle="modal" data-target="#modelEliminar" >Eliminar</button>
                  <form action="{{ url ('/cons_prod', ['id'=>$p->id]) }}" method="post" id="formEli_{{ $p->id}}">
                    @csrf
                    <input type="hidden" name="id" value="{{ $p->id }}">
                    <input type="hidden" name="_method" value="delete">
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!--Tabla de registros-->
    <div class="col-12 vProductos">
      <div class="row">
        <div class="col-12">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Imagen</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Stock</th>
                <th scope="col">Precio</th>
                <th scope="col">Talla</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($prod as $p)
              <tr>
                <th scope="row">{{$p->id}}</th>
                <td>{{$p->nombre}}</td>
                <td>{{$p->imagen}}</td>
                <td>{{$p->descripcion}}</td>
                <td>{{$p->stock}}</td>
                <td>{{$p->precio}}</td>
                <td>{{$p->talla}}</td>
                <td>
                  <button type="button"
                  data-id="{{ $p -> id}}"
                  data-nombre="{{ $p -> nombre}}"
                  data-imagen="{{ $p -> imagen}}"
                  data-descripcion="{{ $p -> descripcion}}"
                  data-stock="{{ $p -> stock}}"
                  data-precio="{{ $p -> precio}}"
                  data-talla="{{ $p -> talla}}"
                  data-idCategoria="{{ $p -> idCategoria}}"
                  class="btn btn-primary btnEditar" data-toggle="modal" data-target="#modelEditar" >Editar</button>
                  <button type="button" data-id="{{ $p->id }}" class="btn btn-danger btnEliminar" data-toggle="modal" data-target="#modelEliminar" >Eliminar</button>
                  <form action="{{ url ('/cons_prod', ['id'=>$p->id]) }}" method="post" id="formEli_{{ $p->id}}">
                    @csrf
                    <input type="hidden" name="id" value="{{ $p->id }}">
                    <input type="hidden" name="_method" value="delete">
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!--Tabla de registros-->
    <div class="col-12 nProductos">
      <div class="row">
        <div class="col-12">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Imagen</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Stock</th>
                <th scope="col">Precio</th>
                <th scope="col">Talla</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($prod as $p)
              <tr>
                <th scope="row">{{$p->id}}</th>
                <td>{{$p->nombre}}</td>
                <td>{{$p->imagen}}</td>
                <td>{{$p->descripcion}}</td>
                <td>{{$p->stock}}</td>
                <td>{{$p->precio}}</td>
                <td>{{$p->talla}}</td>
                <td>
                  <button type="button"
                  data-id="{{ $p -> id}}"
                  data-nombre="{{ $p -> nombre}}"
                  data-imagen="{{ $p -> imagen}}"
                  data-descripcion="{{ $p -> descripcion}}"
                  data-stock="{{ $p -> stock}}"
                  data-precio="{{ $p -> precio}}"
                  data-talla="{{ $p -> talla}}"
                  data-idCategoria="{{ $p -> idCategoria}}"
                  class="btn btn-primary btnEditar" data-toggle="modal" data-target="#modelEditar" >Editar</button>
                  <button type="button" data-id="{{ $p->id }}" class="btn btn-danger btnEliminar" data-toggle="modal" data-target="#modelEliminar" >Eliminar</button>
                  <form action="{{ url ('/cons_prod', ['id'=>$p->id]) }}" method="post" id="formEli_{{ $p->id}}">
                    @csrf
                    <input type="hidden" name="id" value="{{ $p->id }}">
                    <input type="hidden" name="_method" value="delete">
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
    
@endsection

@section('scripts')
  <script type="text/javascript">
    var idEliminar = 0;
    $(document).ready(function(){
      @if($message = Session::get('ErrorInsert'))
        $("#modelAgregar").modal('show');
      @endif
      $(".btnEliminar").click(function(){
        idEliminar = $(this).data("id");
      });
      $(".btnModelEliminar").click(function(){
        $("#formEli_"+idEliminar).submit();
      });
      $(".btnEditar").click(function(){
        $('#idEdit').val($(this).data("id"));
        $('#nameEdit').val($(this).data("nombre"));
        $('#imgEdit').val($(this).data("imagen"));
        $('#desEdit').val($(this).data("descripcion"));
        $('#stockEdit').val($(this).data("stock"));
        $('#precioEdit').val($(this).data("precio"));
        $('#tallaEdit').val($(this).data("talla"));
        $('#cateEdit').val($(this).data("idCategoria"));
      });
    });
  </script>
  
@endsection