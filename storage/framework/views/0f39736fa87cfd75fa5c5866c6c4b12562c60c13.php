
<?php $__env->startSection('content'); ?>
<div class="container mt-4">
 <form method="POST" enctype="multipart/form-data" action="<?php echo e(url('updateuser/'.$user->id)); ?>">
 <?php echo method_field("PUT"); ?>   
    <?php echo csrf_field(); ?>
    <div class="mt-5 text-right"><button id="btn" class="btn btn-primary profile-button"><a href="<?php echo e(url('logout')); ?>" class="text-light text-decoration-none">Logout</a></button></div>
        <div class="row">
           <div class="col-md-4">
               <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <?php ($profile_image = $user->image); ?>
                    <img class="rounded-circle mt-5" height="250" width="250" src="<?php echo e(asset('images/profile/'.$user->image)); ?>" id="image_preview_container">
                    <br><span class="font-weight-bold">
                        <input type="file" name="image" id="image"  class="form-control">
                       </span>
                   </div>
               </div>
           <div class="col-md-8">
               <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                        </div>
                    <div class="row" id="res"></div>
                    <div class="row mt-2">
                        
                        <div class="col-md-6">
                           <label class="labels">Name</label>
                           <input type="text" name="name" class="form-control" value="<?php echo e($user->name); ?>">
                            </div>
                        <div class="col-md-6">
                           <label class="labels">Email</label>
                           <input type="text" name="email"  class="form-control" value="<?php echo e($user->email); ?>">
                            </div>
                        </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                           <label class="labels">Phone</label>
                           <input type="text" name="phone" class="form-control" value="<?php echo e($user->phone); ?>">
                            </div>
                        <div class="col-md-6">
                           <label class="labels">Address</label>
                           <input type="text" name="address" class="form-control" value="<?php echo e($user->address); ?>" placeholder="Address">
                            </div>
                        </div>
                    
                    <div class="mt-5 text-center"><button id="btn" class="btn btn-primary profile-button" type="submit">Update Profile</button></div>
                   </div>
                  
               </div>
           
            </div>
       
       </form>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-reg\resources\views/profile.blade.php ENDPATH**/ ?>