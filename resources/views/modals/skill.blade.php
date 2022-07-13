<div class="modal fade" id="skill-modal" tabindex="-1" aria-labelledby="label-skill" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="label-skill">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{route('activity-skill.store')}}" method="POST">
          @csrf
          
          <div class="row">
            <div class="col">
              <input type="text" class="form-control" name="titulo" placeholder="titulo" >
            </div>
            <div class="col">
              <input required type="text" class="form-control" name="descripcion" placeholder="descripción" >
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </form>
      </div>
    </div>
  </div>