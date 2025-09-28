<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 sidebar-container">
            
            <?php echo $__env->make('admin.parts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        
        <div class="col-md-9">
            <h1 class="text-center p-5">
                Lista de Asistencia Registrada 
            </h1>
            <div class="attendances-table">
                <table class="table table-hover table-bordered text-center" style="font-size: 16px;font-weight: bold;">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Contact Number</th>
                        <th scope="col">Choosen Service</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0?>
                        <?php $__currentLoopData = $members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th scope="row"><?php echo e(++$i); ?></th>
                            <td><?php echo e($member->full_name); ?></td>
                            <td><?php echo e($member->gender); ?></td>
                            <td><?php echo e($member->contact); ?></td>
                            <td><?php echo e($member->services); ?></td>
                            <td>  
                                
                                <?php if($member->check_in == 0): ?>
                                <a class="btn btn-outline-danger" href="check-in/<?php echo e($member->id); ?>">Check In</a>
                                <?php else: ?>
                                
                                <div><?php echo e($member->current_date); ?></div>
                                <a class="btn btn-outline-success" href="check-out/<?php echo e($member->id); ?>">Check Out</a>
                                <?php endif; ?>

                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      
                      
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
<?php echo $__env->make("footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Asus\Desktop\gym-system-main\resources\views/attendance.blade.php ENDPATH**/ ?>