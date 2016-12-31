<h1>Contacto
  <button type="button" onclick="location.href='/contacto'">VOLVER</button>
</h1>
<form >
  <label>IdContacto</label>
  <input type="text" disabled=""  value="{{$contacto->idcontacto}}"><br>
  <label>Nombres</label>
  <input type="text" disabled=""  value="{{$contacto->nombres}}"><br>
  <label>Apellidos</label>
  <input type="text" disabled=""  value="{{$contacto->apellidos}}"><br>
  <label>Email</label>
  <input type="text" disabled=""  value="{{$contacto->email}}"><br>

</form>
