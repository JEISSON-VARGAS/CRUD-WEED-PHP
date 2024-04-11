{{ $pipa->id }}
<!-- Modal edit -->
<div class="modal fade" id="edit{{ $pipa->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">EDITAR | PIPA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- Utiliza la función route() para generar la URL de la ruta de actualización -->
      <form action="{{ route('home.update', $pipa->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="modal-body">
          <label for="">Color</label>
          <input type="text" name="Color" id="" class="form-control" value="{{ $pipa->Color }}">
          
          <label for="">Material</label>
          <input type="text" name="Material" id="" class="form-control" value="{{ $pipa->Material }}">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">CERRAR</button>
          <button type="submit" class="btn btn-primary">ACTUALIZAR</button>
        </div>
      </form>
    </div>
  </div>
</div>




<!-- Modal delete-->
<div class="modal fade" id="delete{{ $pipa->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ELIMINAR | PIPA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('home.destroy', $pipa->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('DELETE')
        <div class="modal-body">
            Estas Seguro Que Quieres Eliminar La Pipa Numero <strong>{{$pipa->id}}</strong>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">CERRAR</button>
          <button type="submit" class="btn btn-primary">ELIMINAR</button>
        </div>
      </form>
    </div>
  </div>
</div>

