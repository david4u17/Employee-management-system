<!DOCTYPE html> <html lang="en"> <head> <meta charset="UTF-8"> <meta name="viewport" content="width=device-width,
    initial-scale=1.0"> <title>Student list </title> <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> </head>

    <body> 
        <div class="container"> 
            <div class="row"> 
                <div class="col-md-12 offset-2"> 

                </div> <h2>Student list</h2> 

                <div><a href="<?php echo e(url('add-student')); ?>">Add Student</a></div>

                <?php if(Session::has('success')): ?> 
    <div class="alert alert-danger"><?php echo e(Session::get('success')); ?></div>

<?php endif; ?> <table class="table"> <thead> <th>#</th> <th>id</th> <th>First Name</th>
<th>Last Name</th>
<th>Age</th>
<th>Email</th>
<th>Action</th>
    </thead>
    <tbody>
        <?php
        $i=1;
        ?>

        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($i++); ?></td>
            <td><?php echo e($student->id); ?></td>
            <td><?php echo e($student->first_name); ?></td>
            <td><?php echo e($student->last_name); ?></td>
            <td><?php echo e($student->age); ?></td>
            <td><?php echo e($student->email); ?></td>
            <td>
                <a href="<?php echo e(url('edit-student/'.$student->id)); ?>" class="btn btn-primary">Edit</a> 
                <a href="<?php echo e(url('delete-student/'.$student->id)); ?>" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
    </table>

    </div>
    </div>
    </div>
    </body>

    </html><?php /**PATH D:\TASK\Student-management\resources\views/student_list.blade.php ENDPATH**/ ?>