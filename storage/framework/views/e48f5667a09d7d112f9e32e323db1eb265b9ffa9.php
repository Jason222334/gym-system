
<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 sidebar-container">
            
            <?php echo $__env->make('admin.parts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="col-md-9 p-0">
            <div class="container-fluid p-4" style="min-height: 100vh;">
                <h1 class="text-center p-4">
                   Agregar Nuevo Usuario de Personal
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
                    <?php if(session("error")): ?>
                        <div class="alert alert-danger">
                            <?php echo e(session("error")); ?>

                        </div>
                    <?php endif; ?>
                    <?php if(session("success")): ?>
                        <div class="alert alert-success p-1 m-1">
                            <?php echo e(session("success")); ?>

                        </div>
                        
                    <?php endif; ?>
                    <form action="<?php echo e(route('staff.store')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        
                        <div class="row">
                            <div class="col-6">

                                
                                <div class="p-2 ">
                                    <label class="pb-2" for="name">Nombre</label>
                                    <input type="text" id="name" name="name" placeholder="Nombre Completo" class="d-block w-100 p-2">
                                </div>
                                <div class="p-2 ">
                                    <label class="pb-2" for="username">Nombre de Usuario</label>
                                    <input type="text" id="username" name="username" placeholder="Nombre de Usuario" autocomplete="off" class="d-block w-100 p-2">
                                </div>
                                <div class="p-2 ">
                                    <label class="pb-2" for="password">Contraseña</label>
                                    <input type="password" id="password" name="password" placeholder="Contraseña" class="d-block w-100 p-2">
                                </div>
                                <div class="p-2">
                                    <label class="pb-2" for="gender">Género</label>
                                    <select name="gender" id="gender">
                                        <option value="gender" disabled hidden selected> Seleccionar Género </option>
                                        <option value="Masculino"> Masculino </option>
                                        <option value="Femenino"> Femenino </option>    
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-6">

                                
                                <div class="p-2 ">
                                    <label class="pb-2" for="contact">Número de Teléfono</label>
                                    <input type="tel"  name="contact" placeholder="Número de Teléfono" class="d-block w-100 p-2">
                                </div>
                                <div class="p-2 ">
                                    <label class="pb-2" for="address">Dirección</label>
                                    <input type="text"  name="address" placeholder="Dirección" class="d-block w-100 p-2">
                                </div>

                                
                                <div class="p-2">
                                    <label class="pb-2" for="role">Designación</label>
                                    <select name="role" id="role">
                                        <option value="" disabled selected hidden> Seleccionar Designación </option>
                                        <option value="cajero"> Cajero </option>
                                        <option value="recepcionista"> Recepcionista </option>
                                        <option value="entrenador" > Entrenador </option>
                                        <option value="asistente de gimnasio"> Asistente de Gimnasio </option>
                                        <option value="gerente"> Gerente </option>
                                    </select>
                                </div>

                            </div>
                        </div>

                        <input type="submit" value="Agregar Nuevo Personal" class="btn btn-success d-block w-100 p-2 mt-2">
                    </form>
                </div>
                  
            </div>
        </div>
    </div>
</div>
<?php echo $__env->make("footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Asus\Desktop\gym-system-main\resources\views/staff/addstaffUser.blade.php ENDPATH**/ ?>