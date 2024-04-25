<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-a offset-2"></div>
            <h2>Edit student</h2>
            <?php if(Session::has('success')): ?>
            <div class="alert alert-danger"><?php echo e(Session::get('success')); ?></div>
            <?php endif; ?>


            <form method="post" action ="<?php echo e(url ('update-student')); ?>">
                <?php echo csrf_field(); ?> 
                <div class="md-3">
                <input type="hidden" name="id" class="form-control" value="<?php echo e($data->id); ?>" />
              
                    <label> First Name </label>
                    <input type="text" name="firstname" class="form-control" placeholder="Enter your First Name" value="<?php echo e($data->first_name); ?>" />
                </div>
                <?php $__errorArgs = ['firstname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="alert alert-danger"> <?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <div class="md-3">
                    <label> Last Name </label>
                    <input type="text" name="lastname" class="form-control" placeholder="Enter your Last Name" value="<?php echo e($data->last_name); ?>" />
                </div>
                <?php $__errorArgs = ['lastname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="alert alert-danger"> <?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <div class="md-3">
                    <label> Age </label>
                    <input type="text" name="age" class="form-control" placeholder="Enter your Age" value="<?php echo e($data->age); ?>" />
                </div>
                <?php $__errorArgs = ['age'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="alert alert-danger"> <?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <div class="md-3">
                    <label> Email </label>
                    <input type="text" name="email" class="form-control" placeholder="Enter your Email" value="<?php echo e($data->email); ?>" />
                </div>
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="alert alert-danger"> <?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <div class="md-3">
                    <!-- <label> Submit </label> -->
                    <input type="submit" name="submit" class="btn btn-success" value="Submit"/>
                </div>
        </div>
    </div>
</body>
</html><?php /**PATH D:\TASK\Student-management\resources\views/edit_student.blade.php ENDPATH**/ ?>