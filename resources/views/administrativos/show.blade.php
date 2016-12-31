<h1>Administrativo
  <button type="button" onclick="location.href='/administrativo'">VOLVER</button>
</h1>
<form >
  <label>Id</label>
  <input type="int" disabled=""  value="{{$administrativo->id}}"><br>
  <label>Nombres</label>
  <input type="text" disabled=""  value="{{$administrativo->nombres}}"><br>
  <label>Cargo</label>
  <input type="text" disabled=""  value="{{$administrativo->cargo}}"><br>
  <label>Email</label>
  <input type="text" disabled=""  value="{{$administrativo->email}}"><br>
  <label>Telefono</label>
  <input type="text" disabled=""  value="{{$administrativo->telefono}}"><br>
  <label>DNI</label>
  <input type="text" disabled=""  value="{{$administrativo->dni}}"><br>
</form>
