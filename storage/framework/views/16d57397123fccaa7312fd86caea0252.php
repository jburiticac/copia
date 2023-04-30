formulario que tendra los datos en comun con create y edit 
<br>
<label for="Nombre">Nombre</label>
<input  type="text" name="Nombre" value="<?php echo e($empleado->Nombre); ?>" id="Nombre">

<br>
<label for="ApellidoPaterno">Apellido Paterno</label>
<input  type="text" name="ApellidoPaterno" value="<?php echo e($empleado->ApellidoPaterno); ?>" id="ApellidoPaterno" >

<br>
<label for="ApellidoMaterno">Apellido Materno</label>
<input  type="text" name="ApellidoMaterno" value="<?php echo e($empleado->ApellidoMaterno); ?>" id="ApellidoMaterno">

<br>
<label for="correo">correo</label>
<input  type="text" name="correo" value="<?php echo e($empleado->correo); ?>" id="correo" >
<br>

<label for="foto">foto</label>
<?php echo e($empleado->foto); ?>

<input  type="file" name="foto" value="<?php echo e($empleado->foto); ?>" id="foto" >
<br>
<input  type="submit" value="Guardar" >
<?php /**PATH C:\xampp\htdocs\sistema_youtube\resources\views/Empleado/form.blade.php ENDPATH**/ ?>