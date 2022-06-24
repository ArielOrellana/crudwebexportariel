
@include('layouts.head')
<a href="{{route('rol.create')}}" class="btn btn-info">nuevo</a>
<a href="{{route('usuarios.index')}}" class="btn btn-info">lista usuarios</a>
<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">roles</th>
      <th colspan="3"></th>
    </tr>
  </thead>
  <tbody>
    @foreach($rol as $rol)
    <tr>
      <td>{{$rol->rol}}</td>
      <td>
        <a href="{{ route('rol.edit',$rol->id) }}"class="btn btn-info">Editar</a>
      </td>
      <td>
        <form action="{{ route('rol.destroy',$rol->id) }}" method="POST">
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
