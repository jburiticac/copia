formulario de creacion de empleados
<form action="<?php echo e(url('/empleado')); ?>" method="post" enctype="multipart=/form-data">
    <?php echo csrf_field(); ?>
    <?php echo $__env->make('Empleado.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;




</form><?php /**PATH C:\xampp\htdocs\sistema_youtube\resources\views/Empleado/create.blade.php ENDPATH**/ ?>