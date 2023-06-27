
<?php $__env->startSection('content'); ?>
<div class="card">
<div class="card-title text-center"><b><h3>Update Details</h3></b></div>
<div class="card-body">
    <form action="<?php echo e(url('updateuser/'.$users->id)); ?>" method="POST" enctype="multipart/form-data">
    <?php echo method_field("PUT"); ?>   
    <?php echo csrf_field(); ?>
        <div class="col-md-4">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name" value="<?php echo e($users->name); ?>"> 
        </div><br>
        <div class="col-md-4">
            <label for="">Email</label>
            <input type="text" class="form-control" name="email" value="<?php echo e($users->email); ?>"> 
        </div><br>
        <div class="col-md-4">
            <label for="">Mobile Number</label>
            <input type="text" class="form-control" name="phone" value="<?php echo e($users->phone); ?>"> 
        </div><br>
        <div class="col-md-4">
            <label for="">Address</label>
            <input type="text" class="form-control" name="address" value="<?php echo e($users->address); ?>"> 
        </div><br>
        <div class="col-md-4">
            <label for="">Active</label>
            <input type="text" class="form-control" name="active" value="<?php echo e($users->active); ?>"> 
        </div><br>
        <?php if($users->image): ?>
        <img src="<?php echo e(asset('images/profile/'.$users->image)); ?>" width="40px" height="40px" alt=""/>
        <?php endif; ?>
        <br>
        <br>
        <div class="col-md-4">
            <input type="file" class="form-control" name="image"> 
        </div><br>
        <br>
        <div class="col-md-4">
            <div class="text-center"><button type="submit" class="btn btn-primary"> Update</button></div>
        </div>
    </form> 
</div>
</div>
<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-reg\resources\views/edituser.blade.php ENDPATH**/ ?>