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



    <div class="container p-4 mx-auto">
        <div class="overflow-x-auto">
            <a href="<?php echo e(route('product-create')); ?>">
                <button
                    class="px-6 py-4 text-white bg-green-500 border border-green-500 rounded-lg shadow-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500">
                    Add product data
                </button>
            </a>
            <a href="<?php echo e(route('product-export-excel')); ?>">
                <button
                    class="px-6 py-4 text-white bg-green-500 border border-green-500 rounded-lg shadow-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500">
                    Export to Excel
                </button>
            </a>
            <a href="<?php echo e(route('product-export-pdf')); ?>">
                <button
                    class="px-6 py-4 text-white bg-green-500 border border-green-500 rounded-lg shadow-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500">
                    Export to PDF
                </button>
            </a>
            <div class="flex mt-4">
                <form method="GET" action="<?php echo e(route('product-index')); ?>" class="mb-4 flex items-center">
                    <input type="text" name="search" value="<?php echo e(request('search')); ?>" placeholder="Cari produk..." class=" rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-500">
                    <button type="submit" class="ml-2 rounded-lg bg-green-500 px-6 py-2 text-white shadow-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500">Cari</button>
                </form>

            </div>
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
            <table class="min-w-full mt-4 border border-gray-collapse border-gray-200">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2 text-left text-gray-600 border border-gray-200">ID</th>
                        <th class="px-4 py-2 text-left text-gray-600 border border-gray-200">Product Name</th>
                        <th class="px-4 py-2 text-left text-gray-600 border border-gray-200">Unit</th>
                        <th class="px-4 py-2 text-left text-gray-600 border border-gray-200">Type</th>
                        <th class="px-4 py-2 text-left text-gray-600 border border-gray-200">information</th>
                        <th class="px-4 py-2 text-left text-gray-600 border border-gray-200">qty</th>
                        <th class="px-4 py-2 text-left text-gray-600 border border-gray-200">producer</th>
                        <th class="px-4 py-2 text-left text-gray-600 border border-gray-200">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr class="bg-white">
                        <td class="px-4 py-2 border border-gray-200"><?php echo e($item->id); ?></td>
                        <td class="px-4 py-2 border border-gray-200">
                            <a href="<?php echo e(route('product-detail', $item->id)); ?>">
                                <?php echo e($item->product_name); ?>

                            </a>
                        </td>
                        <td class="px-4 py-2 border border-gray-200"><?php echo e($item->unit); ?></td>
                        <td class="px-4 py-2 border border-gray-200"><?php echo e($item->type); ?></td>
                        <td class="px-4 py-2 border border-gray-200"><?php echo e($item->information); ?></td>
                        <td class="px-4 py-2 border border-gray-200"><?php echo e($item->qty); ?></td>
                        <td class="px-4 py-2 border border-gray-200"><?php echo e($item->producer); ?></td>
                        <td class="px-4 py-2 border border-gray-200">
                            <a href="<?php echo e(route('product-edit', $item->id)); ?>"
                                class="px-2 text-blue-600 hover:text-blue-800">Edit</a>
                            <button class="px-2 text-red-600 hover:text-red-800"
                                onclick="confirmDelete('<?php echo e(route('product-delete', $item->id)); ?>')">Delete</button>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <p class="mb-4 text-center text-2xl font-bold text-red-600"> No Product Found</p>
                    <?php endif; ?>
                    <!-- <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="bg-white">
                            <td class="border border-gray-200 px-4 py-2"><?php echo e($product->id); ?></td>
                            <td class="border-gray-200 px-4 py-2 hover:text-blue-500 hover:underline">
                                <a href="<?php echo e(route('product-detail', $product->id)); ?>">
                                    <?php echo e($product->product_name); ?>

                                </a>
                            </td>
                            <td>
                                <a href="<?php echo e(route('product-detail', $product->id)); ?>">
                                    <?php echo e($product->product_name); ?>

                                </a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> -->


                </tbody>
            </table>
        </div>
    </div>


    <script>
        function confirmDelete(deleteUrl) {
            console.log(deleteUrl);

            if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
                // Jika user mengonfirmasi, kita dapat membuat form dan mengirimkan permintaan delete
                let form = document.createElement('form');
                form.method = 'POST';
                form.action = deleteUrl;

                // Tambahkan CSRF token
                let csrfInput = document.createElement('input');
                csrfInput.type = 'hidden';
                csrfInput.name = '_token';
                csrfInput.value = '<?php echo e(csrf_token()); ?>';
                form.appendChild(csrfInput);

                // Tambahkan method spoofing untuk DELETE (karena HTML form hanya mendukung GET dan POST)
                let methodInput = document.createElement('input');
                methodInput.type = 'hidden';
                methodInput.name = '_method';
                methodInput.value = 'DELETE';
                form.appendChild(methodInput);

                // Tambahkan form ke body dan submit
                document.body.appendChild(form);
                form.submit();
            }
        }
    </script>




 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH D:\SEMESTER 5\Framework\FW_Praktikum\Praktikum\resources\views\master-data\product-master\index-product.blade.php ENDPATH**/ ?>