<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 sidebar-container">
            
            <?php echo $__env->make('admin.parts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        
        <div class="col-md-9">
            <h1 class="text-center p-5">
                PAGOS HECHOS
            </h1>
            <div class="attendances-table">
                <table class="table table-hover table-bordered text-center" style="font-size: 16px;font-weight: bold;">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Última Fecha de Pago</th>
                        <th scope="col">Monto</th>
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
                            <td><?php echo e($member->paid_date); ?></td>
                            <td><?php echo e($member->amount); ?> $</td>
                            <td><?php echo e($member->services); ?></td>
                            <td><?php echo e($member->plan); ?> Mes/s</td>
                            <td>
                                <a class="btn btn-success" href="payment/<?php echo e($member->id); ?>">Hacer Pago $</a>
                                <a class="btn btn-info mt-1" href="/admin/payment/voucher/<?php echo e($member->id); ?>" target="_blank" style="font-size: 12px;">
                                    📄 Generar Voucher
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      
                      
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
<?php echo $__env->make("footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Asus\Desktop\gym-system-main - copia\resources\views/payments.blade.php ENDPATH**/ ?>