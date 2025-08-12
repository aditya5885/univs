<h1>Shop</h1>

<?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <p><?php echo e($service->name); ?> - ₹<?php echo e($service->price); ?></p>
    <form action="<?php echo e(route('cart.add', $service->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <button type="submit">Add to Cart</button>
    </form>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /home/u647397843/domains/univs.in/public_html/app/myproject/resources/views/shop.blade.php ENDPATH**/ ?>