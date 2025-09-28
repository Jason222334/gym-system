<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 sidebar-container">
            
            <?php echo $__env->make('admin.parts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        
        <div class="col-md-9">
            <h1 class="text-center p-5">
                GESTION DE RECLUTAMIENTO DE PERSONAL
            </h1>
            <div class="offset-10 col-2 p-2">
                <a href="<?php echo e(route('staff.create')); ?>" class="btn btn-success">
                    Agregar Usuario de Personal
                    <i class="fa fa-plus"></i>
                </a>
            </div>
            <div class="attendances-table">
                <table class="table table-hover table-bordered text-center" style="font-size: 16px;font-weight: bold;">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre Completo</th>
                        <th scope="col">Nombre de Usuario</th>
                        <th scope="col">Género</th>
                        <th scope="col">Rol</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Contacto</th>
                        
                        <th scope="col">Acción</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0?>
                        <?php $__currentLoopData = $staff; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th scope="row"><?php echo e(++$i); ?></th>
                            <td><?php echo e($user->full_name); ?></td>
                            <td><?php echo e($user->username); ?></td>
                            <td><?php echo e($user->gender); ?> </td>
                            <td><?php echo e($user->role); ?> </td>
                            <td><?php echo e($user->address); ?></td>
                            <td><?php echo e($user->contact); ?></td>
                            
                            <td>
                                <a class="btn btn-success" href="<?php echo e(route('staff.edit', $user->id)); ?>">Editar</a>   
                                <form action="<?php echo e(route('staff.destroy', $user->id)); ?>" method="POST" style="display: inline-block">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button class="btn btn-danger"> Eliminar</button>
                                </form>                             
                                
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      
                      
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
<?php echo $__env->make("footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Asus\Desktop\gym-system-main\resources\views/staff/manageStaff.blade.php ENDPATH**/ ?>