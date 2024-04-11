<!-- Modal -->
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">NUEVA | PIPA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('home.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
          <label for="">Color</label>
          <input type="text" name="Color" id="" class="form-control">
          
          <label for="">Material</label>
          <input type="text" name="Material" id="" class="form-control">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">CERRAR</button>
          <button type="submit" class="btn btn-primary">AGREGAR</button>
        </div>
      </form>
    </div>
  </div>
</div>
