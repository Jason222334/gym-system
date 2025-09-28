
<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 sidebar-container">
            
            <?php echo $__env->make('admin.parts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        
        <div class="col-md-9">
            
            <h1 class="text-center p-5">
                Listado de Equipos Registrados en el Gimnasio
            </h1>
            <div class="members-table">
                <table class="table table-hover table-bordered" style="font-size:14px; font-weight:bold;">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre del Equipo</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Costo</th>
                        <th scope="col">Proveedor</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Número de Contacto</th>
                        <th scope="col">Fecha de Compra</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0?>
                        <?php $__currentLoopData = $equipments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $equipment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th scope="row"><?php echo e(++$i); ?></th>
                            <td><?php echo e($equipment->name); ?></td>
                            <td><?php echo e($equipment->description); ?></td>
                            <td><?php echo e($equipment->quantity); ?></td>
                            <td><?php echo e($equipment->cost); ?>$</td>
                            <td><?php echo e($equipment->vendor); ?></td>
                            <td><?php echo e($equipment->address); ?></td>
                            <td><?php echo e($equipment->contact); ?></td>
                            <td><?php echo e($equipment->date); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      
                      
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
<?php echo $__env->make("footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Asus\Desktop\gym-system-main\resources\views/admin/equipments/equipmentsList.blade.php ENDPATH**/ ?>