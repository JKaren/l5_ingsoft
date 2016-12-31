<h1>Modificar Administrativo
  <button type="button" onClick="location.href='/administrativo'"></button>
</h1>
<form  action="/administrativo/{{ $administartivo->id }}" method="post" autocomplete="off">
      <!--{{ csrf_field() }}
  {{ method_field('PUT') }}-->
  <label>Nombres</label>
  <input type="text" name="nombres" style="text-transform:uppercase;"
          onKeyup="javascript:this.value=this.value.toUpperCase();" value="{{ $administrativo->nombres }}"><br>
  <label>Cargo</label>
  <input type="text" name="cargo" style="text-transform:uppercase;"
          onKeyup="javascript:this.value=this.value.toUpperCase();" value="{{ $administrativo->cargo }}"><br>
  <label>Email</label>
  <input type="text" name="email" style="text-transform:uppercase;"
          onKeyup="javascript:this.value=this.value.toUpperCase();" value="{{ $administrativo->email }}"><br>
  <label>Telefono</label>
  <input type="text" name="telefono" style="text-transform:uppercase;"
          onKeyup="javascript:this.value=this.value.toUpperCase();" value="{{ $administrativo->telefono }}"><br>
  <label>DNI</label>
  <input type="text" name="dni" style="text-transform:uppercase;"
          onKeyup="javascript:this.value=this.value.toUpperCase();" value="{{ $administrativo->dni }}"><br><br>
  <button type="submit">Guardar</button>
  <button type="reset">Limpiar</button>

</form>
