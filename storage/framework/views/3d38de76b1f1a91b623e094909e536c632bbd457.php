
<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 sidebar-container">
            
            <?php echo $__env->make('admin.parts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="col-md-9 p-0">
            <div class="container-fluid p-4" style="min-height: 100vh;">
                <h1 class="text-center p-4">
                    Agregar Nuevo Miembro
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
                    
                    

                    <form action="<?php echo e(route('members.store')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        
                        <div class="row">
                            <div class="col-6">

                                <h2 class="text-center" >Registrar Nuevo Usuario</h2>
                                <div class="p-2 ">
                                    <label class="pb-2" for="name">Nombre</label>
                                    <input type="text" id="name" name="name" placeholder="Nombre Completo" class="d-block w-100 p-2">
                                </div>
                                <div class="p-2 ">
                                    <label class="pb-2" for="username">Nombre de Usuario</label>
                                    <input type="text" id="username" name="username" placeholder="Nombre de Usuario" autocomplete="off" class="d-block w-100 p-2">
                                </div>
                                
                                
                                <div class="p-2">
                                    <label class="pb-2" for="gender">Género</label>
                                    <select name="gender" id="gender">
                                        <option value="null" selected disabled hidden >Selecciona Género</option>
                                        <option value="masculino" >Masculino</option>
                                        <option value="femenino" >Femenino</option>
                                    </select>
                                </div>
                                <div class="p-2">
                                    <label class="pb-2" for="plan">Plan</label>
                                    <select name="plan" id="plan">
                                        <option value="null" selected disabled hidden >Selecciona Plan</option>
                                        <option value="1" >Un Mes</option>
                                        <option value="3" >Tres Meses</option>
                                        <option value="6" >Seis Meses</option>
                                        <option value="12" >Un Año</option>

                                    </select>
                                </div>
                                <div class="p-2">
                                    <label for="date">Fecha de Registro</label>
                                    <input type="date" name="date" id="date" >
                                </div>
                            </div>
                            
                            <div class="col-6">

                                
                                <h3 class="text-center" >Detalles de Contacto</h3>
                                <div class="p-2 ">
                                    <label class="pb-2" for="phone">Número de Teléfono</label>
                                    <input type="tel"  name="phone" placeholder="Número de Teléfono" class="d-block w-100 p-2">
                                </div>
                                <div class="p-2 ">
                                    <label class="pb-2" for="address">Dirección</label>
                                    <input type="text"  name="address" placeholder="Dirección" class="d-block w-100 p-2">
                                </div>

                                
                                <h3 class="text-center" >Detalles del Servicio</h3>
                                <div class="p-2 ">
                                    <label class="pb-2" for="service">Servicios</label>
                                    <div class="services">
                                        <div class="Sauna">
                                            <label for="">Fitness - 65$/mes</label>
                                            <input type="radio" name="services" value="Fitness">
                                        </div>
                                        <div class="Sauna">
                                            <label for="">Sauna - 55$/mes</label>
                                            <input type="radio" name="services" value="Sauna">
                                        </div>
                                        <div class="Sauna">
                                            <label for="">Cardio - 45$/mes</label>
                                            <input type="radio" name="services" value="Cardio">
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2">
                                    <label for="amount">Total a Pagar</label>
                                    <input type="number" name="amount" id="amount">
                                </div>

                            </div>
                        </div>
                        
                        <input type="submit" value="Submit" class="btn btn-success d-block w-100 p-2 mt-2">
                    </form>
                </div>
                  
            </div>
        </div>
    </div>
</div>
<?php echo $__env->make("footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Asus\Desktop\gym-system-main\resources\views/admin/members/addMember.blade.php ENDPATH**/ ?>