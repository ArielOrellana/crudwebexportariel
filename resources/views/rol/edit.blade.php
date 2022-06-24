@include('layouts.head')
<form method="POST" action="{{ route('rol.update',$id) }}" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PATCH">
          <div class="form-group">
              <label>rol</label>
              <br>
              <input type="text" class="form-control" placeholder="rol" name="rol" value="{{$rol->rol}}">
          </div>

          <div class="form-group">
              <button type="submit" class="btn btn-dark">Guardar</button>
          </div>
</form>
@include('layouts.end')
