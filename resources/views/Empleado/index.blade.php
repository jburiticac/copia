mostrar la lista de empleados 
<table class="table table-light">
   
<thead class="thead-light">
        <tr>
            <th>#</th>
            <th>foto</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido materno</th>
            <th>correo</th>
            <th>Acciones</th>
        </tr>
    </thead>
  
    <tbody>
        @foreach($empleados as $empleado)
        <tr>
            <td>{{$empleado->id}}</td>
            <td>{{$empleado->Foto}}</td>
            <td>{{$empleado->Nombre}}</td>
            <td>{{$empleado->Apellidopaterno}}</td>
            <td>{{$empleado->Apellidomaterno}}</td>
            <td>{{$empleado->Correo}}</td>
            
            <td>
               <a href="{{ url('/empleado/'.$empleado->id.'/edit')   }}">Editar</a>
                
            <form action="{{ url('/empleado/'.$empleado->id)   }}" method="post">
             @csrf
             {{ method_field('DELETE')}}

             <input type="submit" onclick="return confirm('¿quieres borrar?') " value="borrar">

            </form>
        
        
        
        
        </td>
        </tr>
        @endforeach
    </tbody>
</table>