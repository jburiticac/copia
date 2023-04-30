formulario que tendra los datos en comun con create y edit 
<br>
<label for="Nombre">Nombre</label>
<input  type="text" name="Nombre" value="{{$empleado->Nombre}}" id="Nombre">

<br>
<label for="ApellidoPaterno">Apellido Paterno</label>
<input  type="text" name="ApellidoPaterno" value="{{$empleado->ApellidoPaterno}}" id="ApellidoPaterno" >

<br>
<label for="ApellidoMaterno">Apellido Materno</label>
<input  type="text" name="ApellidoMaterno" value="{{$empleado->ApellidoMaterno}}" id="ApellidoMaterno">

<br>
<label for="correo">correo</label>
<input  type="text" name="correo" value="{{$empleado->correo}}" id="correo" >
<br>

<label for="foto">foto</label>
{{$empleado->foto}}
<input  type="file" name="foto" value="{{$empleado->foto}}" id="foto" >
<br>
<input  type="submit" value="Guardar" >
