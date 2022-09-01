<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name', 'Laravel')); ?></title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">

        <!-- Scripts -->
        <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200">
            <div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false" class="fixed z-20 inset-0 bg-black opacity-50 transition-opacity lg:hidden"></div>
        
            <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;

            <div class="flex-1 flex flex-col overflow-scroll">

                    <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <?php if(\Session::has('success')): ?>
                        <div class="text-green-600 pt-5 pl-5">
                            <ul>
                                <li><?php echo \Session::get('success'); ?></li>
                            </ul>
                        </div>
                    <?php endif; ?>
                    
                    <?php if(\Session::has('error')): ?>
                        <div class="text-green-600 pt-5 pl-5">
                            <ul>
                                <li><?php echo \Session::get('error'); ?></li>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <?php if($errors->any()): ?>
                        <div class="text-red-600  pt-5 pl-5">
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <?php echo e($slot); ?>

                    
            </div>
        </div>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\ngen_task\resources\views/layouts/app.blade.php ENDPATH**/ ?>