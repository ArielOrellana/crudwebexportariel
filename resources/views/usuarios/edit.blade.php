@include('layouts.head')
<form method="POST" action="{{ route('usuarios.update',$id) }}" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PATCH">
          <div class="form-group">
              <label>Nombre</label>
              <br>
              <input type="text" class="form-control" placeholder="Nombre" name="nombre" value="{{$usuarios->nombre}}">
          </div>
          <div class="form-group">
              <label>apellido</label>
              <br>
              <input type="text" class="form-control" placeholder="apellido" name="apellido" value="{{$usuarios->apellido}}">
          </div>
          <div class="form-group">
              <label>edad</label>
              <br>
              <input type="text" class="form-control" placeholder="edad" name="edad" value="{{$usuarios->edad}}">
          </div>
          <div class="form-group">
              <label>rol</label>
              <br>
              <select name="rolid"  class="form-control">
                <option value="">-- escoja rol --</option>
                @foreach($rol as $rol)
                  <option value="{{$rol->id}}">{{$rol->rol}}</option>
                @endforeach
              </select>
          </div>
          <div class="form-group">
              <button type="submit" class="btn btn-dark">Guardar</button>
          </div>
</form>
@include('layouts.end')
