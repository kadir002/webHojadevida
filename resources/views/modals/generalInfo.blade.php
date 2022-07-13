 <!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Actualizar informacion</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{route('user.update',auth()->user()->id)}}" method="post">
            @method('PUT')
            @csrf
          <div class="form-floating mb-3">
            <label >direccion</label>
            <input type="text" class="form-control" name="direccion"
            placeholder="@if(auth()->user()->direccion==null)agregar un direccion
            @else{{auth()->user()->direccion}}
            @endif
            " >
            
          </div>
          <div class="form-floating">
            <label >telefono</label>
            <input type="text" class="form-control" name="telefono"
            placeholder="@if(auth()->user()->telefono==null)agregar un telefono
            @else{{auth()->user()->telefono}}
            @endif
            "
            
            >
            
          </div>
          <div class="form-floating">
            <label >descripcion</label>
            <input type="text" name="descripcion" class="form-control" placeholder="@if(auth()->user()->descripcion==null)agregar una descripcion
            @else{{auth()->user()->descripcion}}
            @endif
            " >
          
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btnClose" >Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
      </div>
    </div>
  </div>