<h1>Nuevo Administrativo
<button type="button" onclick="location.href='/administrativo'">Volver</button>
</h1>
<form  action="/administrativo" method="post" autocomplete="off">
    <input type="hidden" name="_token" value="{{ csrf_token()}}">
    <label>Id</label>
    <input type="text" autofocus name="id" style="text-transform:uppercase;" onkeyup="javascript:this.value=thisl.value.toUpperCase();"><br>
    <label>Nombres</label>
    <input type="text"  name="nombres" style="text-transform:uppercase;" onkeyup="javascript:this.value=thisl.value.toUpperCase();"><br>
    <label>Cargo</label>
    <input type="text"  name="cargo" style="text-transform:uppercase;" onkeyup="javascript:this.value=thisl.value.toUpperCase();"><br>
    <label>Email</label>
    <input type="text"  name="email" style="text-transform:lowercase;" onkeyup="javascript:this.value=thisl.value.toLowerCase();"><br>
    <label>Telefono</label>
    <input type="text"  name="telefono" style="text-transform:lowercase;" onkeyup="javascript:this.value=thisl.value.toLowerCase();"><br>
    <label>DNI</label>
    <input type="text"  name="dni" style="text-transform:lowercase;" onkeyup="javascript:this.value=thisl.value.toLowerCase();"><br><br>
  <button type="submit" >Guardar</button>
  <button type="reset" >Limpiar</button>
</form>
