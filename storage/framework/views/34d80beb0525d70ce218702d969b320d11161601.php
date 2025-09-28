<?php echo $__env->make("header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="d-flex align-items-center justify-content-center" style="height: 100vh;background-color: #2e363f;">
    <div class="login w-40" style="width: 400px; color:#ffffff">
        <form action="/login" method="get">
            <?php echo csrf_field(); ?>
            <h2 class="text-center" >Admin Login</h2>
            <?php if($errors->any()): ?>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="alert alert-danger p-1">
                        <?php echo e($error); ?>

                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
            <?php if(session("error")): ?>
                <div class="alert alert-danger p-1">
                    <?php echo e(session("error")); ?>

                </div>
            <?php endif; ?>
            <div class="p-2 ">
                <label class="pb-2" for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Username" class="d-block w-100 p-2">
            </div>
            <div class="p-2">
                <label class="pb-2" for="password">Password</label>
                <input type="password" id="password" name="password"placeholder="Password" class="d-block w-100 p-2">
            </div>
            <input type="submit" value="Login" class="btn btn-success d-block w-100 p-2 mt-2">
        </form>
    </div>
</div>
<?php echo $__env->make("footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Asus\Desktop\gym-system-main\resources\views/index.blade.php ENDPATH**/ ?>