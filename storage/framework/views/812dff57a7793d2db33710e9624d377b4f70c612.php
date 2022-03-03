

<h1><?php echo e($title); ?></h1>


<?php if(!empty($staff)): ?>
    <ul>
        <?php $__currentLoopData = $staff; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <?php echo e($a['name']); ?> <?php echo e($a['lastname']); ?>

            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    <?php else: ?>
    <h3>Nessun membro dello staff</h3>
<?php endif; ?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo $__env->yieldContent('title'); ?></title>
    </head>
    <body>

    </body>
</html>

<?php echo $__env->make('layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/Code/concessionaria/resources/views/staffb.blade.php ENDPATH**/ ?>