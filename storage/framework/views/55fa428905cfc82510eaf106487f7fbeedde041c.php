
<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 sidebar-container">
            
            <?php echo $__env->make('admin.parts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        
        <div class="col-md-9">
            <h1 class="text-center p-5">
                Estado Actual del Miembro
            </h1>
            <div class="members-table">
                <table class="table table-hover table-bordered text-center" style=" font-weight:bold;">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre Completo</th>
                        <th scope="col">Número de Contacto</th>
                        <th scope="col">Servicio Elegido</th>
                        <th scope="col">Plan</th>
                        <th scope="col">Estado de Membresía</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0?>
                        <?php $__currentLoopData = $members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th scope="row"><?php echo e(++$i); ?></th>
                            <td><?php echo e($member->full_name); ?></td>
                            <td><?php echo e($member->contact); ?></td>
                            <td><?php echo e($member->services); ?></td>
                            <td><?php echo e($member->plan); ?> mes/es</td>
                            <?php if($member->status == "pending"): ?>
                            <td style="color:rgb(231, 115, 19)">
                                <?php echo e($member->status); ?>

                                <a class="btn btn-outline-primary" href="/admin/activate-member/<?php echo e($member->id); ?>" >activar</a>
                            </td>
                            <?php elseif($member->status == "active"): ?>
                            <td style="color:rgb(12, 112, 37)">
                                <?php echo e($member->status); ?>

                            </td>
                            <?php elseif($member->status == "expired"): ?>
                            <td style="color:rgb(231, 26, 19)">
                                <?php echo e($member->status); ?>

                            </td>
                            <?php endif; ?>
                            
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      
                      
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
<?php echo $__env->make("footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Asus\Desktop\gym-system-main - copia\resources\views/admin/members/memberStatus.blade.php ENDPATH**/ ?>