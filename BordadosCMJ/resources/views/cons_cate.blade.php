@extends('layouts.main',['titulo'=>'Productos'],['section'=>'Administración de Categorías'])

@section('section')
  @if($mensaje = Session::get('Listo'))
    <div class="alert alert-success alert-block">
      <strong>{{ $mensaje }}</strong>
    </div>
  @endif

  <div class="col-lg- col-12 mb-4 d-flex flex-row-reverse">
    <button type="button" class="btn btn-success" name="button" data-toggle="modal" data-target="#modelAgregar">Agregar Categoría</button>
  </div>
  <!-- Modal Agregar -->
  <div class="modal fade" id="modelAgregar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Registrar Categoría</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-8">
            <form action="/cons_cate" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <input class="form-control" type="text" name="nombre" value="" placeholder="Nombre">
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
          <h5 class="modal-title" id="exampleModalLongTitle">Editar Categoría</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-8">
            <form action="/editar_cate" method="POST" enctype="multipart/form-data">
              @csrf
              <input type="hidden" name="id" id="idEdit">
              <div class="form-group">
                <input class="form-control" type="text" name="nombre" value="{{ old('nombre') }}" id="nameEdit" placeholder="Nombre">
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
          <h5 class="modal-title" id="exampleModalLongTitle">Eliminar Categoría</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <h5>¿Deseas eliminar la categoría?</h5>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-danger btnModelEliminar">Eliminar</button>
        </div>
      </div>
    </div>
  </div>
  <!--End Modal Eliminar-->
  <!--Tabla de registros-->
    <div class="col-12">
      <div class="row">
        <div class="col-12">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($cates as $c)
              <tr>
                <th scope="row">{{$c->id}}</th>
                <td>{{$c->nombre}}</td>
                <td>
                  <button type="button"
                  data-id="{{ $c -> id}}"
                  data-name="{{ $c -> nombre}}"
                  class="btn btn-primary btnEditar" data-toggle="modal" data-target="#modelEditar" >Editar</button>
                  <button type="button" data-id="{{ $c->id }}" class="btn btn-danger btnEliminar" data-toggle="modal" data-target="#modelEliminar" >Eliminar</button>
                  <form action="{{ url ('/cons_cate', ['id'=>$c->id]) }}" method="post" id="formEli_{{ $c->id}}">
                    @csrf
                    <input type="hidden" name="id" value="{{ $c->id }}">
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
      });
    });
  </script>
@endsection