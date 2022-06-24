@include('layouts.head')
<form method="POST" action="{{ route('rol.store') }}" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
        {{ csrf_field() }}

          <div class="form-group">
              <label>rol</label>
              <br>
              <input type="text" class="form-control" placeholder="rol" name="rol">
          </div>
          <div class="form-group">
              <button type="submit" class="btn btn-dark">Guardar</button>
          </div>
</form>

@include('layouts.end')
