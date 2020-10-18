<a href="./personas/create">Crear pérsona</a>
<table>
<thead>
<th>numero de registro</th>
 <th>Nombre</th>
    <th>Telefono</th>
    <th>Correo</th>
    <th>DUI</th>
    <th>Acciones</th>
</thead>

<tbody>
   @foreach ($datos as $dato)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$dato->nombre}}</td>
        <td>{{$dato->numero}}</td>
        <td>{{$dato->correo}}</td>
        <td>{{$dato->dui}}</td>
        <td>
        <a href="{{ url ('personas/'.$dato->id.'/edit')}}"><button>Editar</button></a>
        | 
        <form method="post" action="{{url ('/personas/'.$dato->id)}} ">
        {{ csrf_field() }}
        {{method_field('DELETE')}}
        <button type="submit" onclick="return confirm();">Borrar</buttton>
        </td>
    </tr>
@endforeach
</tbody>


    
</table>