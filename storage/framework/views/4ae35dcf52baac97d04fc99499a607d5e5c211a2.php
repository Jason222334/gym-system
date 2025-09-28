
<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 sidebar-container">
            
            <?php echo $__env->make('admin.parts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="col-md-9 p-0">
            <div class="container-fluid p-4" style="min-height: 100vh;">
                <h1 class="text-center p-4">
                    Actualizar Pago de Miembro 
                </h1>
                
    
                <div class="status">
                    
                    <?php if($errors->any): ?>
                        <div class="row">
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-6">
                                <div class="alert alert-danger">
                                    <?php echo e($error); ?>

                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></div>                        
                    <?php endif; ?>
                    <?php if(session("success")): ?>
                        <div class="alert alert-success p-1 m-1">
                            <?php echo e(session("success")); ?>

                        </div>
                        
                    <?php endif; ?>
                    <form action="/admin/make-payment" method="post">
                        <?php echo csrf_field(); ?>
                        
                        <div class="row ">
                            <div class="col-6">

                                
                                <input type="hidden" name="id" value="<?php echo e($member->id); ?>">
                                
                                <div class="p-2 ">
                                    <label class="pb-2" for="name">Nombre del miembro</label>
                                    <input type="text" id="name" name="name" value="<?php echo e($member->name); ?>" placeholder="Full Name" class="d-block w-100 p-2" disabled>
                                </div>
                                <div class="p-2 ">
                                    <label class="pb-2" for="service">Servicio Elegido</label>
                                    <input type="text" id="service" name="service" value="<?php echo e($member->services); ?>"class="d-block w-100 p-2" disabled>
                                </div>
                                <div class="p-2 ">
                                    <label class="pb-2" for="amount">Monto por Mes:</label>
                                    <input type="number" id="amount" name="amount" value="<?php echo e($member->amount); ?>" placeholder="Monto" class="d-block w-100 p-2" required>
                                </div>
                                <div class="p-2">
                                    <label class="pb-2" for="plan">Plan</label>
                                    <select name="plan" id="plan">
                                        <option value="1" <?php if($member->plan == "1"): ?> <?php echo e("selected"); ?> <?php endif; ?>>Un Mes</option>
                                        <option value="3" <?php if($member->plan == "3"): ?> <?php echo e("selected"); ?> <?php endif; ?>>Tres Meses</option>
                                        <option value="6" <?php if($member->plan == "6"): ?> <?php echo e("selected"); ?> <?php endif; ?>>Seis Meses</option>
                                        <option value="12" <?php if($member->plan == "12"): ?> <?php echo e("selected"); ?> <?php endif; ?>>Un Año</option>

                                    </select>
                                </div>
                                <div class="p-2">
                                    <label class="pb-2" for="status">Status</label>
                                    <select name="status" id="status">
                                        <option value="active" <?php if($member->status == "active"): ?> <?php echo e("selected"); ?> <?php endif; ?>>Activo</option>
                                        <option value="pending" <?php if($member->status == "pendding"): ?> <?php echo e("selected"); ?> <?php endif; ?>>Pendiente</option>
                                        <option value="expired" <?php if($member->status == "expired"): ?> <?php echo e("selected"); ?> <?php endif; ?>>Expirado</option>

                                    </select>
                                </div>
                            </div>
                            
                        </div>
                        
                        <input type="submit" value="Update Member Progress" class="btn btn-success d-block w-100 p-2 mt-2">
                    </form>
                </div>
                  
            </div>
        </div>
    </div>
</div>
<?php echo $__env->make("footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Asus\Desktop\gym-system-main\resources\views/paymentData.blade.php ENDPATH**/ ?>