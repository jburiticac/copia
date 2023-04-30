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
        <?php $__currentLoopData = $empleados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $empleado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($empleado->id); ?></td>
            <td><?php echo e($empleado->Foto); ?></td>
            <td><?php echo e($empleado->Nombre); ?></td>
            <td><?php echo e($empleado->Apellidopaterno); ?></td>
            <td><?php echo e($empleado->Apellidomaterno); ?></td>
            <td><?php echo e($empleado->Correo); ?></td>
            
            <td>
               <a href="<?php echo e(url('/empleado/'.$empleado->id.'/edit')); ?>">Editar</a>
                
            <form action="<?php echo e(url('/empleado/'.$empleado->id)); ?>" method="post">
             <?php echo csrf_field(); ?>
             <?php echo e(method_field('DELETE')); ?>


             <input type="submit" onclick="return confirm('¿quieres borrar?') " value="borrar">

            </form>
        
        
        
        
        </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH C:\xampp\htdocs\sistema_youtube\resources\views/Empleado/index.blade.php ENDPATH**/ ?>