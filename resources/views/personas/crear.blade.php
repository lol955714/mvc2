<form action="{{url('/personas')}}" method="post">
{{ csrf_field() }}
<label for="nombre">{{'nombre'}}</label>
<input type="text" name="nombre" id="nombre" >
<br>
<label for="correo">{{'correo'}}</label>
<input type="text" name="correo" id="correo" >

<br>
<label for="dui">{{'dui'}}</label>
<input type="text" name="dui" id="dui" >
<br>
<label for="numero">{{'numero'}}</label>
<input type="text" name="numero" id="numero" >
<br>
<input type="submit" value="Agregar">
</form>