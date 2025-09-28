
<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 sidebar-container">
            
            <?php echo $__env->make('admin.parts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="col-md-9 p-0">
            <div class="container-fluid p-4" style="min-height: 100vh;">
                <h1 class="text-center p-4">
                   Update Staff Data 
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
                    <form action="<?php echo e(route('staff.update', $user->id)); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        
                        <div class="row">
                            <div class="col-6">

                                
                                <input type="hidden" name="id" value="<?php echo e($user->id); ?>">
                                <div class="p-2 ">
                                    <label class="pb-2" for="name">Nombre</label>
                                    <input type="text" id="name" name="name" value="<?php echo e($user->full_name); ?>" placeholder="Nombre Completo" class="d-block w-100 p-2">
                                </div>
                                <div class="p-2 ">
                                    <label class="pb-2" for="username">Nombre de Usuario</label>
                                    <input type="text" id="username" name="username" value="<?php echo e($user->username); ?>" placeholder="Nombre de Usuario" autocomplete="off" class="d-block w-100 p-2">
                                </div>
                                <div class="p-2 ">
                                    <label class="pb-2" for="password">Contraseña</label>
                                    <input type="text" id="password" name="password" value="***********" disabled class="d-block w-100 p-2">
                                    Nota: Solo se permite a los miembros cambiar su contraseña hasta que sea una emergencia.
                                </div>
                                <div class="p-2">
                                    <label class="pb-2" for="gender">Género</label>
                                    <select name="gender" id="gender">
                                        <option value="male" <?php if($user->gender == "male"): ?> <?php echo e("selected"); ?> <?php endif; ?>> Masculino </option>
                                        <option value="female" <?php if($user->gender == "female"): ?> <?php echo e("selected"); ?> <?php endif; ?>> Femenino </option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-6">

                                
                                
                                <div class="p-2 ">
                                    <label class="pb-2" for="contact">Phone Number</label>
                                    <input type="tel"  name="contact" value="<?php echo e($user->contact); ?>" placeholder="Contact Number" class="d-block w-100 p-2">
                                </div>
                                <div class="p-2 ">
                                    <label class="pb-2" for="address">Address</label>
                                    <input type="text"  name="address" value="<?php echo e($user->address); ?>" placeholder="Address" class="d-block w-100 p-2">
                                </div>

                                
                                <div class="p-2">
                                    <label class="pb-2" for="role">Designation</label>
                                    <select name="role" id="role">
                                        <option value="cashier" <?php if($user->role == "cashier"): ?> <?php echo e("selected"); ?> <?php endif; ?>> Cashier </option>
                                        <option value="front-desk" <?php if($user->role == "front-desk"): ?> <?php echo e("selected"); ?> <?php endif; ?>> Front Desk </option>
                                        <option value="trainer" <?php if($user->role == "trainer"): ?> <?php echo e("selected"); ?> <?php endif; ?>> Trainer </option>
                                        <option value="gym-assistant" <?php if($user->role == "gym-assistant"): ?> <?php echo e("selected"); ?> <?php endif; ?>> GYM Assistant </option>
                                        <option value="manager" <?php if($user->role == "manager"): ?> <?php echo e("selected"); ?> <?php endif; ?>> Manager </option>
                                    </select>
                                </div>

                            </div>
                        </div>
                        
                        <input type="submit" value="Update Staff Data" class="btn btn-success d-block w-100 p-2 mt-2">
                    </form>
                </div>
                  
            </div>
        </div>
    </div>
</div>
<?php echo $__env->make("footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Asus\Desktop\gym-system-main\resources\views/staff/editStaff.blade.php ENDPATH**/ ?>