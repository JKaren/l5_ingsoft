<h1>Modificar Contacto
  <button type="button" onclick="location.href='/contacto'">VOLVER</button>
</h1>
<form  action="/contacto/{{$contacto->idcontacto}}" method="post"autocomplete="off">
  {{csrf_field()}}
  {{method_field('PUT')}}
  <label>Nombres</label>
  <input type="text" name="nombres" style="text-transform.uppercase;"
    onkeyup="javascript:this.value=this.value.toUpperCase();"
    value="{{$contacto->nombres}}"><br>
  <label>Apellidos</label>
  <input type="text" name="apellidos" style="text-transform.uppercase;"
    onkeyup="javascript:this.value=this.value.toUpperCase();"
    value="{{$contacto->apellidos}}"><br>
  <label>Email</label>
  <input type="text" name="email" style="text-transform.lowercase;"
    onkeyup="javascript:this.value=this.value.toLowerCase();"
    value="{{$contacto->email}}"><br><br>
  <button type="submit">Guardar</button>
  <button type="reset">Limpiar</button>
</form>
