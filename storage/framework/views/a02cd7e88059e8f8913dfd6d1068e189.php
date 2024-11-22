<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="text-xl font-semibold leading-light text-gray-800">
            <?php echo e(__('Product Detail')); ?>

        </h2>
     <?php $__env->endSlot(); ?>
    <div class="container mx-auto p-4">
        <div class="oveflow-x-auto rounded-lg bg-white p-6 shadow-md">
            <a href="<?php echo e(route('product-index')); ?>" class="text-blue-500 hover:underline">
                Back
            </a>
            <div class="mt-4">
                <h3 class="mb-4 text-2xl font-semibold"><?php echo e($product->product_name); ?></h3>
                <p><strong>ID:</strong> <?php echo e($product->id); ?></p>
                <p><strong>Unit:</strong> <?php echo e($product->unit); ?></p>
                <p><strong>Type:</strong> <?php echo e($product->type); ?></p>
                <p><strong>Information:</strong> <?php echo e($product->information); ?></p>
                <p><strong>Quantity:</strong> <?php echo e($product->qty); ?></p>
                <p><strong>Producer:</strong> <?php echo e($product->producer); ?></p>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH D:\SEMESTER 5\Framework\FW_Praktikum\Praktikum\resources\views/master-data/product-master/show-product.blade.php ENDPATH**/ ?>