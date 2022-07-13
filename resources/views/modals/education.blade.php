<div class="modal fade" id="modal-educa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <input type="hidden"  id="education-id">
        <div class="modal-body">
          
          <div class="form-floating mb-3">
            <label >lugar de estudio</label>
            <input type="text" class="form-control" id="nombre_centro" name="nombre_centro">
          </div>
          <div class="form-floating mb-3">
            <label >titulo</label>
            <input type="text" class="form-control" id="titulo-educacion" name="titulo">
          </div>
          <div class="form-floating mb-3">
            <label >detalle</label>
            <input type="text" class="form-control" id="detalle" name="detalle">
          </div>
          <div class="form-floating mb-3">
            <label >inicio</label>
            <input type="text" class="form-control" id="ed-fecha_inicial" name="fecha_inicial">
          </div>
          <div class="form-floating mb-3">
            <label >final</label>
            <input type="text" class="form-control" id="ed-fecha_final" name="fecha_final">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary modal" >Close</button>
          <button type="button" class="btn btn-primary" id="educacion-btn">Save changes</button>
        </div>
      </div>
    </div>
  </div>