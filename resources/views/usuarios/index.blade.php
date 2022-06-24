
@include('layouts.head')
<a href="{{route('usuarios.create')}}" class="btn btn-info">nuevo</a>
<a href="{{route('rol.index')}}" class="btn btn-info">lista roles</a>
<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">nombre</th>
      <th scope="col">apellido</th>
      <th scope="col">edad</th>
      <th scope="col">rol</th>
      <th colspan="3"></th>
    </tr>
  </thead>
  <tbody>
    @foreach($usuarios as $usr)
    <tr>
      <td>{{$usr->nombre}}</td>
      <td>{{$usr->apellido}}</td>
      <td>{{$usr->edad}}</td>
      <td>{{$usr->Rols->rol}}</td>
      <td>
        <a href="{{ route('usuarios.edit',$usr->id) }}"class="btn btn-info">Editar</a>
      </td>
      <td>
        <form action="{{ route('usuarios.destroy',$usr->id) }}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="DELETE">
            <button class="btn btn-danger">Borrar</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@include('layouts.end')
