<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header'); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <em><?php echo e(__('Lore')); ?>meets</em>&nbsp;&nbsp;<?php echo e(('Tech Events')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <!-- flash message -->
    <div class="flex justify-center pt-8">
        <?php if(session()->has('message')): ?>
        <div class="alert alert-success">
            <?php echo e(session('message')); ?>

        </div>
        <?php endif; ?>
    </div>

    <body>
        <div class="sliderAx h-auto pt-4">
            <?php if(Route::has('login')): ?>
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                <?php if(auth()->guard()->check()): ?>

                <?php else: ?>
                <a href="<?php echo e(route('login')); ?>" class="text-sm text-gray-700 underline">Log in</a>

                <?php if(Route::has('register')): ?>
                <a href="<?php echo e(route('register')); ?>" class="ml-4 text-sm text-gray-700 underline">Register</a>
                <?php endif; ?>
                <?php endif; ?>
            </div>
            <?php endif; ?>


    </body>

   
    <div class="py-12">
       
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-2">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">



                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Event
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Description
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Available places
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Dates
                                            </th>
                                            <th scope="col" class="relative px-6 py-3">
                                                <span class="sr-only"></span>
                                            </th>
                                            <th scope="col" class="relative px-6 py-3">
                                                <span class="sr-only"></span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        <tr><?php $__currentLoopData = $myList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <td class="px-6 py-4 whitespace-wrap w-92">
                                                <div class="flex items-center w-92">
                                                    <div class="flex-shrink-0 h-16 w-32">
                                                        <a href="<?php echo e(url('/user/show/'.$event->id)); ?>" class="text-gray-600 hover:text-gray-900">
                                                            <img class="h-16 w-32" src="<?php echo e(asset('storage').'/'.$event->image); ?>" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="ml-4">
                                                        <a href="<?php echo e(url('/user/show/'.$event->id)); ?>" class="text-gray-600 hover:text-gray-900"><?php echo e($event->title); ?></a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-4 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-500"><?php echo e($event->description); ?></div>
                                            </td>
                                            <td class="px-4 py-4 whitespace-nowrap">
                                                <span class="px-4 inline-flex text-xs leading-5 font-semibold bg-green-100 text-green-800">
                                                    <?php echo e(count($event->users)); ?> / <?php echo e($event->capacity); ?>

                                                </span>
                                            </td>
                                            <td class="px-2 py-4 whitespace-nowrap text-sm text-gray-500">
                                                <?php echo e(date('d/m/Y', strtotime($event->date))); ?>

                                            </td>

                                            <?php if($event->isSubscribed($user) === false): ?>
                                            <td class="px-2 py-4 whitespace-nowrap text-right text-sm font-medium">

                                                <a method="GET" href="<?php echo e(url('/join/'.$event->id)); ?>" class="border border-green-500 text-green-500 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-green-600 focus:outline-none focus:shadow-outline">Join</a>

                                            </td>
                                            <?php endif; ?>

                                            <?php if($event->isSubscribed($user) === true): ?>
                                            <td class="px-2 py-4 whitespace-nowrap text-right text-sm font-medium">

                                                <a method="GET" href="<?php echo e(url('/unsubscribe/'.$event->id)); ?>" class="border border-red-500 text-red-500 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-red-600 focus:outline-none focus:shadow-outline">Cancel</a>

                                            </td>
                                            <?php endif; ?>

                                        </tr>

                                    </tbody>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </table>

                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>

        <div class="flex justify-center pt-8">
     
        </div>
    </div>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\techManager\resources\views/user/myList.blade.php ENDPATH**/ ?>