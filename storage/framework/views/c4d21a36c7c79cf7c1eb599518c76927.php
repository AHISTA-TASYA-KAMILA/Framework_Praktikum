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
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            <?php echo e(__('Dashboard')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">

        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="container mx-auto mt-5">
                        <h2 class="mb-5 text-2xl font-bold">Update Product</h2>
                        <?php if (isset($component)) { $__componentOriginal7c1bf3a9346f208f66ee83b06b607fb5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7c1bf3a9346f208f66ee83b06b607fb5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.auth-session-status','data' => ['class' => 'mb-4','status' => session('success')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('auth-session-status'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mb-4','status' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(session('success'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7c1bf3a9346f208f66ee83b06b607fb5)): ?>
<?php $attributes = $__attributesOriginal7c1bf3a9346f208f66ee83b06b607fb5; ?>
<?php unset($__attributesOriginal7c1bf3a9346f208f66ee83b06b607fb5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7c1bf3a9346f208f66ee83b06b607fb5)): ?>
<?php $component = $__componentOriginal7c1bf3a9346f208f66ee83b06b607fb5; ?>
<?php unset($__componentOriginal7c1bf3a9346f208f66ee83b06b607fb5); ?>
<?php endif; ?>
                        <form action="<?php echo e(route('product-update', $product->id)); ?>" method="POST" class="p-6 bg-white rounded shadow-md">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>


                            <div class="mb-4">
                                <label for="product_name" class="block font-medium text-gray-700">Product Name:</label>
                                <input type="text" id="product_name" name="product_name" value="<?php echo e(old('product_name', $product->product_name)); ?>" required class="w-full p-2 mt-2 border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500">
                            </div>




                            <div class="mb-4">
                                <label for="unit" class="block font-medium text-gray-700">Unit:</label>
                                <select id="unit" name="unit"
                                    class="mt-1 block w-full rounded-md border border-gray-300 p-2 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                                    required>
                                    <option value="" disabled>Select a unit</option>
                                    <option value="kg" <?php echo e(old('unit', $product->unit) == 'kg' ? 'selected' : ''); ?>>
                                        Kilogram (kg)</option>
                                    <option value="ltr" <?php echo e(old('unit', $product->unit) == 'ltr' ? 'selected' : ''); ?>>
                                        Liter (ltr)</option>
                                    <option value="pcs" <?php echo e(old('unit', $product->unit) == 'pcs' ? 'selected' : ''); ?>>
                                        Pieces (pcs)</option>
                                    <option value="box" <?php echo e(old('unit', $product->unit) == 'box' ? 'selected' : ''); ?>>
                                        Box</option>
                                </select>
                            </div>


                            <div class="mb-4">
                                <label for="type" class="block font-medium text-gray-700">Type:</label>
                                <input type="text" id="type" name="type" value="<?php echo e(old('type', $product->type)); ?>" required class="w-full p-2 mt-2 border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500">
                            </div>


                            <div class="mb-4">
                                <label for="information" class="block font-medium text-gray-700">Information:</label>
                                <textarea id="information" name="information" class="w-full p-2 mt-2 border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500"><?php echo e(old('information', $product->information)); ?></textarea>
                            </div>


                            <div class="mb-4">
                                <label for="qty" class="block font-medium text-gray-700">Qty:</label>
                                <input type="number" id="qty" name="qty" value="<?php echo e(old('qty', $product->qty)); ?>" required class="w-full p-2 mt-2 border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500">
                            </div>


                            <div class="mb-6">
                                <label for="producer" class="block font-medium text-gray-700">Producer:</label>
                                <input type="text" id="producer" name="producer" value="<?php echo e(old('producer', $product->producer)); ?>" required class="w-full p-2 mt-2 border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500">
                            </div>


                            <div class="flex justify-end">
                                <button type="submit" class="px-4 py-2 text-white bg-indigo-500 rounded hover:bg-indigo-600 focus:ring-2 focus:ring-indigo-500">Update Product</button>
                            </div>
                        </form>
                    </div>
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
<?php endif; ?><?php /**PATH D:\SEMESTER 5\Framework\FW_Praktikum\Praktikum\resources\views\master-data\product-master\edit-product.blade.php ENDPATH**/ ?>