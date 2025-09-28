
<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 sidebar-container">
            
            <?php echo $__env->make('admin.parts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="col-md-9 p-0">
            <div class="container-fluid p-4" style="min-height: 100vh;">
                <h1 class="text-center p-4">
                    Agregar Nuevo Equipo 
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
                    <form action="<?php echo e(route('equipments.update', $equipment->id)); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        
                        <div class="row">
                            <div class="col-6">

                                <h2 class="text-center" >Registrar Nuevo Equipo</h2>
                                <div class="p-2 ">
                                    <label class="pb-2" for="name">Nombre del Equipo</label>
                                    <input type="text" id="name" name="name" value="<?php echo e($equipment->name); ?>" placeholder="Nombre del Equipo" class="d-block w-100 p-2" required>
                                </div>
                                <div class="p-2 ">
                                    <label class="pb-2" for="description">Descripción del Equipo</label>
                                    <input type="textarea" id="description" name="description" value="<?php echo e($equipment->description); ?>" placeholder="Descripción" autocomplete="off" class="d-block w-100 p-2" required>
                                </div>
                                
                                <div class="p-2">
                                    <label for="date">Fecha de Compra</label>
                                    <input type="date" name="date" id="date" value="<?php echo e($equipment->date); ?>" required>
                                </div>
                                <div class="p-2">
                                    <label for="quantity">Cantidad</label>
                                    <input type="number" name="quantity" id="quantity" value="<?php echo e($equipment->quantity); ?>" required>
                                </div>
                                
                            </div>
                            
                            <div class="col-6">

                                
                                <h3 class="text-center" >Otros Detalles</h3>
                                <div class="p-2 ">
                                    <label class="pb-2" for="v_name">Nombre del Proveedor</label>
                                    <input type="text" id="v_name" name="v_name" value="<?php echo e($equipment->vendor); ?>" placeholder="Nombre del Proveedor" class="d-block w-100 p-2" required>
                                </div>
                                <div class="p-2 ">
                                    <label class="pb-2" for="address">Dirección</label>
                                    <input type="text"  name="address" value="<?php echo e($equipment->address); ?>" placeholder="Dirección" class="d-block w-100 p-2" required>
                                </div>
                                <div class="p-2 ">
                                    <label class="pb-2" for="contact">Número de Contacto</label>
                                    <input type="tel"  name="contact" value="<?php echo e($equipment->contact); ?>" placeholder="Número de Contacto" class="d-block w-100 p-2" required>
                                </div>

                                
                                <h3 class="text-center mt-3" >Detalles de Precios</h3>
                                <div class="p-2 ">
                                    <div class="cost">
                                        <label for="">Costo por Artículo</label>
                                        <input type="number" name="cost" value="<?php echo e($equipment->cost); ?>" placeholder="267$" required>
                                    </div>
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
<?php echo $__env->make("footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Asus\Desktop\gym-system-main\resources\views/admin/equipments/editEquipment.blade.php ENDPATH**/ ?>