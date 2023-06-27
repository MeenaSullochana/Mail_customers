
<?php $__env->startSection('content'); ?>
<div>
<?php echo $__env->make('layouts.inc.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>

<body>

<div class="card">
<div class="card-body">
    <form action="<?php echo e(url('adduser')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="col-md-6 mb-s">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name"> 
        </div>
        <div class="col-md-6 mb-s">
            <label for="">Email</label>
            <input type="text" class="form-control" name="email"> 
        </div>
        <div class="col-md-6 mb-s">
            <label for="">Mobile Number</label>
            <input type="text" class="form-control" name="phone"> 
        </div>
        <div class="col-md-6 mb-s">
            <label for="">Address</label>
            <input type="text" class="form-control" name="address"> 
        </div>
        <div class="col-md-6 mb-s">
            <label for="">Password</label>
            <input type="password" class="form-control" name="password"> 
        </div>
        <div class="col-md-12 mb-s">
            <label for="">Image</label>
            <input type="file" class="form-control" name="image"> 
        </div>
        <div class="col-md-6 mb-s">
            <button type="submit" class="btn btn-primary"> Submit</button>
        </div>
    </form> 
</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-reg\resources\views/adduser.blade.php ENDPATH**/ ?>