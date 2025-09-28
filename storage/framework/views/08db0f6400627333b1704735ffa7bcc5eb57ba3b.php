
<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 sidebar-container">
            
            <?php echo $__env->make('admin.parts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        
        <div class="col-md-9">
            <h1 class="text-center p-5">
                Lista de Miembros Registrados
            </h1>
            <div class="members-table">
                <table class="table table-hover table-bordered text-center" style="font-size: 12px;font-weight: bold;">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Nombre de Usuario</th>
                        <th scope="col">Género</th>
                        <th scope="col">Número de Contacto</th>
                        <th scope="col">D.O.R</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Servicio Elegido</th>
                        <th scope="col">Plan</th>
                        <th scope="col">Acción</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0?>
                        <?php $__currentLoopData = $members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th scope="row"><?php echo e(++$i); ?></th>
                            <td><?php echo e($member->full_name); ?></td>
                            <td><?php echo e($member->username); ?></td>
                            <td><?php echo e($member->gender); ?></td>
                            <td><?php echo e($member->contact); ?></td>
                            <td><?php echo e($member->reg_date); ?></td>
                            <td><?php echo e($member->address); ?></td>
                            <td><?php echo e($member->amount); ?></td>
                            <td><?php echo e($member->services); ?></td>
                            <td><?php echo e($member->plan); ?> mes/s</td>
                            <td>
                                <form action="<?php echo e(route('members.destroy', $member->id)); ?>" method="POST" style="display: inline-block">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button class="btn btn-outline-danger">
                                        Eliminar
                                    </button>
                                </form>
                                
                                <a class="btn btn-outline-success" href="<?php echo e(route('members.edit', $member->id)); ?>">Editar</a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      
                      
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
<?php echo $__env->make("footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Asus\Desktop\gym-system-main\resources\views/admin/members/manageMember.blade.php ENDPATH**/ ?>