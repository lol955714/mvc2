<form action="{{ url('/personas/'.$pers->id) }}" method="post">
{{ csrf_field() }}
{{ method_field('PATCH') }}
<label for="nombre">{{'nombre'}}</label>
<input type="text" name="nombre" id="nombre" value="{{$pers->nombre}}">
<br>
<label for="correo">{{'correo'}}</label>
<input type="text" name="correo" id="correo" value="{{$pers->correo}}">

<br>
<label for="dui">{{'dui'}}</label>
<input type="text" name="dui" id="dui" value="{{$pers->dui}}">
<br>
<label for="numero">{{'numero'}}</label>
<input type="text" name="numero" id="numero" value="{{$pers->numero}}">
<br>
<input type="submit" value="Agregar">
</form>