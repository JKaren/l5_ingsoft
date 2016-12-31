<h1>Relacion de Administrativos
  <button type="button" onclick="location.href='administrativo/create'">NUEVO</button></h1>
<table border = "1">
  <thead>
    <tr>
      <th>Id</th>
      <th>Nombres</th>
      <!--<th>Cargo</th>-->
      <th>Email</th>
      <th>DNI</th>
    </tr>
  </thead>
  <tbody>
    @foreach($administrativos as $administrativo)
      <tr>
        <td>{{$administrativo->id}}</td>
        <td>{{$administrativo->nombres}}</td>
        <!--<td>{{$administrativo->cargo}}</td>-->
        <td>{{$administrativo->email}}</td>
        <td>{{$administrativo->dni}}</td>
        <td>
          <a href="administrativo/{{$administrativo->id}}">VER</a>
          <a href="administrativo/{{ $administrativo->id}}">EDITAR</a> -
          <form  action="administrativo/{{$administrativo->id}}" method="post">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <button >ELIMINAR</button>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
